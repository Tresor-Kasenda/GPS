<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelAttribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_id',
        'grade_id',
        'date_allocated',
        'motif_attribution',
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    protected function casts(): array
    {
        return [
            'date_allocated' => 'date'
        ];
    }
}
