-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 07:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhomestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `property_id`, `start_date`, `end_date`) VALUES
(1, 5, 2, '2022-02-02', '2022-02-04'),
(2, 4, 2, '2022-02-02', '2022-02-04'),
(3, 5, 1, '2022-02-05', '2022-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `strtAddress` varchar(500) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(10) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `toilet` varchar(10) NOT NULL,
  `bedroom` varchar(10) NOT NULL,
  `brief_description` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `rules` varchar(255) NOT NULL,
  `facilities` varchar(1000) NOT NULL,
  `availability` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `user_id`, `strtAddress`, `city`, `state`, `zip`, `title`, `price`, `toilet`, `bedroom`, `brief_description`, `description`, `rules`, `facilities`, `availability`) VALUES
(1, 1, 'Menara D\' Putra Suite, Lebuh Putra Utama', 'Johor Bahru', 'Johor', '81000', 'D\' Putra Suites & Homestay @ Near Senai International Airport / Johor Premium Outlet (JPO) / AEON Mall', '122.00', '1', '2', 'Offering a restaurant and an outdoor swimming pool, as well as a fitness centre, D\' Putra Suites & Homestay @ Near Senai International Airport / Johor Premium Outlet (JPO) / AEON Mall is situated in Kulai, 16 km from Gunung Pulai.', 'Offering a restaurant and an outdoor swimming pool, as well as a fitness centre, D\' Putra Suites & Homestay @ Near Senai International Airport / Johor Premium Outlet (JPO) / AEON Mall is situated in Kulai, 16 km from Gunung Pulai.\r\n\r\nThe homestay features 2 bedrooms, 1 bathroom, bed linen, towels, a flat-screen TV with satellite channels, a dining area, a fully equipped kitchen, and a balcony with city views.\r\n\r\nA children\'s playground can be found at the homestay, along with a garden.\r\n\r\nThe nearest airport is Senai International Airport, 12 km from D\' Putra Suites & Homestay @ Near Senai International Airport / Johor Premium Outlet (JPO) / AEON Mall.', 'No Loud Music', 'Near Senai International Airport / Johor Premium Outlet (JPO) / AEON Mall', '1'),
(2, 2, 'Persiaran Medini Utara 3, Iskandar Puteri', 'Johor Bahru', 'Johor', '79250', 'Meridin Medini @ JB City Homestay', '156.00', '1', '1', 'Located in Johor Bahru, Meridin Medini @ JB City Homestay provides free WiFi, and guests can enjoy a restaurant, a fitness centre and a garden. The accommodation features a sauna.', 'All units here are air-conditioned and feature a flat-screen TV, a living room with a sofa, a well-equipped kitchen with a dining area, and a private bathroom with shower, a hairdryer and free toiletries. Some units include a patio and/or a balcony with pool or garden views.\r\n\r\nThe apartment offers a terrace.\r\n\r\nA children\'s playground is available on site and hiking can be enjoyed within close proximity of Meridin Medini @ JB City Homestay.', 'No Partying', 'Angry Birds Activity Park is 22 km from the accommodation, while TGV Bukit Indah is 9 km away. The nearest airport is Senai International, 33 km from Meridin Medini @ JB City Homestay, and the property offers a paid airport shuttle service.', '0'),
(3, 2, 'Afiniti Residensi, Jalan Medini Utara 4, Bandar Medini Iskandar, Nusajaya', 'Johor Bahru', 'Johor', '79200', 'Pang & Jessie Afiniti Homestay', '220.00', '2', '2', 'Can’t find a stylish yet inexpensive place to stay while vacationing in Johor Bahru? Why not try out Pang & Jessie Afiniti Homestay with amenities provided cater to make you feel at home while away from home.  Not to mention the rooms are decorated beautifully with colourful themes that will surely capture you and your children’s heart.', 'Swimming pool. Gym. Microwave. 7-Eleven. Rooftop resting area. Refrigerator. Free unlimited Wi-Fi for the entire unit. Basic kitchen utilities provided. 24 \r\n hours security. The car park is free and safe.\r\n\r\nYou can enjoy the beautiful view of Legoland from the living room. Provide transport services. Maximum accommodation for the unit is up to 5 guests\r\n12 minutes walk (1km) to Legoland Malaysia. Iron, hairdryer, hangers and etc are provided. Washing machine provided. Full access to the facility with an access card. Early check-in is available with no cost if no guest is staying on the previous day.', 'No Smoking', '12 minutes walk (1km) to Legoland Malaysia.', '1'),
(4, 5, '32, Jalan Mutiara Perdana 8 Tmn Mutiara Perdana 8', 'Batu Pahat', 'Johor', '83000', 'Batu Pahat Leisure Stay', '120.00', '2', '2', 'Batu Pahat Leisure Stay is located in Batu Pahat and offers a terrace. The accommodation is 39 km from Kluang, and guests benefit from complimentary WiFi and private parking available on site', 'Batu Pahat Leisure Stay is located in Batu Pahat and offers a terrace. The accommodation is 39 km from Kluang, and guests benefit from complimentary WiFi and private parking available on site.\r\n\r\nThe air-conditioned homestay consists of 2 separate bedrooms, 2 bathrooms with slippers and a living room. A flat-screen TV with satellite channels is provided.\r\n\r\nWith staff speaking English, Malay and Chinese, around the clock guidance is available at the reception.', 'No Smoking', 'Near to University of Tun Hussein Onn Malaysia - UTHM (8.8km) Closeest Airports are Senai International Airport (77.7km) and Melaka International Airport (95.1km)', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `password`, `email`, `phone`) VALUES
(1, 'Muhsin', 'Mahdzir', '1234', 'muhsin@gmail.com', '01188885555'),
(2, 'Irfan', 'Zulkarnain', '1234', 'irfan@gmail.com', '01135353747'),
(3, 'Ariff', 'Norhadi', '1234', 'ariff@gmail.com', '0103335555'),
(4, 'Wafiy', 'Wisha', '1234', 'wafiy@gmail.com', '01166667777'),
(5, 'Wan', 'Amir', '1234', 'wanamir@gmail.com', '0113333666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
