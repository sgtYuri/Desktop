<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album')->insert([
            'album_name' => 'First',
        ]);

        DB::table('album')->insert([
            'album_name' => 'Second',
        ]);

        DB::table('album')->insert([
            'album_name' => 'Third',
        ]);

        DB::table('album')->insert([
            'album_name' => 'Fourth'
        ]);
    }
}
