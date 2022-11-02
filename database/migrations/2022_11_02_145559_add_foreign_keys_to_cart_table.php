<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart', function (Blueprint $table) {
            $table->foreign(['game_id'], 'cart_ibfk_2')->references(['game_id'])->on('game')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['username'], 'cart_ibfk_1')->references(['username'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart', function (Blueprint $table) {
            $table->dropForeign('cart_ibfk_2');
            $table->dropForeign('cart_ibfk_1');
        });
    }
}
