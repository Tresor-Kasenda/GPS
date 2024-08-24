<?php

declare(strict_types=1);

use App\Models\Service;
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
            $table->foreignIdFor(App\Models\Person::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->foreignIdFor(Service::class)
                ->constrained()
                ->onUpdate('cascade');
            $table->date('date_affectation');
            $table->string('position')->nullable();
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
