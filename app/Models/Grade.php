<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\GradeEnum;
use App\Enums\GradeLevelEnum;
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
        'level',
        'designation',
    ];

    public function agents(): HasMany
    {
        return $this->hasMany(Agent::class);
    }


    protected function casts(): array
    {
        return [
            'designation' => GradeEnum::class,
            'level' => GradeLevelEnum::class,
        ];
    }
}
