-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 03:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_notif`
--

CREATE TABLE `admin_notif` (
  `admin_id` int(11) NOT NULL,
  `pwd_application_id` int(11) DEFAULT NULL,
  `read_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_notif`
--

INSERT INTO `admin_notif` (`admin_id`, `pwd_application_id`, `read_status`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(11) NOT NULL,
  `pwd_application_id` int(11) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_relationship` enum('Parent','Sibling','Spouse','Other') NOT NULL,
  `guardian_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `pwd_application_id`, `guardian_name`, `guardian_relationship`, `guardian_contact`) VALUES
(1, 1, 'Maria Dela Cruz', 'Parent', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `pwdcard_applications`
--

CREATE TABLE `pwdcard_applications` (
  `id` int(11) NOT NULL,
  `reference_id` varchar(255) NOT NULL,
  `application_type` enum('New','Renewal','Lost ID') DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` enum('Male','Female','Others') DEFAULT NULL,
  `civil_status` enum('Single','Married','Widowed','Separated') DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `disability` enum('Deaf','Intellectual Disability','Learning Disability','Mental Disability','Physical Disability','Visual Disability','Psychosocial Disability','Speech and Language Impairment','Cancer (RA11215)','Rare Disease (RA10747)') NOT NULL,
  `cause` enum('Congenital','Accident','Disease','Others') DEFAULT NULL,
  `medicalcert` varchar(255) DEFAULT NULL,
  `valid_id` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `submitted_at` timestamp NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pwdcard_applications`
--

INSERT INTO `pwdcard_applications` (`id`, `reference_id`, `application_type`, `fname`, `mname`, `lname`, `dob`, `sex`, `civil_status`, `address`, `contact`, `disability`, `cause`, `medicalcert`, `valid_id`, `photo`, `submitted_at`, `status`) VALUES
(1, 'N955DDZ6AH', 'New', 'Juan', 'Dela', 'Cruz', '2010-06-20', 'Male', 'Single', 'Cabambangan, Bacolor', '09876543210', 'Visual Disability', 'Congenital', 'uploads/socsci (1).pdf', 'uploads/0998-869-3927.jpg', 'uploads/att.a25GCrvUp6zQ8Yp_3pUQCvF3N5FR_e5QqEec0WAyT2I.jpg', '2024-11-27 11:31:22', 'pending');

--
-- Triggers `pwdcard_applications`
--
DELIMITER $$
CREATE TRIGGER `after_pwd_application_insert` AFTER INSERT ON `pwdcard_applications` FOR EACH ROW BEGIN
    -- Replace 1 with the appropriate admin_id
    INSERT INTO admin_notif (admin_id, pwd_application_id, read_status)
    VALUES (1, NEW.id, 0);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `usertype` enum('PWD','Family Member','Advocate','General Public') DEFAULT 'PWD',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `fname`, `lname`, `email`, `password`, `contact`, `dob`, `usertype`, `created_at`, `last_login`) VALUES
(1, 'Jenielyn', 'Ayson', 'jenielynayson@gmail.com', '$2y$10$3Q6SI1OSdD.0aa8heoMsLO3Da2lk7/hS9he.h9M0dAoCPraQxdbaK', '09761350611', '2024-11-05', '', '2024-11-26 13:09:53', '2024-11-26 13:09:53'),
(2, 'Jen', 'Ayson', 'jenayson@gmail.com', '$2y$10$zbuo86Z4ZTkTMHOVTJhIvOkJamWxo3zrdN.oBwEOjf9j85uy3ihsu', '0999999999', '2024-11-27', '', '2024-11-27 09:35:56', '2024-11-27 09:35:56'),
(3, 'Jen123', 'Ayson', 'jen123@gmail.com', '$2y$10$vF/uLiPp9X4Y8qwySAkp9uquwwCZRQnMmQDjM50iFKxl2jGj4gX2m', '0999999999', '2024-11-27', '', '2024-11-27 09:39:26', '2024-11-27 09:39:26'),
(4, 'Jeiyel', 'Batumbakal', 'jeiyel@gmail.com', '$2y$10$rt4GR2KA2KySt2koQwH0y.I/yIaO307ebVxtra3r6uAVikBlRQidW', '0999999999', '2024-11-27', 'General Public', '2024-11-27 09:41:32', '2024-11-27 09:41:32'),
(6, 'dsdsd', 'hahahaha', 'jenda@gmail.com', '$2y$10$qy.MCm9K8bAX22ePiW2eReD6pyIF5CPNTCDDAg9XZDaE.bSnKaE6y', '0999999999', '2024-11-27', '', '2024-11-27 09:43:14', '2024-11-27 09:43:14'),
(7, 'Juan', 'Dela Cruz', 'juandelacruz@gmail.com', '$2y$10$iDh82USYooVt8rnx5LLACuER33erNfprfwVqij9/XDo8v.OMuzXDy', '0999999999', '2024-11-27', 'Advocate', '2024-11-27 12:56:04', '2024-11-27 12:56:04'),
(8, 'Jen', 'Ayson', 'jen20@gmail.com', '$2y$10$vO3nMKJgiIHUutkz2f0QWOJhG9aOZzoIWv.bb5TtKdt0uC153fygK', '0999999999', '2024-11-27', 'General Public', '2024-11-27 13:36:35', '2024-11-27 13:36:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_notif`
--
ALTER TABLE `admin_notif`
  ADD KEY `fk_pwd_application` (`pwd_application_id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pwd_application_id_fk` (`pwd_application_id`);

--
-- Indexes for table `pwdcard_applications`
--
ALTER TABLE `pwdcard_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pwdcard_applications`
--
ALTER TABLE `pwdcard_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_notif`
--
ALTER TABLE `admin_notif`
  ADD CONSTRAINT `fk_pwd_application` FOREIGN KEY (`pwd_application_id`) REFERENCES `pwdcard_applications` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guardians`
--
ALTER TABLE `guardians`
  ADD CONSTRAINT `guardians_ibfk_1` FOREIGN KEY (`pwd_application_id`) REFERENCES `pwdcard_applications` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
