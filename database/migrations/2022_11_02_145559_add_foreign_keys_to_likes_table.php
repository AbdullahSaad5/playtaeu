<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('likes', function (Blueprint $table) {
            $table->foreign(['review_id'], 'likes_ibfk_2')->references(['review_id'])->on('review')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['username'], 'likes_ibfk_1')->references(['username'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign('likes_ibfk_2');
            $table->dropForeign('likes_ibfk_1');
        });
    }
}
