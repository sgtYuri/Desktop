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
            'artist' => 'Lou',
        ]);

        DB::table('Artist')->insert([
            'artist' => 'Thom',
        ]);

        DB::table('Artist')->insert([
            'artist' => 'Vee',
        ]);

        DB::table('Artist')->insert([
            'artist' => 'Don'
        ]);
    }
}
