<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stock;
use App\Models\ProduitVariant;
use App\Models\Boutique;

class StockSeeder extends Seeder
{
    public function run(): void
    {
        $variants = ProduitVariant::all();
        $boutiques = Boutique::all();

        foreach ($variants as $variant) {
            foreach ($boutiques as $boutique) {
                Stock::create([
                    'variante_produit_id' => $variant->id,
                    'boutique_id' => $boutique->id,
                    'quantite' => rand(20, 100),
                    'quantite_reservee' => 0,
                    'stock_min' => 5,
                    'stock_max' => 200,
                ]);
            }
        }
    }
}

