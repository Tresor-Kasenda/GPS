<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Hiring;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Hiring>
 */
final class HiringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'person_id' => Person::factory(),
            'date_commitment' => $this->faker->date(),
            'date_retirement' => $this->faker->date(),
            'matriculate' => $this->faker->randomDigit(),
            'document' => $this->faker->realText(),
        ];
    }
}
