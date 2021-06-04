<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class IsPersonnel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('is_personnel')->insert([
            'firstname'=> 'Jayson',
            'lastname' => 'Bourne',
            'age' => '32',
            'gender' => 'Male',
            'birthday' => '1988/04/02'
        ]);

        DB::table('is_personnel')->insert([
            'firstname'=> 'Juanito',
            'lastname' => 'Buwang',
            'age' => '22',
            'gender' => 'Male',
            'birthday' => '1994/05/02'
        ]);

        DB::table('is_personnel')->insert([
            'firstname'=> 'Juangkig',
            'lastname' => 'luwang',
            'age' => '32',
            'gender' => 'feMale',
            'birthday' => '1998/12/02'
        ]);

        DB::table('is_personnel')->insert([
            'firstname'=> 'Piling',
            'lastname' => 'Mandirigma',
            'age' => '75',
            'gender' => 'Male',
            'birthday' => '1966/10/02'
        ]);

        DB::table('is_personnel')->insert([
            'firstname'=> 'Juan',
            'lastname' => 'DelaCruz',
            'age' => '17',
            'gender' => 'Male',
            'birthday' => '1998/09/02'
        ]);

        DB::table('is_personnel')->insert([
            'firstname'=> 'Maria',
            'lastname' => 'labo',
            'age' => '70',
            'gender' => 'Male',
            'birthday' => '1968/11/02'
        ]);

        DB::table('is_personnel')->insert([
            'firstname'=> 'Biogen',
            'lastname' => 'Alcoho',
            'age' => '60',
            'gender' => 'Female',
            'birthday' => '1968/08/02'
        ]);

        DB::table('is_personnel')->insert([
            'firstname'=> 'Red',
            'lastname' => 'Ford',
            'age' => '90',
            'gender' => 'Male',
            'birthday' => '1938/08/02'
        ]);

        DB::table('is_personnel')->insert([
            'firstname'=> 'Red',
            'lastname' => 'Ford',
            'age' => '90',
            'gender' => 'Male',
            'birthday' => '1938/08/02'
        ]);


    }
}
