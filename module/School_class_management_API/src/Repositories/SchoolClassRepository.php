<?php

namespace School_class_management_API\Repositories;

use School_class_management_API\Entities\SchoolClass;

class SchoolClassRepository extends BaseRepostitory
{
    public function save(SchoolClass $schoolClass): SchoolClass
    {
        $this->getEntityManager()->persist($schoolClass);
        return $schoolClass;
    }
}