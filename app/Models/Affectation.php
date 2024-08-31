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
        'agent_id',
        'company_function_id',
        'date_affectation',
        'motif',
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function companyFunction(): BelongsTo
    {
        return $this->belongsTo(CompanyFunction::class);
    }

    protected function casts(): array
    {
        return [
            'date_affectation' => 'date'
        ];
    }
}
