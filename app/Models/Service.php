<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\LevelEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'level',
        'abbreviation',
        'designation'
    ];

    protected function casts(): array
    {
        return [
            'level' => LevelEnum::class
        ];
    }
}
