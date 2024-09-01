<?php

use App\Enums\StateCarrier;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->enum('status', [
                StateCarrier::ACTIVE->value,
                StateCarrier::INACTIVE->value,
                StateCarrier::PENDING->value,
                StateCarrier::PROGRESSING->value,
                StateCarrier::RESIGNATION->value,
            ])->default(StateCarrier::ACTIVE->value);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
