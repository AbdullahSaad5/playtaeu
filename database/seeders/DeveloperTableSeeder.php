<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeveloperTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('developer')->delete();
        
        \DB::table('developer')->insert(array (
            0 => 
            array (
                'developer_id' => 1,
                'developer_name' => 'CD Projekt Red',
                'developer_website' => 'https://en.cdprojektred.com/',
                'developer_logo' => 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/4f/4f1187c11ad41f8aa58b9109efd52c2f8bca9918_full.jpg',
            ),
            1 => 
            array (
                'developer_id' => 2,
                'developer_name' => 'Iron Gate AB',
                'developer_website' => 'https://irongatestudio.se/',
                'developer_logo' => 'https://irongatestudio.se/____impro/1/onewebmedia/logo_irongate_white.png?etag=%2282e7-5ec7d9bc%22&sourceContentType=image%2Fpng&ignoreAspectRatio&resize=214%2B254',
            ),
            2 => 
            array (
                'developer_id' => 3,
                'developer_name' => 'Relic Entertainment',
                'developer_website' => 'https://www.ageofempires.com/',
                'developer_logo' => 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/60/60b0886b2bc70da61fc4745fef71e3b07510aec0_full.jpg',
            ),
            3 => 
            array (
                'developer_id' => 4,
                'developer_name' => 'World\'s Edge',
                'developer_website' => 'https://www.ageofempires.com/',
                'developer_logo' => 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/60/60b0886b2bc70da61fc4745fef71e3b07510aec0_full.jpg',
            ),
            4 => 
            array (
                'developer_id' => 5,
                'developer_name' => '24 Entertainment',
                'developer_website' => 'http://www.narakathegame.com/',
                'developer_logo' => 'https://cdna.artstation.com/p/users/avatars/002/510/242/large/eca481df13e0f1cbd0c1a4ff6221898f.jpg?1608630755',
            ),
            5 => 
            array (
                'developer_id' => 6,
                'developer_name' => 'Xbox Games Studios',
                'developer_website' => 'https://www.xbox.com/en-US/xbox-game-studios',
                'developer_logo' => 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/16/160d7b7d4811951be05e64e821cc93698fccf310_full.jpg',
            ),
        ));
        
        
    }
}