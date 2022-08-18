<?php

namespace School_class_management_API\V1\Rest\SchoolClass;

use School_class_management_API\Entities\SchoolClass;
use School_class_management_API\Entities\Student;

class SchoolClassEntity
{
    public string $name;
    public string $grade;
    public array $studentsEmails;

    public function __construct(string $name, string $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
        $this->studentsEmails = [];
    }

    public static function buildFromSchoolClass(SchoolClass $class): SchoolClassEntity {
        $representation = new SchoolClassEntity($class->getName(), $class->getGrade());

        $representation->studentsEmails = $class->getStudents()->map(
            function (Student $std)
            {
                return $std->getEmail();
            }
        )->toArray();

        return $representation;
    }
}
