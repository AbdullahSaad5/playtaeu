-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 04:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playtaeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(255) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `game_id`) VALUES
('AbdullahSaad5', 2),
('AbdullahSaad5', 2),
('abdullah', 8);

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `developer_id` int(11) NOT NULL,
  `developer_name` varchar(255) NOT NULL,
  `developer_website` varchar(500) NOT NULL,
  `developer_logo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`developer_id`, `developer_name`, `developer_website`, `developer_logo`) VALUES
(1, 'CD Projekt Red', 'https://en.cdprojektred.com/', 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/4f/4f1187c11ad41f8aa58b9109efd52c2f8bca9918_full.jpg'),
(2, 'Iron Gate AB', 'https://irongatestudio.se/', 'https://irongatestudio.se/____impro/1/onewebmedia/logo_irongate_white.png?etag=%2282e7-5ec7d9bc%22&sourceContentType=image%2Fpng&ignoreAspectRatio&resize=214%2B254'),
(3, 'Relic Entertainment', 'https://www.ageofempires.com/', 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/60/60b0886b2bc70da61fc4745fef71e3b07510aec0_full.jpg'),
(4, 'World\'s Edge', 'https://www.ageofempires.com/', 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/60/60b0886b2bc70da61fc4745fef71e3b07510aec0_full.jpg'),
(5, '24 Entertainment', 'http://www.narakathegame.com/', 'https://cdna.artstation.com/p/users/avatars/002/510/242/large/eca481df13e0f1cbd0c1a4ff6221898f.jpg?1608630755'),
(6, 'Xbox Games Studios', 'https://www.xbox.com/en-US/xbox-game-studios', 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/16/160d7b7d4811951be05e64e821cc93698fccf310_full.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `develops`
--

CREATE TABLE `develops` (
  `game_id` int(11) NOT NULL,
  `developer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `develops`
--

INSERT INTO `develops` (`game_id`, `developer_id`) VALUES
(2, 1),
(2, 3),
(4, 4),
(3, 1),
(5, 5),
(6, 5),
(7, 4),
(8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `game_id` int(11) NOT NULL,
  `game_title` varchar(255) NOT NULL,
  `game_description` varchar(1000) NOT NULL,
  `game_price` float NOT NULL,
  `game_windows_support` int(11) NOT NULL DEFAULT 1,
  `game_mac_support` int(11) NOT NULL DEFAULT 0,
  `game_linux_support` int(11) NOT NULL DEFAULT 0,
  `game_thumbnail_image` varchar(500) NOT NULL,
  `game_cover_image` varchar(500) NOT NULL,
  `game_thumbnail_video` varchar(500) NOT NULL,
  `game_detail_image1` varchar(500) NOT NULL,
  `game_detail_image2` varchar(500) NOT NULL,
  `game_detail_image3` varchar(500) NOT NULL,
  `game_detail_image4` varchar(500) NOT NULL,
  `game_detail_video` varchar(500) NOT NULL,
  `game_release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_title`, `game_description`, `game_price`, `game_windows_support`, `game_mac_support`, `game_linux_support`, `game_thumbnail_image`, `game_cover_image`, `game_thumbnail_video`, `game_detail_image1`, `game_detail_image2`, `game_detail_image3`, `game_detail_image4`, `game_detail_video`, `game_release_date`) VALUES
