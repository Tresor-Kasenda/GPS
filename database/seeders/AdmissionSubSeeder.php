<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\AdmissionSub;
use Illuminate\Database\Seeder;

final class AdmissionSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdmissionSub::factory()->create(3);
    }
}
