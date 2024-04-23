<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * @var string[] |array<string,string>
     */
    protected $fillable = [
        'priority',
        'level',
        'tier',
        'code',
        'description',
    ];
}
