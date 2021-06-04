<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('genre_id')->unsigned()->index();
            $table->foreign('genre_id')->references('id')->on('genre');

            $table->bigInteger('artist_id')->unsigned()->index();
            $table->foreign('artist_id')->references('id')->on('artist');

            $table->bigInteger('album_id')->unsigned()->index();
            $table->foreign('album_id')->references('id')->on('album');

            $table->string('song');

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
        Schema::dropIfExists('song');
    }
}
