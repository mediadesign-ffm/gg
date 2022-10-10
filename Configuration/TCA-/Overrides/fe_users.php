<?php

// Add new columns to fe_users table
$newColumns = array(
        'room' => array(
                'exclude' => 0,
                'label' => 'LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:room',
                'config' => array(
                        'type' => 'input',
                        'size' => '10',
                        'eval' => 'trim',
                )
        ),
        'homephone' => array(
                'exclude' => 0,
                'label' => 'LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:homephone',
                'config' => array(
                        'type' => 'input',
                        'size' => '10',
                        'eval' => 'trim',
                )
        ),
        'position' => array(
                'exclude' => 0,
                'label' => 'LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:position',
                'config' => array(
                        'type' => 'input',
                        'size' => '10',
                        'eval' => 'trim',
                )
        ),
        'department' => array(
                'exclude' => 1,
                'label' => 'LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:department',
                'config' => array(
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                )
        ),
        'description' => array(
                'exclude' => 1,
                'label' => 'LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:description',
                'config' => array(
                    'type' => 'input',
                    'size' => 30,
                    'eval' => 'trim'
                )
        ),   
        'extern'  => array(
			'exclude' => 1,
			 'label' => 'LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:extern',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items'   => array(
					array('LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:extern.1', 'Intern'),
					array('LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:extern.2', 'Extern'),				
				),
                'size' => 2,
                'minitems' => 0,
                'maxitems' => 1,
				)
		),
);


$fields = 'position, department, homephone, room, description, extern';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $newColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    '--div--;LLL:EXT:gg/Resources/Private/Language/locallang_db.xlf:fe_users.tab, ' . $fields
);

$GLOBALS['TCA']['fe_users']['ctrl']['default_sortby'] = 'ORDER BY name';
$GLOBALS['TCA']['fe_users']['ctrl']['searchFields'] = 'department,description,username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company';

        
// Add the external information to the ctrl section
$GLOBALS['TCA']['fe_users']['ctrl']['external'] = array(
        0 => array(
                'connector' => 'csv',
                'parameters' => array(
                        'filename' => 'fileadmin/intranet/User/Fehlende.csv',
                        'delimiter' => ';',
                        'text_qualifier' => '',
                        'skip_rows' => 1,
                        'encoding' => 'de_DE.utf8'
                ),
                'data' => 'array',
                'priority' => 50,
                'disabledOperations' => '',
                'enforcePid' => true,
                'description' => 'Import der Mitarbeiterliste',
                'referenceUid' => 'Samaccountname'
        )
);

// Add the external information for each column

$GLOBALS['TCA']['fe_users']['columns']['username']['external'] = array(
        0 => array(
                'field' => 'EmailAddress'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['name']['external'] = array(
        0 => array(
                'field' => 'Surname'
        ),
        1 => array(
                'field' => 'Givenname'
        )	
);

$GLOBALS['TCA']['fe_users']['columns']['last_name']['external'] = array(
        0 => array(
                'field' => 'Surname'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['first_name']['external'] = array(
        0 => array(
                'field' => 'Givenname'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['room']['external'] = array(
        0 => array(
                'field' => 'Office'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['department']['external'] = array(
        0 => array(
                'field' => 'Department'
        )
);
$GLOBALS['TCA']['fe_users']['columns']['description']['external'] = array(
        0 => array(
                'field' => 'Company'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['title']['external'] = array(
        0 => array(
                'field' => 'Title'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['homephone']['external'] = array(
        0 => array(
                'field' => 'Homephone'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['email']['external'] = array(
        0 => array(
                'field' => 'EmailAddress'
        )
);


$GLOBALS['TCA']['fe_users']['columns']['city']['external'] = array(
        0 => array(
                'field' => 'City'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['zip']['external'] = array(
        0 => array(
                'field' => 'Postalcode'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['fax']['external'] = array(
        0 => array(
                'field' => 'Fax'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['telephone']['external'] = array(
        0 => array(
                'field' => 'ipPhone'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['address']['external'] = array(
        0 => array(
                'field' => 'Streetaddress'
        )
);

$GLOBALS['TCA']['fe_users']['columns']['usergroup']['external'] = array(
        0 => array(
                'value' => '37'
        )
);
$GLOBALS['TCA']['fe_users']['columns']['pid']['external'] = array(
        0 => array(
                'value' => '3162'
        )
);
$GLOBALS['TCA']['fe_users']['columns']['password']['external'] = array(
        0 => array(
                'value' => 'Intranet2022'
        )
);



