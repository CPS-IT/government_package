<?php

defined('TYPO3') or die('Access denied.');

// Add Content Element
if (!is_array($GLOBALS['TCA']['tt_content']['types']['government_topic_slider'] ?? false)) {
    $GLOBALS['TCA']['tt_content']['types']['government_topic_slider'] = [];
}

// Add content element PageTSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'government_package',
    'Configuration/TsConfig/Page/ContentElement/Element/TopicSlider.tsconfig',
    'Government Package Content Element: Topic Slider'
);

// Add content element to selector list
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:government_package/Resources/Private/Language/Backend.xlf:content_element.government_topic_slider',
        'government_topic_slider',
        'government',
        'government_package'
    ],
    '',
    'after'
);

// Assign Icon
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['government_topic_slider'] = 'content-bootstrappackage-tab';

// Configure element type
$GLOBALS['TCA']['tt_content']['types']['government_topic_slider'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['government_topic_slider'],
    [
        'showitem' => '
             --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            header,
            tx_governmentpackage_teaser_item,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        'columnsOverrides' => [],

    ]
);

// Register fields
$GLOBALS['TCA']['tt_content']['columns'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['columns'],
    [
        'tx_governmentpackage_teaser_item' => [
            'label' => 'LLL:EXT:government_package/Resources/Private/Language/Backend.xlf:shortlink_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_governmentpackage_teaser_item',
                'foreign_field' => 'tt_content',
                'appearance' => [
                    'useSortable' => true,
                    'showSynchronizationLink' => true,
                    'showAllLocalizationLink' => true,
                    'showPossibleLocalizationRecords' => true,
                    'expandSingle' => true,
                    'enabledControls' => [
                        'localize' => true,
                    ]
                ],
                'behaviour' => [
                    'mode' => 'select',
                ]
            ]
        ]
    ]
);
