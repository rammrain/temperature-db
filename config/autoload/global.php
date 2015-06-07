<?php

return [
    'doctrine' => [
        'driver' => [
            'orm_default' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    'src/Domain'
                ]
            ]
        ],
        'configuration' => [
            'orm_default' => [
                'driver' => 'orm_default',
                'generate_proxies' => true,
                'proxy_dir' => 'data/DoctrineORMModule/Proxy',
                'proxy_namespace' => 'DoctrineORMModule\Proxy'
            ]
        ],
        'connection' => [
            'orm_default' => [
                'driver_class' => Doctrine\DBAL\Driver\PDOMySql\Driver::class,
                'params' => [
                    'host' => '127.0.0.1',
                    'user' => 'root',
                    'password' => 'As76talavista',
                    'dbname' => 'temperature'
                ]
            ]
        ]
    ]
];
