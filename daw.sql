-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 29, 2023 at 08:47 AM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `daw`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `products`
-- 

CREATE TABLE `products` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `price` int(11) NOT NULL default '0',
  `stock` int(11) NOT NULL default '0',
  `image` text NOT NULL,
  `ratings` int(11) NOT NULL default '0',
  `avg_rating` float NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- 
-- Dumping data for table `products`
-- 

INSERT INTO `products` VALUES (1, 'Baldur''s Gate 3', 'Baldur’s Gate 3 is a story-rich, party-based RPG set in the universe of Dungeons & Dragons, where your choices shape a tale of fellowship and betrayal, survival and sacrifice, and the lure of absolute power.', 'rpg', 180, 20, 'baldursgate3.jpg', 0, 0);
INSERT INTO `products` VALUES (2, 'Battlefield 5', 'This is the ultimate Battlefield V experience. Enter mankind’s greatest conflict with the complete arsenal of weapons, vehicles, and gadgets plus the best customization content of Year 1 and 2.', 'action', 60, 15, 'battlefieldv.jpg', 0, 0);
INSERT INTO `products` VALUES (3, 'Borderlands 2', 'A new era of shoot and loot is about to begin. Play as one of four new vault hunters facing off against a massive new world of creatures, psychos and the evil mastermind, Handsome Jack. Make new friends, arm them with a bazillion weapons and fight alongside them in 4 player co-op on a relentless quest for revenge and redemption across the undiscovered and unpredictable living planet.', 'action', 35, 45, 'borderlands2.jpg', 0, 0);
INSERT INTO `products` VALUES (4, 'Conan Exiles', 'An online multiplayer survival game, now with sorcery, set in the lands of Conan the Barbarian. Survive in a vast open world sandbox, build your home into a kingdom, and dominate your enemies in single or multiplayer.', 'rpg', 150, 30, 'conan.jpg', 0, 0);
INSERT INTO `products` VALUES (5, 'Cyberpunk 2077', 'Cyberpunk 2077 is an open-world, action-adventure RPG set in the dark future of Night City — a dangerous megalopolis obsessed with power, glamor, and ceaseless body modification.', 'action', 240, 28, 'cyberpunk.jpg', 0, 0);
INSERT INTO `products` VALUES (6, 'DARK SOULS III', 'Dark Souls continues to push the boundaries with the latest, ambitious chapter in the critically-acclaimed and genre-defining series. Prepare yourself and Embrace The Darkness!', 'rpg', 170, 45, 'darksouls3.jpg', 0, 0);
INSERT INTO `products` VALUES (7, 'Diablo III', 'Twenty years have passed since the Prime Evils were defeated and banished from the world of Sanctuary. Now, you must return to where it all began – the town of Tristram – and investigate rumors of a fallen star, for this is the first sign of evil’s rebirth, and an omen that the End Times have begun.', 'rpg', 240, 10, 'diablo3.jpg', 0, 0);
INSERT INTO `products` VALUES (8, 'DOOM', 'Now includes all three premium DLC packs (Unto the Evil, Hell Followed, and Bloodfall), maps, modes, and weapons, as well as all feature updates including Arcade Mode, Photo Mode, and the latest Update 6.66, which brings further multiplayer improvements as well as revamps multiplayer progression.', 'action', 100, 30, 'doom.jpg', 0, 0);
INSERT INTO `products` VALUES (9, 'Fallout 4', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 – their most ambitious game ever, and the next generation of open-world gaming.', 'adventure', 90, 18, 'fallout4.jpg', 0, 0);
INSERT INTO `products` VALUES (10, 'Grand Theft Auto V', 'Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second.', 'action', 120, 34, 'gtav.jpg', 0, 0);
INSERT INTO `products` VALUES (11, 'Hades', 'Defy the god of the dead as you hack and slash out of the Underworld in this rogue-like dungeon crawler from the creators of Bastion, Transistor, and Pyre.', 'action', 130, 24, 'hades.jpg', 0, 0);
INSERT INTO `products` VALUES (12, 'Left 4 Dead 2', 'Set in the zombie apocalypse, Left 4 Dead 2 (L4D2) is the highly anticipated sequel to the award-winning Left 4 Dead, the #1 co-op game of 2008.\r\nThis co-operative action horror FPS takes you and your friends through the cities, swamps and cemeteries of the Deep South, from Savannah to New Orleans across five expansive campaigns.', 'action', 45, 60, 'left4dead2.jpg', 0, 0);
INSERT INTO `products` VALUES (13, 'Minecraft', 'Create, explore, survive, repeat. Get Minecraft: Java Edition and Bedrock Edition as a package deal for Windows! With Minecraft: Java & Bedrock Edition for Windows, you can easily switch between games using the unified launcher and cross-play with any current edition of Minecraft.', 'adventure', 110, 55, 'minecraft.jpg', 0, 0);
INSERT INTO `products` VALUES (14, 'No Man''s Sky', 'No Man''s Sky is a game about exploration and survival in an infinite procedurally generated universe.', 'adventure', 165, 10, 'nomansky.jpg', 0, 0);
INSERT INTO `products` VALUES (15, 'Rust', 'The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night.', 'action', 115, 22, 'rust.jpg', 0, 0);
INSERT INTO `products` VALUES (16, 'Satisfactory', 'Satisfactory is a first-person open-world factory building game with a dash of exploration and combat. Play alone or with friends, explore an alien planet, create multi-story factories, and enter conveyor belt heaven!', 'adventure', 99, 15, 'satisfactory.jpg', 0, 0);
INSERT INTO `products` VALUES (17, 'Sea of Thieves', 'Sea of Thieves offers the essential pirate experience, from sailing and fighting to exploring and looting – everything you need to live the pirate life and become a legend in your own right. With no set roles, you have complete freedom to approach the world, and other players, however you choose.', 'adventure', 125, 23, 'seaofthieves.jpg', 0, 0);
INSERT INTO `products` VALUES (18, 'The Elder Scrolls V', 'Winner of more than 200 Game of the Year Awards, Skyrim Special Edition brings the epic fantasy to life in stunning detail. The Special Edition includes the critically acclaimed game and add-ons with all-new features like remastered art and effects, volumetric god rays, dynamic depth of field, screen-space reflections, and more. Skyrim Special Edition also brings the full power of mods to the PC and consoles. New quests, environments, characters, dialogue, armor, weapons and more – with Mods, there are no limits to what you can experience.', 'rpg', 75, 37, 'skyrim.jpg', 0, 0);
INSERT INTO `products` VALUES (19, 'Slime Rancher', 'Slime Rancher is the tale of Beatrix LeBeau, a plucky, young rancher who sets out for a life a thousand light years away from Earth on the ‘Far, Far Range’ where she tries her hand at making a living wrangling slimes.', 'adventure', 80, 17, 'slimerancher.jpg', 0, 0);
INSERT INTO `products` VALUES (20, 'Stardew Valley', 'You''ve inherited your grandfather''s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home?', 'rpg', 45, 32, 'stardewvalley.jpg', 0, 0);
INSERT INTO `products` VALUES (21, 'Subnautica', 'Descend into the depths of an alien underwater world filled with wonder and peril. Craft equipment, pilot submarines and out-smart wildlife to explore lush coral reefs, volcanoes, cave systems, and more - all while trying to survive.', 'adventure', 99, 16, 'subnautica.jpg', 0, 0);
INSERT INTO `products` VALUES (22, 'The Witcher 3', 'You are Geralt of Rivia, mercenary monster slayer. Before you stands a war-torn, monster-infested continent you can explore at will. Your current contract? Tracking down Ciri — the Child of Prophecy, a living weapon that can alter the shape of the world.', 'adventure', 125, 28, 'thewitcher3.jpg', 0, 0);
INSERT INTO `products` VALUES (23, 'Undertale', 'UNDERTALE! The RPG game where you don''t have to destroy anyone.', 'rpg', 35, 10, 'undertale.jpg', 0, 0);
     