<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Hiring;
use App\Models\Service;
use Illuminate\Database\Seeder;

final class HiringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hiring::factory()
            ->for(Service::factory())
            ->create(3);
    }
}
