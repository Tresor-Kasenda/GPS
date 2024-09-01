<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use App\Enums\UserStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'status',
        'birthdate',
        'birthplace',
        'phone_number',
        'address',
        'age'
    ];

    public function hiring(): HasOne
    {
        return $this->hasOne(Hiring::class);
    }

    protected function birthday(): Attribute
    {
        return new Attribute(
            get: fn($value) => Carbon::parse($value)->format('d/m/Y'),
        );
    }

    /**
     * @return array<string, mixed|string|array|bool>
     */
    protected function casts(): array
    {
        return [
            'gender' => Gender::class,
            'marital_status' => MaritalStatus::class,
            'birthdate' => 'date',
            'status' => UserStatus::class,
            'age' => 'integer'
        ];
    }
}
