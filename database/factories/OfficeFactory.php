<?php

namespace Database\Factories;

use App\Models\Division;
use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'division_id' => Division::factory(),
            'priority' => fake()->postcode,
            'abbreviation' => fake()->postcode,
            'designation' => fake()->text,
        ];
    }
}
