<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TD Blog Clickcount',
    'description' => 'Clickcount for zeroseven/z7-blog',
    'category' => 'templates',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tim Dreier',
    'author_email' => 'hello@tim-dreier.de',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'z7_blog' => '1.0.0-1.9.9',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
