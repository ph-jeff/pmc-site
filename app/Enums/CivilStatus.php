<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class CivilStatus extends Enum
{
    const Single = 'single';
    const Married = 'married';
    const Widowed = 'widowed';
    const Separated = 'separated';
    const Others = 'others';
}
