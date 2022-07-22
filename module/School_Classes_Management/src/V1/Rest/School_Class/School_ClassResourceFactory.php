<?php
namespace School_Classes_Management\V1\Rest\School_Class\School_ClassEntity;

use School_Classes_Management\V1\Rest\School_Class\School_ClassResource;
use School_Classes_Management\V1\Rest\School_Class\School_ClassCollection;


class School_ClassResourceFactory
{

    public function __invoke($services)
    {
        return new School_ClassResource($services->get(School_ClassCollection::class));
    }
}
