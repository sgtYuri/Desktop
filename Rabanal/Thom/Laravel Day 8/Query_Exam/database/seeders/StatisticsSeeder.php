<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

        DB::table('statistics')->insert([ 
            'weight' => '75', 
            'personnel_id' => '1', 
            'height' => '5.0',  
            'bmi' => 'normal'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '76', 
            'personnel_id' => '2', 
            'height' => '5.1',  
            'bmi' => 'above normal'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '77', 
            'personnel_id' => '3', 
            'height' => '5.2',  
            'bmi' => 'over weight'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '78', 
            'personnel_id' => '4', 
            'height' => '5.3',  
            'bmi' => 'obese'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '79', 
            'personnel_id' => '5', 
            'height' => '5.4',  
            'bmi' => 'obese'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '80', 
            'personnel_id' => '6', 
            'height' => '5.5',  
            'bmi' => '75'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '81', 
            'personnel_id' => '7', 
            'height' => '5.6',  
            'bmi' => '76'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '82', 
            'personnel_id' => '8', 
            'height' => '5.7',  
            'bmi' => '77'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '83', 
            'personnel_id' => '9', 
            'height' => '5.8',  
            'bmi' => '78'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '84', 
            'personnel_id' => '10', 
            'height' => '5.9',  
            'bmi' => '79'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '85', 
            'personnel_id' => '11', 
            'height' => '6.0',  
            'bmi' => '80'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '86', 
            'personnel_id' => '12', 
            'height' => '6.1',  
            'bmi' => '81'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '87', 
            'personnel_id' => '13', 
            'height' => '6.2',  
            'bmi' => '82'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '87', 
            'personnel_id' => '14', 
            'height' => '6.3',  
            'bmi' => '83'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '88', 
            'personnel_id' => '15', 
            'height' => '6.4',  
            'bmi' => '84'
        ]);
        DB::table('statistics')->insert([ 
            'weight' => '89', 
            'personnel_id' => '16', 
            'height' => '6.5',  
            'bmi' => '85'
        ]);
       
 
    
    }
}
