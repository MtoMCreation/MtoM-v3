<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['nom' => 'Site web vitrine'],
            ['nom' => 'Site web marchand'],
            ['nom' => 'Site web one page'],
            ['nom' => 'Marketing web'],
            ['nom' => 'Optimisation SEO'],
            ['nom' => 'Gestion des réseaux sociaux'],
            ['nom' => 'Campagne publicitaire'],
            ['nom' => 'Graphisme'],
            ['nom' => 'Intégration de contenu'],
            ['nom' => 'Site multilingue'],
            ['nom' => 'Formation back office'],
            ['nom' => 'Audit et Recommandations'],
        ]);
    }
}
