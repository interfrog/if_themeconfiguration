<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] =  Interfrog\IfThemeconfiguration\Hooks\ThemeConfigurationHook::class;

if (TYPO3_MODE === 'FE') {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] = Interfrog\IfThemeconfiguration\Hooks\PageRenderer::class .'->addCSS';
}

?>