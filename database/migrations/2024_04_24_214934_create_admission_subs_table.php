<?php

declare(strict_types=1);

use App\Models\Direction;
use App\Models\Division;
use App\Models\Office;
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
        Schema::create('admission_subs', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Person::class)
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
            $table->date('date_admission');
            $table->string('document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_subs');
    }
};
