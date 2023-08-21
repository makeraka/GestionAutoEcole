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
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apprenant_id')->nullable();
            $table->foreign('apprenant_id')->references('id')->on('apprenants');
            $table->unsignedBigInteger('moniteur_id')->nullable();
            $table->foreign('moniteur_id')->references('id')->on('moniteurs');
            $table->date('date')->nullable();
            $table->integer('heureDebut')->nullable();
            $table->integer('heureFin')->nullable();
            $table->string('typeExamen')->nullable();
            $table->unsignedBigInteger('vehicule_id')->nullable();
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->string('etat')->nullable();
            $table->string('resultat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examens');
    }
};
