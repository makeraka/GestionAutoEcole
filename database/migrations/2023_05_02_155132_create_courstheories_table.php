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
        Schema::create('courstheories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('theorie_id')->nullable();
            $table->foreign('theorie_id')->references('id')->on('theories');
            $table->unsignedBigInteger('moniteur_id')->nullable();
            $table->foreign('moniteur_id')->references('id')->on('moniteurs');
            $table->date('dateCour')->nullable();
            $table->integer('heureDebut')->nullable();
            $table->integer('heureFin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courstheories');
    }
};
