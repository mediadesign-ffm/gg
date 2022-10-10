<?php

/*
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */



$boot = function () {
    
    #####################################################################################################
        

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:gg/Configuration/TypoScript/Setup/setup.typoscript">');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:gg/Configuration/TsConfig/Design.typoscript">');
    
        	    
};

$boot();
unset($boot);
