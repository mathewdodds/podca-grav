<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/laragon/www/podca/user/blueprints/flex-objects/guests.yaml',
    'modified' => 1586502438,
    'data' => [
        'title' => 'Guests',
        'description' => 'Simple contact directory with tags.',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'router' => [
                    'path' => '/guests'
                ],
                'menu' => [
                    'list' => [
                        'route' => '/guests',
                        'title' => 'Guests',
                        'icon' => 'fa-address-card-o',
                        'authorize' => [
                            0 => 'admin.guests.list',
                            1 => 'admin.super'
                        ],
                        'priority' => 2
                    ]
                ],
                'template' => 'default',
                'permissions' => [
                    'admin.guests' => [
                        'type' => 'crudpl',
                        'label' => 'Guests'
                    ]
                ],
                'list' => [
                    'title' => 'name',
                    'fields' => [
                        'published' => [
                            'field' => [
                                'type' => 'toggle',
                                'label' => 'Publ'
                            ],
                            'width' => 8
                        ],
                        'name' => [
                            'link' => 'edit'
                        ],
                        'email' => NULL,
                        'website' => NULL,
                        'tags' => NULL
                    ]
                ],
                'edit' => [
                    'title' => [
                        'template' => '{{ object.name }}'
                    ]
                ],
                'preview' => [
                    'enabled' => false,
                    'route' => NULL
                ],
                'export' => [
                    'enabled' => true,
                    'method' => 'jsonSerialize',
                    'formatter' => [
                        'class' => 'Grav\\Framework\\File\\Formatter\\YamlFormatter'
                    ],
                    'filename' => 'guests'
                ]
            ],
            'site' => [
                'templates' => [
                    'collection' => [
                        'paths' => [
                            0 => 'flex/{TYPE}/collection/{LAYOUT}{EXT}'
                        ]
                    ],
                    'object' => [
                        'paths' => [
                            0 => 'flex/{TYPE}/object/{LAYOUT}{EXT}'
                        ]
                    ],
                    'defaults' => [
                        'type' => 'Guests',
                        'layout' => 'default'
                    ]
                ]
            ],
            'data' => [
                'object' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericObject',
                'collection' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericCollection',
                'index' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericIndex',
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\SimpleStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\JsonFormatter'
                        ],
                        'folder' => 'user-data://flex-objects/guests.json'
                    ]
                ],
                'search' => [
                    'options' => [
                        'contains' => 1
                    ],
                    'fields' => [
                        0 => 'name'
                    ]
                ]
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'published' => [
                    'type' => 'toggle',
                    'label' => 'Published',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'text',
                    'label' => 'Name',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'description' => [
                    'type' => 'markdown',
                    'label' => 'Description',
                    'validate' => [
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];
