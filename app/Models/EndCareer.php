<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EndCareer extends Model
{
    use HasFactory;

    protected $fillable = [
        'end_date',
        'end_reason',
        'agent_id',
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    protected function casts(): array
    {
        return [
            'end_date' => 'date',
        ];
    }
}
