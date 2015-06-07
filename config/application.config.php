<?php
return [
    'modules' => [
        'DoctrineModule',
        'DoctrineORMModule'
    ],
    'module_listener_options' => [
        'module_paths' => [
            './vendor'
        ],
        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php'
        ]
    ]
];
