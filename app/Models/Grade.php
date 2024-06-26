<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Grade extends Model
{
    use HasFactory;

    /**
     * @var string[] |array<string,string>
     */
    protected $fillable = [
        'priority',
        'level',
        'tier',
        'code',
        'description',
    ];

    public function assignments(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }
}
