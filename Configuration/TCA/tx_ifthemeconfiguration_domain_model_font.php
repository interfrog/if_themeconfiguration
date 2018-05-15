<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

$extKey = 'if_themeconfiguration';

$tx_ifthemeconfiguration_domain_model_font = array(
    'ctrl' => array(
        'title' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.table',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'fonttype',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => ' ORDER BY name,sorting DESC',
        'dividers2tabs' => TRUE,
        'iconfile' => ('EXT:if_themeconfiguration/Resources/Public/Images/interfrog16x16.png')
    ),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name,url,fontfamily,fonttype,ttf,woff,eot,svg,ttf_bold,woff_bold,eot_bold,svg_bold,ttf_italic,woff_italic,eot_italic,svg_italic,ttf_bolditalic,woff_bolditalic,eot_bolditalic,svg_bolditalic',
	),
    'types' => array(
        '0' => array('showitem' => '
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.div.general,fonttype,name,
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.div.google,url,fontfamily
            '),
        'static' => array('showitem' => '
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.div.general,fonttype
                ,name,fontfamily,
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.div.regular,ttf,woff,eot,svg,
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.div.bold,ttf_bold,woff_bold,eot_bold,svg_bold,
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.div.italic,ttf_italic,woff_italic,eot_italic,svg_italic,
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.div.bolditalic,ttf_bolditalic,woff_bolditalic,eot_bolditalic,svg_bolditalic,
            ')
    ),
	'palettes' => array(
		'0' => array('showitem' => ''),
	),
	'columns' => array(
        'name' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.name',
            'config' => array(
                'type' => 'input',
                'max' => 255,
            )
        ),
        'url' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.url',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'fontfamily' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.fontfamily',
            'config' => array(
                'type' => 'input',
            )
        ),
        'fonttype' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.fonttype',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.fonttype.googlefont', ''),
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.fonttype.static', 'static'),
                )
            )
        ),
        'ttf' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.ttf',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'woff' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.woff',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'eot' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.eot',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'svg' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.svg',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'ttf_bold' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.ttf',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'woff_bold' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.woff',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'eot_bold' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.eot',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'svg_bold' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.svg',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'ttf_italic' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.ttf',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'woff_italic' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.woff',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'eot_italic' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.eot',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'svg_italic' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.svg',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'ttf_bolditalic' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.ttf',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'woff_bolditalic' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.woff',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'eot_bolditalic' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.eot',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
        'svg_bolditalic' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_font.svg',
            'config' => array(
                'type' => 'input',
                'size' => 48,
            )
        ),
    ),
);

return $tx_ifthemeconfiguration_domain_model_font;