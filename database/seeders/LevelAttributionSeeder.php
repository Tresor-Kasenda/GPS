<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Grade;
use App\Models\LevelAttribution;
use Illuminate\Database\Seeder;

class LevelAttributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LevelAttribution::factory()
            ->for(Agent::factory()->create())
            ->for(Grade::factory()->create())
            ->create();
    }
}
