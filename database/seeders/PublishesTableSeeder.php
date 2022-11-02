<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublishesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publishes')->delete();
        
        \DB::table('publishes')->insert(array (
            0 => 
            array (
                'game_id' => 4,
                'publisher_id' => 3,
            ),
            1 => 
            array (
                'game_id' => 2,
                'publisher_id' => 2,
            ),
            2 => 
            array (
                'game_id' => 3,
                'publisher_id' => 1,
            ),
            3 => 
            array (
                'game_id' => 5,
                'publisher_id' => 1,
            ),
            4 => 
            array (
                'game_id' => 6,
                'publisher_id' => 1,
            ),
            5 => 
            array (
                'game_id' => 7,
                'publisher_id' => 2,
            ),
            6 => 
            array (
                'game_id' => 8,
                'publisher_id' => 1,
            ),
        ));
        
        
    }
}