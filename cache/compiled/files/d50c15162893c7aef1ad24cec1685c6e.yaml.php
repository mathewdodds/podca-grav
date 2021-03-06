<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'F:/laragon/www/podca/user/themes/podca-grav/blueprints.yaml',
    'modified' => 1587845656,
    'data' => [
        'name' => 'Podca Grav',
        'version' => '0.1.0',
        'description' => 'A theme ported from colorlib, by Mathew Dodds',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Mathew Dodds',
            'email' => 'mathewdodds@hotmail.com'
        ],
        'homepage' => 'https://github.com/mathew-dodds/grav-theme-podca-grav',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/mathew-dodds/grav-theme-podca-grav/issues',
        'readme' => 'https://github.com/mathew-dodds/grav-theme-podca-grav/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'primary_bg' => [
                    'label' => 'Primary Fill',
                    'type' => 'Colorpicker',
                    'default' => '#5e4c80'
                ],
                'primary_txt' => [
                    'label' => 'Primary Text',
                    'type' => 'Colorpicker',
                    'default' => '#5e4c80'
                ],
                'secondary_bg' => [
                    'label' => 'Overlay Color',
                    'type' => 'Colorpicker',
                    'default' => 'rgba(122, 122, 122, 0.46)'
                ],
                'title_colour' => [
                    'label' => 'Title Color',
                    'type' => 'Colorpicker',
                    'default' => 'rgba(242, 117, 0, 1.00)'
                ],
                'social_fb' => [
                    'label' => 'Facebook URL',
                    'type' => 'text',
                    'toggleable' => 'yes',
                    'default' => '#facebook'
                ],
                'social_tw' => [
                    'label' => 'Twitter URL',
                    'type' => 'text',
                    'toggleable' => 'yes',
                    'default' => '#twitter'
                ],
                'social_in' => [
                    'label' => 'Instagram URL',
                    'type' => 'text',
                    'toggleable' => 'yes',
                    'default' => '#instagram'
                ]
            ]
        ]
    ]
];
