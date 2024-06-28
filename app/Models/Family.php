<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Affinity;
use App\Enums\Gender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'affinity',
        'name',
        'username',
        'firstname',
        'gender',
        'birthdate',
        'birthplace'
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    protected function casts(): array
    {
        return [
            'birthdate' => 'date',
            'gender' => Gender::class,
            'affinity' => Affinity::class,
        ];
    }
}
