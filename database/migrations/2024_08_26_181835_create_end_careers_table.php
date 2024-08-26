<?php

declare(strict_types=1);

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
        Schema::create('end_careers', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Agent::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->date('end_date'); // date fin
            $table->string('end_reason'); // type fin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('end_careers');
    }
};
