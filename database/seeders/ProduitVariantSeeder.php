<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProduitVariant;

class ProduitVariantSeeder extends Seeder
{
    public function run(): void
    {
        $variants = [
            // Toilette
            ['produit_id' => 1, 'code' => 'TOILETTE-BLANC-STD', 'description' => 'Standard blanc', 'prix' => 45000],
            ['produit_id' => 1, 'code' => 'TOILETTE-BLANC-LUXE', 'description' => 'Luxe blanc avec abattant', 'prix' => 65000],

            // Lavabo
            ['produit_id' => 2, 'code' => 'LAVABO-BLANC-45', 'description' => 'Lavabo 45cm blanc', 'prix' => 28000],
            ['produit_id' => 2, 'code' => 'LAVABO-BLANC-60', 'description' => 'Lavabo 60cm blanc', 'prix' => 38000],

            // Carreaux
            ['produit_id' => 3, 'code' => 'CARREAU-BRILLANT-30X30', 'description' => 'Carreaux brillants 30x30', 'prix' => 8500],
            ['produit_id' => 3, 'code' => 'CARREAU-MAT-30X30', 'description' => 'Carreaux mat 30x30', 'prix' => 7500],

            // Peinture
            ['produit_id' => 4, 'code' => 'PEINTURE-BLANC-10L', 'description' => 'Blanc pur 10L', 'prix' => 35000],
            ['produit_id' => 4, 'code' => 'PEINTURE-CREME-10L', 'description' => 'Crème 10L', 'prix' => 35000],

            // Porte
            ['produit_id' => 5, 'code' => 'PORTE-SAPELLI-70X210', 'description' => 'Porte 70x210cm', 'prix' => 120000],
            ['produit_id' => 5, 'code' => 'PORTE-SAPELLI-80X210', 'description' => 'Porte 80x210cm', 'prix' => 135000],

            // Fil électrique
            ['produit_id' => 6, 'code' => 'FIL-CUIVRE-2.5-100M', 'description' => 'Câble 2.5mm² 100m', 'prix' => 42000],
            ['produit_id' => 6, 'code' => 'FIL-CUIVRE-4-100M', 'description' => 'Câble 4mm² 100m', 'prix' => 65000],

            // Vis
            ['produit_id' => 7, 'code' => 'VIS-M8-50MM-100PCS', 'description' => 'M8 50mm 100 pcs', 'prix' => 12000],
            ['produit_id' => 7, 'code' => 'VIS-M8-75MM-100PCS', 'description' => 'M8 75mm 100 pcs', 'prix' => 15000],

            // Perceuse
            ['produit_id' => 8, 'code' => 'PERCEUSE-500W-SANS-ACC', 'description' => 'Sans accessoires', 'prix' => 85000],
            ['produit_id' => 8, 'code' => 'PERCEUSE-500W-AVEC-ACC', 'description' => 'Avec coffret accessoires', 'prix' => 110000],

            // Tuyau PVC
            ['produit_id' => 9, 'code' => 'TUYAU-PVC-20-50M', 'description' => 'Tuyau 20mm 50m', 'prix' => 28000],
            ['produit_id' => 9, 'code' => 'TUYAU-PVC-20-100M', 'description' => 'Tuyau 20mm 100m', 'prix' => 50000],

            // Lampe LED
            ['produit_id' => 10, 'code' => 'LAMPE-LED-9W-BLANC', 'description' => 'LED 9W blanc froid', 'prix' => 3500],
            ['produit_id' => 10, 'code' => 'LAMPE-LED-9W-CHAUD', 'description' => 'LED 9W blanc chaud', 'prix' => 3500],
        ];

        foreach ($variants as $variant) {
            ProduitVariant::create($variant);
        }
    }
}

