-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2016 at 05:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getesting`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `course_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `course_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `course_id`, `course_name`, `id_group`) VALUES
(1, '1500101', 'ภาษาไทยเพื่อการสื่อสาร', 1),
(2, '1500102', 'ภาษาอังกฤษเพื่อการสื่อสาร', 1),
(3, '1500103', 'การอ่านและการเขียนภาษาอังกฤษเพื่อวัตถุประสงค์ทั่วไป', 1),
(4, '1500104', 'จริยธรรมกับชีวิต', 2),
(5, '2000101', 'สุนทรียภาพเพื่อชีวิต', 2),
(6, '2500101', 'พฤติกรรมมนุษย์กับการพัฒนาตน', 2),
(7, '1500105', 'การรู้สารสนเทศ', 2),
(9, '2500102', 'สังคมวัฒนธรรมไทยและภูมิปัญญาท้องถิ่น', 3),
(10, '2500103', 'วิถีโลก', 3),
(11, '2500104', 'กฎหมายเพื่อชีวิตและสิทธิมนุษยชน', 3),
(12, '4000101', 'ชีวิตกับสิ่งแวดล้อม', 4),
(13, '4000102', 'วิทยาศาสตร์เพื่อคุณภาพชีวิต', 4),
(14, '4000103', 'การคิดและการตัดสินใจ', 4),
(15, '4000104', 'เทคโนโลยีสารสนเทศเพื่อการเรียนรู้', 4);

-- --------------------------------------------------------

--
-- Table structure for table `groupcourse`
--

CREATE TABLE `groupcourse` (
  `id_group` int(11) NOT NULL,
  `group_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groupcourse`
--

INSERT INTO `groupcourse` (`id_group`, `group_name`) VALUES
(1, 'กลุ่มวิชาภาษาศาสตร์'),
(2, 'กลุ่มวิชาสังคมศาสตร์'),
(3, 'กลุ่มวิชามนุษย์ศาสตร์'),
(4, 'กุล่มวิชาวิทยาศาสตร์และเทคโนโลยี');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `mem_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_preName` enum('1','2','3') COLLATE utf8_unicode_ci NOT NULL COMMENT '1=นาย,2=นาง,3=นางสาว',
  `mem_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_lastname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_passc` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `req_date` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'วันที่',
  `req_time` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'เวลา',
  `id_course` int(11) NOT NULL COMMENT 'รหัสวิชา',
  `req_teacher` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อาจารย์ประจำวิชา',
  `req_detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'สาเหตุที่ขาดสอบ',
  `req_evidence` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'หลักฐาน',
  `id_create` int(11) NOT NULL,
  `dt_create` datetime NOT NULL,
  `ip_create` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestion`
--

INSERT INTO `requestion` (`id_req`, `req_prename`, `req_name`, `req_lastname`, `req_stdID`, `req_faculty`, `req_branch`, `req_classNum`, `req_tel`, `req_pak`, `req_class`, `req_term`, `req_year`, `req_date`, `req_time`, `id_course`, `req_teacher`, `req_detail`, `req_evidence`, `id_create`, `dt_create`, `ip_create`) VALUES
(1, 'นาย', 'ไชยวัฒน์', 'ไชยวัฒน์', '59040249201', 'วิทยาศาสตร์', 'วิทยาการคอมพิวเตอร์', '1', '1111111111', '1', '1', '1', '2559', '2016-09-23', '01:00:00', 1234, 'test teacher', '', 'ไม่มี,ไม่มี', 0, '0000-00-00 00:00:00', ''),
(2, 'นาย', 'chaiwat', 'homsang', '33', 'science', 'computer', '1', '22', '1', '1', '1', '2559', '27-09-2559,27-09-2559', '22:11,19:11', 12, 'panawat,panawat', 'test', 'test', 1, '2016-09-27 22:12:19', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `groupcourse`
--
ALTER TABLE `groupcourse`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `requestion`
--
ALTER TABLE `requestion`
  ADD PRIMARY KEY (`id_req`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `groupcourse`
--
ALTER TABLE `groupcourse`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requestion`
--
ALTER TABLE `requestion`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id คำร้อง primary key', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
