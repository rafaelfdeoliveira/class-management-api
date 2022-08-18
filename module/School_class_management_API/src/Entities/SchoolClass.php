<?php

namespace School_class_management_API\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use School_class_management_API\Repositories\SchoolClassRepository;

#[ORM\Entity(repositoryClass: SchoolClassRepository::class)]
#[ORM\Table(name: "school_class")]
class SchoolClass
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    private int $id;

    #[ORM\Column(unique: true)]
    private string $name;

    #[ORM\Column()]
    private string $grade;


    #[ORM\OneToMany(mappedBy: "schoolClass", targetEntity: Student::class)]
    private Collection $students;

    public function __construct(string $name, string $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
        $this->students = new ArrayCollection();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getGrade(): string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function addStudent(Student $student): void
    {
        $this->students->add($student);
    }
}
