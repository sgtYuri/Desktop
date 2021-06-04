<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//import db facade
use DB, Carbon;
class PersonnelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $data =[
            [
                'first_name' =>'anna',
                'last_name' =>'gomez',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1991-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
               

            ],
            [
                'first_name' =>'anie',
                'last_name' =>'gomez',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1991-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'first_name' =>'brayl',
                'last_name' =>'gomez',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1991-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'first_name' =>'ben',
                'last_name' =>'gomez',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1991-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'first_name' =>'josef',
                'last_name' =>'gomez',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1991-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'first_name' =>'josefine',
                'last_name' =>'lagapay',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1992-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'first_name' =>'jose',
                'last_name' =>'coloma',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1993-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            
            [
                'first_name' =>'josefina',
                'last_name' =>'cervantes',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1994-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'first_name' =>'novie',
                'last_name' =>'lagumbay',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1994-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'first_name' =>'josef',
                'last_name' =>'gomez',
                'middle_name' =>'garcia',
                'age' =>'27',
                'birthday' =>'1991-06-08',
                'rating' =>'50',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],


       ];

        DB::table('personnels')->insert($data);
    }
}