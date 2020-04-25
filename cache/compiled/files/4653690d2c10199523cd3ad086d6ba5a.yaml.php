<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/laragon/www/podca/user/config/plugins/flex-objects.yaml',
    'modified' => 1587083787,
    'data' => [
        'enabled' => false,
        'built_in_css' => true,
        'extra_admin_twig_path' => 'theme://admin/templates',
        'admin_list' => [
            'per_page' => 15,
            'order' => [
                'by' => 'updated_timestamp',
                'dir' => 'desc'
            ]
        ],
        'directories' => [
            1 => 'blueprints://flex-objects/pages.yaml',
            2 => 'blueprints://flex-objects/user-accounts.yaml',
            3 => 'blueprints://flex-objects/user-groups.yaml'
        ]
    ]
];
