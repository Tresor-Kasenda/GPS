<?php

declare(strict_types=1);

namespace App\Enums;

enum Affinity: string
{
    case CHILD = 'enfant';

    case PARTNER = 'conjoint (e)';
}
