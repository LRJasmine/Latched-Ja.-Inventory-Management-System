-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 03, 2020 at 10:39 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `latched_ja_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `item_colour` varchar(50) NOT NULL,
  `item_material` varchar(50) NOT NULL,
  `sell_price` float NOT NULL,
  `purchase_price` float NOT NULL,
  `supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `type`, `qty`, `item_colour`, `item_material`, `sell_price`, `purchase_price`, `supplier`) VALUES
(1, 'Blessed Ears', 'Earring', 6, 'Gold', 'Brass', 200, 500, 'Sally Suppliers'),
(2, 'Cursed Ears', 'Earring', 14, 'Red', 'Brass', 900, 600, 'Sally Suppliers'),
(5, 'Jamaica Design Anklet', 'Anklet', 9, 'Gold', 'Brass', 650, 500, 'Kerry Jewellers'),
(14, 'Keep It Cute Clutch', 'Bag', 6, 'Blue', 'Leather', 2500, 2000, 'Sally Suppliers'),
(15, 'Major Moves Crossbody Bag', 'Bag', 17, 'Pink', 'Leather', 900, 600, 'Kerry Suppliers'),
(16, 'Dance with Me Handbag', 'Bag', 4, 'Black', 'Nylon', 2000, 1000, 'Sally Suppliers'),
(18, 'Tea Leaf Ring Set', 'Ring', 20, 'Gold', 'Brass', 500, 500, 'Sally Suppliers'),
(19, 'BabyGirl Necklace', 'Necklace', 30, 'Silver', 'Silver', 300, 250, 'Sally Supplier'),
(20, 'Zipper Earrings', 'Earring', 15, 'Silver', 'Silver', 500, 400, 'Kay Jewellers'),
(21, 'Heather Hoop Earrings', 'Earring', 20, 'Gold', 'Gold', 500, 300, 'Lily Jewellers');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` float NOT NULL,
  `item_qty` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_status` enum('Delivered','Not Delivery') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_id`, `item_name`, `item_price`, `item_qty`, `order_date`, `delivery_date`, `delivery_status`) VALUES
(1, 14, 'Keep It Cute Clutch', 2500, 2, '2020-12-01', '2020-12-11', 'Not Delivery'),
(2, 2, 'Cursed Ears', 900, 1, '2020-11-28', '2020-12-04', 'Not Delivery'),
(3, 16, 'Dance with Me Handbag', 2000, 1, '2020-12-01', '2020-12-02', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `item_id`, `item_name`, `qty`, `date`) VALUES
(1, 14, 'Keep It Cute Clutch', 3, '2020-12-02'),
(2, 19, 'BabyGirl Necklace', 5, '2020-12-02'),
(3, 16, 'Dance with Me Handbag', 1, '2020-12-02'),
(4, 2, 'Cursed Ears', 2, '2020-12-02'),
(5, 19, 'BabyGirl Necklace', 2, '2020-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_num` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

GRANT ALL PRIVILEGES ON latched_ja_database.* TO 'comp2140_student'@'localhost'
IDENTIFIED BY 'PmEGW3L7fkKXRzvA';