<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    /**
     * @var array<string, string>
     */
    protected $fillable = [
        'priority',
        'description',
    ];
}
