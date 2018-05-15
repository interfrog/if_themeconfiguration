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
 * Font Model
 *
 * @package if_themeconfiguration
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

class Font extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
    *fonttype
    *
    *@var string
    */
    protected $fonttype;

	/**
    *name
    *
    *@var string
    */
    protected $name;

	/**
    *link tag e.g. https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic,300italic,300
    *
    *@var string
    */
    protected $url;

	/**
    *font-family
    *
    *@var string
    */
    protected $fontfamily;

    /**
    *ttf
    *
    *@var string
    */
    protected $ttf;

    /**
    *woff
    *
    *@var string
    */
    protected $woff;

    /**
    *eot
    *
    *@var string
    */
    protected $eot;

    /**
    *svg
    *
    *@var string
    */
    protected $svg;

    /**
    *ttfBold
    *
    *@var string
    */
    protected $ttfBold;

    /**
    *woffBold
    *
    *@var string
    */
    protected $woffBold;

    /**
    *eotBold
    *
    *@var string
    */
    protected $eotBold;

    /**
    *svgBold
    *
    *@var string
    */
    protected $svgBold;

    /**
    *ttfItalic
    *
    *@var string
    */
    protected $ttfItalic;

    /**
    *woffItalic
    *
    *@var string
    */
    protected $woffItalic;

    /**
    *eotItalic
    *
    *@var string
    */
    protected $eotItalic;

    /**
    *svgItalic
    *
    *@var string
    */
    protected $svgItalic;

    /**
    *ttfBolditalic
    *
    *@var string
    */
    protected $ttfBolditalic;

    /**
    *woffBolditalic
    *
    *@var string
    */
    protected $woffBolditalic;

    /**
    *eotBolditalic
    *
    *@var string
    */
    protected $eotBolditalic;

    /**
    *svgBolditalic
    *
    *@var string
    */
    protected $svgBolditalic;


    /**
    *returns the fonttype
    *
    *@return string
    */
    public function getFonttype(){
        return $this->fonttype;
    }

    /**
    *set the fonttype
    *
    *@param string $fonttype
    *@return void
    */
    public function setFonttype($fonttype){
        $this->fonttype=$fonttype;
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
    *returns the url
    *
    *@return string
    */
    public function getUrl(){
        return $this->url;
    }

    /**
    *set the url
    *
    *@param string $url
    *@return void
    */
    public function setUrl($url){
        $this->url=$url;
    }    

    /**
    *returns the fontfamily
    *
    *@return string
    */
    public function getFontfamily(){
        return $this->fontfamily;
    }

    /**
    *set the fontfamily
    *
    *@param string $fontfamily
    *@return void
    */
    public function setFontfamily($fontfamily){
        $this->fontfamily=$fontfamily;
    }

    /**
    *returns the ttf
    *
    *@return string
    */
    public function getTtf(){
        return $this->ttf;
    }

    /**
    *set the ttf
    *
    *@param string $ttf
    *@return void
    */
    public function setTtf($ttf){
        $this->ttf=$ttf;
    }

    /**
    *returns the woff
    *
    *@return string
    */
    public function getWoff(){
        return $this->woff;
    }

    /**
    *set the woff
    *
    *@param string $woff
    *@return void
    */
    public function setWoff($woff){
        $this->woff=$woff;
    }

    /**
    *returns the eot
    *
    *@return string
    */
    public function getEot(){
        return $this->eot;
    }

    /**
    *set the eot
    *
    *@param string $eot
    *@return void
    */
    public function setEot($eot){
        $this->eot=$eot;
    }

    /**
    *returns the svg
    *
    *@return string
    */
    public function getSvg(){
        return $this->svg;
    }

    /**
    *set the svg
    *
    *@param string $svg
    *@return void
    */
    public function setSvg($svg){
        $this->svg=$svg;
    }


    /**
    *returns the ttfBold
    *
    *@return string
    */
    public function getTtfBold(){
        return $this->ttfBold;
    }

    /**
    *set the ttfBold
    *
    *@param string $ttfBold
    *@return void
    */
    public function setTtfBold($ttfBold){
        $this->ttfBold=$ttfBold;
    }

    /**
    *returns the woffBold
    *
    *@return string
    */
    public function getWoffBold(){
        return $this->woffBold;
    }

    /**
    *set the woffBold
    *
    *@param string $woffBold
    *@return void
    */
    public function setWoffBold($woffBold){
        $this->woffBold=$woffBold;
    }

    /**
    *returns the eotBold
    *
    *@return string
    */
    public function getEotBold(){
        return $this->eotBold;
    }

    /**
    *set the eotBold
    *
    *@param string $eotBold
    *@return void
    */
    public function setEotBold($eotBold){
        $this->eotBold=$eotBold;
    }

    /**
    *returns the svgBold
    *
    *@return string
    */
    public function getSvgBold(){
        return $this->svgBold;
    }

    /**
    *set the svgBold
    *
    *@param string $svgBold
    *@return void
    */
    public function setSvgBold($svgBold){
        $this->svgBold=$svgBold;
    }


    /**
    *returns the ttfItalic
    *
    *@return string
    */
    public function getTtfItalic(){
        return $this->ttfItalic;
    }

    /**
    *set the ttfItalic
    *
    *@param string $ttfItalic
    *@return void
    */
    public function setTtfItalic($ttfItalic){
        $this->ttfItalic=$ttfItalic;
    }

    /**
    *returns the woffItalic
    *
    *@return string
    */
    public function getWoffItalic(){
        return $this->woffItalic;
    }

    /**
    *set the woffItalic
    *
    *@param string $woffItalic
    *@return void
    */
    public function setWoffItalic($woffItalic){
        $this->woffItalic=$woffItalic;
    }

    /**
    *returns the eotItalic
    *
    *@return string
    */
    public function getEotItalic(){
        return $this->eotItalic;
    }

    /**
    *set the eotItalic
    *
    *@param string $eotItalic
    *@return void
    */
    public function setEotItalic($eotItalic){
        $this->eotItalic=$eotItalic;
    }

    /**
    *returns the svgItalic
    *
    *@return string
    */
    public function getSvgItalic(){
        return $this->svgItalic;
    }

    /**
    *set the svgItalic
    *
    *@param string $svgItalic
    *@return void
    */
    public function setSvgItalic($svgItalic){
        $this->svgItalic=$svgItalic;
    }


    /**
    *returns the ttfBolditalic
    *
    *@return string
    */
    public function getTtfBolditalic(){
        return $this->ttfBolditalic;
    }

    /**
    *set the ttfBolditalic
    *
    *@param string $ttfBolditalic
    *@return void
    */
    public function setTtfBolditalic($ttfBolditalic){
        $this->ttfBolditalic=$ttfBolditalic;
    }

    /**
    *returns the woffBolditalic
    *
    *@return string
    */
    public function getWoffBolditalic(){
        return $this->woffBolditalic;
    }

    /**
    *set the woffBolditalic
    *
    *@param string $woffBolditalic
    *@return void
    */
    public function setWoffBolditalic($woffBolditalic){
        $this->woffBolditalic=$woffBolditalic;
    }

    /**
    *returns the eotBolditalic
    *
    *@return string
    */
    public function getEotBolditalic(){
        return $this->eotBolditalic;
    }

    /**
    *set the eotBolditalic
    *
    *@param string $eotBolditalic
    *@return void
    */
    public function setEotBolditalic($eotBolditalic){
        $this->eotBolditalic=$eotBolditalic;
    }

    /**
    *returns the svgBolditalic
    *
    *@return string
    */
    public function getSvgBolditalic(){
        return $this->svgBolditalic;
    }

    /**
    *set the svgBolditalic
    *
    *@param string $svgBolditalic
    *@return void
    */
    public function setSvgBolditalic($svgBolditalic){
        $this->svgBolditalic=$svgBolditalic;
    }

}