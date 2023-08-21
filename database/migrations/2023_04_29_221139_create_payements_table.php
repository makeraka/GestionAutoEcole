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
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->string('categorie')->nullable();
            $table->string('date')->nullable();
            $table->string('prix')->nullable();
            $table->string('montantpaye')->nullable();
            $table->string('montantrestant')->nullable();
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
        Schema::dropIfExists('payements');
    }
};
