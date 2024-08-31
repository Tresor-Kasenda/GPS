<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'hiring_id',
        'person_number',
        'seniority',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function hiring(): BelongsTo
    {
        return $this->belongsTo(Hiring::class);
    }

    public function affectations(): HasMany
    {
        return $this->hasMany(Affectation::class);
    }

    public function mobilities(): HasMany
    {
        return $this->hasMany(MobilityAgent::class);
    }

    protected function casts(): array
    {
        return [
            'seniority' => 'integer',
        ];
    }
}
