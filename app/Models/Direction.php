<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'priority',
        'abbreviation',
        'designation'
    ];

    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }
}
