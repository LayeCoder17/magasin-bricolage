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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();

            // Boutique concernée
            $table->foreignId('boutique_id')
                ->constrained('boutiques')
                ->cascadeOnDelete();

            // Variante de produit concernée
            $table->foreignId('variante_produit_id')
                ->constrained('variantes_produit')
                ->cascadeOnDelete();

            // Quantité réellement en stock
            $table->integer('quantite')->default(0);

            // Quantité réservée (paniers/commandes non finalisés)
            $table->integer('quantite_reservee')->default(0);

            // Seuil d’alerte (en dessous → réassort)
            $table->integer('stock_min')->default(0);

            // Limite haute facultative
            $table->integer('stock_max')->nullable();

            $table->timestamps();

            // Une seule ligne de stock par couple (boutique, variante)
            $table->unique(['boutique_id', 'variante_produit_id']);
        });
    }

    /**
     * Annule les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
