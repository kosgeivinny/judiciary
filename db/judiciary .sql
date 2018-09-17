-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2018 at 11:58 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judiciary`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `ID` int(11) NOT NULL,
  `Caseno` varchar(200) NOT NULL,
  `Application` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Done_by` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `ID` int(11) NOT NULL,
  `Caseno` varchar(30) NOT NULL,
  `Court` varchar(20) NOT NULL,
  `Activity` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Party` varchar(60) NOT NULL,
  `Registrar` varchar(60) NOT NULL,
  `Date_Registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `Caseno` varchar(30) NOT NULL,
  `Issued_by` varchar(50) NOT NULL,
  `Date_Confirmation` date NOT NULL,
  `Date_Issued` date NOT NULL,
  `Receiver` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cert_disp`
--

CREATE TABLE `cert_disp` (
  `Caseno` varchar(60) NOT NULL,
  `Collected_by` varchar(100) NOT NULL,
  `ID_number` varchar(40) NOT NULL,
  `Date_dispatched` date NOT NULL,
  `Dispatched_by` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `Caseno` varchar(20) NOT NULL,
  `Form109` varchar(10) NOT NULL,
  `Form9` varchar(10) NOT NULL,
  `Form0` varchar(10) NOT NULL,
  `Other` varchar(20) NOT NULL,
  `Date_Filed` varchar(40) NOT NULL,
  `Date_Confirmation` date NOT NULL,
  `Receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`Caseno`, `Form109`, `Form9`, `Form0`, `Other`, `Date_Filed`, `Date_Confirmation`, `Receiver`) VALUES
('20/2018', 'YES', 'YES', 'YES', '', '2018/07/14', '2018-08-14', ' Catherine Ekwam');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `Caseno` varchar(40) NOT NULL,
  `Date_Received` date NOT NULL,
  `Date_Expected` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`Caseno`, `Date_Received`, `Date_Expected`) VALUES
('1/2015', '2015-01-10', '2015-02-09'),
('1/2020', '2018-08-18', '2018-09-17'),
('20/2018', '2017-08-12', '2017-09-11'),
('2020', '2017-08-12', '2017-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `ID` int(11) NOT NULL,
  `Courts` varchar(40) NOT NULL,
  `Head` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`ID`, `Courts`, `Head`) VALUES
(1, 'COURT 1', 'Hon. Charles Obulutsa'),
(2, 'COURT 2', 'Hon. Harrison Barasa'),
(3, 'COURT 3', 'Hon. Naomi Wairimu'),
(4, 'COURT 4', 'Hon. Nicodemus Moseti'),
(5, 'COURT 5', 'Hon. Stella Telewa'),
(6, 'COURT 6', 'Hon. Emily Kigen'),
(7, 'COURT 7', 'Hon. Diana Milimu');

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `Caseno` varchar(20) NOT NULL,
  `Gazette_no` varchar(30) NOT NULL,
  `Date_Issued` date NOT NULL,
  `Receiver` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`Caseno`, `Gazette_no`, `Date_Issued`, `Receiver`) VALUES
('1/2015', '64535', '2015-01-10', ' Catherine Ekwam'),
('1/2020', '12313', '2018-08-18', ' Diana'),
('20/2018', '1757615', '2017-08-12', ' Catherine Ekwam'),
('2020', '1673', '2017-08-12', ' Catherine Ekwam');

-- --------------------------------------------------------

--
-- Table structure for table `grantt`
--

