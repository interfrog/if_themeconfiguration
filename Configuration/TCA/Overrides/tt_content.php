<?php

$extKey = "if_themeconfiguration";

$temporaryColumn = array(
    'colorsheme' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.colorsheme',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array(
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.colorsheme.empty',0),
            ),             
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_colorsheme',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_colorsheme.name ASC',
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $temporaryColumn,
        1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'frames',
        'colorsheme,--linebreak--',
        'after:layout'
);
