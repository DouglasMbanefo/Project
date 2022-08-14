-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 04:24 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `mechanical_services`
--

CREATE TABLE `mechanical_services` (
  `id` int(11) NOT NULL,
  `service_provider` int(11) DEFAULT NULL,
  `location` text,
  `title` text,
  `description` longtext,
  `cost` float DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_mechanical`
--

CREATE TABLE `orders_mechanical` (
  `id` int(11) NOT NULL,
  `order_id` text NOT NULL,
  `user` int(11) DEFAULT NULL,
  `service_provider` int(11) DEFAULT NULL,
  `mechanical_service` int(11) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `location` text,
  `card_holder_name` text,
  `card_number` text,
  `card_exp_date` text,
  `card_cvc` text,
  `date` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rental_orders`
--

CREATE TABLE `rental_orders` (
  `id` int(11) NOT NULL,
  `order_id` text,
  `user` int(11) DEFAULT NULL,
  `service_provider` int(11) DEFAULT NULL,
  `rental_service` int(11) DEFAULT NULL,
  `pick_up_location` text,
  `pick_up_date` text,
  `drop_off_location` text,
  `drop_off_date` text,
  `cost` float(11,2) DEFAULT NULL,
  `driver_email` text,
  `driver_title` text,
  `driver_first_name` text,
  `driver_last_name` text,
  `driver_phone` text,
  `driver_address` text,
  `card_holder_name` text,
  `card_number` text,
  `card_exp_date` text,
  `card_cvc` text,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rental_services`
--

CREATE TABLE `rental_services` (
  `id` int(11) NOT NULL,
  `car_name` text,
  `car_type` text,
  `seats` text,
  `mileage` text,
  `luggage` int(11) DEFAULT NULL,
  `a_c` text,
  `price_per_day` float DEFAULT NULL,
  `city` text,
  `country` text,
  `service_provider` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `date` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `service_provider` int(11) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `service_type` text,
  `review` longtext,
  `rating` int(11) DEFAULT NULL,
  `date` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `id` int(11) NOT NULL,
  `company_name` text,
  `address` text,
  `email` text,
  `phone` text,
  `password` text,
  `bank_account_no` text,
  `bank_account_name` text,
  `bank` text,
  `photo` text,
  `date` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` text,
  `last_name` text,
  `email` text,
  `phone` text,
  `password` text,
  `address` text,
  `photo` text,
  `date` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mechanical_services`
--
ALTER TABLE `mechanical_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_mechanical`
--
ALTER TABLE `orders_mechanical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_orders`
--
ALTER TABLE `rental_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental_services`
--
ALTER TABLE `rental_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mechanical_services`
--
ALTER TABLE `mechanical_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_mechanical`
--
ALTER TABLE `orders_mechanical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rental_orders`
--
ALTER TABLE `rental_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rental_services`
--
ALTER TABLE `rental_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
