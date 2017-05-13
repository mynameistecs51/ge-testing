-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2017 at 05:40 PM
-- Server version: 5.5.54-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gepr`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`id_course` int(11) NOT NULL,
  `course_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `course_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `course_id`, `course_name`, `id_group`) VALUES
(1, 'GE10001', 'ภาษาไทยเพื่อการสื่อสาร', 1),
(2, 'GE10004', 'สุนทรียภาพในภาษาไทย', 1),
(3, 'GE10002', 'ภาษาอังกฤษเพื่อการสื่อสาร', 1),
(4, 'GE10005', 'ภาษาอังกฤษเพื่อการสื่อสารในสถานการณ์เฉพาะหน้า', 1),
(5, 'GE10003', 'การอ่านและการเขียนภาษาอังกฤษเพื่อจุดประสงค์ทั่วไป', 1),
(6, 'GE10006', 'การอ่านและการเขียนภาษาอังกฤษเพื่อการนําไปใช้', 1),
(7, 'GE20001', 'จริยธรรมเพื่อการดํารงชีวิต', 2),
(9, 'GE20005', 'ศาสนาเพื่อการดํารงชีวิต', 2),
(10, 'GE20002', 'สุนทรียภาพเพื่อชีวิต', 2),
(11, 'GE20006', 'สุนทรียภาพในอีสาน', 2),
(12, 'GE20003', 'พฤติกรรมมนุษย์เพื่อการพัฒนาตน', 2),
(13, 'GE20007', 'จิตวิทยาการพัฒนาตนในสังคมยุคใหม่', 2),
(14, 'GE20004', 'การรู้สารสนเทศ', 2),
(15, 'GE20008', 'ทักษะสารสนเทศในชีวิตประจําวัน', 2),
(16, 'GE30001', 'วิถีชีวิตพื้นถิ่นอุดรธานี', 3),
(17, 'GE30004', 'สังคมและวัฒนธรรมไทย', 3),
(18, 'GE30005', 'พลวัตกับสังคมโลก', 3),
(19, 'GE30006', 'ลุ่มน้ําโขงกับโลกสมัยใหม่', 3),
(20, 'GE30007', 'กฎหมายเพื่อความเข้าใจสังคม', 3),
(21, 'GE30008', 'กฎหมายในชีวิตประจําวัน', 3),
(22, 'GE40001', 'ชีวิตกับสิ่งแวดล้อม', 4),
(23, 'GE40005', 'สิ่งแวดล้อมกับการเปลี่ยนแปลง', 4),
(24, 'GE40002', 'วิทยาศาสตร์เพื่อคุณภาพชีวิต', 4),
(25, 'GE40006', 'วิทยาศาสตร์เพื่ออนาคต', 4),
(26, 'GE40003', 'การคิดและการตัดสินใจ', 4),
(27, 'GE40007', 'การคิดและคณิตศาสตร์ในชีวิตประจําวัน', 4),
(28, 'GE40004', 'เทคโนโลยีสารสนเทศเพื่อการเรียนรู้', 4),
(29, 'GE40008', 'รู้ทันโลกเทคโนโลยี', 4);

-- --------------------------------------------------------

--
-- Table structure for table `groupcourse`
--

CREATE TABLE IF NOT EXISTS `groupcourse` (
`id_group` int(11) NOT NULL,
  `group_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(11) NOT NULL,
  `mem_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_preName` enum('1','2','3') COLLATE utf8_unicode_ci NOT NULL COMMENT '1=นาย,2=นาง,3=นางสาว',
  `mem_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_lastname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_faculty` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_branch` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_passwd` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_status` enum('0','1','2','3') COLLATE utf8_unicode_ci NOT NULL COMMENT '0 = ทั่วไป||นศ ,1 = อาหจารย์ ,2 = หัวหน้าหมวด ,3 = admin'
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `mem_id`, `mem_preName`, `mem_name`, `mem_lastname`, `mem_faculty`, `mem_branch`, `mem_tel`, `mem_email`, `mem_passwd`, `mem_status`) VALUES
(9, '59000000201', '1', 'ไชยวัฒน์', 'หอมแสง', 'วิทยาศาสตร์', 'วิทยาการคอมพิวเตอร์', '0812345678', 'te@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(10, '-', '1', 'เต้', 'ไชยวัฒน์', 'วิทยาศาสตร์', 'หมวดวิชาภาษาศาสตร์', '111111111', 'te@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(11, '-', '2', 'วันวิสาข์', 'คงธนกุลบวร', 'ภาษาศาสตร์', 'ภาษาอังกฤษ', '+66952259895', 'w.khongtanakunbawon@gmail.com', '343b4a53f95a05b874881695cf5c0fc8', '1'),
(12, 'G18', '2', 'คนางค์', 'มาตรา', 'สำนักวิชาศึกษาทั่วไป', 'สารสนเทศศาสตร์', '0815455203', '', 'd41d8cd98f00b204e9800998ecf8427e', '1');

-- --------------------------------------------------------

--
-- Table structure for table `requestion`
--

CREATE TABLE IF NOT EXISTS `requestion` (
`id_req` int(11) NOT NULL COMMENT 'id คำร้อง primary key',
  `req_prename` enum('นาย','นาง','นางสาว') COLLATE utf8_unicode_ci NOT NULL COMMENT 'คำนำหน้าผู้เขียนคำร้อง',
  `req_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อผู้เขียนคำร้อง',
  `req_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสกุลผู้เขียนคำร้อง',
  `req_stdID` varchar(12) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสนักศึกษา',
  `req_classNum` varchar(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชั้นปี 1,2,3,4,....,8',
  `req_tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เบอร์โทร',
  `req_pak` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL COMMENT 'ภาค 1=ปกติ ,2= พิเศษ ,3=อื่น ๆ',
  `req_class` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ระดับ 1=ปริญญาตรี,2 =ปริญญาตรี(ต่อเนื่อง),3 =อื่น ๆ',
  `req_term` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ภาคเรียน',
  `req_year` char(5) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ปีการศึกษา',
  `req_detail` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'สาเหตุที่ขาดสอบ',
  `req_evidence` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'หลักฐาน',
  `id_create` int(11) NOT NULL COMMENT 'คือ id_member',
  `dt_create` datetime NOT NULL,
  `ip_create` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestion`
--

INSERT INTO `requestion` (`id_req`, `req_prename`, `req_name`, `req_lastname`, `req_stdID`, `req_classNum`, `req_tel`, `req_pak`, `req_class`, `req_term`, `req_year`, `req_detail`, `req_evidence`, `id_create`, `dt_create`, `ip_create`) VALUES
(70, 'นาย', 'ไชยวัฒน์', 'หอมแสง', '59000000201', '2', '0812345678', '2', '2', '2', '2559', 'ป่วย', 'ใบรับรองแพทย์    ,test2                          ,test3                          ,test4', 9, '2017-01-04 10:01:12', '172.22.8.199');

-- --------------------------------------------------------

--
-- Table structure for table `requestion_course`
--

CREATE TABLE IF NOT EXISTS `requestion_course` (
`id_reqCourse` int(11) NOT NULL,
  `id_req` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `rc_group` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `rc_teacher` text COLLATE utf8_unicode_ci NOT NULL,
  `rc_date` date NOT NULL,
  `rc_time` time NOT NULL,
  `dt_create` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestion_course`
--

INSERT INTO `requestion_course` (`id_reqCourse`, `id_req`, `id_member`, `id_course`, `rc_group`, `rc_teacher`, `rc_date`, `rc_time`, `dt_create`) VALUES
(129, 70, 9, 6, '3', 'ปณวรรต ', '2016-10-04', '15:09:00', '2017-01-04 10:01:12'),
(130, 70, 9, 9, '1', 'ปณวรรต', '2016-10-10', '15:03:00', '2017-01-04 10:01:12'),
(131, 70, 9, 15, '2', 'ปณวรรต', '2016-10-13', '11:30:00', '2017-01-04 10:01:12');

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
-- Indexes for table `requestion_course`
--
ALTER TABLE `requestion_course`
 ADD PRIMARY KEY (`id_reqCourse`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `groupcourse`
--
ALTER TABLE `groupcourse`
MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `requestion`
--
ALTER TABLE `requestion`
MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id คำร้อง primary key',AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `requestion_course`
--
ALTER TABLE `requestion_course`
MODIFY `id_reqCourse` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=296;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
