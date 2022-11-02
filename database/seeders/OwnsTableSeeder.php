<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OwnsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('owns')->delete();
        
        \DB::table('owns')->insert(array (
            0 => 
            array (
                'username' => 'abdullah',
                'game_id' => 3,
            ),
            1 => 
            array (
                'username' => 'abdullah',
                'game_id' => 4,
            ),
            2 => 
            array (
                'username' => 'abdullah',
                'game_id' => 5,
            ),
            3 => 
            array (
                'username' => 'abdullah',
                'game_id' => 2,
            ),
        ));
        
        
    }
}