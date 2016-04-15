-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 09:39 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(140) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `target` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `charge` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`, `target`, `location`, `charge`) VALUES
(6, 'Youth Meetings', '2016-04-19 11:00:00', '2016-04-19 16:00:00', '14 - 18', 'ETMA Nairobi', 0),
(7, 'Youth Meetings', '2016-04-01 20:16:00', '2016-04-07 20:16:00', '12-14', 'ETMA Mbotela', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_registrations`
--

CREATE TABLE `tbl_event_registrations` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saints`
--

CREATE TABLE `tbl_saints` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `lastName` varchar(100) DEFAULT '',
  `year` int(4) DEFAULT NULL,
  `number` text,
  `Gender` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_saints`
--

INSERT INTO `tbl_saints` (`id`, `firstName`, `middleName`, `lastName`, `year`, `number`, `Gender`) VALUES
(1, 'Terry', 'Margaret', 'Sikuku', 2003, '722919327', 'F'),
(2, 'Stacy', 'Vihando', 'Owino', 2002, '726606260', 'F'),
(3, 'Faith', 'Njeri', 'Mwaura', 2004, '724011230', 'F'),
(4, 'Grave', 'Martha', 'Lukali', 2002, '724630839', 'F'),
(5, 'Grace', 'Neema', 'Omunyonyi', 2003, '724564056', 'F'),
(6, 'Olive', 'Nyakae', 'Owino', 2001, '726606260', ''),
(7, 'Eric', 'Joel', 'Kitonyi', 2001, '722778397', 'M'),
(8, 'Sharon', 'Rose', 'Omunyonyi', 1998, '724564056', 'F'),
(9, 'Bill', 'Paul', 'Wanyama', 2001, '739153661', 'M'),
(10, 'Faith', 'Mumo', 'Ndambuki', NULL, '721283160', 'F'),
(11, 'Gloriah', 'Mutanu', 'Ndambuki', NULL, '721283160', 'F'),
(12, 'Norah', 'Adhiambo', 'Ochieng', NULL, '720330650', 'F'),
(13, 'Trevor', 'Amatosh', 'Mboya', NULL, '728169764', 'M'),
(14, 'Grace', 'Muthoni', 'Kiarie', NULL, '726355337', 'F'),
(15, 'Rebecca', 'Nthambi', 'Kimeu', NULL, '725296650', 'F'),
(16, 'Joseph', 'Kyalo', ' ', 2004, '722607188', 'M'),
(17, 'Rhoda', 'Mbula', ' ', 2004, '722879401', 'F'),
(18, 'Sharon', 'Munee', ' ', 2004, '738169448', 'F'),
(19, 'Esther', 'Mutheu', ' ', 2004, '722947548', 'F'),
(20, 'Helgar', 'Minayo', 'Ondolo', NULL, '724566914', 'F'),
(21, 'Joseph', 'Njihia', ' ', 2004, '721322841', 'M'),
(22, 'Barbra', 'Njoroge', ' ', 2002, '710944129', 'F'),
(23, 'Gideon', 'Akonya', ' ', 2004, '724630839', 'M'),
(24, 'Dorcas', 'Obura', ' ', 2001, '724564056', 'F'),
(25, 'Tony', 'Olianga', ' ', 2004, '729641708', 'M'),
(26, 'Rebeca', 'Oyaya', ' ', 2002, '722535627', 'F'),
(27, 'Victor', 'Odhiambo', 'Janice', NULL, '700616778', 'M'),
(28, 'Mark', 'Munene', ' ', 2004, '722795424', 'M'),
(29, 'Daniel', 'Onyango', ' ', 2002, '724596047', 'M'),
(30, 'Samuel', 'Otieno', ' ', 2002, '724596047', 'M'),
(31, 'Maryanne', 'Muthoni', ' ', 2003, '729561773', 'F'),
(32, 'Esther', 'Mbithe', ' ', 2000, '726476686', 'F'),
(33, 'Brain', 'Otieno', ' ', 1998, '725596047', 'M'),
(34, 'Caleb', 'Omondi', ' ', 2001, '725596047', 'M'),
(35, 'Elijah', 'Karori', ' ', 2000, '718220109', 'M'),
(36, 'Phoebe', 'Cherotich', ' ', 2000, '724267978', 'F'),
(37, 'Deborah', 'Chepkemoi', ' ', 2001, '724267978', 'F'),
(38, 'Timothy', 'Barasa', ' ', 1999, '720257505', 'M'),
(39, 'Enock', 'Muema', ' ', 2000, '724577415', 'M'),
(40, 'Simon', 'Irungu', ' ', 1999, '704299341', 'M'),
(41, 'Grace', 'Wambui', ' ', 1999, '723907278', 'F'),
(42, 'Joshua', 'Mwaura', ' ', 2000, '720727597', 'M'),
(43, 'Eunice', 'Wanjiru', ' ', 2000, '720727597', 'F'),
(44, 'David', 'Kariuki', ' ', 2000, '720727597', 'M'),
(45, 'Grace', 'Munee', ' ', 2001, '722947548', 'F'),
(46, 'Parin', 'Mwaniki', ' ', 2001, '719519978', 'F'),
(47, 'Esther', 'Musembi', ' ', 2001, '722873447', 'F'),
(48, 'Timothy', 'Musembi', ' ', 2002, '722873447', 'M'),
(49, 'Hope', 'Mbone', ' ', 1968, '720483379', 'F'),
(50, 'Patience', 'Vodongo', ' ', 2000, '720483379', 'F'),
(51, 'Noah', 'Konzolo', ' ', 1996, '720483379', 'M'),
(52, 'Veronica', 'Kawila', ' ', 2002, '723589553', 'F'),
(53, 'Joshua', 'Muhuli', ' ', 1999, '716227237', 'M'),
(54, 'Moses', 'Mwatha', ' ', 2002, '721901967', 'M'),
(55, 'Sammy', 'Gitita', ' ', 1999, '722312954', 'M'),
(56, 'Grace', 'Waithera', ' ', 2001, '722312954', 'F'),
(57, 'Grace', 'Buluma', ' ', 2001, '710964000', 'F'),
(58, 'Naomi', 'Akinyi', ' ', 2000, '720357677', 'F'),
(59, 'Ruth', 'Sibi', ' ', 2001, '721899775', 'F'),
(60, 'Joseph', 'Muturi', ' ', 2000, '724598910', 'M'),
(61, 'Naomi', 'Ratugi', ' ', 2000, '717489975', 'F'),
(62, 'Elijah', 'Kabugi', ' ', 1998, '720553443', 'M'),
(63, 'Elizabeth', 'Wamuyu', ' ', 2001, '720553443', 'F'),
(64, 'Joshua', 'Murage', ' ', NULL, '702651169', 'M'),
(65, 'Caleb', 'Muriuki', ' ', NULL, '702651169', 'M'),
(66, 'Rebecca', 'Mukami', ' ', NULL, '702651169', 'F'),
(67, 'Elijah', 'Kimathi', ' ', NULL, '702651169', 'M'),
(68, 'Grace', 'Kanyanya', ' ', 0, '722648934', 'F'),
(69, 'Faith', 'Muka', ' ', 2000, NULL, 'F'),
(70, 'Enoc', 'Baraka', ' ', 2002, NULL, 'M'),
(72, 'daniel', 'Ndungu', 'Warui', 1997, '0706129749', 'M'),
(73, 'Peter', 'Mureithi', NULL, 2001, '0725744219', 'M'),
(74, 'Esther', 'Grace', NULL, 2002, '0713349700', 'F'),
(75, 'Elizabeth', 'Ngumbao', NULL, 1999, '0714545323', 'F'),
(76, 'Martin', 'Macharia', NULL, 1999, '0713032306', 'M'),
(77, 'Samuel', 'Mwangi', NULL, 2000, '0736888057', 'M'),
(78, 'Nixon', 'Obwavo', NULL, NULL, '0726606260', 'M'),
(79, 'Beth', 'Njoki', NULL, 1999, '0707481956', 'F'),
(80, 'Ruth', 'Atera', NULL, 2001, '0721988775', 'F'),
(81, 'Mercy', 'Koech', NULL, 1999, '0722404189', 'F'),
(82, 'Yvette', 'Muhonja', NULL, 2001, '0712148182', 'F'),
(83, 'Loven', 'Amani', NULL, 2000, '0712148182', 'F'),
(84, 'Ruth', 'Muchai', NULL, 2001, '0722650405', 'F'),
(85, 'Sharon', 'Sirma', NULL, 2000, '0718363065', 'F'),
(86, 'Villah', 'Mwaura', NULL, 1999, '0715411290', 'F'),
(87, 'Jane', 'Wangari', NULL, 2000, '0725861616', 'F'),
(88, 'Timothy', 'Baraza', NULL, 1998, '0727383797', 'M'),
(89, 'Faith', 'Awino', NULL, 2000, '0724764101', 'F'),
(90, 'Caleb', 'Otieno', NULL, 2002, '0724764101', 'M'),
(91, 'Rahab', 'Wambui', NULL, 2001, '0711432661', 'F'),
(92, 'Rachael', 'Kendi', NULL, 1999, '0711432661', 'F'),
(93, 'Grace', 'Wanjiku', 'Wairagu', 2000, '0721322841', 'F'),
(94, 'Ruth', 'Anyango', 'Odhiambo', 2000, '0738613853', 'F'),
(95, 'Moreen', 'Atieno', 'Otieno', 2001, '0733883327', 'F'),
(96, 'Hope', 'Mmbone', 'Kisiali', 1999, '0720502826', 'F'),
(97, 'Esther', 'Mbitho', 'Musembi', 2001, '0735655149', 'F'),
(98, 'Sharon', 'Rose', 'Mwasia', 2002, '0723945119', 'F'),
(99, 'Patience', 'Vodoyo', NULL, 2002, '0720048045', 'F'),
(100, 'Charity', 'Gakenia', 'Muita', 2001, '0725861616', 'F'),
(101, 'Mark', 'Mwangi', NULL, 2000, '0728154594', 'M'),
(102, 'Bernard', 'Kimani', NULL, 2000, '0728154594', 'M'),
(103, 'Nathaniel', 'Mwangi', NULL, 2001, '0723949380', 'M'),
(104, 'Grace', 'Wambui', NULL, 1998, '0723949380', 'F'),
(105, 'Victor', 'Mathenge', NULL, 2000, '0724568574', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event_registrations`
--
ALTER TABLE `tbl_event_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_saints`
--
ALTER TABLE `tbl_saints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_event_registrations`
--
ALTER TABLE `tbl_event_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_saints`
--
ALTER TABLE `tbl_saints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
