<?php
return [
    'service_manager' => [
        'factories' => [
            \School_Classes_Management\V1\Rest\School_Class\School_ClassResource::class => \School_Classes_Management\V1\Rest\School_Class\School_ClassResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'school_classes_management.rest.school_class' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/school_class[/:school_class_name]',
                    'defaults' => [
                        'controller' => 'School_Classes_Management\\V1\\Rest\\School_Class\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'school_classes_management.rest.school_class',
        ],
    ],
    'api-tools-rest' => [
        'School_Classes_Management\\V1\\Rest\\School_Class\\Controller' => [
            'listener' => \School_Classes_Management\V1\Rest\School_Class\School_ClassResource::class,
            'route_name' => 'school_classes_management.rest.school_class',
            'route_identifier_name' => 'school_class_name',
            'collection_name' => 'school_class',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \School_Classes_Management\V1\Rest\School_Class\School_ClassEntity::class,
            'collection_class' => \School_Classes_Management\V1\Rest\School_Class\School_ClassCollection::class,
            'service_name' => 'School_Class',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'School_Classes_Management\\V1\\Rest\\School_Class\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'School_Classes_Management\\V1\\Rest\\School_Class\\Controller' => [
                0 => 'application/vnd.school_classes_management.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'School_Classes_Management\\V1\\Rest\\School_Class\\Controller' => [
                0 => 'application/vnd.school_classes_management.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \School_Classes_Management\V1\Rest\School_Class\School_ClassEntity::class => [
                'entity_identifier_name' => 'name',
                'route_name' => 'school_classes_management.rest.school_class',
                'route_identifier_name' => 'school_class_name',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \School_Classes_Management\V1\Rest\School_Class\School_ClassCollection::class => [
                'entity_identifier_name' => 'name',
                'route_name' => 'school_classes_management.rest.school_class',
                'route_identifier_name' => 'school_class_name',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'School_Classes_Management\\V1\\Rest\\School_Class\\Controller' => [
            'input_filter' => 'School_Classes_Management\\V1\\Rest\\School_Class\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'School_Classes_Management\\V1\\Rest\\School_Class\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'grade',
                'description' => 'The school grade that the school class belongs to.',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'name',
                'description' => 'School Class Name',
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'School_Classes_Management\\V1\\Rest\\School_Class\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
];
