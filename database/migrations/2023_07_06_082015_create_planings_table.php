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
        Schema::create('planings', function (Blueprint $table) {
            $table->id();
            $table->string('jour')->nullable();
            $table->string('cours')->nullable();
            $table->string('heureDebut')->nullable();
            $table->string('heureFin')->nullable();
            $table->unsignedBigInteger('moniteur_id')->nullable();
            $table->foreign('moniteur_id')->references('id')->on('moniteurs');
            $table->string('etat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planings');
    }
};
