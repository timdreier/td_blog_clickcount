<?php

declare(strict_types=1);

namespace TimDreier\TdBlogClickcount\UserFunc;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ClickCountFunctions
{
    public function increase(): void
    {
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getConnectionForTable('pages');
        //use intval to prevent sql-injection
        $connection->prepare('UPDATE pages SET tx_tdblogclickcount = tx_tdblogclickcount + 1 WHERE uid = ' . intval($GLOBALS['TSFE']->page['_PAGES_OVERLAY_UID'] ?? $GLOBALS['TSFE']->id))->executeStatement();
    }
}
