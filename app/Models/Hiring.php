<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\StateCarrier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Hiring extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'date_commitment',
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
        return '' !== $this->date_retirement ?
            $this->date_retirement->format('d/m/Y') :
            '';
    }

    protected function casts(): array
    {
        return [
            'date_commitment' => 'date',
            'person_id' => 'integer',
            'carriers_state' => StateCarrier::class
        ];
    }
}
