<?php

declare(strict_types=1);

use App\Enums\LevelEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table): void {
            $table->id();
            $table->string('title');
            $table->enum('level', [
                LevelEnum::DIRECTION->value,
                LevelEnum::DIVISION->value,
                LevelEnum::OFFICES->value,
                LevelEnum::CELLULE->value
            ])->default(LevelEnum::DIRECTION->value);
            $table->string('abbreviation')->unique();
            $table->mediumText('designation')->nullable();
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('services')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directions');
    }
};
