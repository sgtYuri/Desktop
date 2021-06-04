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
        DB::table('artist')->insert([
            'artist_name' => 'Ed Sheeran'
        ]);

        DB::table('artist')->insert([
            'artist_name' => 'Ed Kaluwag'
        ]);

        DB::table('artist')->insert([
            'artist_name' => 'Ed Mundo'
        ]);

    }
}
