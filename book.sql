-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 07, 2022 at 12:49 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `discount` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `price`, `category`, `discount`) VALUES
(1, 'Nike', 5000, 'Shoes', 10),
(2, 'Oneplus', 20000, 'Mobiles', 20),
(4, 'iphone11', 50000, 'Mobiles', 0),
(5, 'Dell', 50000, 'Laptop', 30),
(6, 'Earrings', 450, 'Accessories', 0),
(7, 'Watch', 10000, 'Accessories', 25),
(8, 'Air Jordan', 15000, 'Shoes', 10),
(9, 'Adidas', 1500, 'Shoes', 0),
(10, 'Converse', 5000, 'Shoes', 50),
(11, 'Nothing', 30000, 'Mobiles', 15),
(13, 'Lenovo', 50999, 'Laptop', 18),
(14, 'HP', 49999, 'Laptop', 0),
(15, 'Asus', 28000, 'Laptop', 30),
(16, 'Chains', 799, 'Accessories', 10),
(17, 'Lipsticks', 599, 'Accessories', 20),
(19, 'samsung', 8000, 'Mobiles', 10),
(20, 'Oneplus', 65000, 'Mobiles', 20),
(21, 'Dell', 99999, 'Laptop', 99);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Pragnya Ambekar', 'pragnya.ambekar@gmail.com', '7780146430', '951dce513f71ffc88834fe877976c6f6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
