<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class EducationalBackground extends Enum
{
    const HighSchool = 'highschool';
    const College = 'college';
    const BachelorsDegree = 'bachelor';
    const VocationalDegree = 'vocational';
    const Postgraduate = 'postgraduate';

    public static function getDescription($value): string
    {
        if ($value === self::HighSchool) {
            return 'High School Level / Graduate';
        }

        if ($value === self::BachelorsDegree) {
            return 'Bachelors Degree';
        }

        if ($value === self::VocationalDegree) {
            return 'Vocational Degree';
        }

        return parent::getDescription($value);
    }
}
