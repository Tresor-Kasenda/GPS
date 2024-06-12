<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use App\Enums\UserStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class Person extends Model
{
    use HasFactory;

    /**
     * @var array<string, string>
     */
    protected $fillable = [
        'name',
        'username',
        'firstname',
        'gender',
        'marital_status',
        'birthdate',
        'birthplace',
        'phone_number',
        'address',
        'profile_picture',
        'identity_piece',
        'status'
    ];

    public function hiring(): HasOne
    {
        return $this->hasOne(Hiring::class);
    }

    public function birthday(): string
    {
        return $this->birthdate->format('Y-m-d');
    }

    /**
     * @return array<string, mixed|string|array>
     */
    protected function casts(): array
    {
        return [
            'gender' => Gender::class,
            'marital_status' => MaritalStatus::class,
            'birthdate' => 'date',
            'status' => UserStatus::class
        ];
    }
}
