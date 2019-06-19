-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 02:32 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class1902`
--

-- --------------------------------------------------------

--
-- Table structure for table `biography`
--

CREATE TABLE `biography` (
  `id` int(11) NOT NULL,
  `number_children` int(10) DEFAULT NULL,
  `gender` enum('male','female','others','') DEFAULT NULL,
  `school` char(30) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(20) NOT NULL,
  `company_name` char(30) DEFAULT NULL,
  `avatar` varchar(30) DEFAULT NULL,
  `login_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `city`, `state`, `zip`) VALUES
(2, 'alabi', '03231 Dwight Hill', 'Atlanta', 'GA', '30351'),
(3, 'Diana Davis', '35 Fairfield Parkway', 'Fargo', 'ND', '58122'),
(4, 'Heather Gonzalez', '1 4th Trail', 'Albuquerque', 'NM', '87105'),
(5, 'Terry Hart', '353 Messerschmidt Pass', 'Burbank', 'CA', '91520'),
(6, 'Nancy Gomez', '121 Southridge Lane', 'Valdosta', 'GA', '31605'),
(7, 'Beverly Wood', '21 Bluestem Trail', 'Washington', 'DC', '20557'),
(8, 'Fred Roberts', '9 Main Crossing', 'Gilbert', 'AZ', '85297'),
(9, 'Maria Cox', '1 Crest Line Pass', 'Albuquerque', 'NM', '87190'),
(10, 'Evelyn Warren', '8589 Macpherson Way', 'Flint', 'MI', '48505'),
(11, 'Shirley Vasquez', '0 Mallard Junction', 'Kansas City', 'MO', '64109'),
(12, 'Maria Fuller', '05402 Badeau Crossing', 'New Orleans', 'LA', '70149'),
(13, 'Deborah Parker', '45475 Hauk Drive', 'Toledo', 'OH', '43699'),
(14, 'Linda Frazier', '6 Rigney Road', 'Lynn', 'MA', '01905'),
(15, 'Randy Ray', '477 Arrowood Parkway', 'Tulsa', 'OK', '74184'),
(16, 'Anthony Tucker', '46 Redwing Center', 'Springfield', 'MO', '65810'),
(17, 'Lisa Hanson', '335 Mesta Terrace', 'Wilmington', 'DE', '19805'),
(18, 'Donna Stevens', '47837 Rusk Drive', 'Norfolk', 'VA', '23504'),
(19, 'Sarah Sims', '515 Talmadge Plaza', 'Chicago', 'IL', '60614'),
(20, 'Jeremy Black', '8409 Ridge Oak Circle', 'Topeka', 'KS', '66617'),
(21, 'Marie Cole', '196 Brentwood Pass', 'Lima', 'OH', '45807'),
(22, 'Dennis Freeman', '603 Leroy Junction', 'Kalamazoo', 'MI', '49048'),
(23, 'Kathy Gonzales', '8597 Fisk Crossing', 'Ogden', 'UT', '84403'),
(24, 'Laura Reid', '829 Jana Park', 'Shreveport', 'LA', '71151'),
(25, 'Jack Mitchell', '50354 Eliot Circle', 'Hayward', 'CA', '94544'),
(26, 'Terry Hicks', '47487 Loomis Park', 'Ashburn', 'VA', '22093'),
(27, 'Ashley Rose', '6 Forest Run Drive', 'Sparks', 'NV', '89436'),
(28, 'Elizabeth James', '1 John Wall Way', 'Hartford', 'CT', '06152'),
(29, 'Todd Edwards', '49393 Sage Place', 'Myrtle Beach', 'SC', '29579'),
(30, 'Rachel Kelley', '90 Fairfield Place', 'Wilmington', 'DE', '19810'),
(31, 'Dorothy Wright', '147 Orin Way', 'Washington', 'DC', '20067'),
(32, 'Sarah Wilson', '99 Oak Trail', 'Saint Cloud', 'MN', '56398'),
(33, 'Jessica Foster', '3958 Onsgard Trail', 'Edmond', 'OK', '73034'),
(34, 'Donna Burns', '45 Mandrake Plaza', 'South Bend', 'IN', '46634'),
(35, 'Jesse Riley', '8128 Green Ridge Alley', 'Springfield', 'IL', '62723'),
(36, 'Julie Dixon', '6752 Oak Valley Court', 'Tulsa', 'OK', '74103'),
(37, 'Ryan Gilbert', '2174 Blaine Pass', 'Shreveport', 'LA', '71130'),
(38, 'Janet Bailey', '5581 Algoma Terrace', 'San Jose', 'CA', '95133'),
(39, 'Denise Larson', '044 Killdeer Circle', 'Naperville', 'IL', '60567'),
(40, 'Victor Campbell', '99 Vahlen Place', 'Lima', 'OH', '45807'),
(41, 'Laura Cooper', '7967 Mallory Way', 'Ogden', 'UT', '84409'),
(42, 'Gerald Berry', '763 Vera Avenue', 'Spring', 'TX', '77388'),
(43, 'Henry Rice', '206 Schlimgen Parkway', 'Dallas', 'TX', '75387'),
(44, 'Margaret Greene', '9118 Susan Drive', 'Metairie', 'LA', '70005'),
(45, 'Theresa Richardson', '66 Grover Pass', 'Riverside', 'CA', '92519'),
(46, 'Robin Smith', '3922 Iowa Trail', 'Norfolk', 'VA', '23551'),
(47, 'Annie Montgomery', '3880 Monterey Center', 'Saint Petersburg', 'FL', '33705'),
(48, 'Ernest Morgan', '41165 Melby Center', 'Raleigh', 'NC', '27621'),
(49, 'Sara Oliver', '050 Lawn Terrace', 'Stockton', 'CA', '95298'),
(50, 'Juan Graham', '27 Green Ridge Center', 'Phoenix', 'AZ', '85072'),
(51, 'Victor Fernandez', '53 Service Park', 'Salt Lake City', 'UT', '84140'),
(52, 'Robin Chavez', '387 Dayton Plaza', 'Huntington Beach', 'CA', '92648'),
(53, 'James Mendoza', '14 Twin Pines Center', 'Beaumont', 'TX', '77713'),
(54, 'Russell Wells', '0 Buhler Terrace', 'New York City', 'NY', '10090'),
(55, 'Bruce Stanley', '91 Corry Park', 'Akron', 'OH', '44393'),
(56, 'Jessica Marshall', '84 Fulton Road', 'Wichita', 'KS', '67260'),
(57, 'Paul Simpson', '2 Eggendart Drive', 'Mesa', 'AZ', '85205'),
(58, 'Nicholas Patterson', '77660 Cambridge Street', 'Austin', 'TX', '78759'),
(59, 'Mildred Martin', '1054 Sycamore Parkway', 'Flint', 'MI', '48550'),
(60, 'Lois Hanson', '614 North Junction', 'Denver', 'CO', '80270'),
(61, 'Mark Brooks', '0043 Sugar Way', 'Chicago', 'IL', '60697'),
(62, 'Jacqueline Dixon', '21392 Marquette Hill', 'Indianapolis', 'IN', '46207'),
(63, 'Dennis Shaw', '0113 Garrison Street', 'New York City', 'NY', '10184'),
(64, 'Gregory Wheeler', '04 Rutledge Pass', 'Philadelphia', 'PA', '19178'),
(65, 'Kenneth Stewart', '79240 Fordem Lane', 'Lincoln', 'NE', '68583'),
(66, 'Ernest Murphy', '954 Dorton Trail', 'Kansas City', 'MO', '64160'),
(67, 'Samuel Hart', '08690 Stone Corner Alley', 'Topeka', 'KS', '66667'),
(68, 'Kevin Hernandez', '36495 Mcbride Center', 'Miami', 'FL', '33245'),
(69, 'Jeremy Nelson', '15 Sachtjen Hill', 'Iowa City', 'IA', '52245'),
(70, 'Ernest Hall', '85309 Debs Park', 'Mobile', 'AL', '36610'),
(71, 'Bobby Hawkins', '8316 Kedzie Place', 'El Paso', 'TX', '88558'),
(72, 'Frank Mason', '927 Farragut Trail', 'Detroit', 'MI', '48232'),
(73, 'Ronald Reed', '5 Debra Center', 'El Paso', 'TX', '79984'),
(74, 'Johnny Stone', '27410 Mockingbird Hill', 'Roanoke', 'VA', '24020'),
(75, 'Kathy Diaz', '83490 Sauthoff Parkway', 'El Paso', 'TX', '79968'),
(76, 'Russell Powell', '332 Larry Center', 'Washington', 'DC', '20215'),
(77, 'Barbara Reynolds', '37 Kingsford Lane', 'New Orleans', 'LA', '70165'),
(78, 'Evelyn Morrison', '79284 Old Gate Junction', 'Sandy', 'UT', '84093'),
(79, 'Diane Griffin', '6 Ridgeview Place', 'San Francisco', 'CA', '94142'),
(80, 'Russell Bowman', '63979 Trailsway Park', 'Washington', 'DC', '20425'),
(81, 'Robin Duncan', '5045 Gerald Circle', 'Hialeah', 'FL', '33018'),
(82, 'Amy Fields', '04444 Ilene Parkway', 'Saint Joseph', 'MO', '64504'),
(83, 'Teresa Morgan', '016 Blackbird Lane', 'Waco', 'TX', '76796'),
(84, 'Jeremy Hansen', '3 North Court', 'Houston', 'TX', '77271'),
(85, 'Paula George', '6 Gina Plaza', 'Spokane', 'WA', '99210'),
(86, 'Philip Smith', '40 Dakota Point', 'Phoenix', 'AZ', '85072'),
(87, 'Ralph Gutierrez', '2 Forest Parkway', 'Van Nuys', 'CA', '91411'),
(88, 'Johnny West', '3917 Monica Pass', 'New Orleans', 'LA', '70179'),
(89, 'Steve Turner', '7 Carioca Avenue', 'Sarasota', 'FL', '34233'),
(90, 'Helen Fuller', '55511 Oak Valley Center', 'San Antonio', 'TX', '78240'),
(91, 'Joseph Cole', '672 Bellgrove Drive', 'Wilmington', 'DE', '19810'),
(92, 'Ernest Morris', '4119 Pepper Wood Pass', 'Littleton', 'CO', '80161'),
(93, 'Jerry Dean', '141 Del Sol Crossing', 'Sacramento', 'CA', '95838'),
(94, 'Earl Payne', '53 Dapin Drive', 'Tallahassee', 'FL', '32304'),
(95, 'Keith Snyder', '00 Green Ridge Terrace', 'Columbia', 'SC', '29203'),
(96, 'Frances Ramirez', '914 Golden Leaf Alley', 'Stamford', 'CT', '06905'),
(97, 'Buhari Aisha', 'Aso Rock', 'Abuja', 'Abj', '2342');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `bids` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `cost`, `seller_id`, `bids`) VALUES
(1, 'Brand New iMac Computer', '885.06', 28, 40),
(2, 'used diaper from my sister', '801.84', 28, 471),
(3, 'Fresh apple pie', '988.33', 34, 487),
(4, 'New gym socks', '940.37', 41, 495),
(5, 'Weedwacker only slightly used', '682.33', 65, 403),
(6, 'New ipad stolen from best buy', '546.67', 78, 277),
(7, 'Book about having babies', '701.46', 78, 556),
(8, 'Woman jeans', '130.95', 23, 279),
(9, 'traditional carpet', '227.91', 58, 394),
(10, 'shows', '691.11', 76, 295),
(11, 'beer', '79.34', 1, 278),
(12, 'box of frogs', '77.21', 37, 170),
(13, 'laptop', '493.39', 2, 126),
(14, 'bed', '496.91', 85, 147),
(15, 'thumbelina', '545.61', 70, 466),
(16, 'stove', '103.52', 83, 596),
(17, 'shampoing', '272.12', 6, 108),
(18, 'stove', '264.21', 11, 29),
(19, 'microwave', '660.13', 6, 60),
(20, 'computer', '67.70', 1, 77),
(21, 'awesome alien computer', '872.39', 14, 111),
(22, 'new curtain for bedroom', '324.28', 94, 174),
(23, '3 boxes of frogs', '30.48', 6, 328),
(24, 'newspaper', '813.85', 86, 403),
(25, 'pan', '139.97', 24, 322),
(26, 'baby coat', '620.63', 52, 619),
(27, 'supercomputer', '151.99', 86, 34),
(28, 'Shufflester', '373.14', 10, 358),
(29, 'refrigerator', '860.90', 20, 474),
(30, 'gold necklace', '402.53', 52, 651),
(31, '7 boxes of frogs', '393.28', 6, 82),
(32, '48 boxes of frogs', '302.47', 68, 655),
(33, 'used car', '5700.5', 12, 509),
(34, 'gold earring', '328.01', 5, 212),
(35, 'scarf', '629.09', 71, 643),
(36, 'hairdryer', '130.55', 12, 71),
(37, 'play station', '256', 12, 87),
(38, 'bikini', '243.82', 12, 346),
(39, 'air conditioner ', '204.76', 12, 686),
(40, 'baby seat', '206.88', 13, 357),
(41, 'baby soap', '1.49', 74, 307),
(42, 'baby bottle', '125.36', 18, 278),
(43, 'Twitterlist', '69.74', 92, 478),
(44, 'Jayo', '807.12', 75, 582),
(45, 'Jatri', '456.33', 33, 306),
(46, 'Wikizz', '714.29', 80, 491),
(47, 'Twitterbridge', '928.97', 10, 98),
(48, 'Agimba', '204.39', 7, 387),
(49, 'Meevee', '169.94', 90, 112),
(50, 'Fivebridge', '353.47', 5, 99),
(51, 'Jaxworks', '296.30', 60, 70),
(52, 'Realpoint', '216.02', 64, 178),
(53, 'Skipstorm', '261.07', 64, 454),
(54, 'Thoughtbridge', '759.87', 29, 420),
(55, 'Cogibox', '43.69', 84, 336),
(56, 'Skinix', '146.85', 25, 312),
(57, 'Thoughtworks', '18.62', 93, 334),
(58, 'Twitternation', '916.97', 100, 464),
(59, 'Youopia', '725.61', 38, 454),
(60, 'Eamia', '906.61', 21, 145),
(61, 'Zoombeat', '309.98', 94, 640),
(62, 'Quatz', '799.10', 79, 351),
(63, 'Mudo', '32.57', 99, 369),
(64, 'Rhybox', '203.93', 26, 185),
(65, 'Babbleblab', '451.66', 62, 232),
(66, 'Zoozzy', '746.41', 54, 545),
(67, 'Wikizz', '993.06', 15, 310),
(68, 'Zoombox', '367.93', 15, 141),
(69, 'Reallinks', '756.04', 26, 94),
(70, 'Shufflester', '652.72', 93, 630),
(71, 'Jetpulse', '482.97', 37, 347),
(72, 'Minyx', '834.23', 84, 265),
(73, 'Photojam', '411.57', 53, 522),
(74, 'Photofeed', '358.93', 17, 393),
(75, 'Yamia', '119.07', 81, 150),
(76, 'Jabbertype', '147.49', 2, 366),
(77, 'Mynte', '221.60', 60, 336),
(78, 'Devbug', '175.36', 86, 94),
(79, 'Einti', '915.96', 52, 369),
(80, 'Yabox', '913.18', 32, 523),
(81, 'Skynoodle', '799.71', 43, 221),
(82, 'Skynoodle', '354.81', 63, 32),
(83, 'Bluezoom', '185.87', 40, 441),
(84, 'Topicware', '549.39', 3, 114),
(85, 'Rooxo', '976.30', 45, 382),
(86, 'Gabtype', '837.82', 31, 660),
(87, 'Rooxo', '122.51', 16, 369),
(88, 'Jatri', '548.83', 55, 308),
(89, 'Yabox', '748.64', 56, 128),
(90, 'Linkbuzz', '582.75', 67, 49),
(91, 'Centimia', '603.25', 25, 223),
(92, 'Devify', '332.73', 65, 539),
(93, 'Yambee', '733.56', 14, 200),
(94, 'Oyope', '882.47', 2, 194),
(95, 'Buzzshare', '251.70', 92, 475),
(96, 'Muxo', '580.62', 4, 183),
(97, 'Flipbug', '320.47', 89, 491),
(98, 'Ainyx', '297.66', 52, 283),
(99, 'Topicblab', '499.75', 50, 247),
(100, 'Jaxworks', '850.49', 96, 183);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(200) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `passport` varchar(16) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `authority` enum('admin','student') NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text,
  `date_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `passport`, `gender`, `authority`, `phone`, `address`, `date_registered`) VALUES
(8, 'Alabi A', 'info@alabiansolutions.com', 'b684aee8ad39dda58a25c6ee5b79c1c4', 'male.jpg', 'male', 'student', '08034265103', 'No 12, Olu Akerele Street,\r\nOff Kofoworola Crecent off Obafemi Awolowo Way', '2019-06-19 13:00:50'),
(9, 'Benedict Uwazie', 'nonwaz@yahoo.com', '7059050f34c945a64bd84b62fb5132c4', 'male.jpg', 'male', 'student', '08069268340', 'No 12, Oluakerele Street, Balogun Bus Stop', '2019-06-19 13:01:59'),
(10, 'Kehinde John', 'kehinde.john@alabiansolutions.com', '7393466c54a60eadcff51633ef99030f', 'female.jpg', 'female', 'student', '08069268341', 'No 12, Oluakerele Street, Balogun Bus Stop', '2019-06-19 13:03:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biography`
--
ALTER TABLE `biography`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `items` ADD FULLTEXT KEY `cost` (`cost`);
ALTER TABLE `items` ADD FULLTEXT KEY `cost_2` (`cost`);
ALTER TABLE `items` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biography`
--
ALTER TABLE `biography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `biography`
--
ALTER TABLE `biography`
  ADD CONSTRAINT `biography_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
