<?php

use App\Models\Hiring;
use App\Models\Person;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Person::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Hiring::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('person_number', 10)->unique();
            $table->integer('seniority')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};