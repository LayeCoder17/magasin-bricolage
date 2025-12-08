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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();

            // Catégorie à laquelle le produit appartient
            $table->foreignId('categorie_id')
                ->nullable()
                ->constrained('categories')
                ->nullOnDelete();

            // Nom du produit (ex. "Perceuse Bosch GSB 13 RE")
            $table->string('nom');

            // Code/slug unique pour l’URL (ex. "perceuse-bosch-gsb-13-re")
            $table->string('code')->unique();

            // Code racine commun aux variantes (ex. "GSB13RE")
            $table->string('code_racine')->nullable();

            // Description détaillée du produit
            $table->text('description')->nullable();

            // Schéma des attributs possibles (taille, couleur…) pour ce produit
            $table->json('schema_attributs')->nullable();

            // Produit actif ou retiré du catalogue
            $table->boolean('actif')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Annule les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};

