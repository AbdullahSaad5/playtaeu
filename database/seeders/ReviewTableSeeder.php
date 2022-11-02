<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('review')->delete();
        
        \DB::table('review')->insert(array (
            0 => 
            array (
                'review_id' => 1,
                'username' => 'abdullah',
                'game_id' => 2,
                'opinion' => 'Yes',
                'message' => 'Best game ever',
                'post_date' => '2022-01-10',
            ),
        ));
        
        
    }
}