<?php

/**********************************************************************
 * Extension Manager/Repository config file for Sitepackage ext "GG".
 *********************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'GG - Basic Installation',
    'description'      => 'GG - Distribution.',
    'version'          => '1.0.0',
    'state'            => 'alpha',
    'category'         => 'templates',
    'author'           => 'Michael Lang',
    'author_email'     => 'michael.lang@mediadesign-ffm.de',
    'author_company'   => 'mediadesign',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearCacheOnLoad' => true,
    'constraints'      => [
        'depends'   => [
            'typo3'            => '10.4.1-10.4.99',
            't3up'             => '0.4.0-',
            'content_defender' => '3.1.0-3.2.99',
            'ws_scss'          => '1.1.0-1.99.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
