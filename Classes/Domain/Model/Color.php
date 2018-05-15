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
 * Color Model
 *
 * @package if_themeconfiguration
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

class Color extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
	/**
    *name
    *
    *@var string
    */
    protected $name;

    /**
	*rgba red part
	*
	*@var int
	*/
	protected $red;

    /**
    *rgba green part
    *
    *@var int
    */
    protected $green;

    /**
    *rgba blue part
    *
    *@var int
    */
    protected $blue;

    /**
    *hex value
    *
    *@var string
    */
    protected $hex;

    /**
    *opacity in %
    *
    *@var int
    */
    protected $opacity;

	/**
	*__construct
	*
        *@param void
	*@return void
	*/

	public function __construct(){
    }
     
    /**
    *return an rgb-string "red,green,blue"
    *
    *@param void
    *@return string
    */
    public function getRgbString(){
        return "".($this->getRed()).",".($this->getGreen()).",".($this->getBlue());
    }

    /**
    *set name
    *
    *@param string $name name
    *@return void
    */
    public function setName($name){
        $this->name=$name;
    }

    /**
    *get name
    *
    *@param void
    *@return string
    */
    public function getName(){
        return $this->name;
    }

    /**
    *set the red part
    *
    *@param int $red
    *@return void
    */
    public function setRed($red=0){
        $this->red=$red;
    }

    /**
    *get the red part
    *
    *@param void
    *@return int red
    */
    public function getRed(){
        return $this->red;
    }

    /**
    *set the green part
    *
    *@param int $green
    *@return void
    */
    public function setGreen($green=0){
        $this->green=$green;
    }

    /**
    *get the green part
    *
    *@param void
    *@return int green
    */
    public function getGreen(){
        return $this->green;
    }

    /**
    *set the blue part
    *
    *@param int $blue
    *@return void
    */
    public function setBlue($blue=0){
        $this->blue=$blue;
    }

    /**
    *get the blue part
    *
    *@param void
    *@return int blue
    */
    public function getBlue(){
        return $this->blue;
    }

    /**
    *set the hex value
    *
    *@param int $hex
    *@return void
    */
    public function setHex($hex=0){
        $this->hex=$hex;
    }

    /**
    *get the hex value
    *
    *@param void
    *@return string hex
    */
    public function getHex(){
        return $this->hex;
    }

    /**
    *set the opacity
    *
    *@param int $opacity
    *@return void
    */
    public function setOpacity($opacity=0){
        $this->opacity=$opacity;
    }

    /**
    *get the opacity
    *
    *@param void
    *@return int opacity
    */
    public function getOpacity(){
        return $this->opacity;
    }

}
?>