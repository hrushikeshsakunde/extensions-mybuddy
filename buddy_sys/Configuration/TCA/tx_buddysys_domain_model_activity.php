<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddysys_domain_model_activity',
        'label' => 'id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'id,name,description,place,startdate,enddate,userid',
        'iconfile' => 'EXT:buddy_sys/Resources/Public/Icons/tx_buddysys_domain_model_activity.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, id, name, description, place, startdate, enddate, userid',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, id, name, description, place, startdate, enddate, userid, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_buddysys_domain_model_activity',
                'foreign_table_where' => 'AND tx_buddysys_domain_model_activity.pid=###CURRENT_PID### AND tx_buddysys_domain_model_activity.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'id' => [
            'exclude' => false,
            'label' => 'LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddysys_domain_model_activity.id',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddysys_domain_model_activity.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddysys_domain_model_activity.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'place' => [
            'exclude' => false,
            'label' => 'LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddysys_domain_model_activity.place',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ]
        ],
        'startdate' => [
            'exclude' => true,
            'label' => 'LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddysys_domain_model_activity.startdate',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'size' => 12,
                'eval' => 'datetime',
                'default' => '0000-00-00 00:00:00'
            ],
        ],
        'enddate' => [
            'exclude' => true,
            'label' => 'LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddysys_domain_model_activity.enddate',
            'config' => [
                'dbType' => 'datetime',
                'type' => 'input',
                'size' => 12,
                'eval' => 'datetime',
                'default' => '0000-00-00 00:00:00'
            ],
        ],
        'userid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:buddy_sys/Resources/Private/Language/locallang_db.xlf:tx_buddysys_domain_model_activity.userid',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
    
    ],
];
