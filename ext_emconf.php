<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Government package',
    'description' => 'Main website configuration',
    'category' => 'distribution',
    'author' => 'powerful. systems. CPS GmbH',
    'author_email' => '	typo3-government-package@cps-it.de',
    'state' => 'alfa',
    'internal' => '',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.3',
    'autoload' => [
        'psr-4' => [
            'CPSIT\\GovernmentPackage\\' => 'Classes'
        ],
    ],
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'news' => '9.4.0-9.99.99',
            'bootstrap_package' => '12.0.0-12.99.99',
            'rx_shariff' => '14.0.0-14.99.99',
        ],
        'conflicts' => [],
        'suggests' => [
        ],
    ],
];
