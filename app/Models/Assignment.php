<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\AssignmentEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'hiring_id',
        'grade_id',
        'date_assignment',
        'reason',
        'document'
    ];

    public function hiring(): BelongsTo
    {
        return $this->belongsTo(Hiring::class, 'hiring_id');
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function date(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value->format('d/m/Y')
        );
    }

    protected function casts(): array
    {
        return [
            'date_assignment' => 'date',
            'reason' => AssignmentEnum::class,
        ];
    }
}
