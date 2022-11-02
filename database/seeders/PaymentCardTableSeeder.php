<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentCardTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_card')->delete();
        
        \DB::table('payment_card')->insert(array (
            0 => 
            array (
                'card_id' => 7,
                'username' => 'abdullah',
                'payment_method' => 'MasterCard',
                'card_number' => '123456789',
                'security_code' => '123',
                'expiration_date' => '2022-01',
                'first_name' => 'Syed Abdullah',
                'last_name' => 'Saad',
                'city' => 'Islamabad',
                'zipcode' => '47752',
                'billing_address_1' => 'House No. 215, Pakistan Town Phase 1',
                'billing_address_2' => NULL,
                'country' => 'Pakistan',
                'phone_number' => '03315406920',
            ),
            1 => 
            array (
                'card_id' => 9,
                'username' => 'abdullah',
                'payment_method' => 'Visa',
                'card_number' => '8359812',
                'security_code' => '128',
                'expiration_date' => '2022-12',
                'first_name' => 'Syed Abdullah',
                'last_name' => 'Saad',
                'city' => 'Rawalpindi',
                'zipcode' => '82571',
                'billing_address_1' => '821578127',
                'billing_address_2' => NULL,
                'country' => 'Pakistan',
                'phone_number' => '295719821',
            ),
            2 => 
            array (
                'card_id' => 10,
                'username' => 'abdullah',
                'payment_method' => 'MasterCard',
                'card_number' => '82571895',
                'security_code' => '2874',
                'expiration_date' => '2022-10',
                'first_name' => 'Saad',
                'last_name' => 'Sajjad',
                'city' => 'akshglashga',
                'zipcode' => 'kahsklgh',
                'billing_address_1' => 'akshglkashga',
                'billing_address_2' => NULL,
                'country' => 'Pakistan',
                'phone_number' => '291850',
            ),
        ));
        
        
    }
}