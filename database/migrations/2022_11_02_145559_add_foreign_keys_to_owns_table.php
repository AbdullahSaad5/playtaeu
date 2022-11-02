<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOwnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owns', function (Blueprint $table) {
            $table->foreign(['game_id'], 'owns_ibfk_2')->references(['game_id'])->on('game')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['username'], 'owns_ibfk_1')->references(['username'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owns', function (Blueprint $table) {
            $table->dropForeign('owns_ibfk_2');
            $table->dropForeign('owns_ibfk_1');
        });
    }
}
