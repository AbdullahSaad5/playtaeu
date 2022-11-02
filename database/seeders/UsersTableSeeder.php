<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'abdullah',
                'password' => '$2y$10$FangD4Z4c04lR3Srr3nKce7DCj8frv2jN3Nwdzm0Anp1qJ7UtgOlu',
                'user_avatar' => 'https://i1.sndcdn.com/avatars-000296090969-p8j9r0-t500x500.jpg',
                'user_real_name' => 'Syed Abdullah Saad',
                'user_email' => 'syedabdullahsaad1@gmail.com',
                'user_country' => 'Pakistan',
                'user_province' => 'Punjab',
            'user_summary' => 'I\'m a dumbass :)',
            'blocked_status' => 0,
            'user_type' => 'user',
        ),
        1 => 
        array (
            'id' => 7,
            'username' => 'AbdullahSaad5',
            'password' => '$2y$10$mKUMae5LkYd75bkvHXGgp.mA66RFj9id1GgC4g3aywOicnXBTIE7i',
            'user_avatar' => 'https://pbs.twimg.com/media/DiHYZjOVAAA95Yc.jpg',
            'user_real_name' => NULL,
            'user_email' => NULL,
            'user_country' => NULL,
            'user_province' => NULL,
            'user_summary' => NULL,
            'blocked_status' => 0,
            'user_type' => 'user',
        ),
        2 => 
        array (
            'id' => 8,
            'username' => 'abc',
            'password' => '$2y$10$ggl50ebyX3IEGQwVzJohmOpD7dm3XYowQt3fWpt.bPaFQbnyPdeAi',
        'user_avatar' => 'https://img.pixers.pics/pho(s3:700/PI/59/7/700_PI597_cfd93291dc78dea3b667f98e1fd6cb80_5b7ab88adf8e9_.,621,700,jpg)/blackout-window-curtains-minion.jpg.jpg',
            'user_real_name' => NULL,
            'user_email' => NULL,
            'user_country' => NULL,
            'user_province' => NULL,
            'user_summary' => NULL,
            'blocked_status' => 0,
            'user_type' => 'user',
        ),
        3 => 
        array (
            'id' => 9,
            'username' => 'abdullahsaad',
            'password' => '$2y$10$V.vz9Br56AXvuTJYl8gpWexWUFal8DEdHe5/YtJtB6dwWOutTnFXy',
            'user_avatar' => 'https://pbs.twimg.com/media/DiHYZjOVAAA95Yc.jpg',
            'user_real_name' => NULL,
            'user_email' => NULL,
            'user_country' => NULL,
            'user_province' => NULL,
            'user_summary' => NULL,
            'blocked_status' => 0,
            'user_type' => 'admin',
        ),
    ));
        
        
    }
}