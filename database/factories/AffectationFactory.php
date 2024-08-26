<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Affectation;
use App\Models\Agent;
use App\Models\CompanyFunction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Affectation>
 */
final class AffectationFactory extends Factory
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
            'company_function_id' => CompanyFunction::factory(),
            'date_affectation' => $this->faker->date(),
            'motif' => $this->faker->sentence(),
        ];
    }
}
