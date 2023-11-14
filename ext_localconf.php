<?php

defined('TYPO3') || die();

call_user_func(static function () {
    // Load post trait collector instead of the "default" model
    $extbaseObjectContainer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class);
    $extbaseObjectContainer->registerImplementation(\Zeroseven\Z7Blog\Domain\Model\Post::class, \Zeroseven\Z7Blog\Domain\Model\TraitCollector\PostTraitCollector::class);
});

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['z7_blog']['traits'][\Zeroseven\Z7Blog\Domain\Model\Post::class][] = \TimDreier\TdBlogClickcount\Domain\Traits\PostModel::class;

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TdBlogClickcount',
    'Pi1',
    [
        \TimDreier\TdBlogClickcount\Controller\ClickCountController::class => 'click'
    ]
);
