<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personnel_id')->index();
            $table->string('height');
            $table->string('weight');
            $table->string('bmi');
            $table->foreign('personnel_id')->references('id')->on('personnel');  
    

        });

        // Schema::enableForeignKeyConstraint();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
