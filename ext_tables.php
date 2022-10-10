<?php

/*
 * This file is part of the package T3UP-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') or die();

call_user_func(function()
{
    /**
     * Extension key
     */
    $extensionKey = 'gg';
    
    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/Setup/',
        'GG - Setup-Installation'
        );
});


$boot = function () {

    $GLOBALS['TCA']['pages']['columns']['title']['config']['max'] = 255;
    $GLOBALS['TCA']['pages']['columns']['title']['config']['type'] = 'text';
    $GLOBALS['TCA']['pages']['columns']['title']['config']['cols'] = '60';
    $GLOBALS['TCA']['pages']['columns']['title']['config']['rows'] = '1';
    $GLOBALS['TCA']['pages']['columns']['title']['config']['eval'] = 'required'; 
    
};

$boot();
unset($boot);

