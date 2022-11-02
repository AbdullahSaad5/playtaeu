<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublisherTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publisher')->delete();
        
        \DB::table('publisher')->insert(array (
            0 => 
            array (
                'publisher_id' => 1,
                'publisher_name' => 'Xbox Game Studios',
                'publisher_website' => 'https://www.xbox.com/en-US/xbox-game-studios',
                'publisher_logo' => 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/16/160d7b7d4811951be05e64e821cc93698fccf310_full.jpg',
            ),
            1 => 
            array (
                'publisher_id' => 2,
                'publisher_name' => 'CD Projekt Red',
                'publisher_website' => 'https://en.cdprojektred.com/',
                'publisher_logo' => 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/4f/4f1187c11ad41f8aa58b9109efd52c2f8bca9918_full.jpg',
            ),
            2 => 
            array (
                'publisher_id' => 3,
                'publisher_name' => 'Coffee Stain',
                'publisher_website' => 'https://www.coffeestainstudios.com/',
                'publisher_logo' => 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/54/5463d662847a48008142e26b342f392c5f7758b1_full.jpg',
            ),
            3 => 
            array (
                'publisher_id' => 4,
                'publisher_name' => 'Iron Gate AB',
                'publisher_website' => 'https://irongatestudio.se/',
                'publisher_logo' => 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/4f/4f1187c11ad41f8aa58b9109efd52c2f8bca9918_full.jpg',
            ),
        ));
        
        
    }
}