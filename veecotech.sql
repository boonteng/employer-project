-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 06:45 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veecotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `company_id` int(50) UNSIGNED NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city` text,
  `country` text NOT NULL,
  `state` text,
  `postal_code` int(10) DEFAULT NULL,
  `time_zone` time DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `toll_free` varchar(11) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`company_id`, `company_name`, `password`, `address1`, `address2`, `city`, `country`, `state`, `postal_code`, `time_zone`, `phone`, `fax`, `mobile`, `toll_free`, `website`) VALUES
(1, 'Liptaz Enterprise', 'liptaz', 'No. 231, 231A & 231B, ', 'Jalan Jelutong', 'George Town', 'Malaysia', 'Pulau Pinang', 11600, '00:08:00', '04281 5002', '04281 5002', '04281 5002', '6451320', 'www.liptaz.com.my'),
(6, 'Pilot Construction Sdn Bhd', 'pilot', 'No. 11 & 13, Wisma Pilot', 'Jalan Setia Prima D', 'Shah Alam', 'Malaysia', 'Selangor', 40170, '00:00:00', '03-3342 5508', '03-3342 5508', '03-3342 5508', '243568', 'www.pilot.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(100) UNSIGNED NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` varchar(50) NOT NULL,
  `p_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_description`) VALUES
(1, 'Capless Fermo', '20.01', 'Capless series fountain pen is the first retractable fountain pen in the world'),
(5, 'Kakuno', '15.90', 'Pilots Kakuno is a fountain pen suitable for both beginner and experienced users');

-- --------------------------------------------------------

--
-- Table structure for table `retail`
--

CREATE TABLE `retail` (
  `retail_id` int(10) UNSIGNED NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_contactname` varchar(100) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `r_country` varchar(20) NOT NULL,
  `r_phone` varchar(20) NOT NULL,
  `r_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retail`
--

INSERT INTO `retail` (`retail_id`, `r_name`, `r_contactname`, `r_email`, `r_address`, `r_country`, `r_phone`, `r_mobile`) VALUES
(1, 'Joey Enterprise', 'Yi Huey', 'joey@gmail.com', 'ewrtyujk', 'dsfghjnk', '234567', '234567'),
(3, 'Popular Book Co. (M) Sdn. Bhd.', 'Ms Lim', 'admin@popular.com', '8, Jalan 7/118b, Desa Tun Razak, 57000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Malaysia', '03-9179 6333', '03-9179 6333');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `entry_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(11) NOT NULL,
  `date_entered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`entry_id`, `email`, `password`, `date_entered`) VALUES
(1, 'admin1@veecotech.com', 'admin1', '2018-07-16 22:06:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `retail`
--
ALTER TABLE `retail`
  ADD PRIMARY KEY (`retail_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`entry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `company_id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `retail`
--
ALTER TABLE `retail`
  MODIFY `retail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `entry_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
