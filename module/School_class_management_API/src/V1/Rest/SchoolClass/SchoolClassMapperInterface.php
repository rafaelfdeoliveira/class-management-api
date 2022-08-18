<?php

namespace School_class_management_API\V1\Rest\SchoolClass;

interface SchoolClassMapperInterface
{
    public function createSchoolClass(
        string $name,
        string $grade
    ): SchoolClassEntity;
}