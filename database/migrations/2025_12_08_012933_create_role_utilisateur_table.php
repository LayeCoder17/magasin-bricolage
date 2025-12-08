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
        Schema::create('role_utilisateur', function (Blueprint $table) {
            $table->id();

            // Utilisateur lié (table users fournie par Laravel)
            $table->foreignId('utilisateur_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Rôle lié (table roles)
            $table->foreignId('role_id')
                ->constrained('roles')
                ->cascadeOnDelete();

            $table->timestamps();

            // Empêche de dupliquer deux fois le même rôle pour un utilisateur
            $table->unique(['utilisateur_id', 'role_id']);
        });
    }

    /**
     * Annule les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_utilisateur');
    }
};
