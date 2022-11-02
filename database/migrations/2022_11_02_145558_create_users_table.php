<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username')->index('username');
            $table->string('password');
            $table->string('user_avatar', 500)->default('https://steamuserimages-a.akamaihd.net/ugc/885384897182110030/F095539864AC9E94AE5236E04C8CA7C2725BCEFF/');
            $table->string('user_real_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_country')->nullable();
            $table->string('user_province')->nullable();
            $table->string('user_summary', 1000)->nullable();
            $table->integer('blocked_status')->default(0);
            $table->string('user_type')->default('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
