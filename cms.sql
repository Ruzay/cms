-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 08:20 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `church_no` varchar(5) NOT NULL,
  `church_name` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `post_add` varchar(50) NOT NULL,
  `phy_add` varchar(500) NOT NULL,
  `street` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `reg_date` date NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `surname`, `name`, `church_no`, `church_name`, `place`, `post_add`, `phy_add`, `street`, `phone`, `reg_date`, `email`) VALUES
(2, 'Madonsela', 'Mandla', 'K1222', 'Mananga Gospel church', 'Mananga Plot 3 Zone 4', 'Box 4 Mavuso', 'Mananga near to Buyani Primary School', 'shekianah street', 76234500, '2017-12-11', 'manzini@gospel.com'),
(3, 'Zwane', 'Nkhululeko', 'K1234', 'Mananga FEA', 'Mananga', 'Box 4 Mananga', 'Mananga near to Mananga College', 'sharpstone 45 street', 76212311, '2017-12-12', 'mananga@fea.com'),
(4, 'Thulani', 'Maseko', 'K1234', 'Mananga FEA', 'Swazi', 'P O Box 3 Mananga', 'Next to Mananga College', 'First king', 76889000, '2018-01-10', 'grace@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `ass_id` tinyint(15) NOT NULL,
  `ass_name` varchar(60) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(60) NOT NULL,
  `received_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `ass_id` int(10) NOT NULL,
  `asset` varchar(50) NOT NULL,
  `church` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `value` int(255) NOT NULL,
  `des` varchar(100) NOT NULL,
  `month` varchar(5) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`ass_id`, `asset`, `church`, `date`, `value`, `des`, `month`, `year`) VALUES
(2, 'Tent', 'K1234', '2014-12-23', 30000, 'Tent for revivals', '', ''),
(3, 'Tent', 'K1234', '2014-12-23', 30000, 'Tent for revivals', '', ''),
(4, 'Tent', 'K1234', '2014-12-23', 30000, 'Tent for revivals', '', ''),
(5, 'Tent Crusade', 'K1234', '2019-03-19', 5600, 'tent crusade', '3', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `ass_id` tinyint(15) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `church` varchar(20) NOT NULL,
  `role` varchar(60) NOT NULL,
  `task` varchar(60) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`ass_id`, `fullname`, `church`, `role`, `task`, `des`) VALUES
(24, 'Mamba', 'K1234', 'Usher', 'Ushering', 'Welcome members to church'),
(26, 'Manana Letha', 'K1234', 'Pastor', 'Teach the church', 'Give spiritual food to church'),
(27, 'Maziya Nokwanda', 'ngweni', 'Pastor', 'pastor church', 'take care of the church');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `bud_id` int(10) NOT NULL,
  `church` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `times` varchar(20) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `amount` decimal(10,4) NOT NULL,
  `des` varchar(50) NOT NULL,
  `month` varchar(5) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`bud_id`, `church`, `department`, `times`, `from_date`, `to_date`, `amount`, `des`, `month`, `year`) VALUES
(2, 'K1234', 'Singles', 'yearly', '2018-01-02', '2018-12-12', '30000.0000', 'yearly budget for Singles', '', ''),
(3, 'K1234', 'Singles', 'yearly', '2018-01-01', '0000-00-00', '3000.0000', 'yearly budget for Singles', '', ''),
(4, 'K1234', 'Couples', 'yearly', '2018-01-02', '2018-12-31', '40000.0000', 'couples fund', '', ''),
(5, 'K1234', 'Decons', 'monthly', '2018-01-02', '2018-12-30', '3000.0000', 'monthly budget for deacons', '', ''),
(6, 'K1234', 'Youth', 'yearly', '2020-03-04', '2020-12-16', '10000.0000', '', '3', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `check_reg`
--

CREATE TABLE `check_reg` (
  `ch_id` int(10) NOT NULL,
  `church` varchar(10) NOT NULL,
  `mem_no` int(10) NOT NULL,
  `date` date NOT NULL,
  `present` date NOT NULL,
  `absent` date NOT NULL,
  `report` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_reg`
--

INSERT INTO `check_reg` (`ch_id`, `church`, `mem_no`, `date`, `present`, `absent`, `report`) VALUES
(46, 'K1234', 21, '2018-03-26', '2018-03-26', '0000-00-00', '0000-00-00'),
(49, 'K1234', 21, '2018-03-26', '2018-03-26', '0000-00-00', '0000-00-00'),
(50, 'K1234', 22, '2018-03-26', '0000-00-00', '2018-03-26', '0000-00-00'),
(51, 'K1234', 22, '2018-03-26', '0000-00-00', '0000-00-00', '2018-03-26'),
(52, 'K1234', 22, '2018-03-26', '0000-00-00', '0000-00-00', '2018-03-26'),
(53, 'K1234', 22, '2018-03-26', '0000-00-00', '0000-00-00', '2018-03-26'),
(54, 'K1234', 21, '2018-03-26', '2018-03-26', '0000-00-00', '0000-00-00'),
(55, 'K1234', 22, '2018-03-26', '0000-00-00', '2018-03-26', '0000-00-00'),
(56, 'K1234', 22, '2018-03-26', '2018-03-26', '0000-00-00', '0000-00-00'),
(57, 'K1234', 22, '2018-03-26', '0000-00-00', '0000-00-00', '2018-03-26'),
(58, 'K1234', 22, '2018-03-26', '0000-00-00', '0000-00-00', '2018-03-26'),
(59, 'K1234', 20, '2018-03-26', '0000-00-00', '0000-00-00', '2018-03-26'),
(60, 'K1234', 22, '2018-03-26', '2018-03-26', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `com_id` tinyint(15) NOT NULL,
  `com_name` varchar(60) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`com_id`, `com_name`, `des`) VALUES
(19, 'Youth', '20yrs to 25yrs'),
(20, 'Singles', '31yrs to 100yrs'),
(21, 'Couples', 'married'),
(22, 'Decons', ''),
(24, 'Elders', ''),
(25, 'Church', ''),
(26, 'Children Ministry', '');

-- --------------------------------------------------------

--
-- Table structure for table `com_member`
--

CREATE TABLE `com_member` (
  `com_id` tinyint(15) NOT NULL,
  `church` varchar(10) NOT NULL,
  `com_name` varchar(60) NOT NULL,
  `chair` varchar(60) NOT NULL,
  `v_chair` varchar(50) NOT NULL,
  `treasure` varchar(50) NOT NULL,
  `secretary` varchar(50) NOT NULL,
  `v_secretary` varchar(50) NOT NULL,
  `add1` varchar(50) NOT NULL,
  `add2` varchar(50) NOT NULL,
  `from_yr` date NOT NULL,
  `to_yr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_member`
--

INSERT INTO `com_member` (`com_id`, `church`, `com_name`, `chair`, `v_chair`, `treasure`, `secretary`, `v_secretary`, `add1`, `add2`, `from_yr`, `to_yr`) VALUES
(2, '', 'Couples', 'chairman', '', '', '', '', '', '', '2017-02-02', '2019-03-18'),
(3, '', 'Couples', 'chairman', '', '', '', '', '', '', '2017-02-02', '2019-03-18'),
(4, '', 'Couples', 'chairman', '', '', '', '', '', '', '2017-02-02', '2019-03-18'),
(5, '', 'Couples', 'chairman', '', '', '', '', '', '', '2017-02-02', '2019-03-18'),
(6, '', 'Couples', 'chairman', '', '', '', '', '', '', '2017-02-02', '2019-03-18'),
(8, 'K1234', 'Youth', 'chairman', '', '', '', '', '', '', '2017-02-01', '2018-12-02'),
(9, 'K1234', 'Youth', 'Vusi Masimula', 'Noma Zulu', 'Welile Dludlu', 'Sibusiso Khoza', 'Yoli Zulu', 'yoli mangwe', 'yoliswa mnisi', '2019-05-14', '2020-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `com_position`
--

CREATE TABLE `com_position` (
  `pos_id` tinyint(15) NOT NULL,
  `pos_name` varchar(60) NOT NULL,
  `des` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_position`
--

INSERT INTO `com_position` (`pos_id`, `pos_name`, `des`) VALUES
(98, 'chairman', ''),
(99, 'vice chairman', ''),
(100, 'Secretary', ''),
(101, 'vice secretary', ''),
(102, 'Treasurer', ''),
(103, 'additional member', '');

-- --------------------------------------------------------

--
-- Table structure for table `damaged`
--

CREATE TABLE `damaged` (
  `dam_id` tinyint(15) NOT NULL,
  `dam_name` varchar(60) NOT NULL,
  `quantity` int(60) NOT NULL,
  `dam_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `exp_id` int(10) NOT NULL,
  `church` varchar(10) NOT NULL,
  `expense` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,4) NOT NULL,
  `des` varchar(100) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(5) NOT NULL,
  `class` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`exp_id`, `church`, `expense`, `department`, `date`, `amount`, `des`, `month`, `year`, `class`) VALUES
(1, 'K1234', 'Youth Day', 'Youth', '2018-03-05', '20000.0000', 'good', '', '', ''),
(2, 'K1234', 'Youth Extravagandza', 'Youth', '2018-02-21', '2000.0000', '', '', '', ''),
(3, 'K1234', 'Youth Extravagandza', 'Youth', '2018-02-21', '2000.0000', '', '', '', ''),
(4, 'K1234', 'Youth Extravagandza', 'Youth', '2018-02-21', '2000.0000', '', '', '', ''),
(5, 'K1234', 'Youth Extravagandza', 'Youth', '2018-02-21', '2000.0000', '', '', '', ''),
(6, 'K1234', 'Youth Extravagandza', 'Youth', '2018-02-21', '2000.0000', '', '', '', ''),
(7, 'K1234', 'Youth Extravagandza', 'Youth', '2018-02-21', '2000.0000', 'Youth Extravagandza', '', '', ''),
(8, 'K1234', 'Youth Extravagandza', 'Youth', '2014-02-21', '20000.0000', 'youth extravagandza', '', '', ''),
(9, 'K1234', 'Food hampers', 'Elders', '2017-12-05', '25000.0000', 'good', '', '', ''),
(10, 'K1234', 'Furniture', 'Church', '2018-02-20', '5000.0000', 'chairs, tables', '', '', ''),
(11, 'K1234', 'School fees', 'Youth', '0000-00-00', '50000.0000', 'paying for school going children', '3', '22', ''),
(12, 'K1234', 'School fees', 'Youth', '2019-03-12', '50000.0000', 'paying for school going children', '3', '12', ''),
(13, 'K1234', 'electricity', 'Church', '2020-03-10', '400.0000', '', '3', '2020', 'Church');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `inc_id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `church` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,4) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`inc_id`, `type`, `church`, `date`, `amount`, `des`, `month`, `year`) VALUES
(1, 'tithes', 'K1234', '2016-12-01', '501.0000', 'check', '3', '2018'),
(2, 'tithes', 'K1234', '2016-02-17', '10000.4000', 'see', '3', '2018'),
(3, 'freewill', 'K1234', '2018-03-05', '50000.0000', 'freewill', '3', '2018'),
(4, 'freewill', 'K1234', '2020-03-02', '5600.0000', 'freewill', '3', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `minutes`
--

CREATE TABLE `minutes` (
  `min_id` tinyint(5) NOT NULL,
  `church` varchar(10) NOT NULL,
  `full_name` varchar(10) NOT NULL,
  `com_name` varchar(10) NOT NULL,
  `venue` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `min` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minutes`
--

INSERT INTO `minutes` (`min_id`, `church`, `full_name`, `com_name`, `venue`, `date`, `min`) VALUES
(5, '', 'Ncamiso ', 'Youth', 'Seekers te', '0000-00-00', 'Peace is not the absence of trouble in your life. It is not the absence of turmoil,\r\nchallenges or things that are not harmonious in your physical environment. It is possible to\r\nbe in the midst of the biggest crisis in your life and still experience peace. That’s the true\r\nkind of peace that you can experience with Jesus—peace that surpasses understanding.\r\nNaturally speaking, it does not make sense for you to feel completely at rest and at peace\r\nwhen you are in dire straits, but supernaturally, you can be filled with peace!\r\nThe world defines peace, harmony and tranquility based on what is happening in the\r\nsensory realm. The world’s notion of peace would look something like this: A man lying in\r\na hammock on a white sandy beach in Hawaii with luau music playing softly in the cabana,\r\ncoconut trees swaying in perfect unison and warm, blue waves rolling languidly along the\r\nshoreline. The world calls that peace—until reality kicks in, and the transient peace that was\r\nexperienced just moments ago dissipates into thin air!\r\nYou see, my friend, you cannot use your external surroundings to permanently\r\ninfluence the turmoil that you are feeling inside. Only Jesus can touch what you are feeling\r\ninside and turn that turmoil into His peace. With the Lord by your side, and from that\r\nabiding peace within, you can influence your external surroundings. It’s not the'),
(8, 'K1234', 'Manana Let', 'Sunday Sch', 'Mananga FE', '2018-01-23', 'Peace is not the absence of trouble in your life. It is not the absence of turmoil,\r\nchallenges or things that are not harmonious in your physical environment. It is possible to\r\nbe in the midst of the biggest crisis in your life and still experience peace. That’s the true\r\nkind of peace that you can experience with Jesus—peace that surpasses understanding.\r\nNaturally speaking, it does not make sense for you to feel completely at rest and at peace\r\nwhen you are in dire straits, but supernaturally, you can be filled with peace!\r\nThe world defines peace, harmony and tranquility based on what is happening in the\r\nsensory realm. The world’s notion of peace would look something like this: A man lying in\r\na hammock on a white sandy beach in Hawaii with luau music playing softly in the cabana,\r\ncoconut trees swaying in perfect unison and warm, blue waves rolling languidly along the\r\nshoreline. The world calls that peace—until reality kicks in, and the transient peace that was\r\nexperienced just moments ago dissipates into thin air!\r\nYou see, my friend, you cannot use your external surroundings to permanently\r\ninfluence the turmoil that you are feeling inside. Only Jesus can touch what you are feeling\r\ninside and turn that turmoil into His peace. With the Lord by your side, and from that\r\nabiding peace within, you can influence your external surroundings. It’s not the');

-- --------------------------------------------------------

--
-- Table structure for table `offering_name`
--

CREATE TABLE `offering_name` (
  `offer_id` tinyint(15) NOT NULL,
  `offer_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offering_tbl`
--

CREATE TABLE `offering_tbl` (
  `offer_id` tinyint(15) NOT NULL,
  `offer_name` varchar(60) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pledge`
--

CREATE TABLE `pledge` (
  `p_id` tinyint(15) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `fr_date` date NOT NULL,
  `to_date` date NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledge`
--

INSERT INTO `pledge` (`p_id`, `full_name`, `fr_date`, `to_date`, `amount`) VALUES
(46, 'Ncamiso Magagula', '2017-09-02', '2017-09-16', 10000),
(47, 'Bongumusa Matse', '2017-09-02', '2017-09-09', 5000),
(49, 'Mbongiseni Simelane', '2017-09-02', '2017-09-16', 100000),
(50, ' Ngobese', '2017-09-02', '2017-09-16', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` tinyint(15) NOT NULL,
  `secretary` int(100) NOT NULL,
  `church` varchar(100) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `postal_add` varchar(60) NOT NULL,
  `res_add` varchar(60) NOT NULL,
  `street` varchar(60) NOT NULL,
  `house` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `age` varchar(60) NOT NULL,
  `maritual` varchar(60) NOT NULL,
  `kids` varchar(60) NOT NULL,
  `student` varchar(60) NOT NULL,
  `Skull` varchar(60) NOT NULL,
  `worky` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `pre_church` varchar(60) NOT NULL,
  `kin` varchar(60) NOT NULL,
  `kin_res` varchar(60) NOT NULL,
  `birth_date` date NOT NULL,
  `reg_date` date NOT NULL,
  `office_remarks` text NOT NULL,
  `month` int(5) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `secretary`, `church`, `surname`, `name`, `postal_add`, `res_add`, `street`, `house`, `email`, `phone`, `gender`, `age`, `maritual`, `kids`, `student`, `Skull`, `worky`, `occupation`, `pre_church`, `kin`, `kin_res`, `birth_date`, `reg_date`, `office_remarks`, `month`, `year`) VALUES
(20, 6, 'K1234', 'Mamba', 'Sibongile', 'P O Box 23 Mnanga', 'swazi', 'St Gorges', 'House 44 R', 'nomly@kingdom', '76834121', 'female', '18-22', 'Single', 'yes', 'no', 'Mananga college', 'wrk', 'Mananga colllege', 'Weselian', 'Hana', 'swazi', '2017-02-18', '0000-00-00', 'Experience ', 0, 0),
(21, 6, 'K1234', 'Manana', 'Letha', 'P O Box 12 Kingdom', 'swazi', 'St Johns', 'house 12', 'myThiles.gmail.com', '76883413', 'male', '18-22', 'Single', 'no', 'yes', 'Limkokwing', 'wrk', 'none', 'none', 'Moses', 'swazi', '2017-12-19', '0000-00-00', 'Good singer', 0, 0),
(22, 6, 'K1234', 'Manana', 'Letha', 'P O Box 12 Kingdom', 'swazi', 'St Johns', 'house 12', 'myThiles.gmail.com', '78112342', 'male', '18-22', 'Single', 'no', 'yes', 'Limkokwing', 'wrk', 'none', 'none', 'Moses', 'swazi', '2017-12-19', '0000-00-00', 'Good singer', 0, 0),
(23, 6, 'ngweni', 'Maziya', 'Nokwanda', 'P O box 23 Heaven', 'Heavens gate', 'Angel', 'Jesus', 'nokwa2bb', '76812345', 'male', '18-22', 'Single', 'yes', 'yes', '', 'wrk', 'sric', '', '', '', '2017-04-18', '2018-02-25', 'More', 0, 0),
(24, 6, 'K1234', 'Matsebula', 'Senzo', 'Mbabane, Sandla, ', 'Swazi', 'N/A', '43', 'mkhosimamba@gmail.com', '76889123', 'female', '18-22', 'Single', 'yes', 'no', '', 'wrk', 'ESRIC', 'N/A', 'Nomsa Hleta', 'swazi', '1982-03-04', '2020-03-02', '', 3, 1982);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rol_id` tinyint(15) NOT NULL,
  `role_name` varchar(60) NOT NULL,
  `des` text NOT NULL,
  `church` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rol_id`, `role_name`, `des`, `church`) VALUES
(16, 'Assistant Pastor', 'Assist local pastor', 'K1234'),
(17, 'Pastor', ' Feed Church with spiritual food', 'K1234'),
(18, 'Deacon', ' Support church admin', 'K1234'),
(20, 'Usher', ' Keep church welcoming', 'K1234'),
(21, 'Pastor', ' Deliver message to church', 'ngweni');

-- --------------------------------------------------------

--
-- Table structure for table `roley`
--

CREATE TABLE `roley` (
  `rol_id` tinyint(15) NOT NULL,
  `role_name` varchar(60) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `user_id` tinyint(15) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `username` varchar(60) NOT NULL,
  `position` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `church` varchar(500) NOT NULL,
  `church_name` varchar(50) NOT NULL,
  `name` varchar(70) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`user_id`, `admin_id`, `username`, `position`, `password`, `church`, `church_name`, `name`, `image`) VALUES
(4, 0, 'ruz', 'admin', 'ruz', 'K1222', 'Mananga FEA', 'Ruzovelt Matse', 'photos/2017-10-14-18-46-22-112.jpg'),
(6, 3, 'best', 'Secretary', 'mybest', 'K1234', 'Mananga FEA', 'Nkhululeko Zwane', 'photos/1566810439740.jpg'),
(7, 4, 'thulis', 'Treasurer', 'thulis', 'K1234', 'Mananga FEA', 'Thando Maseko', 'photos/pray.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tither`
--

CREATE TABLE `tither` (
  `tithe_id` int(10) NOT NULL,
  `church` varchar(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `mem_code` varchar(10) NOT NULL,
  `amount` decimal(10,4) NOT NULL,
  `date` date NOT NULL,
  `des` varchar(100) NOT NULL,
  `month` varchar(5) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tither`
--

INSERT INTO `tither` (`tithe_id`, `church`, `Name`, `mem_code`, `amount`, `date`, `des`, `month`, `year`) VALUES
(1, 'K1234', 'makhosi Si', 'K1234M2', '2018.0000', '0000-00-00', 'good', '', ''),
(2, 'K1234', 'Sibongile ', '20', '2000.0000', '2017-12-05', 'good', '', ''),
(3, 'K1234', 'Sibongile ', '20', '2014.0000', '2020-00-00', 'good', '', ''),
(4, 'K1234', 'Sibongile ', '20', '20000.0000', '2018-02-21', 'too good', '', ''),
(5, 'K1234', 'Letha Mana', '22', '3000.0000', '2018-02-21', 'good', '', ''),
(6, 'K1234', 'Sibongile ', '20', '2000.0000', '2018-04-12', 'good', '', ''),
(7, 'K1234', 'Sibongile ', '20', '500.0000', '2020-03-03', '', '3', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `visotors`
--

CREATE TABLE `visotors` (
  `vis_id` int(10) NOT NULL,
  `church` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visotors`
--

INSERT INTO `visotors` (`vis_id`, `church`, `date`, `number`) VALUES
(1, 'K1234', '2018-03-26', 4);

-- --------------------------------------------------------

--
-- Table structure for table `year_plan`
--

CREATE TABLE `year_plan` (
  `year_id` tinyint(15) NOT NULL,
  `church` varchar(10) NOT NULL,
  `fr_date` date NOT NULL,
  `to_date` date NOT NULL,
  `event` varchar(60) NOT NULL,
  `venue` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_plan`
--

INSERT INTO `year_plan` (`year_id`, `church`, `fr_date`, `to_date`, `event`, `venue`) VALUES
(45, '', '2017-09-06', '2017-09-30', 'Family Revivals', 'Seekers temple'),
(46, '', '2017-06-04', '2017-06-08', 'Youth Advagandza', 'Seekers temple'),
(47, '', '2017-08-02', '2017-08-09', 'Threen Days of power', 'Seekers Temple'),
(48, 'K1234', '2018-01-08', '2018-01-30', '21 days fasting', 'Mananga Hall'),
(55, 'K1234', '2020-01-01', '2021-01-01', 'Youth Sunday', 'Mantjolo FEA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`bud_id`);

--
-- Indexes for table `check_reg`
--
ALTER TABLE `check_reg`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `com_member`
--
ALTER TABLE `com_member`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `com_position`
--
ALTER TABLE `com_position`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `damaged`
--
ALTER TABLE `damaged`
  ADD PRIMARY KEY (`dam_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`inc_id`);

--
-- Indexes for table `minutes`
--
ALTER TABLE `minutes`
  ADD PRIMARY KEY (`min_id`);

--
-- Indexes for table `offering_name`
--
ALTER TABLE `offering_name`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `offering_tbl`
--
ALTER TABLE `offering_tbl`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `pledge`
--
ALTER TABLE `pledge`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indexes for table `roley`
--
ALTER TABLE `roley`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tither`
--
ALTER TABLE `tither`
  ADD PRIMARY KEY (`tithe_id`);

--
-- Indexes for table `visotors`
--
ALTER TABLE `visotors`
  ADD PRIMARY KEY (`vis_id`);

--
-- Indexes for table `year_plan`
--
ALTER TABLE `year_plan`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `ass_id` tinyint(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `ass_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `ass_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `bud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `check_reg`
--
ALTER TABLE `check_reg`
  MODIFY `ch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `com_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `com_member`
--
ALTER TABLE `com_member`
  MODIFY `com_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `com_position`
--
ALTER TABLE `com_position`
  MODIFY `pos_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `damaged`
--
ALTER TABLE `damaged`
  MODIFY `dam_id` tinyint(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `exp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `inc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `minutes`
--
ALTER TABLE `minutes`
  MODIFY `min_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offering_name`
--
ALTER TABLE `offering_name`
  MODIFY `offer_id` tinyint(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offering_tbl`
--
ALTER TABLE `offering_tbl`
  MODIFY `offer_id` tinyint(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pledge`
--
ALTER TABLE `pledge`
  MODIFY `p_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `rol_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roley`
--
ALTER TABLE `roley`
  MODIFY `rol_id` tinyint(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_users`
--
ALTER TABLE `sys_users`
  MODIFY `user_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tither`
--
ALTER TABLE `tither`
  MODIFY `tithe_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visotors`
--
ALTER TABLE `visotors`
  MODIFY `vis_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `year_plan`
--
ALTER TABLE `year_plan`
  MODIFY `year_id` tinyint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
