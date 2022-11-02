<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DevelopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('develops')->delete();
        
        \DB::table('develops')->insert(array (
            0 => 
            array (
                'game_id' => 2,
                'developer_id' => 1,
            ),
            1 => 
            array (
                'game_id' => 2,
                'developer_id' => 3,
            ),
            2 => 
            array (
                'game_id' => 4,
                'developer_id' => 4,
            ),
            3 => 
            array (
                'game_id' => 3,
                'developer_id' => 1,
            ),
            4 => 
            array (
                'game_id' => 5,
                'developer_id' => 5,
            ),
            5 => 
            array (
                'game_id' => 6,
                'developer_id' => 5,
            ),
            6 => 
            array (
                'game_id' => 7,
                'developer_id' => 4,
            ),
            7 => 
            array (
                'game_id' => 8,
                'developer_id' => 5,
            ),
        ));
        
        
    }
}