<?php

declare(strict_types=1);

namespace App\Enums;

enum StateCarrier: string
{
    case ACTIVE = 'active';

    case INACTIVE = 'inactive';

    case LIABILITIES = 'passif';

    public static function getAlls(): array
    {
        return [
            self::ACTIVE,
            self::INACTIVE,
            self::LIABILITIES,
        ];
    }

}
