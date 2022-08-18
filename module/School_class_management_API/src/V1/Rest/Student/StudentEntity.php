<?php

namespace School_class_management_API\V1\Rest\Student;

use DateTime;
use School_class_management_API\V1\Rest\SchoolClass\SchoolClassEntity;

class StudentEntity
{
    public string $name;
    public string $email;
    public string $birthday;
    public string $schoolClassName;

    public function __construct(string $name, string $email, string $birthday)
    {
        
    }
}
