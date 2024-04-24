<?php

namespace Database\Seeders;

use App\Models\Hiring;
use Illuminate\Database\Seeder;

class HiringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hiring::factory()->create(3);
    }
}