(2, 'Destiny 2', 'Destiny 2 is an action MMO with a single evolving world that you and your friends can join anytime, anywhere, absolutely free.', 0, 1, 0, 0, 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/hero_capsule.jpg?t=1638897108', 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/header.jpg?t=1638897108', 'https://cdn.akamai.steamstatic.com/steam/apps/256851375/microtrailer.webm?t=1631639117?v=3', 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/ss_7fcc82f468fcf8278c7ffa95cebf949bfc6845fc.600x338.jpg?t=1638897108', 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/ss_d923711c0eb833b1df8607fa3df4dcebbe470cf2.600x338.jpg?t=1638897108', 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/ss_c142f5078ace9f5e2eb2c80aa3bf768e156b4ee9.600x338.jpg?t=1638897108', 'https://cdn.akamai.steamstatic.com/steam/apps/1085660/ss_a9642404e586be28f856e8f02d038828f691a5ba.600x338.jpg?t=1638897108', 'https://cdn.akamai.steamstatic.com/steam/apps/256851375/movie480_vp9.webm?t=1631639117', '2019-10-01'),
(3, 'Sea of Thieves', 'Sea of Thieves offers the essential pirate experience, from sailing and fighting to exploring and looting – everything you need to live the pirate life and become a legend in your own right. With no set roles, you have complete freedom to approach the world, and other players, however you choose.', 12.99, 1, 1, 1, 'https://cdn.akamai.steamstatic.com/steam/clusters/sale_autumn2019_assets/54b5034d397baccb93181cc6/hero_1172620_english.jpg?t=1640283624', 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/header.jpg?t=1638484040', 'https://cdn.akamai.steamstatic.com/steam/apps/256838705/microtrailer.webm?t=1623609277?v=3', 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/ss_db93a181951437ffb3f7c2a45d0cb8351e1d8fc1.600x338.jpg?t=1638484040', 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/ss_e7be384ccfe3ec8a8d4a2e777d09cb84684304af.600x338.jpg?t=1638484040', 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/ss_8c74f225c1b5fefe6636278893570748994630f8.600x338.jpg?t=1638484040', 'https://cdn.akamai.steamstatic.com/steam/apps/1172620/ss_a7df547f81e4e19c39685e4c0048a30c0fd17a01.600x338.jpg?t=1638484040', 'https://cdn.akamai.steamstatic.com/steam/apps/256840744/movie480_vp9.webm?t=1624888977', '2020-06-03'),
(4, 'NARAKA: BLADEPOINT', 'BRUCE LEE and his iconic Nunchucks now have joined NARAKA: BLADEPOINT, the up to 60-player PVP mythical action combat experience with martial arts inspired melee combat, gravity defying mobility, vast arsenals of melee & ranged weapons, legendary customizable heroes with epic abilities.', 15.99, 1, 1, 0, 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/hero_capsule.jpg?t=1640229043', 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/header.jpg?t=1640229043', 'https://cdn.akamai.steamstatic.com/steam/apps/256864293/microtrailer.webm?t=1639310747?v=3', 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/ss_dd8cb2c335a6142b4a85008b396d4a39cde4942f.600x338.jpg?t=1640229043', 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/ss_609fbc4454131e31502b21b8aaa9ec54027223df.600x338.jpg?t=1640229043', 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/ss_b6b0116d6e8db718ba95964fc6d3a19571ba2ac7.600x338.jpg?t=1640229043', 'https://cdn.akamai.steamstatic.com/steam/apps/1203220/ss_f0fd8000198cef8834d6840bd8112668909b35c8.600x338.jpg?t=1640229043', 'https://cdn.akamai.steamstatic.com/steam/apps/256864283/movie480_vp9.webm?t=1639310726', '2021-08-12'),
(5, 'Cyberpunk 2077', 'Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality.', 14.99, 1, 0, 0, 'https://img.g2a.com/323x433/1x1x0/cyberpunk-2077-pc-steam-gift-north-america/5fd2128546177c7d675c6374', 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/header.jpg?t=1621944801', 'https://cdn.akamai.steamstatic.com/steam/apps/256812920/movie480_vp9.webm?t=1611326875', 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/ss_9beef14102f164fa1163536d0fb3a51d0a2e4a3f.600x338.jpg?t=1621944801', 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/ss_ae4465fa8a44dd330dbeb7992ba196c2f32cabb1.600x338.jpg?t=1621944801', 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/ss_ff3d920e254d18aa2a25d3765ac2ebe845efd208.600x338.jpg?t=1621944801', 'https://cdn.akamai.steamstatic.com/steam/apps/1091500/ss_0002f18563d313bdd1d82c725d411408ebf762b0.600x338.jpg?t=1621944801', 'https://cdn.akamai.steamstatic.com/steam/apps/256810256/movie480_vp9.webm?t=1611326498', '2021-12-10'),
(6, 'Forza Horizon 5', 'Your Ultimate Horizon Adventure awaits! Explore the vibrant and ever-evolving open world landscapes of Mexico with limitless, fun driving action in hundreds of the world’s greatest cars. Begin Your Horizon Adventure today and add to your Wishlist!', 0, 0, 0, 0, 'https://upload.wikimedia.org/wikipedia/en/8/86/Forza_Horizon_5_cover_art.jpg', 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/header.jpg?t=1640881911', 'https://cdn.akamai.steamstatic.com/steam/apps/256859757/movie480_vp9.webm?t=1636489104', 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_00f0090174380eeaf8753bd3d1028b6772c3aebf.600x338.jpg?t=1640881911', 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_b65236b365315ebb6da6114ce42cd74b59cab3c8.600x338.jpg?t=1640881911', 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_0a13a7ccd38e7c3e6a5f1720050732833b53b6a8.600x338.jpg?t=1640881911', 'https://cdn.akamai.steamstatic.com/steam/apps/1551360/ss_3654a5988db68f9b47740f9f6a9299682c365599.600x338.jpg?t=1640881911', 'https://cdn.akamai.steamstatic.com/steam/apps/256838712/movie480_vp9.webm?t=1623614591', '2021-11-09'),
(7, 'Apex Legends™', 'Apex Legends is the award-winning, free-to-play Hero shooter from Respawn Entertainment. Master an ever-growing roster of legendary characters with powerful abilities and experience strategic squad play and innovative gameplay in the next evolution of Hero Shooter and Battle Royale.', 0, 0, 0, 0, 'https://image.api.playstation.com/vulcan/ap/rnd/202010/1512/8ThoZrE519SBuOMpYKFunYS0.png', 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/header.jpg?t=1638900075', 'https://cdn.akamai.steamstatic.com/steam/apps/256858968/movie480_vp9.webm?t=1636027456', 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/ss_8731a6552dce7c9e9e6da79d6e42f62c4dcb835d.600x338.jpg?t=1638900075', 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/ss_53cc0dc2cec93227e6286f216d5fcd00d4d18de1.600x338.jpg?t=1638900075', 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/ss_6a62e225aab848e11e2f33b8aa392d06a483bf1d.600x338.jpg?t=1638900075', 'https://cdn.akamai.steamstatic.com/steam/apps/1172470/ss_e2f6718c84031f0cbe6ce380559359833679c27b.600x338.jpg?t=1638900075', 'https://cdn.akamai.steamstatic.com/steam/apps/256858965/movie480_vp9.webm?t=1636027442', '2020-11-05'),
(8, 'Tom Clancy\'s Rainbow Six® Siege', 'Tom Clancy\'s Rainbow Six Siege is the latest installment of the acclaimed first-person shooter franchise developed by the renowned Ubisoft Montreal studio.', 5.99, 0, 0, 0, 'https://s2.gaming-cdn.com/images/products/406/orig/game-uplay-tom-clancys-rainbow-six-siege-cover.jpg', 'https://cdn.akamai.steamstatic.com/steam/apps/359550/header.jpg?t=1639409141', 'https://cdn.akamai.steamstatic.com/steam/apps/256854729/movie480_vp9.webm?t=1633534183', 'https://cdn.akamai.steamstatic.com/steam/apps/359550/ss_79af6b4e7ea15b745c0c315e4ae8f7450bb64f58.600x338.jpg?t=1639409141', 'https://cdn.akamai.steamstatic.com/steam/apps/359550/ss_0d619a68898400c9cd59b1afa2e36bd50f12d0b5.600x338.jpg?t=1639409141', 'https://cdn.akamai.steamstatic.com/steam/apps/359550/ss_6d4e3b1021a489106f33c054bcb0e74ea4bd706f.600x338.jpg?t=1639409141', 'https://cdn.akamai.steamstatic.com/steam/apps/359550/ss_2f720e4694ba324ee6036a4ce8595a839de3f185.600x338.jpg?t=1639409141', 'https://cdn.akamai.steamstatic.com/steam/apps/256854729/movie480_vp9.webm?t=1633534183', '2015-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `review_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `username`, `review_id`, `type`) VALUES
(42, 'abdullah', 1, 'helpful');

-- --------------------------------------------------------

--
-- Table structure for table `owns`
--

CREATE TABLE `owns` (
  `username` varchar(255) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owns`
--

INSERT INTO `owns` (`username`, `game_id`) VALUES
('abdullah', 3),
('abdullah', 4),
('abdullah', 5),
('abdullah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment_card`
--

CREATE TABLE `payment_card` (
  `card_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `security_code` varchar(6) NOT NULL,
  `expiration_date` varchar(30) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `billing_address_1` varchar(500) NOT NULL,
  `billing_address_2` varchar(500) DEFAULT NULL,
  `country` varchar(500) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_card`
--

INSERT INTO `payment_card` (`card_id`, `username`, `payment_method`, `card_number`, `security_code`, `expiration_date`, `first_name`, `last_name`, `city`, `zipcode`, `billing_address_1`, `billing_address_2`, `country`, `phone_number`) VALUES
(7, 'abdullah', 'MasterCard', '123456789', '123', '2022-01', 'Syed Abdullah', 'Saad', 'Islamabad', '47752', 'House No. 215, Pakistan Town Phase 1', NULL, 'Pakistan', '03315406920'),
(9, 'abdullah', 'Visa', '8359812', '128', '2022-12', 'Syed Abdullah', 'Saad', 'Rawalpindi', '82571', '821578127', NULL, 'Pakistan', '295719821'),
(10, 'abdullah', 'MasterCard', '82571895', '2874', '2022-10', 'Saad', 'Sajjad', 'akshglashga', 'kahsklgh', 'akshglkashga', NULL, 'Pakistan', '291850');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_website` varchar(500) NOT NULL,
  `publisher_logo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_website`, `publisher_logo`) VALUES
(1, 'Xbox Game Studios', 'https://www.xbox.com/en-US/xbox-game-studios', 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/16/160d7b7d4811951be05e64e821cc93698fccf310_full.jpg'),
(2, 'CD Projekt Red', 'https://en.cdprojektred.com/', 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/4f/4f1187c11ad41f8aa58b9109efd52c2f8bca9918_full.jpg'),
(3, 'Coffee Stain', 'https://www.coffeestainstudios.com/', 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/54/5463d662847a48008142e26b342f392c5f7758b1_full.jpg'),
(4, 'Iron Gate AB', 'https://irongatestudio.se/', 'https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/4f/4f1187c11ad41f8aa58b9109efd52c2f8bca9918_full.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `publishes`
--

CREATE TABLE `publishes` (
  `game_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publishes`
--

INSERT INTO `publishes` (`game_id`, `publisher_id`) VALUES
(4, 3),
(2, 2),
(3, 1),
(5, 1),
(6, 1),
(7, 2),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `game_id` int(11) NOT NULL,
  `opinion` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `username`, `game_id`, `opinion`, `message`, `post_date`) VALUES
(1, 'abdullah', 2, 'Yes', 'Best game ever', '2022-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_avatar` varchar(500) NOT NULL DEFAULT 'https://steamuserimages-a.akamaihd.net/ugc/885384897182110030/F095539864AC9E94AE5236E04C8CA7C2725BCEFF/',
  `user_real_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_province` varchar(255) DEFAULT NULL,
  `user_summary` varchar(1000) DEFAULT NULL,
  `blocked_status` int(255) NOT NULL DEFAULT 0,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_avatar`, `user_real_name`, `user_email`, `user_country`, `user_province`, `user_summary`, `blocked_status`, `user_type`) VALUES
(1, 'abdullah', '$2y$10$FangD4Z4c04lR3Srr3nKce7DCj8frv2jN3Nwdzm0Anp1qJ7UtgOlu', 'https://i1.sndcdn.com/avatars-000296090969-p8j9r0-t500x500.jpg', 'Syed Abdullah Saad', 'syedabdullahsaad1@gmail.com', 'Pakistan', 'Punjab', 'I\'m a dumbass :)', 0, 'user'),
(7, 'AbdullahSaad5', '$2y$10$mKUMae5LkYd75bkvHXGgp.mA66RFj9id1GgC4g3aywOicnXBTIE7i', 'https://pbs.twimg.com/media/DiHYZjOVAAA95Yc.jpg', NULL, NULL, NULL, NULL, NULL, 0, 'user'),
(8, 'abc', '$2y$10$ggl50ebyX3IEGQwVzJohmOpD7dm3XYowQt3fWpt.bPaFQbnyPdeAi', 'https://img.pixers.pics/pho(s3:700/PI/59/7/700_PI597_cfd93291dc78dea3b667f98e1fd6cb80_5b7ab88adf8e9_.,621,700,jpg)/blackout-window-curtains-minion.jpg.jpg', NULL, NULL, NULL, NULL, NULL, 0, 'user'),
(9, 'abdullahsaad', '$2y$10$V.vz9Br56AXvuTJYl8gpWexWUFal8DEdHe5/YtJtB6dwWOutTnFXy', 'https://pbs.twimg.com/media/DiHYZjOVAAA95Yc.jpg', NULL, NULL, NULL, NULL, NULL, 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `username` (`username`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`developer_id`);

--
-- Indexes for table `develops`
--
ALTER TABLE `develops`
  ADD KEY `game_id` (`game_id`),
  ADD KEY `developer_id` (`developer_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `review_id` (`review_id`);

--
-- Indexes for table `owns`
--
ALTER TABLE `owns`
  ADD KEY `username` (`username`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `payment_card`
--
ALTER TABLE `payment_card`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `publishes`
--
ALTER TABLE `publishes`
  ADD KEY `game_id` (`game_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `username` (`username`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `developer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `payment_card`
--
ALTER TABLE `payment_card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `develops`
--
ALTER TABLE `develops`
  ADD CONSTRAINT `develops_ibfk_1` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `develops_ibfk_2` FOREIGN KEY (`developer_id`) REFERENCES `developer` (`developer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`review_id`) REFERENCES `review` (`review_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `owns`
--
ALTER TABLE `owns`
  ADD CONSTRAINT `owns_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `owns_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_card`
--
ALTER TABLE `payment_card`
  ADD CONSTRAINT `payment_card_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `publishes`
--
ALTER TABLE `publishes`
  ADD CONSTRAINT `publishes_ibfk_1` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `publishes_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`) ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `game` (`game_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
