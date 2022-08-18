<?php
return [
    'service_manager' => [
        'aliases' => [
            \School_class_management_API\V1\Rest\SchoolClass\SchoolClassMapperInterface::class => \School_class_management_API\V1\Rest\SchoolClass\SchoolClassMapper::class,
            \School_class_management_API\V1\Rest\Student\StudentMapperInterface::class => \School_class_management_API\V1\Rest\Student\StudentMapper::class,
        ],
        'factories' => [
            \School_class_management_API\V1\Rest\SchoolClass\SchoolClassResource::class => \School_class_management_API\V1\Rest\SchoolClass\SchoolClassResourceFactory::class,
            \School_class_management_API\V1\Rest\SchoolClass\SchoolClassMapper::class => \School_class_management_API\V1\Rest\SchoolClass\SchoolClassMapperFactory::class,
            \School_class_management_API\V1\Rest\Student\StudentResource::class => \School_class_management_API\V1\Rest\Student\StudentResourceFactory::class,
            \School_class_management_API\V1\Rest\Student\StudentMapper::class => \School_class_management_API\V1\Rest\Student\StudentMapperFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'school_class_management_api.rest.schoolClass' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/school_class[/:school_class_id]',
                    'defaults' => [
                        'controller' => 'School_class_management_API\\V1\\Rest\\SchoolClass\\Controller',
                    ],
                ],
            ],
            'school_class_management_api.rest.student' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/student[/:student_id]',
                    'defaults' => [
                        'controller' => 'School_class_management_API\\V1\\Rest\\Student\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'school_class_management_api.rest.schoolClass',
            1 => 'school_class_management_api.rest.student',
        ],
    ],
    'api-tools-rest' => [
        'School_class_management_API\\V1\\Rest\\SchoolClass\\Controller' => [
            'listener' => \School_class_management_API\V1\Rest\SchoolClass\SchoolClassResource::class,
            'route_name' => 'school_class_management_api.rest.schoolClass',
            'route_identifier_name' => 'school_class_id',
            'collection_name' => 'school_class',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \School_class_management_API\V1\Rest\SchoolClass\SchoolClassEntity::class,
            'collection_class' => \School_class_management_API\V1\Rest\SchoolClass\SchoolClassCollection::class,
            'service_name' => 'School_class',
        ],
        'School_class_management_API\\V1\\Rest\\Student\\Controller' => [
            'listener' => \School_class_management_API\V1\Rest\Student\StudentResource::class,
            'route_name' => 'school_class_management_api.rest.student',
            'route_identifier_name' => 'student_id',
            'collection_name' => 'student',
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
            'entity_class' => \School_class_management_API\V1\Rest\Student\StudentEntity::class,
            'collection_class' => \School_class_management_API\V1\Rest\Student\StudentCollection::class,
            'service_name' => 'Student',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'School_class_management_API\\V1\\Rest\\SchoolClass\\Controller' => 'HalJson',
            'School_class_management_API\\V1\\Rest\\Student\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'School_class_management_API\\V1\\Rest\\SchoolClass\\Controller' => [
                0 => 'application/vnd.school_class_management_api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'School_class_management_API\\V1\\Rest\\Student\\Controller' => [
                0 => 'application/vnd.school_class_management_api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'School_class_management_API\\V1\\Rest\\SchoolClass\\Controller' => [
                0 => 'application/vnd.school_class_management_api.v1+json',
                1 => 'application/json',
            ],
            'School_class_management_API\\V1\\Rest\\Student\\Controller' => [
                0 => 'application/vnd.school_class_management_api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \School_class_management_API\V1\Rest\SchoolClass\SchoolClassEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'school_class_management_api.rest.schoolClass',
                'route_identifier_name' => 'school_class_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \School_class_management_API\V1\Rest\SchoolClass\SchoolClassCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'school_class_management_api.rest.schoolClass',
                'route_identifier_name' => 'school_class_id',
                'is_collection' => true,
            ],
            \School_class_management_API\V1\Rest\Student\StudentEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'school_class_management_api.rest.student',
                'route_identifier_name' => 'student_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \School_class_management_API\V1\Rest\Student\StudentCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'school_class_management_api.rest.student',
                'route_identifier_name' => 'student_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'School_class_management_API\\V1\\Rest\\SchoolClass\\Controller' => [
            'input_filter' => 'School_class_management_API\\V1\\Rest\\SchoolClass\\Validator',
        ],
        'School_class_management_API\\V1\\Rest\\Student\\Controller' => [
            'input_filter' => 'School_class_management_API\\V1\\Rest\\Student\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'School_class_management_API\\V1\\Rest\\SchoolClass\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'name',
                'description' => 'The unique name of the school class.',
                'field_type' => 'string',
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
                'name' => 'grade',
                'description' => 'The school class grade',
                'field_type' => 'string',
            ],
        ],
        'School_class_management_API\\V1\\Rest\\Student\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'email',
                'description' => 'The student email which must be unique in the database.',
                'field_type' => '',
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
                'description' => 'The student name',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\DateSelect::class,
                        'options' => [],
                    ],
                ],
                'name' => 'birthday',
                'description' => 'The student birthday date',
                'field_type' => '',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                ],
                'name' => 'student_class',
                'description' => 'The school class the student is registered in.',
            ],
        ],
    ],
    'doctrine' => [
        'driver' => [
            'school_class_annotation_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => \School_class_management_API\V1\Rest\School_class\SchoolClassEntity::class,
                    1 => \School_class_management_API\V1\Rest\Student\StudentEntity::class,
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'School_class_management_API\\V1\\Rest\\SchoolClass' => 'school_class_annotation_driver',
                ],
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'School_class_management_API\\V1\\Rest\\Student\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
];
