<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Government package',
    'description' => 'Main website configuration',
    'category' => 'distribution',
    'author' => 'coding. powerful. systems. CPS GmbH',
    'author_email' => '	typo3-government-package@cps-it.de',
    'state' => 'alpha',
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
            'news' => '9.4.0-0.0.0.',
            'bootstrap_package' => '12.0.0-0.0.0.',
            'rx_shariff' => '14.0.0-0.0.0.',
        ],
        'conflicts' => [],
        'suggests' => [
        ],
    ],
];
