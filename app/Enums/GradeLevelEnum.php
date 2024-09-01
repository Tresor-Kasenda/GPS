<?php

namespace App\Enums;

enum GradeLevelEnum: string
{
    case SENIOR_CIVIL = "Haut Fonctionnaire";
    case EXTRA_CIVIL = "Cadre Supérieur";
    case COLLABORATION = "Agent de Collaboration";
    case EXECUTION = "Agent d'Execution";
    case NEWS = "Nouvelle Unité";
}
