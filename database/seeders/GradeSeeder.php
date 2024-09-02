<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GradeEnum;
use App\Enums\GradeLevelEnum;
use App\Models\Grade;
use Illuminate\Database\Seeder;

final class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = [
            ['level' => GradeLevelEnum::SENIOR_CIVIL->value, 'designation' => GradeEnum::SG->value],
            ['level' => GradeLevelEnum::SENIOR_CIVIL->value, 'designation' => GradeEnum::DIR->value],
            ['level' => GradeLevelEnum::EXTRA_CIVIL->value, 'designation' => GradeEnum::CD->value],
            ['level' => GradeLevelEnum::EXTRA_CIVIL->value, 'designation' => GradeEnum::CB->value],
            ['level' => GradeLevelEnum::COLLABORATION->value, 'designation' => GradeEnum::ATA1->value],
            ['level' => GradeLevelEnum::COLLABORATION->value, 'designation' => GradeEnum::ATA2->value],
            ['level' => GradeLevelEnum::EXECUTION->value, 'designation' => GradeEnum::AGA1->value],
            ['level' => GradeLevelEnum::EXECUTION->value, 'designation' => GradeEnum::AGA2->value],
            ['level' => GradeLevelEnum::EXECUTION->value, 'designation' => GradeEnum::H->value],
            ['level' => GradeLevelEnum::NEWS->value, 'designation' => GradeEnum::NU->value],
        ];

        collect($grades)->each(fn(array $grade) => Grade::create($grade));
    }
}
