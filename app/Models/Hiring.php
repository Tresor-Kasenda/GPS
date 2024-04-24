<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hiring extends Model
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

    public function dateEngagement()
    {
        return $this->date_commitment->format('d/m/Y');
    }

    public function dateRetraite()
    {
        return $this->date_retirement->format('d/m/Y');
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
