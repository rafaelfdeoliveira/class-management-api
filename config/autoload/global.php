<?php

use Doctrine\DBAL\Driver\PDO\MySQL\Driver;
use Doctrine\ORM\Mapping\Driver\AttributeDriver;
use Doctrine\Persistence\Mapping\Driver\MappingDriverChain;

return [
    'api-tools-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'adapters' => [
            'MySQL' => [
                'host' => ''
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authentication' => [
            'map' => [],
        ],
    ],
    'doctrine' => [
        'connection' => [
            // Configuration for service `doctrine.connection.orm_default` service
            'orm_default' => [
                'driverClass' => Driver::class,
                // configuration instance to use. The retrieved service name will
                // be `doctrine.configuration.$thisSetting`
                'configuration' => 'orm_default',

                // event manager instance to use. The retrieved service name will
                // be `doctrine.eventmanager.$thisSetting`
                'eventmanager'  => 'orm_default',

                // connection parameters, see
                // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html
                'params' => [
                    'host'     => 'db',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => 'kuau',
                    'dbname'   => 'school-classes-management',
                ],
            ],
        ],

        // Metadata Mapping driver configuration
        'driver' => [
            'sql_attributes_driver' => [
                'class' => AttributeDriver::class,
                'paths' => [
                    __DIR__ . '/../../module/School_class_management_API/src/Entities'
                ]
            ],
            // Configuration for service `doctrine.driver.orm_default` service
            'orm_default' => [
                // By default, the ORM module uses a driver chain. This allows multiple
                // modules to define their own entities
                'class'   => MappingDriverChain::class,

                // Map of driver names to be used within this driver chain, indexed by
                // entity namespace
                'drivers' => [
                    'School_class_management_API\\Entities' => 'sql_attributes_driver'
                ],
            ],
        ],
    ]
];
