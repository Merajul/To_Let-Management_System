-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 12:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tolet`
--

-- --------------------------------------------------------

--
-- Table structure for table `flat_post`
--

CREATE TABLE `flat_post` (
  `flat_id` int(11) NOT NULL,
  `flat_name` varchar(150) NOT NULL,
  `landloard_id` int(11) NOT NULL,
  `drawing` varchar(50) NOT NULL,
  `dining` varchar(50) NOT NULL,
  `lift` varchar(50) NOT NULL,
  `gas` varchar(50) NOT NULL,
  `generator` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flat_post`
--

INSERT INTO `flat_post` (`flat_id`, `flat_name`, `landloard_id`, `drawing`, `dining`, `lift`, `gas`, `generator`, `date`, `price`, `phone`, `image`) VALUES
(1, 'Kamrul', 3, 'Yes', 'No', 'Yes', 'Yes', 'Yes', '2018-09-14', 15000, '01729900631', '../images/1536946057seller-verification.jpg'),
(2, 'dawbn', 3, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2018-09-15', 21545, '0175083084', '../images/1536982381baby-boy-child-159533.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `landload_reg`
--

CREATE TABLE `landload_reg` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `house_no` varchar(100) NOT NULL,
  `road_no` varchar(100) NOT NULL,
  `home_vat_id` varchar(150) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `police_clearence` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(120) NOT NULL,
  `district` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landload_reg`
--

INSERT INTO `landload_reg` (`reg_id`, `name`, `email`, `mobile`, `address`, `house_no`, `road_no`, `home_vat_id`, `nid`, `police_clearence`, `password`, `country`, `district`, `image`, `status`) VALUES
(1, 'OLiullah', 'oliullah@doofazit.com', '01729900631', 'Mohammadpur', '1575/A Mohammadpur', '79/A', '4454120215', '57854513230', 'Yes', '123', 'Bangladesh', 'Barguna', '../images/1536980276avatar.jpg', 1),
(2, 'OLiullah', 'oliullah@doofazit.com', '01729900631', 'Mohammadpur', '1575/A Mohammadpur', '79/A', '4454120215', '57854513230', 'Yes', '111', 'Bangladesh', 'Barguna', '../images/agent-1.jpg', 1),
(3, 'Sahadat', 'sahadat@gmail.com', '01786522200', 'Dhaka', '1575/A Mohammadpur', '79/A', '4454120215', '578545132333', 'Yes', '123', 'Bangladesh', 'Barguna', '../images/1536943852user-profile.png', 1),
(4, 'ifat vilen', 'vilen@gmail.com', '0175083084', 'dhaka,bangladesh', '45/40', '456', '987', '123456789', '897', '123', 'India', 'Chandpur', '../images/153700522615032015058.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member_reg`
--

CREATE TABLE `member_reg` (
  `member_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `police_clearence` varchar(120) NOT NULL,
  `country` varchar(120) NOT NULL,
  `district` varchar(120) NOT NULL,
  `present_address` varchar(500) NOT NULL,
  `parment_address` varchar(500) NOT NULL,
  `image` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_reg`
--

INSERT INTO `member_reg` (`member_id`, `name`, `mobile`, `email`, `password`, `nid`, `police_clearence`, `country`, `district`, `present_address`, `parment_address`, `image`, `status`) VALUES
(1, 'Atiqullah', '01787551200', 'atiqullah@doofazit.com', '1', '57854513230', '', 'Bangladesh', 'Barguna', 'Dhaka', 'Barguna', '../images/1535769144men31.jpg', 1),
(2, 'Kamrul islam', '01729900631', 'kamrul@gmail.com', '123', '57854513231', '120', 'Bangladesh', 'Barguna', 'Dhaka', 'Dhaka', '../images/153700449315032015058.jpg', 1),
(3, 'mustafiz islam', '0175083084', 'mustafiz@gmail.com', '123', '654987', '54654', 'India', 'Chittagong', 'dhaka,bangladesh', 'dhaka,bangladesh', '../images/1536983643hrthrt5.png', 1),
(4, 'ifat vilen', '0175083084', 'vilen@gmail.com', '123', '9632587', '1212', 'Bangladesh', 'Comilla', 'dhaka,bangladesh', 'dhaka,bangladesh', '../images/1536988848avatar.jpg', 1),
(5, 'merajul islam', '0175083084', 'dawnmerajul@gmail.com', '123', '5698745', '45698', 'India', 'Barisal', 'dhaka,bangladesh', 'dhaka,bangladesh', '../images/1537005480baby-boy-child-159533.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member_wishlist`
--

CREATE TABLE `member_wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `landloard_id` int(11) NOT NULL,
  `accept_date` varchar(50) NOT NULL,
  `certificate` varchar(205) NOT NULL,
  `police_clearance_no` varchar(120) NOT NULL,
  `clearance` varchar(100) NOT NULL COMMENT 'landload ',
  `clearance_date` varchar(200) NOT NULL,
  `remark` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  `clearance_checking` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_wishlist`
--

INSERT INTO `member_wishlist` (`wishlist_id`, `member_id`, `landloard_id`, `accept_date`, `certificate`, `police_clearance_no`, `clearance`, `clearance_date`, `remark`, `status`, `clearance_checking`) VALUES
(1, 1, 1, '2018-10-01', 'Yes', '50500', '100', '2018-09-15', 'nice', 0, 1),
(2, 2, 3, '2018-10-01', 'Yes', '12212018', '80', '', 'jhjk', 1, 1),
(4, 3, 1, '2018-09-11', 'Yes', '54654', '60', '2018-09-11', 'hg', 0, 1),
(5, 4, 4, '2018-09-15', 'Yes', '1212', '', '', '', 1, 0),
(6, 5, 1, '2018-09-21', 'Yes', '50501', '80', '2018-09-21', 'bad', 0, 1),
(7, 5, 3, '2018-09-28', 'Yes', '45698', '', '', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flat_post`
--
ALTER TABLE `flat_post`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `landload_reg`
--
ALTER TABLE `landload_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `member_reg`
--
ALTER TABLE `member_reg`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_wishlist`
--
ALTER TABLE `member_wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flat_post`
--
ALTER TABLE `flat_post`
  MODIFY `flat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `landload_reg`
--
ALTER TABLE `landload_reg`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member_reg`
--
ALTER TABLE `member_reg`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member_wishlist`
--
ALTER TABLE `member_wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
