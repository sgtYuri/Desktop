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
            'album' => 'First',
        ]);

        DB::table('album')->insert([
            'album' => 'Second',
        ]);

        DB::table('album')->insert([
            'album' => 'Third',
        ]);

        DB::table('album')->insert([
            'album' => 'Fourth'
        ]);
    }
}
