<?php

declare(strict_types=1);

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use App\Enums\UserStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();
            $table->integer('age')->nullable();

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

            $table->enum('status', [
                UserStatus::PROGRESSING->value,
                UserStatus::PENDING->value,
                UserStatus::DECEASED->value,
                UserStatus::RETIRED->value,
                UserStatus::RESIGNATION->value,
                UserStatus::REVOKED->value
            ])->default(UserStatus::PENDING->value);

            $table->date('birthdate')->nullable();
            $table->date('birthplace')->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
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
