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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 30); // Colonne 'nom' avec une limite de 30 caractères
            $table->string('prenom', 30); // Colonne 'prenom' avec une limite de 30 caractères
            $table->integer('age'); // Colonne 'age'
            $table->boolean('demandeur_emploi'); // Colonne 'demandeur_emploi'
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};