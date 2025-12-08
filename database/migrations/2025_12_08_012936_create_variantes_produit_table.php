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
        Schema::create('variantes_produit', function (Blueprint $table) {
            $table->id();

            // Produit auquel appartient cette variante
            $table->foreignId('produit_id')
                ->constrained('produits')
                ->cascadeOnDelete();

            // Nom de la variante (ex. "220V / Avec coffret")
            $table->string('nom')->nullable();

            // Code/SKU unique pour cette variante
            $table->string('code')->unique();

            // Code-barres physique (si disponible)
            $table->string('code_barres')->nullable();

            // Prix normal
            $table->decimal('prix', 12, 2);

            // Prix en promotion (optionnel)
            $table->decimal('prix_promo', 12, 2)->nullable();

            // Devise (par défaut XOF)
            $table->string('devise', 3)->default('XOF');

            // Attributs concrets de cette variante (JSON)
            // ex. {"tension":"220V","coffret":"avec","couleur":"Rouge"}
            $table->json('attributs')->nullable();

            // Indique si c'est la variante par défaut à afficher
            $table->boolean('par_defaut')->default(false);

            // Variante active ou non
            $table->boolean('actif')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Annule les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variantes_produit');
    }
};
