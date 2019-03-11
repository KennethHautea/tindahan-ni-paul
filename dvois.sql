-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 02:29 AM
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
  `prod_Id` char(4) DEFAULT NULL,
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
  `sup_Id` char(4) NOT NULL,
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_Id` char(4) NOT NULL,
  `prod_Name` varchar(50) DEFAULT NULL,
  `quantity` decimal(18,2) DEFAULT NULL,
  `Original_Price` decimal(18,2) DEFAULT NULL,
  `selling_Price` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Prod_Id` char(4) DEFAULT NULL,
  `quantity` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sup_Id` char(4) NOT NULL,
  `sup_Name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `contact_Number` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checking`
--
ALTER TABLE `checking`
  ADD KEY `fk_delId` (`delv_Id`),
  ADD KEY `fk_prodId` (`prod_Id`);

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
  ADD KEY `sup_Id` (`sup_Id`);

--
-- Indexes for table `job_order`
--
ALTER TABLE `job_order`
  ADD PRIMARY KEY (`JO_Id`),
  ADD KEY `fk_custId` (`cust_Id`),
  ADD KEY `fk_salesId` (`sales_id`);

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
  ADD KEY `fk_product` (`Prod_Id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sup_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checking`
--
ALTER TABLE `checking`
  ADD CONSTRAINT `fk_delId` FOREIGN KEY (`delv_Id`) REFERENCES `deliveries` (`delv_Id`),
  ADD CONSTRAINT `fk_prodId` FOREIGN KEY (`prod_Id`) REFERENCES `products` (`prod_Id`);

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`cust_Id`) REFERENCES `customers` (`cust_Id`);

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_ibfk_1` FOREIGN KEY (`sup_Id`) REFERENCES `suppliers` (`sup_Id`);

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
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`Prod_Id`) REFERENCES `products` (`prod_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
