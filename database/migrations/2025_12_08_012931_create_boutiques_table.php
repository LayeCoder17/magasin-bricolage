<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exécute les migrations.
     */
    public function up(): void
    {
        Schema::create('boutiques', function (Blueprint $table) {
            $table->id();

            // Nom de la boutique (ex. "Quincaillerie Dakar Centre")
            $table->string('nom');

            // Code interne unique (ex. "DKR1", "YOFF1")
            $table->string('code')->unique();

            // Coordonnées
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();

            // Adresse détaillée
            $table->string('adresse_ligne1')->nullable();
            $table->string('adresse_ligne2')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();

            // Active ou non (pour désactiver une boutique sans la supprimer)
            $table->boolean('actif')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Annule les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boutiques');
    }
};
