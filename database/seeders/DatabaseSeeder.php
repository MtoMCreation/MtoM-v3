<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Media;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory(4)->create();
        $this->call(EtatSeeder::class);
        $this->call(CategorieSeeder::class);
        Article::factory(20)->create();
        Projet::factory(45)->create();
//        Media::factory(3)->create();
        $this->call([
            UserSeeder::class
        ]);
    }
}
