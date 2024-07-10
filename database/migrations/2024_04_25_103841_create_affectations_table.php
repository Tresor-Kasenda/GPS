<?php

declare(strict_types=1);

use App\Models\Direction;
use App\Models\Division;
use App\Models\Hiring;
use App\Models\Office;
use App\Models\Position;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('affectations', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Hiring::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->foreignIdFor(Direction::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->foreignIdFor(Division::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->foreignIdFor(Office::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->foreignIdFor(Position::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->date('date_affectation');
            $table->string('position')->nullable(); // fonction actuelle (a saisir)
            $table->string('document')->nullable();
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
