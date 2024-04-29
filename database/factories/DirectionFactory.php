<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Direction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Direction>
 */
final class DirectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'priority' => Str::random(5),
            'abbreviation' => $this->faker->word(),
            'designation' => $this->faker->realText(),
        ];
    }
}
