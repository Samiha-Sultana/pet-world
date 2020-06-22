-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 04:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Sam', 'samihasultana100@gmail.com', 'Hi', 'My cat is sick'),
('Sam', 'samihasultana100@gmail.com', 'Hi', 'My cat is sick'),
('Sam', 'samihasultana100@gmail.com', 'Hi', 'My cat is sick'),
('Sam', 'samihasultana100@gmail.com', 'Hi', 'My cat is sick'),
('Sam', 'samihasultana100@gmail.com', 'Hi', 'My pets is sick'),
('Sam', 'samihasultana100@gmail.com', 'Hi', 'My pets is sick'),
('Sam', 'samihasultana100@gmail.com', 'Hi', 'My pet is sick');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(250) NOT NULL,
  `p_names` varchar(250) NOT NULL,
  `cus_name` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `zip_code` int(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantity` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_names`, `cus_name`, `contact_no`, `email`, `address`, `country`, `details`, `zip_code`, `time`, `quantity`) VALUES
(4, 'Regular Cat ', 'Samiha', '01989983417', 'samihasultana100@gmail.com', '51 Circular Road', 'Bangladesh', 'g', 2, '2020-03-29 02:16:21', 4),
(6, 'Plant', 'Maisha', '01989983417', 'mais@gmail.com', 'science lab', 'India', 'Out of country', 2, '2020-03-29 02:52:57', 4),
(8, 'Small Cat', 'Samiha', '01989983417', 'samihasultana100@gmail.com', 'Elephant Road', 'Bangladesh', 'ok', 3, '2020-03-29 03:38:35', 1),
(9, 'Dog House', 'Ahnaf', '3', 'ahnaf@gmail.com', 'A', 'Bangladesh', 'A', 3, '2020-03-29 09:19:19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `product_type` varchar(250) NOT NULL,
  `price` int(250) NOT NULL,
  `c_price` int(250) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `tags` varchar(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `details`, `image`, `product_type`, `price`, `c_price`, `brand`, `tags`, `time`) VALUES
(5, 'Aple', 'nee', '1543939758_1464198048_dl-310.jpg', 'dress', 300, 3500, 'polo', 'summer', '2018-12-04 16:09:18'),
(7, 'Woofbix', 'Chicken and Rice', '1585305234_dog_food.jpg', 'Food', 500, 550, 'Woofbix', 'popular,cool,happy', '2020-03-27 10:33:54'),
(8, 'Automatic Feather Ball', 'Good for cats ', '1585332279_ball.jpg', 'Toy', 1700, 2000, 'Amazon', 'popular,toy', '2020-03-27 18:04:39'),
(9, 'Stainless Steel Water and Food Bowl', 'Premium quality', '1585334829_pet_bowl.jpg', 'Toy', 800, 1000, 'Amazon', 'popular,friendly', '2020-03-27 18:47:09'),
(11, 'Dog House', 'Comfortable', '1585335689_house.jpg', 'Toy', 1200, 1400, 'Pet', 'popular,toy', '2020-03-27 19:01:29'),
(12, 'Hamster Swing plus house', 's', '1585382245_ham.jfif', 'Toy', 2000, 2200, 'Amazon', 'rare', '2020-03-28 07:57:25'),
(13, 'Hybrid Small Dog', 'very playful and cute', '1585386875_dog1.jpg', 'Animal', 7000, 7200, 'Pet', 'dog', '2020-03-28 09:14:35'),
(14, 'Regular Dog', 'very playful', '1585386946_dog2.jpg', 'Animal', 0, 0, 'Pet', 'dog,adoption', '2020-03-28 09:15:46'),
(15, 'Small Cat', 'lonely and wants to play', '1585386999_cat2.jpg', 'Animal', 8000, 0, 'Pet', 'cat', '2020-03-28 09:16:39'),
(16, 'Goldfish', 'fun loving', '1585387221_fish.jpg', 'Animal', 500, 600, 'Pet', 'fish', '2020-03-28 09:20:21'),
(17, 'Plant', 'gives oxygen!', '1585387271_plant1.jpg', 'Animal', 300, 350, 'Pet', 'plant', '2020-03-28 09:21:11'),
(18, 'Classic Pet Dog Vest T-Shirt', 'very fashionable', '1585387718_dog_cloth.jfif', 'Cloth', 200, 250, 'Dog Apparel Deals', 'cloth,popular', '2020-03-28 09:28:38'),
(20, 'Pet Medicine', 'medicine', '1585452902_medicine.jfif', 'Medicine', 40, 50, 'Medcare', 'med', '2020-03-29 03:35:02'),
(21, 'Premium Pet Oatmeal Shampoo', 'cleans', '1585454389_pet_shampoo.jpg', 'Cosmetics', 250, 270, 'Naturals', 'popular', '2020-03-29 03:59:49'),
(24, 'Antibacterial powder', 'stops itching', '1585455399_1585454741_powder.jfif', 'Medicine', 40, 50, 'Naturals', 'soft, natural', '2020-03-29 04:16:39'),
(25, 'Pet Soap', 'makes you feel nice', '1585455562_pet_soap.jpg', 'Cosmetics', 120, 150, 'Naturals', 'healthy', '2020-03-29 04:19:22'),
(26, 'A', 'hh', '1471061737_8053672256123_shad_fr.jpg', 'Toy', 60, 120, 'k', 'k', '2020-03-29 09:11:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
