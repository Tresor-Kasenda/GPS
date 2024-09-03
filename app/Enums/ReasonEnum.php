<?php

namespace App\Enums;

enum ReasonEnum: string
{
    case RESIGNATION = "Démission";
    case DECEASED = "Déces";
    case RETIRED = "Mise a la retraite";
    case REVOKED = "Revocation";
}
