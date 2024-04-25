<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdmissionSub extends Model
{
    use HasFactory;

    protected $fillable = [
        'hiring_id',
        'direction_id',
        'division_id',
        'office_id',
        'date_admission',
        'document'
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Hiring::class, 'hiring_id');
    }

    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class, 'direction_id');
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class, 'office_id');
    }

    protected function casts(): array
    {
        return [
            'date_admission' => 'date'
        ];
    }
}
