<?php

namespace School_class_management_API\Entities;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use School_class_management_API\Repositories\StudentRepository;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
#[ORM\Table(name: "student")]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    private int $id;

    #[ORM\Column()]
    private string $name;

    #[ORM\Column(unique: true)]
    private string $email;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private DateTimeImmutable $birthday;

    #[ORM\ManyToOne(targetEntity: SchoolClass::class, cascade: ["persist", "remove"], inversedBy: "students")]
    #[ORM\JoinColumn(name: 'school_class_id', referencedColumnName: 'id')]
    private SchoolClass $schoolClass;

    public function __construct(string $name, string $email, DateTimeImmutable $birthday, SchoolClass $schoolClass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->birthday = $birthday;
        $this->schoolClass = $schoolClass;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getBirthday(): DateTimeImmutable
    {
        return $this->birthday;
    }

    public function setBirthday(DateTimeImmutable $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getSchoolClass(): SchoolClass
    {
        return $this->schoolClass;
    }

    public function setSchoolClass(SchoolClass $schoolClass): void
    {
        $this->schoolClass = $schoolClass;
    }
}