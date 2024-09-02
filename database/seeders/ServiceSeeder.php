<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\TypeEnum;
use App\Models\Service;
use Illuminate\Database\Seeder;

final class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['title' => 'DFPP', 'type' => TypeEnum::DIRECTION],
            ['title' => 'DRHKAT', 'type' => TypeEnum::DIRECTION],
            ['title' => 'DPGP', 'type' => TypeEnum::DIRECTION],
            ['title' => 'DPCEEM', 'type' => TypeEnum::DIVISION],
            ['title' => 'DPM', 'type' => TypeEnum::DIVISION],
        ];

        collect($services)->each(fn(array $service) => Service::create($service));
    }
}
