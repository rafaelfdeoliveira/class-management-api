<?php

namespace School_class_management_API\V1\Rest\SchoolClass;

use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use Doctrine\ORM\EntityManager;
use School_class_management_API\Entities\SchoolClass;
use School_class_management_API\Entities\Student;

class SchoolClassMapperFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $em = $container->get(EntityManager::class);
        $schoolClassRep = $em->getRepository(SchoolClass::class);
        echo "\nTeste\n";
        $studentRep = $em->getRepository(Student::class);

        return new SchoolClassMapper($schoolClassRep, $studentRep);
    }
}