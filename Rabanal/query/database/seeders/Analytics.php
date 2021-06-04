<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class analytics extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('analytics')->insert([
            'gender' => 'Male',
            'age' => '15',
            'city' => 'Taguig'
        ]);

        DB::table('analytics')->insert([
            'gender' => 'Female',
            'age' => '16',
            'city' => 'Kidapawan'
        ]);
        
        DB::table('analytics')->insert([
            'gender' => 'Male',
            'age' => '17',
            'city' => 'Makati'
        ]);
        
        DB::table('analytics')->insert([
            'gender' => 'Male',
            'age' => '18',
            'city' => 'Cotabato'
        ]);
        
        DB::table('analytics')->insert([
            'gender' => 'Male',
            'age' => '19',
            'city' => 'Pagadian'
        ]);
        
        DB::table('analytics')->insert([
            'gender' => 'Male',
            'age' => '20',
            'city' => 'Gensan'
        ]);

        DB::table('analytics')->insert([
            'gender' => 'Male',
            'age' => '21',
            'city' => 'Zamboanga'
        ]);

    }
}

// public function run()
// {
//     $gender = ['M','F'];
//     $gender = ['Manila','Taguig','Makati','Cavite','Pasay',];

//     for($i=0; $i <= 20; $i++){
//         Analytic::create([
//             'age' => rand(1,9),
//             'city' => $city[array_rand($city)],
//             'gender' => $gender[array_rand($gender)]
//         ]);
//     }
// }