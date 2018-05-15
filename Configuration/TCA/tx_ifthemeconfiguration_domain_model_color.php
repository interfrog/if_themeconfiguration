<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

$extKey = 'if_themeconfiguration';

$tx_ifthemeconfiguration_domain_model_color = array(
	'ctrl' => array(
        'title' => "LLL:EXT:".$extKey."/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_color.table",
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => ' ORDER BY name,sorting DESC',
        'dividers2tabs' => TRUE,
        'iconfile' => ('EXT:if_themeconfiguration/Resources/Public/Images/interfrog16x16.png')
    ),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, red, green, blue, opacity',
	),
    'types' => array(
        '0' => array('showitem' => 'name,--palette--;;rgb;,opacity')
    ),
    'palettes' => array(
        'rgb' => array('showitem' => 'red,green,blue','canNotCollapse','canNotCollapse' => true)
    ),
	'columns' => array(
        'name' => array(
            'label' => 'Name',
            'config' => array(
                'type' => 'input',
                'max' => 255,
            )
        ),
        'red' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_color.red',
            'config' => array(
                'type' => 'input',
                'max' => 3,
                'lower' => 0,
                'upper' => 255,
                'size' => 3,
            )
        ),
        'green' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_color.green',
            'config' => array(
                'type' => 'input',
                'max' => 3,
                'lower' => 0,
                'upper' => 255,
                'size' => 3,
            )
        ),
        'blue' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_color.blue',
            'config' => array(
                'type' => 'input',
                'max' => 3,
                'lower' => 0,
                'upper' => 255,
                'size' => 3,
            )
        ),
        'hex' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_color.hex',
            'config' => array(
                'type' => 'input',
                'max' => 6,
                'size' => 3,
                'eval' => 'is_in',
                'is_in' => '0123456789abcdef',
            )
        ),
        'opacity' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_color.opacity',
            'config' => array(
                'type' => 'input',
                'eval' => 'trim',
                'max' => 3,
                'lower' => 0,
                'upper' => 100,
                'size' => 1,
            )
        ),
    ),
);

return $tx_ifthemeconfiguration_domain_model_color;