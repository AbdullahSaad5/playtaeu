<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review', function (Blueprint $table) {
            $table->foreign(['game_id'], 'review_ibfk_2')->references(['game_id'])->on('game')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['username'], 'review_ibfk_1')->references(['username'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review', function (Blueprint $table) {
            $table->dropForeign('review_ibfk_2');
            $table->dropForeign('review_ibfk_1');
        });
    }
}
