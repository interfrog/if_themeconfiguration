<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tsTemplateName = $_EXTKEY.' - Theme Configuration';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,'Configuration/TypoScript',$tsTemplateName);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_ifthemeconfiguration_domain_model_themeconfiguration");
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_ifthemeconfiguration_domain_model_color");
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_ifthemeconfiguration_domain_model_font");
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_ifthemeconfiguration_domain_model_colorsheme");
