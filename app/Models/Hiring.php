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
        'service_id',
        'hiring_date',
        'reference',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function agents(): HasMany
    {
        return $this->hasMany(Agent::class);
    }

    protected function casts(): array
    {
        return [
            'hiring_date' => 'date'
        ];
    }
}
