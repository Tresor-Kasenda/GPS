<?php

declare(strict_types=1);

namespace App\Enums;

enum StateCarrier: string
{
    case ACTIVE = 'active';

    case INACTIVE = 'en disponibilité';

    case PENDING = 'en congé';

    case PROGRESSING = 'detaché';

    case RESIGNATION = 'suspendu';
}
