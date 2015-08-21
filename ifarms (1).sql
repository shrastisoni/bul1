-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2015 at 11:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ifarms`
--
CREATE DATABASE IF NOT EXISTS `ifarms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ifarms`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `description`) VALUES
(2, 'Cereals'),
(3, 'Vegetables'),
(8, 'Fruit'),
(9, 'Dairys');

-- --------------------------------------------------------

--
-- Table structure for table `commodities`
--

CREATE TABLE IF NOT EXISTS `commodities` (
  `commodity_id` int(11) NOT NULL AUTO_INCREMENT,
  `commodity_name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `perishable` varchar(45) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `unit_of_measure` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `approved` int(1) DEFAULT NULL,
  PRIMARY KEY (`commodity_id`),
  KEY `commodity_category_fk_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `commodities`
--

INSERT INTO `commodities` (`commodity_id`, `commodity_name`, `description`, `perishable`, `category_id`, `unit_of_measure`, `created_on`, `created_by`, `approved`) VALUES
(2, 'abc', 'testing', 'Yes', 8, '55', NULL, NULL, NULL),
(3, 'xyz', 'TESTING2', 'No', 9, '7', NULL, NULL, NULL),
(4, 'testt', 'dsdsdsd', 'Yes', 3, '4', NULL, NULL, NULL),
(5, 'dsdsd', 'sds', 'No', 8, '7', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `organization_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `organization_type` varchar(45) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `postal_address` varchar(255) DEFAULT NULL,
  `county_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`organization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`organization_id`, `name`, `description`, `organization_type`, `contact_person`, `contact_email`, `contact_phone`, `postal_address`, `county_id`) VALUES
(1, 'Gyrix Technolabs', 'Software Developer', 'Buying Organization', 'Richa', 'richa.agrawal@gyrix.co', '945945845', '2342323', NULL),
(2, 'Gyrix21', 'sdsd', 'Selling Organization', 'Kunal', 'kunal@gyrix.co', '94594584555', '5654645', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(45) NOT NULL,
  `token` varchar(521) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('richa.agrawal@gyrix.co', '2d28ef9a5a4175860515ac4dc404dca98edd2a35e97d10f5176536dfccaa718a', '2015-04-30 05:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `description`) VALUES
(1, 'System Administrator', NULL),
(2, 'Organization Administrator', NULL),
(3, 'Organization Member', NULL),
(4, 'Organization Finance', NULL),
(5, 'Organization Farmer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `password` text,
  `active` int(1) DEFAULT NULL,
  `force_password_reset` int(1) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(521) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_role_fk_idx` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone_number`, `role_id`, `first_name`, `surname`, `password`, `active`, `force_password_reset`, `last_login`, `last_ip`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'richa.agrawal@gyrix.co', NULL, 1, 'Richa', 'Agrawal', '$2y$10$z/2bHi3DoDup5fjnZKFNueBqUHrbal1GskQ3KNzcACXE3K28nzJOC', NULL, NULL, NULL, NULL, '2015-04-30 05:19:56', '2015-05-02 01:24:01', 'yJ7UCuXZtww5ct4nLDhQIcDREthHCYGoDUzfQyGBoJ9BnfUCnyDDZcYT2p45'),
(6, 'arpita.hunka@gyrix.co', '3498343433', 5, 'Arpita', 'Hunka', '$2y$10$brcrIzfFACTN6J.Dx.eChuysFIIbBW1.LBJZLVYT/foi0PEEVmE4u', NULL, NULL, NULL, NULL, '2015-05-02 02:25:19', '2015-05-02 02:25:19', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commodities`
--
ALTER TABLE `commodities`
  ADD CONSTRAINT `commodity_category_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
