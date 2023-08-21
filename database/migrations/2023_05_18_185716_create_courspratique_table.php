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
        Schema::create('courspratique', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seance_id')->nullable();
            $table->foreign('seance_id')->references('id')->on('seances');
            $table->unsignedBigInteger('moniteur_id')->nullable();
            $table->foreign('moniteur_id')->references('id')->on('moniteurs');
            $table->date('dateCour')->nullable();
            $table->integer('heureDebut')->nullable();
            $table->integer('heureFin')->nullable();
            $table->unsignedBigInteger('vehicule_id')->nullable();
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->unsignedBigInteger('apprenant_id')->nullable();
            $table->foreign('apprenant_id')->references('id')->on('apprenants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courspratique');
    }
};
