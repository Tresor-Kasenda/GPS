<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transfer_agents', function (Blueprint $table) {
            $table->foreignId('source_service_id')
                ->nullable()
                ->references('id')
                ->on('services')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transfer_agents', function (Blueprint $table) {
            $table->dropForeign('source_service_id');
        });
    }
};
