<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    use HasFactory;

    /**
     * @var string[]|array<string,string>
     */
    protected $fillable = [
        'direction_id',
        'priority',
        'abbreviation',
        'designation',
    ];

    /**
     * @return BelongsTo
     */
    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class);
    }

    public function offices(): HasMany
    {
        return $this->hasMany(Office::class);
    }
}
