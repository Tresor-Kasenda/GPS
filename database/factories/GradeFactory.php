<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends Factory<Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'priority' => fake()->userName,
            'level' => Arr::random(['Niveau 1', 'Niveau 2', 'Niveau 3']),
            'tier' => fake()->firstName,
            'code' => Str::random(8),
            'description' => fake()->realText
        ];
    }
}
