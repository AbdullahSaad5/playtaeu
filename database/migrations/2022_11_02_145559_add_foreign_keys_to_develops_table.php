<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDevelopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('develops', function (Blueprint $table) {
            $table->foreign(['developer_id'], 'develops_ibfk_2')->references(['developer_id'])->on('developer')->onUpdate('CASCADE');
            $table->foreign(['game_id'], 'develops_ibfk_1')->references(['game_id'])->on('game')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('develops', function (Blueprint $table) {
            $table->dropForeign('develops_ibfk_2');
            $table->dropForeign('develops_ibfk_1');
        });
    }
}
