<?php

declare(strict_types=1);

use App\Enums\TypeEnum;
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
            $table->enum('type', [
                TypeEnum::DIRECTION->value,
                TypeEnum::DIVISION->value,
                TypeEnum::OFFICES->value,
                TypeEnum::CELLULE->value
            ])->default(TypeEnum::DIRECTION->value);
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
