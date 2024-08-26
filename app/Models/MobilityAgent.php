<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MobilityAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobility_date',
        'mobility_type',
        'start_date',
        'end_date',
        'agent_id'
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    protected function casts(): array
    {
        return [
            'mobility_date' => 'date',
            'start_date' => 'datetime',
            'end_date' => 'datetime'
        ];
    }
}
