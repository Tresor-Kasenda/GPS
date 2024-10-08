<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class TransferAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_id',
        'service_id',
        'transfer_date',
        'motif',
        'source_service_id'
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function sourceService(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'source_service_id');
    }

    protected function casts(): array
    {
        return [
            'transfer_date' => 'date',
        ];
    }
}
