<?php

namespace App\Enums;

enum Gender: string
{
    case MALE = 'Homme';

    case FEMALE = 'Femme';

    case OTHER = 'Neutre';
}
