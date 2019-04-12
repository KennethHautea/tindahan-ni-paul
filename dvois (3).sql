-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 03:14 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvois`
--

-- --------------------------------------------------------

--
-- Table structure for table `checking`
--

CREATE TABLE `checking` (
  `delv_Id` char(4) DEFAULT NULL,
  `prod_Id` int(4) DEFAULT NULL,
  `quantity` decimal(18,2) DEFAULT NULL,
  `Damage_Item` decimal(18,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `cons_Id` char(4) NOT NULL,
  `cust_Id` char(4) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `result` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_Id` char(4) NOT NULL,
  `cust_Name` varchar(50) DEFAULT NULL,
  `age` char(2) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact_Number` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `delv_Id` char(4) NOT NULL,
  `sup_Id` int(4) NOT NULL,
  `delv_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_order`
--

CREATE TABLE `job_order` (
  `JO_Id` char(4) NOT NULL,
  `cust_Id` char(4) DEFAULT NULL,
  `sales_id` char(4) DEFAULT NULL,
  `prod_Name` varchar(50) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Amount` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_Id` int(4) NOT NULL,
  `prod_Name` varchar(50) DEFAULT NULL,
  `quantity` decimal(18,2) DEFAULT NULL,
  `Original_Price` decimal(18,2) DEFAULT NULL,
  `selling_Price` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_Id`, `prod_Name`, `quantity`, `Original_Price`, `selling_Price`) VALUES
(2019, 'kenneth', '4.00', '300.00', '225.00'),
(2020, 'kenneth', '4.00', '300.00', '225.00'),
(2021, 'yawa', '123.00', '213.00', '321.00');

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `sales_id` char(4) NOT NULL,
  `sales_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale_qty`
--

CREATE TABLE `sale_qty` (
  `JO_Id` char(4) DEFAULT NULL,
  `Prod_Id` int(4) DEFAULT NULL,
  `quantity` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sup_Id` int(4) NOT NULL,
  `sup_Name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `contact_Number` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sup_Id`, `sup_Name`, `location`, `contact_Number`) VALUES
(1016, 'asdfgaergr', 'gargr', 'gargargra'),
(1017, 'ararwart', 'artart', 'arrtarg'),
(1018, 'artartar', 'rtartart', 'tartarta'),
(1019, 'artarta', 'rtartart', 'rtartarta'),
(1020, 'artartart', 'rtarat', 'artartarta'),
(1021, 'artartar', 'artartart', 'tartartart'),
(1022, 'rtatrat', 'artartart', 'artartart'),
(1023, 'rtartarta', 'artarta', 'rtartartart'),
(1024, 'huatea', 'davao city sasa', '092525456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `middle_name` varchar(32) NOT NULL,
  `role` varchar(24) NOT NULL,
  `mac_address` varchar(32) NOT NULL,
  `date_reg` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `first_name`, `last_name`, `middle_name`, `role`, `mac_address`, `date_reg`) VALUES
(1, 'admin', 'admin', '', '', '', 'admin', '', '2017-01-08 21:51:00'),
(2, 'staff', 'staff', '', '', '', 'staff', '', '2017-01-08 22:10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checking`
--
ALTER TABLE `checking`
  ADD KEY `fk_delId` (`delv_Id`),
  ADD KEY `prod_Id` (`prod_Id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`cons_Id`),
  ADD KEY `fk_customer` (`cust_Id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_Id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`delv_Id`),
  ADD KEY `sup_Id` (`sup_Id`),
  ADD KEY `sup_Id_2` (`sup_Id`);

--
-- Indexes for table `job_order`
--
ALTER TABLE `job_order`
  ADD PRIMARY KEY (`JO_Id`),
  ADD KEY `fk_custId` (`cust_Id`),
  ADD KEY `fk_salesId` (`sales_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_Id`);

--
-- Indexes for table `salesman`
--
ALTER TABLE `salesman`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sale_qty`
--
ALTER TABLE `sale_qty`
  ADD KEY `fk_joId` (`JO_Id`),
  ADD KEY `Prod_Id` (`Prod_Id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sup_Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sup_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checking`
--
ALTER TABLE `checking`
  ADD CONSTRAINT `checking_ibfk_1` FOREIGN KEY (`prod_Id`) REFERENCES `products` (`prod_Id`),
  ADD CONSTRAINT `fk_delId` FOREIGN KEY (`delv_Id`) REFERENCES `deliveries` (`delv_Id`);

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`cust_Id`) REFERENCES `customers` (`cust_Id`);

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_ibfk_1` FOREIGN KEY (`sup_Id`) REFERENCES `suppliers` (`sup_Id`),
  ADD CONSTRAINT `deliveries_ibfk_2` FOREIGN KEY (`sup_Id`) REFERENCES `suppliers` (`sup_Id`);

--
-- Constraints for table `job_order`
--
ALTER TABLE `job_order`
  ADD CONSTRAINT `fk_custId` FOREIGN KEY (`cust_Id`) REFERENCES `customers` (`cust_Id`),
  ADD CONSTRAINT `fk_salesId` FOREIGN KEY (`sales_id`) REFERENCES `salesman` (`sales_id`);

--
-- Constraints for table `sale_qty`
--
ALTER TABLE `sale_qty`
  ADD CONSTRAINT `fk_joId` FOREIGN KEY (`JO_Id`) REFERENCES `job_order` (`JO_Id`),
  ADD CONSTRAINT `sale_qty_ibfk_1` FOREIGN KEY (`Prod_Id`) REFERENCES `products` (`prod_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
