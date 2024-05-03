<?php

declare(strict_types=1);

namespace App\Enums;

/**
 * Gender Definition
 */
enum Gender: string
{
    case MALE = 'Homme';

    case FEMALE = 'Femme';

    case OTHER = 'Neutre';
}
