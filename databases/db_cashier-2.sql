-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 04:03 AM
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
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`category_id`, `category_name`, `description`) VALUES
(1, 'Sakit Kepala', NULL),
(2, 'Luka Ringan', NULL),
(3, 'Obat', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_groups`
--

CREATE TABLE `table_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `description` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_groups`
--

INSERT INTO `table_groups` (`group_id`, `group_name`, `description`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Kasir', 'membeli dan menjual obat');

-- --------------------------------------------------------

--
-- Table structure for table `table_medicine`
--

CREATE TABLE `table_medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_code` varchar(20) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `children_dosage` varchar(255) NOT NULL,
  `adult_dosage` varchar(255) NOT NULL,
  `single_purchase_price` int(11) NOT NULL,
  `single_selling_price` int(11) NOT NULL,
  `last_update` int(20) NOT NULL,
  `medicine_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_medicine`
--

INSERT INTO `table_medicine` (`medicine_id`, `medicine_code`, `medicine_name`, `producer`, `children_dosage`, `adult_dosage`, `single_purchase_price`, `single_selling_price`, `last_update`, `medicine_description`) VALUES
(1, 'OB137180332143', 'Oskadon Oke', 'PT. Ferguso', '1 x Sehari', '2 x Sehari', 2500, 3000, 1569133845, 'sappa'),
(2, 'OB137180332189', 'Paracetamol', 'PT. Taplak', '1 x Sehari', '3 x Sehari', 750, 1000, 1569135467, '-'),
(3, 'OB137180332111', 'Handiplas', 'PT. Aduh Sakit', '', '', 500, 750, 1569076729, '-'),
(4, 'OB137180332154', 'Antalgin', 'PT. Mules', '1/2 x Sehari', '2 x Sehari', 300, 500, 1569134977, '-');

-- --------------------------------------------------------

--
-- Table structure for table `table_medicine_category`
--

CREATE TABLE `table_medicine_category` (
  `medicine_category_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_medicine_category`
--

INSERT INTO `table_medicine_category` (`medicine_category_id`, `medicine_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2),
(4, 4, 1),
(5, 1, 3),
(6, 2, 3),
(7, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `table_purchase`
--

CREATE TABLE `table_purchase` (
  `purchase_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `purchase_amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `purchase_transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_purchase`
--

INSERT INTO `table_purchase` (`purchase_id`, `medicine_id`, `purchase_amount`, `price`, `purchase_transaction_id`) VALUES
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
  `purchase_transaction_number` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_purchase_transaction`
--

INSERT INTO `table_purchase_transaction` (`purchase_transaction_id`, `purchase_transaction_number`, `user_id`, `supplier_id`, `date`, `total_price`) VALUES
(1, 'TPX156739732512', 1, 2, 1567397325, 20250);

-- --------------------------------------------------------

--
-- Table structure for table `table_selling`
--

CREATE TABLE `table_selling` (
  `selling_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `selling_amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `selling_transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_selling`
--

INSERT INTO `table_selling` (`selling_id`, `medicine_id`, `selling_amount`, `price`, `selling_transaction_id`) VALUES
(1, 4, 1, 500, 1),
(2, 2, 3, 3000, 1),
(3, 1, 2, 6000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_selling_transaction`
--

CREATE TABLE `table_selling_transaction` (
  `selling_transaction_id` int(11) NOT NULL,
  `selling_transaction_number` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_selling_transaction`
--

INSERT INTO `table_selling_transaction` (`selling_transaction_id`, `selling_transaction_number`, `user_id`, `date`, `total_price`) VALUES
(1, 'TSX156740085654', 3, 1567400856, 9500);

-- --------------------------------------------------------

--
-- Table structure for table `table_stock`
--

CREATE TABLE `table_stock` (
  `stock_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `expired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_stock`
--

INSERT INTO `table_stock` (`stock_id`, `medicine_id`, `stock`, `sold`, `expired`) VALUES
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
  `supplier_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `last_update` int(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_suppliers`
--

INSERT INTO `table_suppliers` (`supplier_id`, `supplier_name`, `phone`, `address`, `last_update`, `description`) VALUES
(1, 'Kita Bisa Supply', '+6282178783212', 'Jl. Kita Capek Jalan Kaki', 0, ''),
(2, 'Kami Supplier', '+6284345456789', 'Jl. Kaki Pasti Sehat', 1569408315, 'sarah jelek\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `table_users`
--

CREATE TABLE `table_users` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `registration_id` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ktp_number` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_on` int(11) NOT NULL,
  `last_update` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_users`
--

INSERT INTO `table_users` (`user_id`, `group_id`, `registration_id`, `username`, `password`, `ktp_number`, `name`, `phone`, `address`, `created_on`, `last_update`, `status`) VALUES
(1, 1, 'RI137180332113', 'admin', '21232f297a57a5a743894a0e4a801fc3', '6282178780000', 'Administrator', '+6282178780000', 'Jl. Kaki Paste Capek', 1371765600, 1569413639, 'Aktif'),
(2, 2, 'RI141673147224', 'kasir1', '29c748d4d8f4bd5cbc0f3f60cb7ed3d0', '6284345451111', 'Saya Kasir 1', '+6284345451111', 'Jl. Kaki Sampai Lelah', 1416697200, 1569076734, 'Aktif'),
(3, 2, 'RI156739661137', 'kasir2', '8c86013d8ba23d9b5ade4d6463f81c45', '6282178782222', 'Saya Kasir 2', '+6282178782222', 'Jl. Kaki Mungkin Lemas', 1567375200, 1569076729, 'Non-aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `table_groups`
--
ALTER TABLE `table_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `table_medicine`
--
ALTER TABLE `table_medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `table_medicine_category`
--
ALTER TABLE `table_medicine_category`
  ADD PRIMARY KEY (`medicine_category_id`),
  ADD KEY `medicine_id` (`medicine_id`),
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
  ADD PRIMARY KEY (`stock_id`),
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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `table_medicine_category`
--
ALTER TABLE `table_medicine_category`
  MODIFY `medicine_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `table_medicine_category`
--
ALTER TABLE `table_medicine_category`
  ADD CONSTRAINT `table_medicine_category_ibfk_1` FOREIGN KEY (`medicine_id`) REFERENCES `table_medicine` (`medicine_id`),
  ADD CONSTRAINT `table_medicine_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `table_category` (`category_id`);

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
