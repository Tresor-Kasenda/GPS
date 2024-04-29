<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

final class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::factory()->create(2);
    }
}
