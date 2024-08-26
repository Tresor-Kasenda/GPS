<?php

namespace Database\Seeders;

use App\Models\Affectation;
use App\Models\Agent;
use App\Models\CompanyFunction;
use Illuminate\Database\Seeder;

class AffectationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Affectation::factory()
            ->for(Agent::factory())
            ->for(CompanyFunction::factory())
            ->create();
    }
}
