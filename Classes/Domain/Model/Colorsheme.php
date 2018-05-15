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
 * Colorsheme Model
 *
 * @package if_themeconfiguration
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

class Colorsheme extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
    *parent       
    *
    *@var string
    */
    protected $parent;

    /**
    *identifier       
    *
    *@var string
    */
    protected $identifier;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $backgroundcolor;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $headercolor;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $textcolor;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $linkcolor;

    /**
    *color
    *
    *@var Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public $linkhovercolor;


	public function __construct(){
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
    *returns the parent
    *
    *@return string
    */
    public function getParent(){
        return $this->parent;
    }

    /**
    *set the parent
    *
    *@param string $parent
    *@return void
    */
    public function setParent($parent){
        $this->parent=$parent;
    }

    /**
    *returns the identifier
    *
    *@return string
    */
    public function getIdentifier(){
        return $this->identifier;
    }

    /**
    *set the identifier
    *
    *@param string $identifier
    *@return void
    */
    public function setIdentifier($identifier){
        $this->identifier=$identifier;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getBackgroundcolor(){
        return $this->backgroundcolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $backgroundcolor
    * @return void
    */
    public function setBackgroundcolor($backgroundcolor){
        $this->backgroundcolor=$backgroundcolor;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getHeadercolor(){
        return $this->headercolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $headercolor
    * @return void
    */
    public function setHeadercolor($headercolor){
        $this->headercolor=$headercolor;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getTextcolor(){
        return $this->textcolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $textcolor
    * @return void
    */
    public function setTextcolor($textcolor){
        $this->textcolor=$textcolor;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getLinkcolor(){
        return $this->linkcolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $linkcolor
    * @return void
    */
    public function setLinkcolor($linkcolor){
        $this->linkcolor=$linkcolor;
    }

    /**
    * color
    * 
    * @param void
    * @return Interfrog\IfThemeconfiguration\Domain\Model\Color
    */
    public function getLinkhovercolor(){
        return $this->linkhovercolor;
    }
        
    /**
    * set the color
    * 
    * @param Interfrog\IfThemeconfiguration\Domain\Model\Color $linkhovercolor
    * @return void
    */
    public function setLinkhovercolor($linkhovercolor){
        $this->linkhovercolor=$linkhovercolor;
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