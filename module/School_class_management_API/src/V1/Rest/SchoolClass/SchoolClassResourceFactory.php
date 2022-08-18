<?php

namespace School_class_management_API\V1\Rest\SchoolClass;

class SchoolClassResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(SchoolClassMapperInterface::class);
        return new SchoolClassResource($mapper);
    }
}
