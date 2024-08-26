<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Service;
use App\Models\TransferAgent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TransferAgent>
 */
class TransferAgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agent_id' => Agent::factory(),
            'service_id' => Service::factory(),
            'transfer_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'motif' => $this->faker->sentence,
        ];
    }
}
