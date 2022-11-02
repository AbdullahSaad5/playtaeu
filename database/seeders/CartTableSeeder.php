<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cart')->delete();
        
        \DB::table('cart')->insert(array (
            0 => 
            array (
                'username' => 'AbdullahSaad5',
                'game_id' => 2,
            ),
            1 => 
            array (
                'username' => 'AbdullahSaad5',
                'game_id' => 2,
            ),
            2 => 
            array (
                'username' => 'abdullah',
                'game_id' => 8,
            ),
        ));
        
        
    }
}