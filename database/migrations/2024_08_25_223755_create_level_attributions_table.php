<?php

declare(strict_types=1);

use App\Models\Agent;
use App\Models\Grade;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('level_attributions', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Agent::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Grade::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->date('date_allocated');
            $table->string('motif_attribution')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_attributions');
    }
};
