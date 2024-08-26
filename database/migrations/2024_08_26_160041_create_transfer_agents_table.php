<?php

use App\Models\Agent;
use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transfer_agents', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Agent::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Service::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->date('transfer_date');
            $table->string('motif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_agents');
    }
};
