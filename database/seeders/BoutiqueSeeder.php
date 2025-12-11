<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Boutique;

class BoutiqueSeeder extends Seeder
{
    public function run(): void
    {
        $boutiques = [
            [
                'nom' => 'Dakar Centre',
                'code' => 'DKR1',
                'adresse_ligne1' => 'Rue Blaise Diagne, Plateau',
                'adresse_ligne2' => 'Dakar, Sénégal',
                'ville' => 'Dakar',
                'pays' => 'Sénégal',
                'telephone' => '+221 33 821 12 34',
                'email' => 'dakar-centre@magasin-bricolage.sn',
                'actif' => true,
            ],
            [
                'nom' => 'Yoff',
                'code' => 'YOF1',
                'adresse_ligne1' => 'Avenue Habib Bourguiba',
                'adresse_ligne2' => 'Yoff, Dakar',
                'ville' => 'Dakar',
                'pays' => 'Sénégal',
                'telephone' => '+221 33 862 45 67',
                'email' => 'yoff@magasin-bricolage.sn',
                'actif' => true,
            ],
        ];

        foreach ($boutiques as $boutique) {
            Boutique::create($boutique);
        }
    }
}
