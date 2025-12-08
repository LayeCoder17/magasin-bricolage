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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            // Catégorie parente (pour les sous-catégories)
            $table->foreignId('categorie_parente_id')
                ->nullable()
                ->constrained('categories')
                ->nullOnDelete();

            // Nom de la catégorie (ex. Outillage, Plomberie)
            $table->string('nom');

            // Code/slug unique (ex. outillage, plomberie)
            $table->string('code')->unique();

            // Description optionnelle
            $table->text('description')->nullable();

            // Catégorie active ou masquée
            $table->boolean('active')->default(true);

            // Position pour l'ordre d'affichage dans les menus
            $table->unsignedInteger('position')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Annule les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
