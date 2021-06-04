<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([
            'genre_name' => 'Rock',
            'category' => 'Rock'
        ]);

        DB::table('genre')->insert([
            'genre_name' => 'Acoustic',
            'category' => 'Acoustic'
        ]);

        DB::table('genre')->insert([
            'genre_name' => 'Pop',
            'category' => 'Pop'
        ]);
    }
}
