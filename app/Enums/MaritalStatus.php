<?php

declare(strict_types=1);

namespace App\Enums;

enum MaritalStatus: string
{
    case MARRY = 'Marié(e)';

    case SINGLE = 'Célibataire';

    case DIVORCED = 'Divorcé(e)';

    case WIDOWED = 'Veuve/Veuf';

    case NEUTRAL = 'Neutre';
}
