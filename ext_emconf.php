<?php
/*
 * Extension Manager configuration file for ext "sr_freecap".
 *
 */
$EM_CONF[$_EXTKEY] = [
	'title' => 'freeCap CAPTCHA',
	'description' => 'A TYPO3 integration of freeCap CAPTCHA.',
	'category' => 'fe',
	'version' => '2.6.0',
	'state' => 'stable',
	'clearcacheonload' => 0,
	'author' => 'Stanislas Rolland',
	'author_email' => 'typo32020(arobas)sjbr.ca',
	'author_company' => 'SJBR',
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.0-10.4.99'
		],
		'conflicts' => [],
		'suggests' => []
    ],
    'autoload' => [
        'psr-4' => [
        	'SJBR\\SrFreecap\\' => 'Classes'
        ]
    ]
];