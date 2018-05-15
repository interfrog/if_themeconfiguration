<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Interfrog Themeconfiguration',
	'description' => 'TYPO3 extension for creating themes with a style composing via TYPO3 backend',
	'category' => 'misc',
	'author' => 'Interfrog',
	'author_email' => 'info@interfrog.de',
	'author_company' => 'Interfrog Produktion GmbH',
	'state' => 'beta',
	'uploadfolder' => true,
	'createDirs' => NULL,
	'clearCacheOnLoad' => true,
	'version' => '2.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '8.7.0-8.99.99',
			'fluid' => '8.7.0-8.99.99',
			'typo3' => '8.7.0-8.99.99',
			'fluid_styled_content' => '8.7.0-8.99.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'autoload' => array(
		'psr-4' => array('Interfrog\\IfThemeconfiguration\\' => 'Classes')
	),
);
