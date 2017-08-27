-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2017 at 08:54 AM
-- Server version: 5.7.16
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busara`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `educationlevel` int(2) NOT NULL,
  `yearsofexperience` int(2) NOT NULL,
  `coverletter` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `job_id`, `name`, `email`, `phone`, `educationlevel`, `yearsofexperience`, `coverletter`, `created_at`) VALUES
(1, 9, 'test', 'test@gmail.com', 4567890, 2, 4, 'testing', '2017-08-27 07:36:28'),
(2, 9, 'Macharia Maguta', 'machariamaguta@gmail.com', 254723649663, 3, 5, 'I have a keen eye for design and I\'m obsessed by UI/UX.Mobile is my forte. Try me.', '2017-08-27 08:35:11'),
(3, 1, 'Job Applicant', 'ja@gmail.com', 254711223344, 5, 11, 'This job was made for me and vice versa.', '2017-08-27 08:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `salary` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `description` text NOT NULL,
  `requirements` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `salary`, `deadline`, `description`, `requirements`, `created_at`) VALUES
(1, 'CEO', 500000, '2017-08-22', 'Description', 'Requirements', '2017-08-26 07:35:55'),
(2, 'CTO', 400000, '2017-08-15', 'Decsription', 'Requirements', '2017-08-26 07:36:34'),
(3, 'COO', 300000, '2017-08-14', 'Description', 'Requirements', '2017-08-26 07:37:04'),
(4, 'CFO', 350000, '2017-08-15', 'Description', 'Requirements', '2017-08-26 09:14:40'),
(5, 'HR Assistant', 75000, '2017-08-15', 'Description', 'Requirements', '2017-08-26 09:17:35'),
(6, 'Newly Created Position', 30000, '2017-08-31', 'Description', 'Requirements', '2017-08-26 20:12:26'),
(7, 'Recently Vacated Position', 20000, '2017-08-28', 'Description', 'Requirements', '2017-08-26 20:13:23'),
(8, 'Intern', 0, '2017-08-21', 'Description', 'Requirements', '2017-08-26 20:15:14'),
(9, 'Front End Dev', 1000000, '2017-09-01', 'Front end web dev.\r\n\r\nPoint of contact with clients.', 'Self-starter.\r\nHighly motivated.\r\nCan work well under pressure.', '2017-08-26 20:44:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
