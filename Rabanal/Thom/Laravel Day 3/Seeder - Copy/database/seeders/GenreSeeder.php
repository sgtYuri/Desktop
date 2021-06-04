<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Genre')->insert([
            'genre' => 'Progressive',
        ]);

        DB::table('Genre')->insert([
            'genre' => 'Metal Core',
        ]);

        DB::table('Genre')->insert([
            'genre' => 'Neo Soul',
        ]);

        DB::table('Genre')->insert([
            'genre' => 'Punk Rock'
        ]);
    }
}
