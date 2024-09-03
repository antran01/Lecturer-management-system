-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2024 at 06:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecturermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `course_credits` int(11) DEFAULT NULL,
  `course_department` varchar(30) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `course_credits`, `course_department`, `semester`, `year`) VALUES
(1, 'Physical training', 2, 'A', 1, 2021),
(3, 'Listening AE1', 3, 'L', 3, 2021),
(4, 'Analysis 1', 2, 'A', 1, 2021),
(5, 'Web applicaton progr', 4, 'B', 2, 2021),
(6, 'Financial Management', 3, 'L', 2, 2021),
(7, 'Writing AE2', 4, 'A', 3, 2021),
(8, 'Political economics ', 3, 'A', 1, 2021),
(9, 'Functional analysis', 2, 'B', 2, 2021),
(10, 'Introduction to Micr', 3, 'B', 3, 2021),
(11, 'Linear Algebra', 4, 'B', 2, 2021),
(12, 'Financial Economics', 3, 'A', 1, 2021),
(13, 'Differential Economi', 2, 'L', 2, 2021),
(14, 'Scientific Socialism', 3, 'L', 2, 2021),
(15, 'Real Anaysis', 2, 'A', 1, 2021),
(16, 'Philosophy of Marxis', 4, 'B', 2, 2021),
(17, 'Financial Markets', 4, 'B', 1, 2021),
(18, 'Analysis 2', 2, 'L', 2, 2021),
(19, 'Speaking AE2', 4, 'A', 3, 2021),
(20, 'Introduction to Macr', 3, 'B', 2, 2021),
(21, 'Database Management ', 4, 'B', 3, 2021),
(22, 'Asset pricing', 2, 'L', 2, 2022),
(23, 'Software Engineering', 3, 'A', 1, 2022),
(24, 'Modeling and stimula', 4, 'B', 3, 2022),
(25, 'Probability', 4, 'B', 3, 2022),
(26, 'Programming C/C++', 2, 'L', 1, 2022),
(27, 'Data mining', 3, 'A', 2, 2022),
(28, 'Introduction to corp', 4, 'A', 3, 2022),
(29, 'Statistics', 2, 'B', 1, 2022),
(30, 'Random Processes', 2, 'L', 2, 2022),
(31, 'Analysis 3', 3, 'L', 3, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `dept_phonenumber` int(11) DEFAULT NULL,
  `building` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `room`, `capacity`, `dept_phonenumber`, `building`) VALUES
(1062, 'Applied Mathematics', 405, 40, 463521985, 'B'),
(1155, 'Bio Technology', 115, 30, 420311471, 'A'),
(1422, 'Business Administration', 143, 30, 497750908, 'A'),
(1432, 'Business Administration', 228, 30, 221849505, 'B'),
(1696, 'Applied Mathematics', 210, 30, 332006771, 'B'),
(1989, 'Bio Technology', 154, 30, 431023735, 'B'),
(2008, 'Logistics', 200, 30, 576377493, 'A'),
(2049, 'Bio Technology', 269, 30, 858821985, 'B'),
(2062, 'Bio Technology', 289, 30, 694455471, 'L'),
(2159, 'Applied Mathematics', 207, 30, 228900124, 'L'),
(2699, 'Finance', 186, 30, 863884070, 'A'),
(3756, 'Logistics', 270, 30, 353444623, 'A'),
(4113, 'Information Technology', 141, 30, 688817801, 'L'),
(4453, 'Bio Technology', 299, 30, 692299798, 'A'),
(4717, 'Business Administration', 268, 30, 538333040, 'B'),
(4792, 'Bio Technology', 117, 30, 215478530, 'L'),
(4815, 'Finance', 231, 30, 262869751, 'L'),
(4922, 'Business Administration', 233, 30, 622695518, 'A'),
(4960, 'Information Technology', 137, 30, 686418085, 'A'),
(5121, 'Business Administration', 203, 30, 675303835, 'L'),
(5210, 'Logistics', 278, 30, 674185689, 'B'),
(5308, 'Logistics', 160, 30, 387770496, 'A'),
(5394, 'Information Technology', 270, 30, 792417017, 'B'),
(5546, 'Logistics', 152, 30, 652771418, 'B'),
(5610, 'Logistics', 179, 30, 273522312, 'B'),
(5697, 'Bio Technology', 172, 30, 208526042, 'A'),
(5807, 'Information Technology', 251, 30, 498272748, 'A'),
(5986, 'Business Administration', 121, 30, 261633014, 'L'),
(6142, 'Information Technology', 280, 30, 722366815, 'L'),
(6897, 'Bio Technology', 178, 30, 207665630, 'A'),
(6898, 'Logistics', 241, 30, 709014413, 'L'),
(6943, 'Finance', 241, 30, 624882656, 'B'),
(7044, 'Business Administration', 148, 30, 499558308, 'A'),
(7593, 'Finance', 368, 30, 493892886, 'L'),
(7744, 'Information Technology', 275, 30, 569001339, 'B'),
(7944, 'Logistics', 157, 30, 652771418, 'A'),
(8074, 'Bio Technology', 211, 30, 332467284, 'L'),
(8154, 'Applied Mathematics', 158, 30, 722179932, 'A'),
(8490, 'Business Administration', 215, 30, 177697976, 'A'),
(8797, 'Applied Mathematics', 280, 30, 622955019, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lec_ID` int(11) NOT NULL,
  `lec_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `GPA` float DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `lec_phone_number` int(15) DEFAULT NULL,
  `lec_email` varchar(40) DEFAULT NULL,
  `lec_dep_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lec_ID`, `lec_name`, `gender`, `date_of_birth`, `GPA`, `salary`, `lec_phone_number`, `lec_email`, `lec_dep_ID`) VALUES
