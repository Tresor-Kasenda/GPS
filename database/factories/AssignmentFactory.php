<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\AssignmentEnum;
use App\Models\Assignment;
use App\Models\Grade;
use App\Models\Hiring;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Assignment>
 */
final class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hiring_id' => Hiring::factory(),
            'grade_id' => Grade::factory(),
            'date_assignment' => $this->faker->date(),
            'reason' => Arr::random(AssignmentEnum::cases()),
        ];
    }
}
