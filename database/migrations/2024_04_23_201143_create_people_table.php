<?php

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();

            $table->enum('gender', [
                'Homme',
                'Femme',
                'Neutre'
            ])->default(Gender::OTHER->value);

            $table->enum('marital_status', [
                'Marié(e)',
                'Célibataire',
                'Divorcé(e)',
                'Veuve/Veuf',
                'Neutre'
            ])->default(MaritalStatus::NEUTRAL->value);

            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('identity_piece')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
