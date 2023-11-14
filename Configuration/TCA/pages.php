<?php

defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', [
    'tx_tdblogclickcount' => [
        'label' => 'LLL:EXT:td_blog_clickcount/Resources/Private/Language/locallang.xlf:pages.tx_tdblogclickcount',
        'config' => [
            'type' => 'input',
            'readOnly' => 1,
            'eval' => 'int',
            'default' => 0,
        ]
    ]
]);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'tx_tdblogclickcount',
    (string) \Zeroseven\Z7Blog\Domain\Model\Post::DOKTYPE,
    'after:post_relations_from'
);
