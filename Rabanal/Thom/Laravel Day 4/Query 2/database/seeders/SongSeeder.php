<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Song')->insert([
            'song' => 'Latelarus',
            'genre_id' => 2,
            'artist_id' => 1,
            'album_id' => 1
        ]);

        DB::table('Song')->insert([
            'song' => 'AnemusAnema',
            'genre_id' => 3,
            'artist_id' => 2,
            'album_id' => 2
        ]);

        DB::table('Song')->insert([
            'song' => 'Seraphim',
            'genre_id' => 1,
            'artist_id' => 3,
            'album_id' => 3
        ]);

        DB::table('Song')->insert([
            'song' => 'Principalities',
            'genre_id' => 4,
            'artist_id' => 4,
            'album_id' => 4
        ]);
    }
}
