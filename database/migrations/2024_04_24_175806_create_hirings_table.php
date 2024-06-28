<?php

declare(strict_types=1);

use App\Enums\StateCarrier;
use App\Models\Person;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hirings', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Person::class)
                ->constrained()
                ->onDelete('cascade');
            $table->date('date_commitment');
            $table->integer('seniority')->nullable();
            $table->string('matriculate')->unique()->default('000000');
            $table->enum('carriers_state', [
                'active',
                'inactive',
                'passif',
            ])->default(StateCarrier::ACTIVE->value);
            $table->mediumText('document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hirings');
    }
};
