<?php

declare(strict_types=1);

namespace App\Enums;

enum ReasonAssignmentEnum: string
{
    case INITIAL = 'Grade Initial';

    case EVOLUTION = 'Evolution en Grade';
}
