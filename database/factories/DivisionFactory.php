<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Direction;
use App\Models\Division;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Division>
 */
final class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'direction_id' => Direction::factory(),
            'priority' => fake()->postcode,
            'abbreviation' => fake()->postcode,
            'designation' => fake()->text,
        ];
    }
}
