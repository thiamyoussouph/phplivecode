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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('Valeur');
            $table->BigInteger('apprenant_id')->unsigned();
            $table->foreign('apprenant_id')->references('id')->on('apprenants');
            $table->BigInteger('matiere_id')->unsigned();
            $table->foreign('matiere_id')->references('id')->on('matiers');
            $table->BigInteger('typedevoior_id')->unsigned();
            $table->foreign('typedevoior_id')->references('id')->on('type_devoirs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
