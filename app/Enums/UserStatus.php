<?php

declare(strict_types=1);

namespace App\Enums;

enum UserStatus: string
{
    case PENDING = "en_attente_d_engagement";
    case PROGRESSING = "engagement_en_cours";
    case RESIGNATION = "démission";
    case DECEASED = "décedé";
    case RETIRED = "retraité";
    case REVOKED = "revoqué";

    public static function toSelectArray(): array
    {
        return [
            self::PENDING->value => self::PENDING->value,
            self::PROGRESSING->value => self::PROGRESSING->value,
            self::RESIGNATION->value => self::RESIGNATION->value,
            self::DECEASED->value => self::DECEASED->value,
            self::RETIRED->value => self::RETIRED->value,
            self::REVOKED->value => self::REVOKED->value,
        ];
    }

    public static function toSelectArrayWithKeys(): array
    {
        return [
            self::PENDING->value => self::PENDING,
            self::PROGRESSING->value => self::PROGRESSING,
            self::RESIGNATION->value => self::RESIGNATION,
            self::DECEASED->value => self::DECEASED,
            self::RETIRED->value => self::RETIRED,
            self::REVOKED->value => self::REVOKED,
        ];
    }
}
