-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2016 at 06:29 AM
-- Server version: 10.0.28-MariaDB-0+deb8u1
-- PHP Version: 5.6.27-0+deb8u1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pacificnm`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
`config_id` int(20) NOT NULL,
  `config_version` varchar(20) NOT NULL,
  `config_copy_year` int(4) NOT NULL,
  `config_company_name` varchar(200) NOT NULL,
  `config_company_name_short` varchar(60) NOT NULL,
  `config_company_name_abv` varchar(20) NOT NULL,
  `config_company_street` varchar(200) NOT NULL,
  `config_company_street_cont` varchar(200) DEFAULT NULL,
  `config_company_city` varchar(200) NOT NULL,
  `config_company_state` varchar(200) NOT NULL,
  `config_company_postal` varchar(60) NOT NULL,
  `config_company_phone` varchar(60) NOT NULL,
  `config_company_phone_alt` varchar(60) DEFAULT NULL,
  `config_http_address` varchar(200) NOT NULL,
  `config_date_long` varchar(60) NOT NULL,
  `config_date_short` varchar(60) NOT NULL,
  `config_lang` varchar(20) NOT NULL,
  `config_currency` varchar(20) NOT NULL,
  `config_smtp_host` varchar(255) DEFAULT NULL,
  `config_smtp_port` int(4) DEFAULT NULL,
  `config_smtp_security` varchar(60) DEFAULT NULL,
  `config_smtp_display` varchar(255) DEFAULT NULL,
  `config_smtp_email` varchar(255) DEFAULT NULL,
  `config_smtp_password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_id`, `config_version`, `config_copy_year`, `config_company_name`, `config_company_name_short`, `config_company_name_abv`, `config_company_street`, `config_company_street_cont`, `config_company_city`, `config_company_state`, `config_company_postal`, `config_company_phone`, `config_company_phone_alt`, `config_http_address`, `config_date_long`, `config_date_short`, `config_lang`, `config_currency`, `config_smtp_host`, `config_smtp_port`, `config_smtp_security`, `config_smtp_display`, `config_smtp_email`, `config_smtp_password`) VALUES
(1, '1.0.0', 2013, '', '', '', '', '', '', '', '', '', '', '', 'm/d/Y h:i a', 'm/d/Y', 'en_US', 'USD', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`config_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
MODIFY `config_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;SET FOREIGN_KEY_CHECKS=1;
