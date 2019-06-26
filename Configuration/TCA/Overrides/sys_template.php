<?php

$tsTemplateName = 'if_themeconfiguration - Theme Configuration';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('if_themeconfiguration','Configuration/TypoScript',$tsTemplateName);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_ifthemeconfiguration_domain_model_themeconfiguration");
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_ifthemeconfiguration_domain_model_color");
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_ifthemeconfiguration_domain_model_font");
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages("tx_ifthemeconfiguration_domain_model_colorsheme");
