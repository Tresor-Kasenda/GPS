<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Office extends Model
{
    use HasFactory;

    /**
     * @var string<string, string>[]
     */
    protected $fillable = [
        'division_id',
        'priority',
        'abbreviation',
        'designation',
    ];

    /**
     * @return BelongsTo
     */
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
