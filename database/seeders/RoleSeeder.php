<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate(
            ['code' => 'client'],
            ['nom' => 'Client', 'description' => 'Client du site']
        );

        Role::firstOrCreate(
            ['code' => 'vendeur'],
            ['nom' => 'Vendeur', 'description' => 'Employé boutique']
        );

        Role::firstOrCreate(
            ['code' => 'admin'],
            ['nom' => 'Admin', 'description' => 'Administrateur du système']
        );
    }
}

