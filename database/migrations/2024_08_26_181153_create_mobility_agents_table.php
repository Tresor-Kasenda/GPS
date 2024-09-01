<?php

declare(strict_types=1);

use App\Enums\MobilityEnum;
use App\Models\Agent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobility_agents', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Agent::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->date('mobility_date');
            $table->enum('mobility_type', [
                MobilityEnum::INACTIVE->value,
                MobilityEnum::PENDING->value,
                MobilityEnum::PROGRESSING->value,
                MobilityEnum::RESIGNATION->value,
            ])->default(MobilityEnum::INACTIVE->value);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobility_agents');
    }
};
