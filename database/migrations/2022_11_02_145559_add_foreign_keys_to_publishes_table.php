<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPublishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publishes', function (Blueprint $table) {
            $table->foreign(['game_id'], 'publishes_ibfk_2')->references(['game_id'])->on('game')->onUpdate('CASCADE');
            $table->foreign(['publisher_id'], 'publishes_ibfk_1')->references(['publisher_id'])->on('publisher')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publishes', function (Blueprint $table) {
            $table->dropForeign('publishes_ibfk_2');
            $table->dropForeign('publishes_ibfk_1');
        });
    }
}
