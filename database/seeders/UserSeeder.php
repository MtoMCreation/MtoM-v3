<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Julien',
            'email' => 'julien.boullet13@gmail.com',
            'password' => Hash::make('Tchomboul13'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lisa',
            'email' => 'tchomlek.lisa@gmail.com@gmail.com',
            'password' => Hash::make('biboujulien13'),
        ]);
    }
}
