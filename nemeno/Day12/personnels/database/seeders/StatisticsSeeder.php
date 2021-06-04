<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//import db facade
use DB, Carbon;
class StatisticsSeeder extends Seeder
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
                'personnel_id' =>'01',
                'height' =>'54',
                'weight' =>'58',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
               

            ],
            [
                'personnel_id' =>'02',
                'height' =>'56',
                'weight' =>'60',
                'age' =>'27',
                'bmi' =>'26',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'personnel_id' =>'03',
                'height' =>'53',
                'weight' =>'69',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'personnel_id' =>'04',
                'height' =>'54',
                'weight' =>'50',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'personnel_id' =>'05',
                'height' =>'51',
                'weight' =>'54',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'personnel_id' =>'06',
                'height' =>'51',
                'weight' =>'54',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'personnel_id' =>'07',
                'height' =>'51',
                'weight' =>'54',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'personnel_id' =>'08',
                'height' =>'51',
                'weight' =>'54',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'personnel_id' =>'09',
                'height' =>'51',
                'weight' =>'54',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'personnel_id' =>'010',
                'height' =>'51',
                'weight' =>'54',
                'age' =>'27',
                'bmi' =>'54',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
       ];

        DB::table('statistics')->insert($data);
    }
}