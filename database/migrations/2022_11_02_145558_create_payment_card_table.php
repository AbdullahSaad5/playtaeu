<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_card', function (Blueprint $table) {
            $table->integer('card_id', true);
            $table->string('username')->index('username');
            $table->string('payment_method');
            $table->string('card_number', 16);
            $table->string('security_code', 6);
            $table->string('expiration_date', 30);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('city');
            $table->string('zipcode', 20);
            $table->string('billing_address_1', 500);
            $table->string('billing_address_2', 500)->nullable();
            $table->string('country', 500);
            $table->string('phone_number', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_card');
    }
}
