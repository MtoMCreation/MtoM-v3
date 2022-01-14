<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etats')->insert([
            'nom' => 'brouillon',
        ]);
        DB::table('etats')->insert([
            'nom' => 'publie',
        ]);
    }
}
