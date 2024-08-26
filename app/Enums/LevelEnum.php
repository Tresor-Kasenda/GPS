<?php

declare(strict_types=1);

namespace App\Enums;

enum LevelEnum: string
{
    case DIRECTION = "Diréction";

    case DIVISION = "Division";

    case OFFICES = "Bureau";

    case CELLULE = "Cellule";
}
