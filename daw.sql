-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 12, 2021 at 03:46 PM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `atestat_2021`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `produse`
-- 

CREATE TABLE `produse` (
  `nume` char(25) NOT NULL default '',
  `pret` int(11) NOT NULL default '0',
  `cantitate` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `produse`
-- 

INSERT INTO `produse` VALUES ('gtav', 50, 10);
INSERT INTO `produse` VALUES ('borderlands2', 25, 16);
INSERT INTO `produse` VALUES ('rust', 60, 13);
INSERT INTO `produse` VALUES ('hades', 70, 4);
INSERT INTO `produse` VALUES ('doom', 150, 11);
INSERT INTO `produse` VALUES ('cyberpunk', 200, 2);
INSERT INTO `produse` VALUES ('left4dead2', 10, 30);
INSERT INTO `produse` VALUES ('battlefieldv', 80, 6);
INSERT INTO `produse` VALUES ('thewitcher3', 80, 20);
INSERT INTO `produse` VALUES ('seaofthieves', 110, 3);
INSERT INTO `produse` VALUES ('fallout4', 50, 9);
INSERT INTO `produse` VALUES ('satisfactory', 90, 7);
INSERT INTO `produse` VALUES ('minecraft', 120, 30);
INSERT INTO `produse` VALUES ('nomanssky', 130, 3);
INSERT INTO `produse` VALUES ('subnautica', 65, 5);
INSERT INTO `produse` VALUES ('slimerancher', 40, 19);
INSERT INTO `produse` VALUES ('skyrim', 60, 40);
INSERT INTO `produse` VALUES ('darksouls3', 70, 23);
INSERT INTO `produse` VALUES ('conanexiles', 100, 2);
INSERT INTO `produse` VALUES ('undertale', 25, 8);
INSERT INTO `produse` VALUES ('stardewvalley', 45, 34);
INSERT INTO `produse` VALUES ('diablo3', 70, 7);
INSERT INTO `produse` VALUES ('baldursgate3', 80, 0);
