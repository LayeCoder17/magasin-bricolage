<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1) Créer les rôles de base
        $this->call(RoleSeeder::class);

        // 2) Créer un utilisateur de test (optionnel)
        $user = User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 3) Donner le rôle "admin" à cet utilisateur de test
        $roleAdmin = \App\Models\Role::where('code', 'admin')->first();
        if ($roleAdmin) {
            $user->roles()->attach($roleAdmin->id);
        }
    }
}

