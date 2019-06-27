<?php
namespace Interfrog\IfThemeconfiguration\Hooks;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use Interfrog\IfThemeconfiguration\Utility\IfServiceUtility;
use Interfrog\IfThemeconfiguration\Utility\SassUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility as Debug;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Interfrog Produktion GmbH - Alexander Büchner
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ThemeConfigurationHook
 *
 * @package if_themeconfiguration
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

class ThemeConfigurationHook implements \TYPO3\CMS\Core\SingletonInterface {

    protected $extKey = "if_themeconfiguration";
    protected $documentRoot = NULL;
    protected $objectManager = NULL;
    protected $persistenceManager = NULL;
    protected $themeConfigurationRepo = NULL;
    protected $colorRepo = NULL;
    protected $fontRepo = NULL;
    protected $allThemeConfigurations = NULL;


    public function __construct(){
      $this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
      $this->persistenceManager = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\PersistenceManager');
      $this->themeConfigurationRepo = $this->objectManager->get('Interfrog\\IfThemeconfiguration\\Domain\\Repository\\ThemeConfigurationRepository');
      $this->colorRepo = $this->objectManager->get('Interfrog\\IfThemeconfiguration\\Domain\\Repository\\ColorRepository');
      $this->fontRepo = $this->objectManager->get('Interfrog\\IfThemeconfiguration\\Domain\\Repository\\FontRepository');
      $this->allThemeConfigurations = $this->themeConfigurationRepo->findAll();
      $this->documentRoot = SassUtility::getNormDocRoot();
    }

    public function processDatamap_afterDatabaseOperations($status, $table, $id, $hookArgs, &$reference){
      if($table=="tx_ifthemeconfiguration_domain_model_themeconfiguration" || $table=="tx_ifthemeconfiguration_domain_model_color" || $table=="tx_ifthemeconfiguration_domain_model_font" || $table=="tx_ifthemeconfiguration_domain_model_colorsheme"){
        $this->generateSass();
      }
    }

    protected function generateSass(){
      foreach ($this->allThemeConfigurations as $themeConfiguration) {
        if (count($this->colorRepo->findAll())>0) {
          $this->generateSassForTheme(SassUtility::mapPropertyToSass($themeConfiguration),$themeConfiguration);
        } else {
          $defaultSassFile = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($themeConfiguration->getTheme())."Resources/Private/Sass/default.scss";
          $defaultSassConfig = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl($defaultSassFile);
          $this->generateSassForTheme($defaultSassConfig,$themeConfiguration);
        }
      }
    }

    /**
     *takes a themeconfigurationobject and creates a sassfile out of it. afterwards calls compilation process
     *
     *@param Interfrog\IfThemeconfiguration\Domain\Model\ThemeConfiguration $themeConfiguration
     *@return void
     */
    protected function generateSassForTheme($sassString,&$themeconfiguration){
      //call compilation process
      $extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($themeconfiguration->getTheme());
      $extSassPath = $extPath."Resources/Private/Sass/";

      $sassString = '@import "'.$extSassPath.'Presets/default.scss";'."\n" . $sassString;

      $sassString .= '@import "'.$extSassPath.'includes.scss";'."\n";

      $temporaryFileName = "typo3temp/".$themeconfiguration->getTheme()."-".$themeconfiguration->getUid().".scss";
      $absoluteTempFileName = \TYPO3\CMS\Core\Core\Environment::getPublicPath() . "/" .$temporaryFileName;

      \TYPO3\CMS\Core\Utility\GeneralUtility::writeFile($absoluteTempFileName, $sassString);

      if(file_exists($absoluteTempFileName)){
        $themeconfiguration->setScssfile($temporaryFileName);
      } else {
        $themeconfiguration->setScssfile('Not generated');
      }

      if (!defined('TYPO3_COMPOSER_MODE') || !TYPO3_COMPOSER_MODE) {
        if (!class_exists('\Leafo\ScssPhp\Compiler')) {
          include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('if_themeconfiguration') . 'Vendor/Scss/scss.inc.php');
        }
      }
      // build instance to usage
      $scssParser = new \Leafo\ScssPhp\Compiler();
      $cssString = $scssParser->compile($sassString);

      //seperate slash to prevent parsing as regex
      $temporaryCSSName = "/" . "typo3temp/".$themeconfiguration->getTheme()."-".$themeconfiguration->getUid().".css";
      $absoluteTempCSSName = \TYPO3\CMS\Core\Core\Environment::getPublicPath() . $temporaryCSSName;

      \TYPO3\CMS\Core\Utility\GeneralUtility::writeFile($absoluteTempCSSName, $cssString);

      if(file_exists($absoluteTempCSSName)){
        $themeconfiguration->setCssfile($temporaryCSSName);
      } else {
        $themeconfiguration->setCssfile('Not generated');
      }

      $this->themeConfigurationRepo->update($themeconfiguration);
      $this->persistenceManager->persistAll();
    }

}

?>