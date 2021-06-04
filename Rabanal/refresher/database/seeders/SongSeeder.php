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
        DB::table('song')->insert([
            'title' => 'Binagol',
            'category' => 'Rock'
        ]);
    }
}
