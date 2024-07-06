<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\StateCarrier;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Hiring extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'date_commitment',
        'seniority',
        'matriculate',
        'carriers_state',
        'document',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    protected function commitment(): Attribute
    {
        return new Attribute(
            get: fn ($value) => Carbon::parse($value)->format('d/m/Y'),
        );
    }

    protected function casts(): array
    {
        return [
            'date_commitment' => 'date',
            'person_id' => 'integer',
            'carriers_state' => StateCarrier::class,
        ];
    }
}
