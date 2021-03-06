-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 11:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cashier`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`id`, `name`, `description`) VALUES
(1, 'Sakit Kepala', NULL),
(2, 'Luka Ringan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_groups`
--

CREATE TABLE `table_groups` (
  `group_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_groups`
--

INSERT INTO `table_groups` (`group_id`, `name`, `description`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Kasir', 'membeli dan menjual obat');

-- --------------------------------------------------------

--
-- Table structure for table `table_medicine`
--

CREATE TABLE `table_medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `single_purchase_price` int(11) NOT NULL,
  `single_selling_price` int(11) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_medicine`
--

INSERT INTO `table_medicine` (`medicine_id`, `medicine_name`, `category_id`, `producer`, `single_purchase_price`, `single_selling_price`, `description`) VALUES
(1, 'Oskadon Oke', 1, 'Pt. Ferguso', 2500, 3000, '-'),
(2, 'Paracetamol', 2, 'PT. Taplak', 750, 1000, '-'),
(3, 'Handiplas', 2, 'PT. Aduh Sakit', 500, 750, '-'),
(4, 'Antalgin', 1, 'PT. Mules', 300, 500, '-');

-- --------------------------------------------------------

--
-- Table structure for table `table_purchase`
--

CREATE TABLE `table_purchase` (
  `purchase_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `purchase_amount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `purchase_transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_purchase`
--

INSERT INTO `table_purchase` (`purchase_id`, `medicine_id`, `purchase_amount`, `total`, `purchase_transaction_id`) VALUES
(1, 4, 5, 1500, 1),
(2, 3, 5, 2500, 1),
(3, 1, 5, 12500, 1),
(4, 2, 5, 3750, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_purchase_transaction`
--

CREATE TABLE `table_purchase_transaction` (
  `purchase_transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_purchase_transaction`
--

INSERT INTO `table_purchase_transaction` (`purchase_transaction_id`, `user_id`, `supplier_id`, `date`, `total`) VALUES
(1, 2, 2, 1567397325, 20250);

-- --------------------------------------------------------

--
-- Table structure for table `table_selling`
--

CREATE TABLE `table_selling` (
  `selling_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `selling_amount` int(11) NOT NULL,
  `selling_transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_selling`
--

INSERT INTO `table_selling` (`selling_id`, `medicine_id`, `selling_amount`, `selling_transaction_id`) VALUES
(1, 4, 1, 1),
(2, 2, 3, 1),
(3, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_selling_transaction`
--

CREATE TABLE `table_selling_transaction` (
  `selling_transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_selling_transaction`
--

INSERT INTO `table_selling_transaction` (`selling_transaction_id`, `user_id`, `date`, `total`) VALUES
(1, 3, 1567400856, 9500);

-- --------------------------------------------------------

--
-- Table structure for table `table_stock`
--

CREATE TABLE `table_stock` (
  `Stock_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `expired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_stock`
--

INSERT INTO `table_stock` (`Stock_id`, `medicine_id`, `stock`, `sold`, `expired`) VALUES
(1, 2, 2, 3, 0),
(2, 4, 4, 1, 0),
(3, 1, 3, 2, 0),
(4, 3, 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_suppliers`
--

CREATE TABLE `table_suppliers` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_suppliers`
--

INSERT INTO `table_suppliers` (`supplier_id`, `name`, `phone`, `description`) VALUES
(1, 'Kita Bisa Supply', '+6282178783212', ''),
(2, 'Kami Supplier', '+6284345456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_users`
--

CREATE TABLE `table_users` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_users`
--

INSERT INTO `table_users` (`user_id`, `group_id`, `username`, `password`, `name`, `phone`, `created_on`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '+6282178780000', 1371803321),
(2, 2, 'kasir1', '29c748d4d8f4bd5cbc0f3f60cb7ed3d0', 'Saya Kasir 1', '+6284345451111', 1567396389),
(3, 2, 'kasir2', '8c86013d8ba23d9b5ade4d6463f81c45', 'Saya Kasir 2', '+6282178782222', 1567396611);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_groups`
--
ALTER TABLE `table_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `table_medicine`
--
ALTER TABLE `table_medicine`
  ADD PRIMARY KEY (`medicine_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `table_purchase`
--
ALTER TABLE `table_purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `medicine_id` (`medicine_id`),
  ADD KEY `transaction_id` (`purchase_transaction_id`);

--
-- Indexes for table `table_purchase_transaction`
--
ALTER TABLE `table_purchase_transaction`
  ADD PRIMARY KEY (`purchase_transaction_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `table_selling`
--
ALTER TABLE `table_selling`
  ADD PRIMARY KEY (`selling_id`),
  ADD KEY `medicine_id` (`medicine_id`),
  ADD KEY `selling_transaction_id` (`selling_transaction_id`);

--
-- Indexes for table `table_selling_transaction`
--
ALTER TABLE `table_selling_transaction`
  ADD PRIMARY KEY (`selling_transaction_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `table_stock`
--
ALTER TABLE `table_stock`
  ADD PRIMARY KEY (`Stock_id`),
  ADD KEY `medicine_id` (`medicine_id`) USING BTREE;

--
-- Indexes for table `table_suppliers`
--
ALTER TABLE `table_suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `table_users`
--
ALTER TABLE `table_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_groups`
--
ALTER TABLE `table_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_medicine`
--
ALTER TABLE `table_medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_purchase`
--
ALTER TABLE `table_purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_purchase_transaction`
--
ALTER TABLE `table_purchase_transaction`
  MODIFY `purchase_transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_selling`
--
ALTER TABLE `table_selling`
  MODIFY `selling_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_selling_transaction`
--
ALTER TABLE `table_selling_transaction`
  MODIFY `selling_transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_stock`
--
ALTER TABLE `table_stock`
  MODIFY `Stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_suppliers`
--
ALTER TABLE `table_suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_users`
--
ALTER TABLE `table_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_medicine`
--
ALTER TABLE `table_medicine`
  ADD CONSTRAINT `table_medicine_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `table_category` (`id`);

--
-- Constraints for table `table_purchase`
--
ALTER TABLE `table_purchase`
  ADD CONSTRAINT `table_purchase_ibfk_1` FOREIGN KEY (`purchase_transaction_id`) REFERENCES `table_purchase_transaction` (`purchase_transaction_id`),
  ADD CONSTRAINT `table_purchase_ibfk_2` FOREIGN KEY (`medicine_id`) REFERENCES `table_medicine` (`medicine_id`);

--
-- Constraints for table `table_purchase_transaction`
--
ALTER TABLE `table_purchase_transaction`
  ADD CONSTRAINT `table_purchase_transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `table_users` (`user_id`),
  ADD CONSTRAINT `table_purchase_transaction_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `table_suppliers` (`supplier_id`);

--
-- Constraints for table `table_selling`
--
ALTER TABLE `table_selling`
  ADD CONSTRAINT `table_selling_ibfk_1` FOREIGN KEY (`medicine_id`) REFERENCES `table_medicine` (`medicine_id`),
  ADD CONSTRAINT `table_selling_ibfk_2` FOREIGN KEY (`selling_transaction_id`) REFERENCES `table_selling_transaction` (`selling_transaction_id`);

--
-- Constraints for table `table_selling_transaction`
--
ALTER TABLE `table_selling_transaction`
  ADD CONSTRAINT `table_selling_transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `table_users` (`user_id`);

--
-- Constraints for table `table_stock`
--
ALTER TABLE `table_stock`
  ADD CONSTRAINT `table_stock_ibfk_1` FOREIGN KEY (`medicine_id`) REFERENCES `table_medicine` (`medicine_id`);

--
-- Constraints for table `table_users`
--
ALTER TABLE `table_users`
  ADD CONSTRAINT `table_users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `table_groups` (`group_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
