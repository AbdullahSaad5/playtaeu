<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->integer('game_id', true);
            $table->string('game_title');
            $table->string('game_description', 1000);
            $table->float('game_price', 10, 0);
            $table->integer('game_windows_support')->default(1);
            $table->integer('game_mac_support')->default(0);
            $table->integer('game_linux_support')->default(0);
            $table->string('game_thumbnail_image', 500);
            $table->string('game_cover_image', 500);
            $table->string('game_thumbnail_video', 500);
            $table->string('game_detail_image1', 500);
            $table->string('game_detail_image2', 500);
            $table->string('game_detail_image3', 500);
            $table->string('game_detail_image4', 500);
            $table->string('game_detail_video', 500);
            $table->date('game_release_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
}
