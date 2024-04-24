<?php

namespace Database\Factories;

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->userName,
            'firstname' => fake()->firstName,
            'gender' => Arr::random(Gender::cases()),
            'marital_status' => Arr::random(MaritalStatus::cases()),
            'birthdate' => fake()->date(),
            'birthplace' => fake()->city,
            'phone_number' => fake()->phoneNumber,
            'address' => fake()->address,
            'profile_picture' => fake()->imageUrl(),
            'identity_card' => fake()->iso8601
        ];
    }
}
