<?php

use App\Models\Agent;
use App\Models\CompanyFunction;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Agent::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(CompanyFunction::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->date('date_affectation');
            $table->string('motif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