(1019, 'Gina Von', 'female', '1985-07-12', 4, 20000, 321932104, 'Dwight_Lockman@marshall.net', 5610),
(1214, 'Candelario Larkin', 'male', '1990-12-15', 3.1, 13000, 641667695, 'Isadore.Miller@tanner.me', 4815),
(1667, 'Guiseppe Kiehn', 'female', '1989-11-11', 3, 13000, 731706969, 'Brendon_Walker@petra.co.uk', 3756),
(1994, 'Maynard Borer', 'female', '1977-03-16', 3.4, 14000, 882652204, 'Ettie.Ratke@vernon.biz', 2008),
(2150, 'Jo Monahan', 'male', '1986-05-06', 3.1, 12500, 720833755, 'Stacey_Stamm@jannie.ca', 4922),
(2326, 'Daphnee Corwin', 'male', '1971-08-03', 2.9, 12000, 883227808, 'Oren@jamarcus.name', 5986),
(2457, 'Nickolas Fay', 'male', '1970-08-14', 3.1, 13000, 663021842, 'Theron@rafael.biz', 4717),
(2507, 'Ryan Lakin Sr', 'male', '1968-07-12', 2.9, 12000, 872204710, 'Mylene.Gleason@sibyl.name', 8797),
(2579, 'Sedrick Hegmann', 'male', '1978-02-14', 2.9, 12000, 650698327, 'Jessika@jalon.ca', 6943),
(2919, 'Domenic Kihn', 'male', '1959-03-13', 3, 125000, 832735210, 'Giles.Mueller@louvenia.com', 1696),
(3314, 'Colby Grady', 'female', '1985-07-19', 3.2, 14000, 646570244, 'Dane_OConner@helen.com', 4113),
(3716, 'Dr Ricardo Cartwright', 'male', '1988-06-05', 3.5, 14000, 824734128, 'Matilda@kameron.com', 1432),
(3789, 'Kimberly Dare', 'female', '1968-07-01', 2.9, 12000, 649075064, 'Kelley@helena.com', 5394),
(3813, 'Juliana Rath DVM', 'male', '1980-05-18', 2.7, 10000, 779482998, 'Gilbert@easter.ca', 4792),
(3950, 'Justen Considine', 'male', '1988-01-21', 2.9, 12000, 761304466, 'Fausto@richmond.biz', 6897),
(4014, 'Jace Wilderman', 'female', '1981-06-20', 3.1, 13000, 689149391, 'Landen_Prohaska@marie.me', 7744),
(4076, 'Judy LarkinLaurianne Fritsch', 'female', '1984-07-19', 3.2, 13000, 806851207, 'Emelia.Stoltenberg@tiffany.us', 8074),
(4107, 'Noemy Huels', 'male', '1972-09-09', 3.3, 13500, 666807163, 'Stacy@ada.com', 8154),
(4170, 'Miss Dameon Pagac', 'female', '1978-09-22', 2.8, 11000, 886985880, 'Chaz@reymundo.org', 6142),
(4373, 'Ken Schimmel', 'male', '1980-10-08', 2.8, 11000, 820134960, 'Oliver_Ferry@tyrell.org', 1062),
(4382, 'Edna Hyatt', 'female', '1971-12-04', 3, 13000, 891370609, 'Mozelle_Kunze@laisha.io', 2062),
(4753, 'Jessyca Fadel', 'female', '1982-05-21', 2.7, 10000, 852226029, 'Derek_Ryan@kendall.info', 4960),
(5250, 'Margarete Turcotte', 'male', '1970-08-10', 3, 12500, 622438912, 'Jaylin.Lueilwitz@fabiola.biz', 2159),
(5271, 'Miss Lambert Hickle', 'female', '1969-08-02', 2.9, 12000, 784454579, 'Aileen_Dach@kali.io', 5807),
(5449, 'Carter Leuschke', 'female', '1976-04-15', 2.9, 11000, 654186117, 'Mustafa_Jerde@santiago.biz', 5210),
(6052, 'Nia Friesen', 'female', '1978-04-17', 3.5, 16000, 762210074, 'Christop@alisa.ca', 5546),
(6388, 'Alexys Shanahan', 'male', '1984-07-04', 3.4, 13500, 775986697, 'Violet.Lebsack@janice.co.uk', 8490),
(6613, 'Sim Kozey', 'male', '1978-02-20', 3.3, 13000, 713178442, 'Miller_Von@felicia.org', 2049),
(7126, 'Dave Balistreri', 'male', '1986-01-18', 2.8, 11000, 881325235, 'Priscilla@kaycee.net', 7593),
(7288, 'Glenda Leuschke', 'female', '1971-01-13', 2.8, 10000, 649232975, 'DTheo.White@randall.ca', 6898),
(7625, 'Nannie Beahane', 'female', '1968-06-18', 3.3, 15000, 849393195, 'Ilene@dario.orgo', 7944),
(7637, 'Jared Amore', 'male', '1985-11-14', 2.9, 12000, 820157366, 'Desmond@ava.info', 2699),
(7742, 'Reese Bartell', 'female', '1959-11-05', 3.4, 14000, 874696161, 'Ida@samanta.net', 1155),
(7797, 'Christiana Kertzmann', 'male', '1965-10-11', 3, 12500, 792479807, 'Alexandre.Simonis@norwood.com', 7044),
(8291, 'Deon Hammes', 'male', '1989-01-07', 3.2, 13000, 722895605, 'Serenity@randy.org', 5121),
(8446, 'Miss Greyson Prohaska', 'female', '1960-10-24', 3.5, 14500, 657087854, 'Fanny.Turner@catherine.org', 1989),
(8543, 'Brendan Bogisich', 'male', '1975-09-02', 2.8, 11000, 694975734, 'Juliet.Doyle@estel.us', 1422),
(8697, 'Kelsi Russel', 'female', '1985-01-15', 3.3, 13500, 793098347, 'DKathryne@luigi.org', 4453),
(8757, 'Mckenna Carroll', 'female', '1974-05-14', 2.9, 12000, 648682458, 'Marvin_Runte@heloise.co.uko', 5308),
(8845, 'Kurt Nader PhD', 'male', '1987-03-17', 3.2, 13500, 611290549, 'Ulises.Connelly@monroe.us', 5697);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `budget` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `duration`, `startdate`, `deadline`, `budget`) VALUES
(100, 'Omnicell  Pharmacy carts Phase II', 2, '2021-01-21', '2021-03-21', 2800),
(101, 'Payroll Protection Program', 3, '2021-02-21', '2021-05-21', 2071),
(102, 'General Revenue Notes', 4, '2021-03-19', '2021-07-19', 4500),
(103, 'Electric System General Revenue Bonds', 1, '2021-04-15', '2021-05-16', 4617),
(104, 'Payroll Mobility Tax Bond Anticipation', 5, '2021-05-13', '2021-10-19', 4071),
(105, 'Transportation Revenue Bond Notes', 2, '2021-05-20', '2021-07-16', 2910),
(106, 'Transportation Revenue Green Bonds', 4, '2021-06-13', '2021-10-16', 4322),
(107, 'Commercial Paper', 6, '2021-05-30', '2021-11-30', 4218),
(108, 'Series 2020 Bonds', 3, '2021-08-31', '2021-11-30', 2072),
(109, 'Affordable Housing Revenue Bonds', 5, '2021-07-31', '2021-12-31', 4718),
(110, 'Halletts Points', 4, '2021-05-16', '2021-09-16', 4608),
(111, 'Reconstruction of Spillway at Conklingville Dam', 6, '2021-03-25', '2021-09-25', 2055),
(112, 'Southern Expansion', 5, '2021-06-18', '2021-11-18', 4736),
(113, '15 Hudson Yards Housing Rev. Bonds', 4, '2021-05-17', '0000-00-00', 3193),
(114, '260 Kent Avenue', 7, '2021-05-24', '2021-12-24', 3039),
(115, '435 East 13th Street', 2, '2021-06-13', '2021-08-13', 4236),
(116, '505 West 37th St.2020', 1, '2021-10-20', '2021-11-20', 3150),
(117, '810 Fulton', 1, '2021-03-14', '2021-04-14', 4495),
(118, 'Hope Gardens Housing Revenue', 1, '2021-03-29', '2021-04-30', 2208),
(119, 'Ocean Bay Housing Revenue', 2, '2021-02-22', '2021-04-22', 4676),
(120, 'Homeowners Mortgage Revenue Bonds', 3, '2021-01-15', '2021-04-15', 4808),
(121, 'United Health Servies', 4, '2021-02-15', '2021-06-18', 2535),
(122, 'DYouville College', 3, '2021-03-18', '2021-06-19', 2489),
(123, 'CIDC COLONIE LLC', 5, '2021-06-29', '2021-11-30', 4088),
(124, 'Town of Amherst Industrial Development', 1, '2021-06-19', '2021-07-19', 4804),
(125, 'Protection Program', 2, '2021-07-19', '2022-01-16', 4826),
(126, 'Electric System', 6, '2021-11-20', '2022-05-20', 2249),
(127, 'Transportation Revenue', 5, '2021-09-16', '2022-02-16', 2228),
(128, 'Anticipation Notes', 4, '2021-03-20', '2022-07-20', 3568),
(129, 'Hudson project', 3, '2021-09-13', '2022-12-13', 2297);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lec_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8798;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
