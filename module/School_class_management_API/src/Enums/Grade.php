<?php

namespace School_class_management_API\Enums;

abstract class Grade
{
    public const EF_6TH_GRADE = 'EF sexto ano';
    public const EF_7TH_GRADE = 'EF sétimo ano';
    public const EF_8TH_GRADE = 'EF oitavo ano';
    public const EF_9TH_GRADE = 'EF nono ano';
    public const EM_1ST_GRADE = 'EM primeiro ano';
    public const EM_2ND_GRADE = 'EM segundo ano';
    public const EM_3RD_GRADE = 'EM terceiro ano';

    public static function isValid(string $value): bool
    {
        return true;
    }
}