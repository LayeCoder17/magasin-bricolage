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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();

            // Nom lisible du rôle (Admin, Vendeur, Client…)
            $table->string('nom')->unique();

            // Code court sans espace, utilisé dans le code (admin, vendeur, client…)
            $table->string('code')->unique();

            // Description optionnelle du rôle
            $table->string('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Annule les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
