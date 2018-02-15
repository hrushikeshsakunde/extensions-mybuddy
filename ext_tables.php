<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BuddySystem.BuddySys',
            'Information',
            'Information'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'BuddySystem.BuddySys',
            'Management',
            'Management'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('buddy_sys', 'Configuration/TypoScript', 'BuddySystem');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_buddysys_domain_model_activity', 'EXT:buddy_sys/Resources/Private/Language/locallang_csh_tx_buddysys_domain_model_activity.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_buddysys_domain_model_activity');

    }
);
