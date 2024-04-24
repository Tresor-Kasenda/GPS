<?php

namespace App\Models;

use App\Enums\ReasonEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends Model
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

    public function dateAttribution()
    {
        return $this->date_assignment->format('d/m/Y');
    }

    protected function casts(): array
    {
        return [
            'date_assignment' => 'date',
            'reason' => ReasonEnum::class,
            'hiring_id' => 'integer',
            'grade_id' => 'integer',
        ];
    }
}
