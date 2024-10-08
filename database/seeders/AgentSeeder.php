<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Seeder;

final class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 agents
        Agent::factory(10)->create();
    }
}
