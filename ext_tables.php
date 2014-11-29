<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'xp CE FCE bootstrap');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:xpfcetmp/Configuration/TypoScript/page_ts.txt">');

# translate 
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:cms/locallang_tca.xlf'][] = 'EXT:xpfcetmp/Resources/Private/Language/locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:cms/locallang_tca.xlf'][] = 'EXT:xpfcetmp/Resources/Private/Language/de.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['cn']['EXT:cms/locallang_tca.xlf'][] = 'EXT:xpfcetmp/Resources/Private/Language/cn.locallang_db.xlf';

