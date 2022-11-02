<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('game')->delete();
        
        \DB::table('game')->insert(array (
            0 => 
            array (
                'game_id' => 2,
                'game_title' => 'Destiny 2',
                'game_description' => 'Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere, absolutely free.',
                'game_price' => 0.0,
                'game_windows_support' => 1,
                'game_mac_support' => 0,
                'game_linux_support' => 0,
                'game_thumbnail_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/hero_capsule.jpg?t=1638897108',
                'game_cover_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/header.jpg?t=1638897108',
                'game_thumbnail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256851375/microtrailer.webm?t=1631639117?v=3',
                'game_detail_image1' => 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/ss_7fcc82f468fcf8278c7ffa95cebf949bfc6845fc.600x338.jpg?t=1638897108',
                'game_detail_image2' => 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/ss_d923711c0eb833b1df8607fa3df4dcebbe470cf2.600x338.jpg?t=1638897108',
                'game_detail_image3' => 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/ss_c142f5078ace9f5e2eb2c80aa3bf768e156b4ee9.600x338.jpg?t=1638897108',
                'game_detail_image4' => 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/ss_a9642404e586be28f856e8f02d038828f691a5ba.600x338.jpg?t=1638897108',
                'game_detail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256851375/movie480_vp9.webm?t=1631639117',
                'game_release_date' => '2019-10-01',
            ),
            1 => 
            array (
                'game_id' => 3,
                'game_title' => 'Sea of Thieves',
                'game_description' => 'Sea of Thieves offers the essential pirate experience, from sailing and fighting to exploring and looting – everything you need to live the pirate life and become a legend in your own right. With no set roles, you have complete freedom to approach the world, and other players, however you choose.',
                'game_price' => 12.99,
                'game_windows_support' => 1,
                'game_mac_support' => 1,
                'game_linux_support' => 1,
                'game_thumbnail_image' => 'https://cdn.akamai.steamstatic.com/steam/clusters/sale_autumn2019_assets/54b5034d397baccb93181cc6/hero_1172620_english.jpg?t=1640283624',
                'game_cover_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/header.jpg?t=1638484040',
                'game_thumbnail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256838705/microtrailer.webm?t=1623609277?v=3',
                'game_detail_image1' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/ss_db93a181951437ffb3f7c2a45d0cb8351e1d8fc1.600x338.jpg?t=1638484040',
                'game_detail_image2' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/ss_e7be384ccfe3ec8a8d4a2e777d09cb84684304af.600x338.jpg?t=1638484040',
                'game_detail_image3' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/ss_8c74f225c1b5fefe6636278893570748994630f8.600x338.jpg?t=1638484040',
                'game_detail_image4' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/ss_a7df547f81e4e19c39685e4c0048a30c0fd17a01.600x338.jpg?t=1638484040',
                'game_detail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256840744/movie480_vp9.webm?t=1624888977',
                'game_release_date' => '2020-06-03',
            ),
            2 => 
            array (
                'game_id' => 4,
                'game_title' => 'NARAKA: BLADEPOINT',
                'game_description' => 'BRUCE LEE and his iconic Nunchucks now have joined NARAKA: BLADEPOINT, the up to 60-player PVP mythical action combat experience with martial arts inspired melee combat, gravity defying mobility, vast arsenals of melee & ranged weapons, legendary customizable heroes with epic abilities.',
                'game_price' => 15.99,
                'game_windows_support' => 1,
                'game_mac_support' => 1,
                'game_linux_support' => 0,
                'game_thumbnail_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/hero_capsule.jpg?t=1640229043',
                'game_cover_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/header.jpg?t=1640229043',
                'game_thumbnail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256864293/microtrailer.webm?t=1639310747?v=3',
                'game_detail_image1' => 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/ss_dd8cb2c335a6142b4a85008b396d4a39cde4942f.600x338.jpg?t=1640229043',
                'game_detail_image2' => 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/ss_609fbc4454131e31502b21b8aaa9ec54027223df.600x338.jpg?t=1640229043',
                'game_detail_image3' => 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/ss_b6b0116d6e8db718ba95964fc6d3a19571ba2ac7.600x338.jpg?t=1640229043',
                'game_detail_image4' => 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/ss_f0fd8000198cef8834d6840bd8112668909b35c8.600x338.jpg?t=1640229043',
                'game_detail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256864283/movie480_vp9.webm?t=1639310726',
                'game_release_date' => '2021-08-12',
            ),
            3 => 
            array (
                'game_id' => 5,
                'game_title' => 'Cyberpunk 2077',
                'game_description' => 'Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality.',
                'game_price' => 14.99,
                'game_windows_support' => 1,
                'game_mac_support' => 0,
                'game_linux_support' => 0,
                'game_thumbnail_image' => 'https://img.g2a.com/323x433/1x1x0/cyberpunk-2077-pc-steam-gift-north-america/5fd2128546177c7d675c6374',
                'game_cover_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/header.jpg?t=1621944801',
                'game_thumbnail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256812920/movie480_vp9.webm?t=1611326875',
                'game_detail_image1' => 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/ss_9beef14102f164fa1163536d0fb3a51d0a2e4a3f.600x338.jpg?t=1621944801',
                'game_detail_image2' => 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/ss_ae4465fa8a44dd330dbeb7992ba196c2f32cabb1.600x338.jpg?t=1621944801',
                'game_detail_image3' => 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/ss_ff3d920e254d18aa2a25d3765ac2ebe845efd208.600x338.jpg?t=1621944801',
                'game_detail_image4' => 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/ss_0002f18563d313bdd1d82c725d411408ebf762b0.600x338.jpg?t=1621944801',
                'game_detail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256810256/movie480_vp9.webm?t=1611326498',
                'game_release_date' => '2021-12-10',
            ),
            4 => 
            array (
                'game_id' => 6,
                'game_title' => 'Forza Horizon 5',
                'game_description' => 'Your Ultimate Horizon Adventure awaits! Explore the vibrant and ever-evolving open world landscapes of Mexico with limitless, fun driving action in hundreds of the world’s greatest cars. Begin Your Horizon Adventure today and add to your Wishlist!',
                'game_price' => 0.0,
                'game_windows_support' => 0,
                'game_mac_support' => 0,
                'game_linux_support' => 0,
                'game_thumbnail_image' => 'https://upload.wikimedia.org/wikipedia/en/8/86/Forza_Horizon_5_cover_art.jpg',
                'game_cover_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/header.jpg?t=1640881911',
                'game_thumbnail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256859757/movie480_vp9.webm?t=1636489104',
                'game_detail_image1' => 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_00f0090174380eeaf8753bd3d1028b6772c3aebf.600x338.jpg?t=1640881911',
                'game_detail_image2' => 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_b65236b365315ebb6da6114ce42cd74b59cab3c8.600x338.jpg?t=1640881911',
                'game_detail_image3' => 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_0a13a7ccd38e7c3e6a5f1720050732833b53b6a8.600x338.jpg?t=1640881911',
                'game_detail_image4' => 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_3654a5988db68f9b47740f9f6a9299682c365599.600x338.jpg?t=1640881911',
                'game_detail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256838712/movie480_vp9.webm?t=1623614591',
                'game_release_date' => '2021-11-09',
            ),
            5 => 
            array (
                'game_id' => 7,
                'game_title' => 'Apex Legends™',
                'game_description' => 'Apex Legends is the award-winning, free-to-play Hero shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.',
                'game_price' => 0.0,
                'game_windows_support' => 0,
                'game_mac_support' => 0,
                'game_linux_support' => 0,
                'game_thumbnail_image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202010/1512/8ThoZrE519SBuOMpYKFunYS0.png',
                'game_cover_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/header.jpg?t=1638900075',
                'game_thumbnail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256858968/movie480_vp9.webm?t=1636027456',
                'game_detail_image1' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/ss_8731a6552dce7c9e9e6da79d6e42f62c4dcb835d.600x338.jpg?t=1638900075',
                'game_detail_image2' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/ss_53cc0dc2cec93227e6286f216d5fcd00d4d18de1.600x338.jpg?t=1638900075',
                'game_detail_image3' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/ss_6a62e225aab848e11e2f33b8aa392d06a483bf1d.600x338.jpg?t=1638900075',
                'game_detail_image4' => 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/ss_e2f6718c84031f0cbe6ce380559359833679c27b.600x338.jpg?t=1638900075',
                'game_detail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256858965/movie480_vp9.webm?t=1636027442',
                'game_release_date' => '2020-11-05',
            ),
            6 => 
            array (
                'game_id' => 8,
                'game_title' => 'Tom Clancy\'s Rainbow Six® Siege',
                'game_description' => 'Tom Clancy\'s Rainbow Six Siege is the latest installment of the acclaimed first-person shooter franchise developed by the renowned Ubisoft Montreal studio.',
                'game_price' => 5.99,
                'game_windows_support' => 0,
                'game_mac_support' => 0,
                'game_linux_support' => 0,
                'game_thumbnail_image' => 'https://s2.gaming-cdn.com/images/products/406/orig/game-uplay-tom-clancys-rainbow-six-siege-cover.jpg',
                'game_cover_image' => 'https://cdn.akamai.steamstatic.com/steam/apps/359550/header.jpg?t=1639409141',
                'game_thumbnail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256854729/movie480_vp9.webm?t=1633534183',
                'game_detail_image1' => 'https://cdn.akamai.steamstatic.com/steam/apps/359550/ss_79af6b4e7ea15b745c0c315e4ae8f7450bb64f58.600x338.jpg?t=1639409141',
                'game_detail_image2' => 'https://cdn.akamai.steamstatic.com/steam/apps/359550/ss_0d619a68898400c9cd59b1afa2e36bd50f12d0b5.600x338.jpg?t=1639409141',
                'game_detail_image3' => 'https://cdn.akamai.steamstatic.com/steam/apps/359550/ss_6d4e3b1021a489106f33c054bcb0e74ea4bd706f.600x338.jpg?t=1639409141',
                'game_detail_image4' => 'https://cdn.akamai.steamstatic.com/steam/apps/359550/ss_2f720e4694ba324ee6036a4ce8595a839de3f185.600x338.jpg?t=1639409141',
                'game_detail_video' => 'https://cdn.akamai.steamstatic.com/steam/apps/256854729/movie480_vp9.webm?t=1633534183',
                'game_release_date' => '2015-12-01',
            ),
        ));
        
        
    }
}