CREATE TABLE `grantt` (
  `Caseno` varchar(20) NOT NULL,
  `Issued_by` varchar(80) NOT NULL,
  `Date_Issued` date NOT NULL,
  `Date_Expected` date NOT NULL,
  `Receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grantt`
--

INSERT INTO `grantt` (`Caseno`, `Issued_by`, `Date_Issued`, `Date_Expected`, `Receiver`) VALUES
('1/2015', 'HON. CHARLES OBULUTSA', '2017-08-14', '2018-02-14', ' Catherine Ekwam'),
('20/2018', 'HON. JUSTICE G.K. KIMONDO', '2017-08-09', '2018-08-09', ' Catherine Ekwam');

-- --------------------------------------------------------

--
-- Table structure for table `grant_disp`
--

CREATE TABLE `grant_disp` (
  `Caseno` varchar(60) NOT NULL,
  `Collected_by` varchar(100) NOT NULL,
  `ID_number` varchar(40) NOT NULL,
  `Date_dispatched` date NOT NULL,
  `Dispatched_by` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grant_disp`
--

INSERT INTO `grant_disp` (`Caseno`, `Collected_by`, `ID_number`, `Date_dispatched`, `Dispatched_by`) VALUES
('1/2015', 'Jameson', '31231', '1970-01-01', ' Catherine Ekwam'),
('20/2018', 'Mohammud', '75645', '2018-04-04', ' Catherine Ekwam');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `Caseno` varchar(30) NOT NULL,
  `Death` varchar(20) NOT NULL,
  `Chief` varchar(20) NOT NULL,
  `Form80` varchar(20) NOT NULL,
  `Form5` varchar(20) NOT NULL,
  `Form12` varchar(20) NOT NULL,
  `Form38` varchar(20) NOT NULL,
  `Form57` varchar(20) NOT NULL,
  `Form11` varchar(20) NOT NULL,
  `Other` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Caseno`, `Death`, `Chief`, `Form80`, `Form5`, `Form12`, `Form38`, `Form57`, `Form11`, `Other`) VALUES
('1/2015', 'YES', 'YES', 'YES', 'YES', 'YES', 'NO', 'YES', 'YES', ''),
('1/2020', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', ''),
('20/2018', 'YES', 'YES', 'YES', 'YES', 'YES', 'NO', 'YES', 'YES', ''),
('2020', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', '');

-- --------------------------------------------------------

--
-- Table structure for table `objection`
--

CREATE TABLE `objection` (
  `Caseno` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `P1` varchar(30) NOT NULL,
  `P2` varchar(30) NOT NULL,
  `P3` varchar(30) NOT NULL,
  `P4` varchar(30) NOT NULL,
  `Filee` varchar(40) NOT NULL,
  `Contact` varchar(80) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Sent` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objection`
--

INSERT INTO `objection` (`Caseno`, `Date`, `P1`, `P2`, `P3`, `P4`, `Filee`, `Contact`, `Address`, `Sent`) VALUES
('2020', '2018-08-10', 'Peter Kinyua', '', '', '', 'on', '0723501542', '410 Kapsabet', 'Catherine Ekwam');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `Caseno` varchar(20) NOT NULL,
  `Payment` varchar(20) NOT NULL,
  `Receipt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`Caseno`, `Payment`, `Receipt`) VALUES
('1/2015', 'Cooperative Bank', '423231'),
('1/2020', 'National Bank', '645342'),
('20/2018', 'Stanbic Bank', '16126'),
('2020', 'NIC Bank', '7137');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `Caseno` varchar(20) NOT NULL,
  `Serial` varchar(40) NOT NULL,
  `Date_Issued` date NOT NULL,
  `Receiver` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`Caseno`, `Serial`, `Date_Issued`, `Receiver`) VALUES
('1/2015', '1345677', '2015-01-05', ' Catherine Ekwam'),
('1/2020', '876836', '2016-08-21', ' Diana'),
('20/2018', '16127', '2018-08-12', ' Catherine Ekwam'),
('2020', '1712', '2018-08-12', ' Catherine Ekwam');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Caseno` varchar(20) NOT NULL,
  `Deceased` varchar(30) NOT NULL,
  `Petitioner1` varchar(30) NOT NULL,
  `Petitioner2` varchar(30) NOT NULL,
  `Petitioner3` varchar(60) NOT NULL,
  `Petitioner4` varchar(60) NOT NULL,
  `Date` date NOT NULL,
  `Submitted` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Caseno`, `Deceased`, `Petitioner1`, `Petitioner2`, `Petitioner3`, `Petitioner4`, `Date`, `Submitted`) VALUES
('1/2015', 'Peter Kimunya', 'Evans Kidero', '', '', '', '2015-01-01', 'Catherine Ekwam'),
('1/2020', 'Isaiah', 'Paul', '', '', '', '2014-08-21', 'Catherine Ekwam'),
('20/2018', 'Jonathan', 'Kwame Nkurumah', '', '', '', '2017-08-08', 'Catherine Ekwam');

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE `sent` (
  `Caseno` varchar(20) NOT NULL,
  `Notice` varchar(30) NOT NULL,
  `Date_Submitted` date NOT NULL,
  `Sent` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sent`
--

INSERT INTO `sent` (`Caseno`, `Notice`, `Date_Submitted`, `Sent`) VALUES
('1/2015', 'YES', '2015-01-03', ' Catherine Ekwam'),
('1/2020', 'YES', '2016-08-21', ' Diana'),
('20/2018', 'YES', '2017-08-10', ' Catherine Ekwam'),
('2020', 'YES', '2017-08-10', ' Catherine Ekwam');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Name` varchar(80) NOT NULL,
  `PJ` int(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Name`, `PJ`, `Email`, `Username`, `Password`) VALUES
('Catherine Ekwam', 55342, 'catherine.ekwam@court.go.ke', 'ekwam', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `cert_disp`
--
ALTER TABLE `cert_disp`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `government`
--
ALTER TABLE `government`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `grantt`
--
ALTER TABLE `grantt`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `grant_disp`
--
ALTER TABLE `grant_disp`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `objection`
--
ALTER TABLE `objection`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `sent`
--
ALTER TABLE `sent`
  ADD PRIMARY KEY (`Caseno`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`PJ`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courts`
--
ALTER TABLE `courts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
