<?php

use App\Enums\Affinity;
use App\Enums\Gender;
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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Person::class)
                ->constrained()
                ->onUpdate('cascade');

            $table->enum('affinity', [
                Affinity::CHILD->value,
                Affinity::PARTNER->value
            ])->default(Affinity::PARTNER->value);

            $table->string('name');
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();

            $table->enum('gender', [
                'Homme',
                'Femme',
                'Neutre'
            ])->default(Gender::OTHER->value);

            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
