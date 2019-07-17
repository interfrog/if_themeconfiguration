<?php
namespace Interfrog\IfThemeconfiguration\Utility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * FontUtility
 *
 * @package if_themeconfiguration
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */

class FontUtility {
	public static function getFontValue(&$property,&$font) {
		$fontFamily = "inherit";
		if (!empty($font)) {
			$fontFamily = $font->getFontfamily();
		}
		$fontValue .= "$".$property.": $fontFamily;\n";
		return $fontValue;
	}

	public static function getStaticFontSetting(&$font) {
		$fontValue = '';

		if (!empty($font->getTtf()) || !empty($font->getEot()) || !empty($font->getWoff()) || !empty($font->getSvg())) {
			$fontValue .= "@font-face {\n";
			$fontValue .= "   font-family: '" . $font->getName() . "';\n";
			$fontValue .= "   font-style: normal;\n";
			$fontValue .= "   font-weight: normal;\n";
			if (!empty($font->getTtf())) {
				$fontValue .= "        url('". $font->getTtf() ."') format('truetype'), /* Safari, Android, iOS */\n";
			}
			if (!empty($font->getSvg())) {
				$fontValue .= "   src: url('". $font->getEot() ."'); /* IE9 Compat Modes */\n";
			}
			if (!empty($font->getWoff())) {
				$fontValue .= "        url('". $font->getWoff() ."') format('woff'), /* Pretty Modern Browsers */\n";
			}
			if (!empty($font->getSvg())) {
				$fontValue .= "        url('". $font->getSvg() ."#".$font->getName()."') format('svg'), /* Legacy iOS */\n";
			}

			$fontValue .= "}\n\n";
		}

		if (!empty($font->getTtfBold()) || !empty($font->getEotBold()) || !empty($font->getWoffBold()) || !empty($font->getSvgBold())) {
			$fontValue .= "@font-face {\n";
			$fontValue .= "   font-family: '" . $font->getName() . "';\n";
			$fontValue .= "   font-style: normal;\n";
			$fontValue .= "   font-weight: bold;\n";
			if (!empty($font->getEotBold())) {
				$fontValue .= "   src: url('". $font->getEotBold() ."'); /* IE9 Compat Modes */\n";
			}
			if (!empty($font->getWoffBold())) {
				$fontValue .= "        url('". $font->getWoffBold() ."') format('woff'), /* Pretty Modern Browsers */\n";
			}
			if (!empty($font->getTtfBold())) {
				$fontValue .= "        url('". $font->getTtfBold() ."') format('truetype'), /* Safari, Android, iOS */\n";
			}
			if (!empty($font->getSvgBold())) {
				$fontValue .= "        url('". $font->getSvgBold() ."#".$font->getName()."') format('svg'), /* Legacy iOS */\n";
			}

			$fontValue .= "}\n\n";
		}

		if (!empty($font->getTtfItalic()) || !empty($font->getEotItalic()) || !empty($font->getWoffItalic()) || !empty($font->getSvgItalic())) {
			$fontValue .= "@font-face {\n";
			$fontValue .= "   font-family: '" . $font->getName() . "';\n";
			$fontValue .= "   font-style: italic;\n";
			$fontValue .= "   font-weight: normal;\n";
			if (!empty($font->getEotItalic())) {
				$fontValue .= "   src: url('". $font->getEotItalic() ."'); /* IE9 Compat Modes */\n";
			}
			if (!empty($font->getWoffItalic())) {
				$fontValue .= "        url('". $font->getWoffItalic() ."') format('woff'), /* Pretty Modern Browsers */\n";
			}
			if (!empty($font->getTtfItalic())) {
				$fontValue .= "        url('". $font->getTtfItalic() ."') format('truetype'), /* Safari, Android, iOS */\n";
			}
			if (!empty($font->getSvgItalic())) {
				$fontValue .= "        url('". $font->getSvgItalic() ."#".$font->getName()."') format('svg'), /* Legacy iOS */\n";
			}

			$fontValue .= "}\n\n";
		}

		if (!empty($font->getTtfBolditalic()) || !empty($font->getEotBolditalic()) || !empty($font->getWoffBolditalic()) || !empty($font->getSvgBolditalic())) {
			$fontValue .= "@font-face {\n";
			$fontValue .= "   font-family: '" . $font->getName() . "';\n";
			$fontValue .= "   font-style: italic;\n";
			$fontValue .= "   font-weight: bold;\n";
			if (!empty($font->getEotBolditalic())) {
				$fontValue .= "   src: url('". $font->getEotBolditalic() ."'); /* IE9 Compat Modes */\n";
			}
			if (!empty($font->getWoffBolditalic())) {
				$fontValue .= "        url('". $font->getWoffBolditalic() ."') format('woff'), /* Pretty Modern Browsers */\n";
			}
			if (!empty($font->getTtfBolditalic())) {
				$fontValue .= "        url('". $font->getTtfBolditalic() ."') format('truetype'), /* Safari, Android, iOS */\n";
			}
			if (!empty($font->getSvgBolditalic())) {
				$fontValue .= "        url('". $font->getSvgBolditalic() ."#".$font->getName()."') format('svg'), /* Legacy iOS */\n";
			}

			$fontValue .= "}\n\n";
		}

		return $fontValue;
	}
}