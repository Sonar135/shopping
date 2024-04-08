-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 02:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product`, `category`, `price`, `quantity`, `image`, `product_id`) VALUES
(1, 'samsung fridge', 'home appliances', 400000, 2, 'silver-steel-fridge-model-isolated-white-background_124507-67356-Photoroom.png-Photoroom.png', '7'),
(12, 'samsung microwave', 'home appliances', 120000, 4, 'cq5dam.web.5000.5000-Photoroom.png-Photoroom.png', '8'),
(13, 'blue table', 'furniture', 9000, 4, 'S653011-Photoroom.png-Photoroom.png', '6');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `category`, `price`, `description`, `quantity`, `image`) VALUES
(1, 'black plain T-Shirt', 'fashion', 12000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue eu. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sit amet porttitor eget dolor morbi non arcu risus. Viverra justo nec ultrices dui sapien eget mi proin sed. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Porttitor eget dolor morbi non arcu. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Amet commodo nulla facilisi nullam. Leo integer malesuada nunc vel risus commodo viverra maecenas.', 45, '31e01d9ca21c00e9eb6b0f4b3b6a0c8cf240972f_8807JF59_000_1-Photoroom.png-Photoroom.png'),
(2, 'black shoes', 'fashion', 14000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue eu. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sit amet porttitor eget dolor morbi non arcu risus. Viverra justo nec ultrices dui sapien eget mi proin sed. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Porttitor eget dolor morbi non arcu. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Amet commodo nulla facilisi nullam. Leo integer malesuada nunc vel risus commodo viverra maecenas.', 84, '-original-imagzry3gugpvqty-Photoroom.png-Photoroom.png'),
(3, 'black sofa', 'furniture', 45000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue eu. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sit amet porttitor eget dolor morbi non arcu risus. Viverra justo nec ultrices dui sapien eget mi proin sed. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Porttitor eget dolor morbi non arcu. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Amet commodo nulla facilisi nullam. Leo integer malesuada nunc vel risus commodo viverra maecenas.', 93, 'istockphoto-184881631-612x612.jpg'),
(4, 'black sapphire watch', 'fashion', 56000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue eu. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sit amet porttitor eget dolor morbi non arcu risus. Viverra justo nec ultrices dui sapien eget mi proin sed. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Porttitor eget dolor morbi non arcu. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Amet commodo nulla facilisi nullam. Leo integer malesuada nunc vel risus commodo viverra maecenas.', 54, 'watch.png'),
(5, 'black and white jordans', 'fashion', 22000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue eu. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sit amet porttitor eget dolor morbi non arcu risus. Viverra justo nec ultrices dui sapien eget mi proin sed. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Porttitor eget dolor morbi non arcu. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Amet commodo nulla facilisi nullam. Leo integer malesuada nunc vel risus commodo viverra maecenas.', 98, 'jordan-shoes-4k-ebfnd3563olc5t0k-Photoroom.png-Photoroom.png'),
(6, 'blue table', 'furniture', 9000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue eu. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sit amet porttitor eget dolor morbi non arcu risus. Viverra justo nec ultrices dui sapien eget mi proin sed. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Porttitor eget dolor morbi non arcu. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Amet commodo nulla facilisi nullam. Leo integer malesuada nunc vel risus commodo viverra maecenas.', 65, 'S653011-Photoroom.png-Photoroom.png'),
(7, 'samsung fridge', 'home appliances', 400000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue eu. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sit amet porttitor eget dolor morbi non arcu risus. Viverra justo nec ultrices dui sapien eget mi proin sed. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Porttitor eget dolor morbi non arcu. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Amet commodo nulla facilisi nullam. Leo integer malesuada nunc vel risus commodo viverra maecenas.', 56, 'silver-steel-fridge-model-isolated-white-background_124507-67356-Photoroom.png-Photoroom.png'),
(8, 'samsung microwave', 'home appliances', 120000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue lacus viverra vitae congue eu. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sit amet porttitor eget dolor morbi non arcu risus. Viverra justo nec ultrices dui sapien eget mi proin sed. Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Porttitor eget dolor morbi non arcu. Elit ullamcorper dignissim cras tincidunt lobortis feugiat. Amet commodo nulla facilisi nullam. Leo integer malesuada nunc vel risus commodo viverra maecenas.', 86, 'cq5dam.web.5000.5000-Photoroom.png-Photoroom.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
