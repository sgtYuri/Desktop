<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('authors_id')->index();
            $table->unsignedBigInteger('publishers_id')->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('subcategories_id')->index();
          

            $table->timestamps();
        
            $table->foreign('authors_id')->references('id')->on('authors');
            $table->foreign('publishers_id')->references('id')->on('publishers');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('subcategories_id')->references('id')->on('subcategories');
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
