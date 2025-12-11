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
        // 1) Rôles + utilisateur de test
        $this->call(RoleSeeder::class);

        $user = User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        $roleAdmin = \App\Models\Role::where('code', 'admin')->first();
        if ($roleAdmin) {
            $user->roles()->attach($roleAdmin->id);
        }

        // 2) Données métier quincaillerie / magasin-bricolage
        $this->call([
            CategorieSeeder::class,
            BoutiqueSeeder::class,
            ProduitSeeder::class,
            ProduitVariantSeeder::class,
            StockSeeder::class,
        ]);
    }
}



