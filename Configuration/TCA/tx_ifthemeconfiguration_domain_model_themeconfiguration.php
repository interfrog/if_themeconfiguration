<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$extKey = 'if_themeconfiguration';

$tx_ifthemeconfiguration_domain_model_themeconfiguration = array(
	'ctrl' => array(
        'title' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.table',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'theme',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => ' ORDER BY name,sorting DESC',
        'dividers2tabs' => TRUE,
        'iconfile' => ('EXT:if_themeconfiguration/Resources/Public/Images/interfrog16x16.png'),
    ),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, theme, colorshemes, scssfile, cssfile',
	),
    'types' => array(
        '0' => array('showitem' => '
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.general,name,theme,
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.colorshemes,colorshemes,
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.generated,scssfile,cssfile'
        ),
    ),
    'palettes' => array(
        '0' => array('showitem' => ''),
    ),
	'columns' => array(
        'name' => array(
            'label'=>'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.name',
            'config' => array(
                'type' => 'input',
                'max' => '255'
            )
        ),
        'theme' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.theme',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.theme.empty', ''),
                )
            )
        ),
        'colorshemes' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.colorshemes',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_ifthemeconfiguration_domain_model_colorsheme',
                'foreign_field' => 'parent',
                'maxitems' => 9999,
                'appearance' => array(
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ),
            ),
        ),
        'scssfile' => array(
            'label'=>'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.scssfile',
            'config' => array(
                'type' => 'input',
                'max' => '255',
                'readOnly' => 1
            )
        ),
        'cssfile' => array(
            'label'=>'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.cssfile',
            'config' => array(
                'type' => 'input',
                'max' => '255',
                'readOnly' => 1
            )
        ),
    ),
);

return $tx_ifthemeconfiguration_domain_model_themeconfiguration;