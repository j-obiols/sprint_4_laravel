<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equips', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('entrenador');
            $table->string('email');
            $table->string('capita');
            $table->string('imatge')->nullable();
            $table->integer('punts')->nullable();
            $table->integer('pJugats')->nullable();
            $table->integer('pGuanyats')->nullable();
            $table->integer('pEmpatats')->nullable();
            $table->integer('pPerduts')->nullable();
            $table->integer('gFavor')->nullable();
            $table->integer('gContra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equips');
    }
};
