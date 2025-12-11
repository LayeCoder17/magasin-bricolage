<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['nom' => 'Sanitaires & Plomberie', 'code' => 'sanitaires-plomberie', 'description' => 'Toilettes, lavabos, baignoires, robinets, tuyaux', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Carreaux & Revêtements', 'code' => 'carreaux-revetements', 'description' => 'Carreaux, faïence, mosaïque, revêtements muraux', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Peintures & Finitions', 'code' => 'peintures-finitions', 'description' => 'Peintures, vernis, enduits, apprêts', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Menuiserie & Portes', 'code' => 'menuiserie-portes', 'description' => 'Portes, fenêtres, cadres, bois de finition', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Électricité & Câbles', 'code' => 'electricite-cables', 'description' => 'Fils électriques, disjoncteurs, prises, ampoules', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Quincaillerie', 'code' => 'quincaillerie', 'description' => 'Vis, clous, charnières, serrures, poignées', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Outils Manuels', 'code' => 'outils-manuels', 'description' => 'Marteaux, tournevis, clés, scies, niveaux', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Outils Électriques', 'code' => 'outils-electriques', 'description' => 'Perceuses, meuleuses, scies électriques', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Tuyauterie', 'code' => 'tuyauterie', 'description' => 'Tuyaux PVC, cuivre, raccords, robinetterie', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Éclairage', 'code' => 'eclairage', 'description' => 'Lampes, lustres, appliques, spots', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Accessoires & Mastics', 'code' => 'accessoires-mastics', 'description' => 'Moulures, plinthes, joints, mastics, adhésifs', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Équipement de Protection', 'code' => 'equipement-protection', 'description' => 'Casques, gants, masques, gilets de sécurité', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Peinture & Décoration', 'code' => 'peinture-decoration', 'description' => 'Peinture murale, papiers peints, décorations', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Miroirs & Glaces', 'code' => 'miroirs-glaces', 'description' => 'Miroirs, glaces de salle de bain, verres', 'categorie_parente_id' => null, 'active' => true],
            ['nom' => 'Divers', 'code' => 'divers', 'description' => 'Autres articles de bricolage', 'categorie_parente_id' => null, 'active' => true],
        ];

        foreach ($categories as $cat) {
            Categorie::create($cat);
        }
    }
}
