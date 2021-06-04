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
            'genre_name' => 'Progressive',
        ]);

        DB::table('Genre')->insert([
            'genre_name' => 'Metal Core',
        ]);

        DB::table('Genre')->insert([
            'genre_name' => 'Neo Soul',
        ]);

        DB::table('Genre')->insert([
            'genre_name' => 'Punk Rock'
        ]);
    }
}
