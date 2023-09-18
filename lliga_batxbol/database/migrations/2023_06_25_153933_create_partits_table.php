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
        Schema::create('partits', function (Blueprint $table) {
            $table->id();
            $table->date('dataPartit');
            $table->time('horaPartit');
            $table->string('camp');
            $table->unsignedBigInteger('equip_local_id');
            $table->foreign('equip_local_id')->references('id')->on('equips')->onUpdate('cascade');
            $table->unsignedBigInteger('equip_visitant_id');
            $table->foreign('equip_visitant_id')->references('id')->on('equips')->onUpdate('cascade');
            $table->text('resumPartit')->nullable();
            $table->integer('golsEquipLocal')->nullable();
            $table->integer('golsEquipLocalOld')->nullable();
            $table->integer('golsEquipVisitant')->nullable();
            $table->integer('golsEquipVisitantOld')->nullable();
            $table->string('pPendent')->default('Pendent');
            $table->string('resultat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partits');
    }
};
