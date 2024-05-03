<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Hiring extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'date_commitment',
        'date_retirement',
        'matriculate',
        'carriers_state',
        'document'
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function dateEngagement(): string
    {
        return $this->date_commitment->format('d/m/Y');
    }

    public function getRetirementAttribute(): string
    {
        return $this->date_retirement !== '' ?
            $this->date_retirement->format('d/m/Y') :
            '';
    }

    public function assignments(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }

    protected function casts(): array
    {
        return [
            'date_commitment' => 'date',
            'date_retirement' => 'date',
            'person_id' => 'integer',
        ];
    }
}
