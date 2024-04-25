<?php

namespace Database\Seeders;

use App\Models\AdmissionSub;
use Illuminate\Database\Seeder;

class AdmissionSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdmissionSub::factory()->create(3);
    }
}
