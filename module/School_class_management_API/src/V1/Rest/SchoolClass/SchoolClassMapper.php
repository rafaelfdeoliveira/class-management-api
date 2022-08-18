<?php

namespace School_class_management_API\V1\Rest\SchoolClass;

use Error;
use Exception;
use InvalidArgumentException;
use Laminas\Mvc\Controller\AbstractActionController;
use School_class_management_API\Repositories\SchoolClassRepository;
use School_class_management_API\Repositories\StudentRepository;
use School_class_management_API\Entities\SchoolClass;
use School_class_management_API\Enums\Grade;

class SchoolClassMapper extends AbstractActionController implements SchoolClassMapperInterface
{

    public function __construct(
        private SchoolClassRepository $schoolClassRep,
        private StudentRepository $studentRep
    ) {}

    public function createSchoolClass(
        string $name,
        string $grade
    ): SchoolClassEntity {
        // $grade = Grade::tryFrom($grade);
        // if (!$grade) throw new InvalidArgumentException('Série inválida.');

        if ($this->schoolClassRep->findOneBy(['name' => $name])) {
            throw new InvalidArgumentException('Já existe uma turma com esse nome.');
        }

        try {
            $newClass = new SchoolClass(
                $name, $grade
            );

            $this->schoolClassRep->begin();
            $this->schoolClassRep->save($newClass);
            $this->schoolClassRep->commit();

            return SchoolClassEntity::buildFromSchoolClass($newClass);
        } catch (Exception|Error $ex) {
            throw $ex;
        }
    }


}