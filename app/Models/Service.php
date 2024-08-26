<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\LevelEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'level',
        'abbreviation',
        'designation',
        'parent_id'
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'parent_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    protected function casts(): array
    {
        return [
            'level' => LevelEnum::class
        ];
    }
}
