<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ReasonAssignmentEnum;
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

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Hiring::class, 'hiring_id');
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function dateAttribution(): string
    {
        return $this->date_assignment->format('d/m/Y');
    }

    protected function casts(): array
    {
        return [
            'date_assignment' => 'date',
            'reason' => ReasonAssignmentEnum::class,
            'hiring_id' => 'integer',
            'grade_id' => 'integer',
        ];
    }
}
