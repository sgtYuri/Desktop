<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodostatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todostatus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('todolist_id')->unsigned()->index();
            $table->foreign('todolist_id')->references('id')->on('todolist');
            $table->longtext('task');
            $table->longtext('priority');
            $table->longtext('assigned');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todostatus');
    }
}
