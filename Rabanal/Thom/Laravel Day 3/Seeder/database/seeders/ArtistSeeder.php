<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Artist')->insert([
            'artist_name' => 'Lou',
        ]);

        DB::table('Artist')->insert([
            'artist_name' => 'Thom',
        ]);

        DB::table('Artist')->insert([
            'artist_name' => 'Vee',
        ]);

        DB::table('Artist')->insert([
            'artist_name' => 'Don'
        ]);
    }
}
