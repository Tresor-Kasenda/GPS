<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Affectation extends Model
{
    use HasFactory;

    protected $fillable = [
        'hiring_id',
        'direction_id',
        'division_id',
        'office_id',
        'position_id',
        'sous_position',
        'date_affectation',
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

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    protected function casts(): array
    {
        return [
            'hiring_id' => 'integer',
            'direction_id' => 'integer',
            'division_id' => 'integer',
            'office_id' => 'integer',
            'position_id' => 'integer',
            'date_affectation' => 'date'
        ];
    }
}
