<?php
namespace Interfrog\IfThemeconfiguration\Utility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use Interfrog\IfThemeconfiguration\Utility\FontUtility;

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
 * SassUtility
 *
 * @package if_themeconfiguration
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

class SassUtility {

	private static $normDocRoot = NULL;

	public static function generateSassForColorshemes(&$colorshemeObject,&$themeConfiguration) {
		$colorShemeFile = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($themeConfiguration->getTheme())."Resources/Private/Sass/colorscheme.scss";
		$colorShemeString = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl($colorShemeFile);
		$shemeProperties = $colorshemeObject->getAllProperties();

		foreach ($shemeProperties as $property => $value) {
			if(is_object($value) && get_class($value) == "Interfrog\IfThemeconfiguration\Domain\Model\Color") {
				$colorShemeString = str_replace('$'.$property,self::getRawColorValue($value),$colorShemeString);
			} else {
				switch (gettype($value)) {
					case "string":
						$colorShemeString = str_replace('$'.$property,$value,$colorShemeString);
						break;
				}
			}
		}
		return $colorShemeString;
	}

	public static function mapPropertyToSass(&$themeConfiguration) {
		$properties = $themeConfiguration->getAllProperties();
		$colors = array();
		$fonts = array();
		$importFontUrls = array();
		$staticFonts = array();
		$sassString = "";
		$staticSassValues = "";

		$objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		$colorshemeRepo = $objectManager->get('Interfrog\\IfThemeconfiguration\\Domain\\Repository\\ColorshemeRepository');

		$query = $colorshemeRepo->createQuery();
		$query->matching(
			$query->equals('parent', $themeConfiguration->getUid())
		);
		$colorshemes = $query->execute();

		foreach ($properties as $property => $value) {
			if(is_object($value)) {
				switch (get_class($value)) {
				case "Interfrog\IfThemeconfiguration\Domain\Model\Color":
					$colors[$property] = $value;
					break;
				case "Interfrog\IfThemeconfiguration\Domain\Model\Font":
					$fonts[$property] = $value;
					if (!array_key_exists($value->getName(),$importFontUrls) && $value->getFonttype() == '') {
						$importFontUrls[$value->getName()] = $value->getUrl();
					}
					if (!array_key_exists($value->getName(),$staticFonts) && $value->getFonttype() == 'static') {
						$staticFonts[$value->getName()] = $value;
					}
					break;
				}
			} else {
				if (substr($property,-4) == "font") {
					$fonts[$property] = $value;
				} else if ($property == "headerborderbottom") {
					if ($value == 1) {
						$staticSassValues .= "$"."headerborderbottom: 2px solid;\n";
					} else {
						$staticSassValues .= "$"."headerborderbottom: 0px solid;\n";
					}
				} else if ($property == "fontsize") {
					if ($value > 0) {
						$staticSassValues .= "$"."fontsize: ".$value."px;\n";
					} else {
						$staticSassValues .= "$"."fontsize: 14px;\n";
					}
				} else if (self::endsWith($property,"style") || self::endsWith($property,"weight")) {
					$staticSassValues .= "$"."$property: ".$value.";\n";
				} else {
					if (!empty($value)) {
						switch (gettype($value)) {
						case "string":
							$staticSassValues .= "$"."$property: '".$value."';\n";
							break;
						case "integer":
							$staticSassValues .= "$"."$property: ".$value.";\n";
							break;
						default:
							break;
						}
					}
				}
			}
		}

		$absoluteExtPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($themeConfiguration->getTheme());
		$relativeExtPath = str_replace(self::getNormDocRoot(),"",$absoluteExtPath);
		$sassString .= "/*** Global Variables ***/\n";
		$sassString .= "$"."absoluteExtPath: '/".$relativeExtPath."';\n";

		if (!empty($importFontUrls)) {
			$sassString .= "\n\n/*** FONT IMPORT ***/\n";
			foreach ($importFontUrls as $font => $fontUrl) {
				$sassString .= "@import url(".$fontUrl.");\n";
			}
		}

		if (!empty($staticFonts)) {
			$sassString .= "\n\n/*** STATIC FONT SETTINGS ***/\n";
			foreach ($staticFonts as $font => $staticFont) {
				$sassString .= FontUtility::getStaticFontSetting($staticFont);
			}
		}

		$sassString .= "\n\n/*** FONT Variables ***/\n";
		foreach ($fonts as $font => $fontObject) {
			$sassString .= FontUtility::getFontValue($font,$fontObject);
		}

		$sassString .= "\n\n/*** Static Variables ***/\n";
		$sassString .= $staticSassValues;

		$sassString .= "\n\n/*** COLOR Variables ***/\n";
		foreach ($colors as $color => $colorObject) {
			$sassString .= self::getColorValue($color,$colorObject);
		}

		$sassString .= "\n\n/*** COLORSHEME DEFINITION ***/\n";
		foreach ($colorshemes as $colorsheme => $colorshemeObject) {
			$sassString .= self::generateSassForColorshemes($colorshemeObject,$themeConfiguration);
		}

		return $sassString;
	}

	public static function getColorValue(&$property,&$color) {
		$red = $color->getRed();
		$green = $color->getGreen();
		$blue = $color->getBlue();
		$opacity = strval($color->getOpacity() / 100);
		$colorValue = "$".$property.": rgba($red,$green,$blue,$opacity);\n";
		return $colorValue;
	}

	public static function getRawColorValue(&$color) {
		$red = $color->getRed();
		$green = $color->getGreen();
		$blue = $color->getBlue();
		$opacity = strval($color->getOpacity() / 100);
		$rawColorValue = "rgba($red,$green,$blue,$opacity)";
		return $rawColorValue;
	}

    public static function startsWith($haystack, $needle) {
        return $needle === "" || strrpos($haystack, $needle, - strlen($haystack)) !== FALSE;
    }

    public static function endsWith($haystack, $needle) {
        return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
    }

    public static function getNormDocRoot(){
        if(self::$normDocRoot == NULL){
            $str = $_SERVER['DOCUMENT_ROOT'];
            $strLength = strlen($str);
            if($strLength > 0){
                if($str[0] != '/'){
                    $str = '/'.$str;
                    $strLength++;
                }
                if($str[$strLength-1] != '/') {
                    $str = $str.'/';
                }
            }
            self::$normDocRoot = $str; 
        }
        return self::$normDocRoot;
    }
}