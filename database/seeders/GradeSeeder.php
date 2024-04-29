<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

final class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grade::factory()->create(3);
    }
}
