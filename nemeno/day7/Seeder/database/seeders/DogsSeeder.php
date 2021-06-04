<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//import db facade
use DB, Carbon;
class DogsSeeder extends Seeder
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
                'dog_tag_number' =>'MAR001',
                'registration_number' =>001,
                'name' =>'CYBER',
                'kennel' =>'Marball',
                'breeder' =>'Mark',
                'owner' =>'DG',
                'color' =>'black',
                'breed' =>'askal',
                'sire' => 2 ,
                'dam' => 3,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
               

            ],
            [
                'dog_tag_number' =>'MAR002',
                'registration_number' => 002,
                'name' =>'cyber1',
                'kennel' =>'marball2',
                'breeder' =>'lyn',
                'owner' =>'DG',
                'color' =>'black',
                'breed' =>'askal',
                'sire' => 2,
                'dam' => 3,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'dog_tag_number' =>'MAR003',
                'registration_number' => 003,
                'name' =>'CYBER3',
                'kennel' =>'marball3',
                'breeder' =>'ky',
                'owner' =>'DG',
                'color' =>'white',
                'breed' =>'askal',
                'sire' => 2 ,
                'dam' => 3 ,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'dog_tag_number' =>'MAR004',
                'registration_number' => 004,
                'name' =>'CYBER4',
                'kennel' =>'marball4',
                'breeder' =>'ky',
                'owner' =>'DG',
                'color' =>'white',
                'breed' =>'askal',
                'sire' => 2 ,
                'dam' => 3 ,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'dog_tag_number' =>'MAR005',
                'registration_number' => 005,
                'name' =>'CYBER5',
                'kennel' =>'marball5',
                'breeder' =>'ky',
                'owner' =>'DG',
                'color' =>'white',
                'breed' =>'askal',
                'sire' => 2 ,
                'dam' => 3 ,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ]
       ];

        DB::table('dogs')->insert($data);
    }
}