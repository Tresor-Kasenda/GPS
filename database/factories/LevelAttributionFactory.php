<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Grade;
use App\Models\LevelAttribution;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LevelAttribution>
 */
final class LevelAttributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agent_id' => Agent::factory()->create(),
            'date_allocated' => $this->faker->date(),
            'motif_attribution' => $this->faker->sentence(),
            'grade_id' => Grade::factory()->create()
        ];
    }
}
