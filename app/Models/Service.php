<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\LevelEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'level',
        'abbreviation',
        'designation'
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Hiring::class);
    }

    protected function casts(): array
    {
        return [
            'level' => LevelEnum::class
        ];
    }
}
