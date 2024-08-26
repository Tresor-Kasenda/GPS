<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\MobilityAgent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MobilityAgent>
 */
class MobilityAgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mobility_date' => $this->faker->date(),
            'mobility_type' => $this->faker->date(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'agent_id' => Agent::factory()
        ];
    }
}
