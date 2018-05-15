<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

$extKey = 'if_themeconfiguration';

$tx_ifthemeconfiguration_domain_model_colorsheme = array(
	'ctrl' => array(
        'title' => "LLL:EXT:".$extKey."/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.table",
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'theme',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => ' ORDER BY name,sorting DESC',
        'dividers2tabs' => TRUE,
        'iconfile' => (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Images/interfrog16x16.png')
    ),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, theme, identifier',
	),
    'types' => array(
        '0' => array('showitem' => '
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.label.general,name,identifier,
            --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.label.colordefinition,backgroundcolor,
            --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.palette.text;text;
            ')
    ),
    'palettes' => array(
        '0' => array('showitem' => 'name','canNotCollapse','canNotCollapse' => true),
        'text' => array('showitem' => 'headercolor,textcolor,linkcolor,linkhovercolor','canNotCollapse','canNotCollapse' => true)
    ),
	'columns' => array(
        'name' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.name',
            'config' => array(
                'type' => 'input',
                'max' => 255,
                'eval' => 'required'
            )
        ),
        'theme' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.theme',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.theme.empty', ''),
                )
            )
        ),
        'identifier' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.identifier',
            'config' => array(
                'type' => 'input',
                'size' => 20,
                'max' => 255,
                'eval' => 'required,unique'
            )
        ),
        'backgroundcolor' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.backgroundcolor',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
                'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
            ),
        ),
        'headercolor' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.headercolor',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
                'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
            ),
        ),
        'textcolor' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.textcolor',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
                'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
            ),
        ),
        'linkcolor' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.linkcolor',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
                'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
            ),
        ),
        'linkhovercolor' => array(
            'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_colorsheme.linkhovercolor',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
                'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
            ),
        ),
    ),
);

return $tx_ifthemeconfiguration_domain_model_colorsheme;