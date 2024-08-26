<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\EndCareer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EndCareer>
 */
class EndCareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'end_date' => $this->faker->date(),
            'end_reason' => $this->faker->word,
            'agent_id' => Agent::factory(),
        ];
    }
}
