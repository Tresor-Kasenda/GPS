<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\TypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type'
    ];

    protected function casts(): array
    {
        return [
            'type' => TypeEnum::class
        ];
    }
}
