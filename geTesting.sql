-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2016 at 02:30 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geTesting`
--

-- --------------------------------------------------------

--
-- Table structure for table `requestion`
--

CREATE TABLE `requestion` (
  `id_req` int(11) NOT NULL COMMENT 'id คำร้อง primary key',
  `req_prename` enum('นาย','นาง','นางสาว') COLLATE utf8_unicode_ci NOT NULL COMMENT 'คำนำหน้าผู้เขียนคำร้อง',
  `req_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อผู้เขียนคำร้อง',
  `req_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสกุลผู้เขียนคำร้อง',
  `req_stdID` varchar(12) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสนักศึกษา',
  `req_faculty` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'คณะ',
  `req_branch` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'สาขาวิชา',
  `req_classNum` varchar(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชั้นปี 1,2,3,4,....,8',
  `req_tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เบอร์โทร',
  `req_pak` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL COMMENT 'ภาค 1=ปกติ ,2= พิเศษ ,3=อื่น ๆ',
  `req_class` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ระดับ 1=ปริญญาตรี,2 =ปริญญาตรี(ต่อเนื่อง),3 =อื่น ๆ',
  `req_term` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ภาคเรียน',
  `req_year` char(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ปีการศึกษา',
  `req_date` date NOT NULL COMMENT 'วันที่',
  `req_time` time NOT NULL COMMENT 'เวลา',
  `req_course` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วิชา',
  `req_courseID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสวิชา',
  `req_group` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หมู่เรียน',
  `req_teacher` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อาจารย์ประจำวิชา',
  `req_detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'สาเหตุที่ขาดสอบ',
  `req_evidence` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'หลักฐาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestion`
--

INSERT INTO `requestion` (`id_req`, `req_prename`, `req_name`, `req_lastname`, `req_stdID`, `req_faculty`, `req_branch`, `req_classNum`, `req_tel`, `req_pak`, `req_class`, `req_term`, `req_year`, `req_date`, `req_time`, `req_course`, `req_courseID`, `req_group`, `req_teacher`, `req_detail`, `req_evidence`) VALUES
(1, 'นาย', 'ไชยวัฒน์', 'ไชยวัฒน์', '59040249201', 'วิทยาศาสตร์', 'วิทยาการคอมพิวเตอร์', '1', '1111111111', '1', '1', '1', '2559', '2016-09-23', '01:00:00', 'ทดสอบ', '1234', '3', 'test teacher', '', 'ไม่มี,ไม่มี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requestion`
--
ALTER TABLE `requestion`
  ADD PRIMARY KEY (`id_req`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requestion`
--
ALTER TABLE `requestion`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id คำร้อง primary key', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
