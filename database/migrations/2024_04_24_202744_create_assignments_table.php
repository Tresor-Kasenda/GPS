<?php

declare(strict_types=1);

use App\Enums\ReasonAssignmentEnum;
use App\Models\Grade;
use App\Models\Hiring;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Hiring::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->foreignIdFor(Grade::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->date('date_assignment');
            $table->enum('reason', [
                ReasonAssignmentEnum::INITIAL->value,
                ReasonAssignmentEnum::EVOLUTION->value
            ])
                ->default(ReasonAssignmentEnum::INITIAL->value);
            $table->string('document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
