<?php
namespace Interfrog\IfThemeconfiguration\Domain\Model;

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
 * ThemeConfiguration Model
 *
 * @package if_themeconfiguration
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

class ThemeConfiguration extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
    *hash       
    *
    *@var string
    */
    protected $hash;

    /**
    *name       
    *
    *@var string
    */
    protected $name;

    /**
    *theme       
    *
    *@var string
    */
    protected $theme;

    /**
    *colorshemes       
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Colorsheme
    */
    protected $colorshemes;

    /**
    *scssfile       
    *
    *@var string
    */
    protected $scssfile;

    /**
    *cssfile  
    *
    *@var string
    */
    protected $cssfile;

	public function __construct(){
    }

    /**
    *returns the hash
    *
    *@return string
    */
    public function getHash(){
        return $this->hash;
    }

    /**
    *set the hash
    *
    *@param string $hash
    *@return void
    */
    public function setHash($hash){
        $this->hash=$hash;
    }
    
    /**
    *returns the name
    *
    *@return string
    */
    public function getName(){
        return $this->name;
    }

    /**
    *set the name
    *
    *@param string $name
    *@return void
    */
    public function setName($name){
        $this->name=$name;
    }

    /**
    *returns the theme
    *
    *@return string
    */
    public function getTheme(){
        return $this->theme;
    }

    /**
    *set the theme
    *
    *@param string $theme
    *@return void
    */
    public function setTheme($theme){
        $this->theme=$theme;
    }

    /**
    * colorshemes
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Colorsheme
    */
    public function getColorshemes(){
        return $this->colorshemes;
    }
        
    /**
    * set the colorshemes
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Colorsheme $colorshemes
    * @return void
    */
    public function setColorshemes($colorshemes){
        $this->colorshemes=$colorshemes;
    }

    /**
    *returns the scssfile
    *
    *@return string
    */
    public function getScssfile(){
        return $this->scssfile;
    }

    /**
    *set the scssfile
    *
    *@param string $scssfile
    *@return void
    */
    public function setScssfile($scssfile){
        $this->scssfile=$scssfile;
    }

    /**
    *returns the cssfile
    *
    *@return string
    */
    public function getCssfile(){
        return $this->cssfile;
    }

    /**
    *set the cssfile
    *
    *@param string $cssfile
    *@return void
    */
    public function setCssfile($cssfile){
        $this->cssfile=$cssfile;
    }

    /**
    * returns allProperties
    * 
    * @param void
    * @return array
    */
    public function getAllProperties() {
        $properties = array();
        foreach($this as $key => $value) {
            $properties[$key] = $value;
        }
        return $properties;
    }
}
?>