<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        $produits = [
            ['nom' => 'Toilette Céramique Blanche', 'code' => 'toilette-ceramique-blanche', 'description' => 'Toilette céramique standard haute qualité', 'categorie_id' => 1, 'actif' => true],
            ['nom' => 'Lavabo Porcelaine', 'code' => 'lavabo-porcelaine', 'description' => 'Lavabo blanc porcelaine pour salle de bain', 'categorie_id' => 1, 'actif' => true],
            ['nom' => 'Carreaux Porcelaine 30x30', 'code' => 'carreaux-porcelaine-30x30', 'description' => 'Carreaux porcelaine brillants pour murs et sols', 'categorie_id' => 2, 'actif' => true],
            ['nom' => 'Peinture Intérieur 10L', 'code' => 'peinture-interieur-10l', 'description' => 'Peinture acrylique intérieur haute qualité', 'categorie_id' => 3, 'actif' => true],
            ['nom' => 'Porte Bois Sapelli', 'code' => 'porte-bois-sapelli', 'description' => 'Porte intérieure bois sapelli massif', 'categorie_id' => 4, 'actif' => true],
            ['nom' => 'Fil Électrique 2.5mm² 100m', 'code' => 'fil-electrique-2.5mm-100m', 'description' => 'Câble électrique cuivre 2.5mm² isolé', 'categorie_id' => 5, 'actif' => true],
            ['nom' => 'Vis Acier Zingué M8', 'code' => 'vis-acier-zingue-m8', 'description' => 'Vis acier zingué robuste pour construction', 'categorie_id' => 6, 'actif' => true],
            ['nom' => 'Perceuse Filaire 500W', 'code' => 'perceuse-filaire-500w', 'description' => 'Perceuse filaire professionnelle puissante', 'categorie_id' => 8, 'actif' => true],
            ['nom' => 'Tuyau PVC 20mm', 'code' => 'tuyau-pvc-20mm', 'description' => 'Tuyau PVC blanc pour plomberie', 'categorie_id' => 9, 'actif' => true],
            ['nom' => 'Lampe LED 9W', 'code' => 'lampe-led-9w', 'description' => 'Ampoule LED économique blanc froid', 'categorie_id' => 10, 'actif' => true],
        ];

        foreach ($produits as $produit) {
            Produit::create($produit);
        }
    }
}


