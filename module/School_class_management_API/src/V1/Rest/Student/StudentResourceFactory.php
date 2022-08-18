<?php
namespace School_class_management_API\V1\Rest\Student;

class StudentResourceFactory
{
    public function __invoke($services)
    {
        return new StudentResource();
    }
}
