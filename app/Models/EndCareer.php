<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ReasonEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class EndCareer extends Model
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
            'end_reason' => ReasonEnum::class,
        ];
    }
}
