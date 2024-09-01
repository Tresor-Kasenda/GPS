<?php

namespace App\Enums;

enum MobilityEnum: string
{
    case INACTIVE = 'Mise en disponibilité';

    case PENDING = 'Mise en congé';

    case PROGRESSING = 'Mise en detachement';

    case RESIGNATION = 'Suspension';
}
