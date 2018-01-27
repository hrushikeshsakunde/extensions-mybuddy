<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BuddySystem.BuddySys',
            'Information',
            [
                'Activity' => 'list, show, edit, update, delete'
            ],
            // non-cacheable actions
            [

            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BuddySystem.BuddySys',
            'Management',
            [
                'Activity' => 'new, create'
            ],
            // non-cacheable actions
            [
                'Activity' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    information {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('buddy_sys') . 'Resources/Public/Icons/user_plugin_information.svg
                        title = LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddy_sys_domain_model_information
                        description = LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddy_sys_domain_model_information.description
                        tt_content_defValues {
                            CType = list
                            list_type = buddysys_information
                        }
                    }
                    management {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('buddy_sys') . 'Resources/Public/Icons/user_plugin_management.svg
                        title = LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddy_sys_domain_model_management
                        description = LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddy_sys_domain_model_management.description
                        tt_content_defValues {
                            CType = list
                            list_type = buddysys_management
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
