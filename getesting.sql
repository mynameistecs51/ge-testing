-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2017 at 02:48 PM
-- Server version: 5.5.40
-- PHP Version: 5.4.35-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `id_course` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `course_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_course`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

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
(29, 'GE40008', 'รู้ทันโลกเทคโนโลยี', 4),
(30, 'GE30003 ', 'กฎหมายเพื่อชีวิตและสิทธิมนุษยชน', 2);

-- --------------------------------------------------------

--
-- Table structure for table `groupcourse`
--

CREATE TABLE IF NOT EXISTS `groupcourse` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

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
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `mem_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_preName` enum('1','2','3') COLLATE utf8_unicode_ci NOT NULL COMMENT '1=นาย,2=นาง,3=นางสาว',
  `mem_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_lastname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_faculty` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_branch` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mem_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_passwd` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mem_status` enum('0','1','2','3') COLLATE utf8_unicode_ci NOT NULL COMMENT '0 = ทั่วไป||นศ ,1 = อาหจารย์ ,2 = หัวหน้าหมวด ,3 = admin',
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `mem_id`, `mem_preName`, `mem_name`, `mem_lastname`, `mem_faculty`, `mem_branch`, `mem_tel`, `mem_email`, `mem_passwd`, `mem_status`) VALUES
(9, '59000000201', '1', 'ไชยวัฒน์', 'หอมแสง', 'วิทยาศาสตร์', 'วิทยาการคอมพิวเตอร์', '0812345678', 'te@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0'),
(10, '-', '1', 'เต้', 'ไชยวัฒน์', 'วิทยาศาสตร์', 'หมวดวิชาภาษาศาสตร์', '111111111', 'te@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(11, '-', '2', 'วันวิสาข์', 'คงธนกุลบวร', 'ภาษาศาสตร์', 'ภาษาอังกฤษ', '+66952259895', 'w.khongtanakunbawon@gmail.com', '343b4a53f95a05b874881695cf5c0fc8', '1'),
(12, 'G18', '2', 'คนางค์', 'มาตรา', 'สำนักวิชาศึกษาทั่วไป', 'สารสนเทศศาสตร์', '0815455203', '', 'd41d8cd98f00b204e9800998ecf8427e', '1'),
(13, '59040244123', '3', 'จินตนา', 'ศรีโบราณ', 'วิทยาศาสตร์', 'เคมี', '0902196602', 'arksarawan@gmail.com', '2bad162915b7efe955de078f09c48f07', '0'),
(14, '59040302252', '3', 'วรัญญา', 'แสนชัย', 'มนุษย์ศาสตร์และสังคมศาสตร์', 'ภาษาอังกฤษ', '0985598854', 'nice-ice@hotmail.co.th', '7a07c263744a6ba823ea0bb6fd76b359', '0'),
(15, '58040325146', '1', 'ชาญณรงค์', 'สมภักดี', 'มนุษยศาสตร์และสังคมศาสตร์', 'การพัฒนาสังคม', '0900233272', 'm_o_bza@hotmail.com', 'c9b5e52d870076a9c7492384e16309bc', '0'),
(16, '58200325107', '1', 'อธิพัทธิ์', 'ไตรยวงษ์', 'มนุษยศาสตร์และสังคมศาสตร์', 'การพัฒนาสังคม', '0614315198', 'pttgassohall@gmail.com', '61cc6ff1a45f8a394015ca1ff54de180', '0'),
(17, '58200278103', '1', 'ปรีชา', 'ธะนะเฮือง', 'วิทยาศาสตรบัณฑิต', 'เทคโนโลยีก่อสร้าง', '0879451516', 'preecha09022536@hotmail.com', '91a7622d70ee9654f4d3c96471dbe22c', '0'),
(18, '58200325112', '1', 'วรุฒ', 'ตันนารัตน์', 'มนุษยศาสตร์และสังคมศาสตร์', 'การพัฒนาสังคม', '0847946324', 'tannarat32@gmail.com', 'fe82c70527d25689f346552a6cd15244', '0'),
(19, '57041278112', '3', 'กนธิชา ', 'กันยาควย', 'มนุษยศาสตร์และสังคมศาสตร์', 'ทัศนศิลป์ออกแบบนิเทศศิลป์', '0981429404', 'SPCsuphachai@gmail.com', 'd5f8d7748b431ccdfbcb15fd9138ab14', '0'),
(20, '57041278112', '3', 'กนธิชา ', 'กันยานุช', 'มนุษยศาสตร์และสังคมศาสตร์', 'ทัศนศิลป์ออกแบบนิเทศศิลป์', '0981429404', 'SPCsuphachai@gmail.com', 'd5f8d7748b431ccdfbcb15fd9138ab14', '0'),
(21, '59040339109', '3', 'ล้อมมาลี', 'ยนต์หมื่น', 'มนุษยศาสตร์', 'ภาษาเวียดนานเพื่อธุรกิจการท่องเที่ยว', '0843851447', 'l0mmalee8890@gmail.com', '7ea572c37001beaa8a1954b03f575ccf', '0'),
(22, '59040339109', '3', 'ล้อมมาลี', 'ยนต์หมื่น', 'มนุษยศาสตร์', 'ภาษาเวียดนานเพื่อธุรกิจการท่องเที่ยว', '0843851447', 'Lommalee8890@gmail.com', '7ea572c37001beaa8a1954b03f575ccf', '0'),
(23, '59040339109', '3', 'ล้อมมาลี', 'ยนต์หมื่น', 'มนุษยศาสตร์และสังคมศาสตร์', 'ภาษาเวียดนามเพื่อธุรกิจการท่องเที่ยว', '0843851447', 'lommalee8890@gmail.com', '7ea572c37001beaa8a1954b03f575ccf', '0'),
(24, '58041151116', '1', 'พงศกร', 'ไชยนา', 'มนุษยศาสตร์และสังคมศาสตร์', 'รัฐประศาสนศาสตร์', '0883122473', 'phongsakon2539pp@gmail.com', 'd14f77e8409022994ddb8e50401b6a03', '0'),
(25, '54450186234', '3', 'ทิภาพร', 'อยู่สุข', 'ครุศาสตร์', 'การศึกษาปฐมวัย', '0935630224', 'tipapornyoosook@gmail.com', 'feff0574f460e83a58cd6e802022f80b', '0'),
(26, '57240901141', '1', 'สรายุทธ', 'สารีบุตร', 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'นิติศาสตร์', '0879547908', 'sarayut1195@gmail.com', 'fb87b837a5492ac5278e1e79c63b913c', '0'),
(27, '58041279101', '1', 'กิตติภพ', 'กันหาสิน', 'มนุษยศาสตร์และสังคมศาสตร์', 'ทัศนศิลป์ (ประยุกต์ศิลป์)', '0801973665', 'bestkittipob@gmail.com', '0024de50a571871df2f0842a0255cb65', '0'),
(28, '', '3', 'พรนภา', 'ทับโต', '59040001117', 'นิเทศศาสตร์วารสารสนเทศ', '0847422752', '', 'd41d8cd98f00b204e9800998ecf8427e', '0'),
(29, '59100141118', '3', 'ณัฐริณีย์', 'ญาณสุวรรณ์', 'ครุศาสตร์', 'วิทยาศาสตร์(เคมี)', '0996580757', 'naming.nattharinee@gmail.com', 'f81077d6109f2b23f1cfe98126b92609', '0'),
(30, '57040428448', '3', 'สุดารัตน์', 'หันทำเล', 'วิทยาการจัดการ', 'การจัดการทั่วไป', '0615073703', '่ีjuthamasboonbai@gmail.com', 'abc563e3988e1a44e429308c4cedf505', '0'),
(31, '57040428448', '3', 'สุดารัตน์', 'หันทำเล', 'วิทยาการจัดการ', 'การจัดการทั่วไป', '0615073703', 'juthamasboonbai@gmail.com', 'abc563e3988e1a44e429308c4cedf505', '0'),
(32, '59040279148', '1', 'ศักดิ์นรินทร์', 'ชุมพล', 'เทคโนโลยี', 'โยธาสถาปัตยกรรม', '0900283816', 'na.browvanilla@gmail.com', '9d46c80096875989754b7792419149f3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `requestion`
--

CREATE TABLE IF NOT EXISTS `requestion` (
  `id_req` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id คำร้อง primary key',
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
  `ip_create` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_req`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=213 ;

--
-- Dumping data for table `requestion`
--

INSERT INTO `requestion` (`id_req`, `req_prename`, `req_name`, `req_lastname`, `req_stdID`, `req_classNum`, `req_tel`, `req_pak`, `req_class`, `req_term`, `req_year`, `req_detail`, `req_evidence`, `id_create`, `dt_create`, `ip_create`) VALUES
(70, 'นาย', 'ไชยวัฒน์', 'หอมแสง', '59000000201', '2', '0812345678', '2', '2', '2', '2559', 'ป่วย', 'ใบรับรองแพทย์    ,test2                          ,test3                          ,test4', 9, '2017-01-04 10:01:12', '172.22.8.199'),
(71, 'นางสาว', 'จินตนา', 'ศรีโบราณ', '59040244123', '1', '0902196602', '1', '1', '1', '2559', 'ข้าพเจ้าไม่สบายมาก โดยมีอาการอาหารเป็นพิษอย่างรุนแรง', 'ใบรับรองแพทย์', 13, '2017-01-09 10:11:43', '192.168.59.182'),
(83, 'นาย', 'อธิพัทธิ์', 'ไตรยวงษ์', '58200325107', '2', '0614315198', '2', '2', '1', '2559', 'เข้าใจว่าวิชานี้อาจารย์เลื่อนสอบก็เลยไปหาหมอตามใบนัดเลยทำให้มาสอบไม่ทัน', 'ใบนัด  ,  ', 16, '2017-01-09 13:32:44', '192.168.62.201'),
(84, 'นาย', 'ปรีชา', 'ธะนะเฮือง', '58200278103', '1', '0879451516', '2', '1', '1', '2559', 'ข้าพเจ้าได้เดินทางไปสอบนายสิบตำรวจในวันที่ 4 ธันวาคม 2559 ซึ่งตรงกับวันที่สอบปลายภาคของข้าพเจ้าพอดี', 'หนังสือบัตรประจำตัวสอบนายสิบตำรวจ', 17, '2017-01-09 14:08:50', '1.4.165.186'),
(85, 'นาย', 'วรุฒ', 'ตันนารัตน์', '58200325112', '2', '0847946324', '2', '1', '1', '2559', 'เดินทางไปราชการที่ กรุงเทพมหานคร', 'หนังสือเดินทางไปราชการ', 18, '2017-01-09 14:20:47', '182.52.208.183'),
(118, 'นางสาว', 'ล้อมมาลี', 'ยนต์หมื่น', '59040339109', '1', '0843851447', '1', '1', '1', '2559', 'มารดาเสียชีวิตกระทันหัน', 'ใบมรณะบัตร', 23, '2017-01-09 19:41:36', '1.47.107.111'),
(127, 'นางสาว', 'ล้อมมาลี', 'ยนต์หมื่น', '59040339109', '1', '0843851447', '1', '0', '1', '2559', 'มารดาเสียชีวิตกระทันหัน', 'ใบมรณะบัตร', 22, '2017-01-09 19:46:51', '49.229.56.178'),
(130, 'นาย', 'ชาญณรงค์', 'สมภักดี', '58040325146', '2', '0900233272', '1', '0', '1', '2559', 'ยางรถรั่วแล้วได้เปลี่ยนยางจึงทำให้ไปสอบไม่ทันเวลาครับ', 'รูปภาพ', 15, '2017-01-09 21:04:27', '171.5.217.150'),
(131, 'นางสาว', 'ทิภาพร', 'อยู่สุข', '54450186234', '6', '0935630224', '1', '1', '1', '2559', 'ขาดสอบปลายภาคในรายวิชาการคิดและการตัดสินใจ', '', 25, '2017-01-10 10:28:30', '49.228.113.144'),
(132, 'นางสาว', 'ทิภาพร', 'อยู่สุข', '54450186234', '6', '0935630224', '1', '1', '1', '2559', 'ขาดสอบปลายภาคในรายวิชาการคิดและการตัดสินใจ', '', 25, '2017-01-10 10:30:53', '49.228.113.135'),
(133, 'นางสาว', 'ทิภาพร', 'อยู่สุข', '54450186234', '6', '0935630224', '1', '1', '1', '2559', 'ขาดสอบปลายภาคในรายวิชาการคิดและการตัดสินใจ', '', 25, '2017-01-10 10:32:59', '49.228.114.19'),
(143, 'นาย', 'สรายุทธ', 'สารีบุตร', '57240901141', '3', '0879547908', '2', '0', '1', '2559', 'ไปสอบสัสสดี  ที่มหาวิทยาลัยรามคำแหง (หัวหมาก)', 'บัตรประจำตัวผู้สัมครสอบคัดเลือก  ทหารกองหนุน  เข้ารับราชการเป็นนายทหารประทวน สายงานสัสดี', 26, '2017-01-10 13:24:42', '14.207.140.167'),
(150, 'นาย', 'กิตติภพ', 'กันหาสิน', '58041279101', '1', '0801973665', '2', '0', '2', '2558', '', '', 27, '2017-01-10 23:47:08', '14.207.143.150'),
(163, 'นางสาว', 'กนธิชา ', 'กันยานุช', '57041278112', '3', '0981429404', '1', '0', '1', '2559', 'ดิฉันได้ไปร่วมงานศพป้าที่จังหวัด สกลนคร ในวันเวลาดังกล่างจึงไม่สามารถมาสอบในวันดังกล่าวได้\nดิฉันจึงขอความอนุเคราะห์ขอสอบเป็นกรณีพิเศษ', 'ภาพถ่ายงานร่วมศพ', 20, '2017-01-11 12:58:47', '49.228.113.10'),
(164, 'นาย', 'พงศกร', 'ไชยนา', '58041151116', '2', '0883122473', '1', '1', '1', '2559', ' ไม่สามารถมาสอบได้เนื่องจากคุณปู่ได้เสีย จึงต้องได้ลาสอบเพื่อที่จะไปบวชหน้าไฟในวันที่ 24/11/2559', 'ใบมรณบัตร  ,  รูปถ่ายขณะบวชในวันงาน  ,  สูจิบัตรกำหนดการฌาปนกิจศพ', 24, '2017-01-11 15:15:05', '49.230.235.57'),
(201, 'นางสาว', 'ณัฐริณีย์', 'ญาณสุวรรณ์', '59100141118', '1', '0996580757', '1', '0', '1', '2559', 'ได้เข้ารับการรักษาพยาบาลที่โรงพยาบาลอุดรธานีเมื่อวันที่ 21-24 พฤศจิกายน 2559 และกลับไปพักฟื้นที่บ้านที่จังหวัดกาฬสินธุ์เป็นเวลา 45 วัน ตามคำสั่งแพทย์', 'ใบรับรองแพทย์', 29, '2017-01-11 20:40:45', '223.24.17.11'),
(210, 'นางสาว', 'วรัญญา', 'แสนชัย', '59040302252', '1', '0985598854', '1', '1', '1', '2559', 'ข้าพเจ้าได้ป่วยและเข้ารับการรักษาที่โรงพยาบาลศูนย์อุดรธานีจึงไม่สามารถมาสอบได้', 'ใบรับรองแพทย์', 14, '2017-01-11 21:39:08', '172.51.11.5'),
(211, 'นางสาว', 'สุดารัตน์', 'หันทำเล', '57040428448', '1', '0615073703', '1', '1', '1', '2559', 'ป่วยเข้าโรงพยาบาลกะทันหัน', 'ใบรับรองแพทย์  ,  ', 31, '2017-01-12 15:50:04', '192.168.40.96'),
(212, 'นางสาว', 'สุดารัตน์', 'หันทำเล', '57040428448', '1', '0615073703', '1', '1', '1', '2559', 'ป่วยเข้าโรงพยาบาลกะทันหัน', 'ใบรับรองแพทย์', 31, '2017-01-12 16:01:41', '192.168.40.96');

-- --------------------------------------------------------

--
-- Table structure for table `requestion_course`
--

CREATE TABLE IF NOT EXISTS `requestion_course` (
  `id_reqCourse` int(11) NOT NULL AUTO_INCREMENT,
  `id_req` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `rc_group` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `rc_teacher` text COLLATE utf8_unicode_ci NOT NULL,
  `rc_date` date NOT NULL,
  `rc_time` time NOT NULL,
  `dt_create` datetime NOT NULL,
  PRIMARY KEY (`id_reqCourse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=293 ;

--
-- Dumping data for table `requestion_course`
--

INSERT INTO `requestion_course` (`id_reqCourse`, `id_req`, `id_member`, `id_course`, `rc_group`, `rc_teacher`, `rc_date`, `rc_time`, `dt_create`) VALUES
(129, 70, 9, 6, '3', 'ปณวรรต ', '2016-10-04', '15:09:00', '2017-01-04 10:01:12'),
(130, 70, 9, 9, '1', 'ปณวรรต', '2016-10-10', '15:03:00', '2017-01-04 10:01:12'),
(131, 70, 9, 15, '2', 'ปณวรรต', '2016-10-13', '11:30:00', '2017-01-04 10:01:12'),
(132, 71, 13, 28, '10', 'อาจารย์มงคล ทะกอง', '2016-11-25', '15:00:00', '2017-01-09 10:11:43'),
(144, 83, 16, 12, '05', 'อ.หัสดิน  แก้ววิชิต', '2016-11-27', '09:00:00', '2017-01-09 13:32:44'),
(145, 83, 16, 0, '', '', '2017-01-09', '00:00:00', '2017-01-09 13:32:44'),
(146, 84, 17, 12, '04', 'อ.อรรคนนท์ ดวงสุวรรณ ', '2016-12-04', '13:00:00', '2017-01-09 14:08:50'),
(147, 85, 18, 22, '18', 'ผศ. พลอยระดา ภูมี', '2016-11-28', '15:30:00', '2017-01-09 14:20:47'),
(180, 118, 23, 1, '56', 'สุทธิวรรณ  อินทกนก', '2016-11-21', '15:30:00', '2017-01-09 19:41:36'),
(189, 127, 22, 1, '56', 'สุทธิวรรณ  อินทกนก', '2016-11-21', '15:30:00', '2017-01-09 19:46:51'),
(192, 130, 15, 26, '20', 'อ.อนงค์นุช เวชประชา', '2016-11-28', '13:00:00', '2017-01-09 21:04:27'),
(193, 131, 25, 26, '19', 'ดรุณีย์', '2017-01-01', '13:00:00', '2017-01-10 10:28:30'),
(194, 132, 25, 0, '19', 'ดรุณีย์ มณีทัศน์', '2017-01-01', '13:00:00', '2017-01-10 10:30:53'),
(195, 133, 25, 0, '19', 'ดรุณีย์ มณีทัศน์', '2017-01-01', '13:00:00', '2017-01-10 10:32:59'),
(205, 143, 26, 22, '08', 'ดร.อัจราพร', '2016-11-27', '09:00:00', '2017-01-10 13:24:42'),
(212, 150, 27, 14, '58', 'อ.สุวรรณี พันธุ์โอภาส', '0000-00-00', '00:00:00', '2017-01-10 23:47:08'),
(225, 163, 20, 28, '25', 'อ.วรนิตย์ ทองอยู่ ', '2016-11-25', '15:00:00', '2017-01-11 12:58:47'),
(226, 164, 24, 16, '18', 'อ.จตุพร', '2016-11-24', '15:30:00', '2017-01-11 15:15:05'),
(279, 201, 29, 5, '49', 'อ.จุฑามาส สุทธิปัญโญ', '2016-11-24', '13:00:00', '2017-01-11 20:40:45'),
(280, 201, 29, 14, '17', 'อุษณีย์ ศรีสารคาม', '2016-11-30', '15:00:00', '2017-01-11 20:40:45'),
(281, 201, 29, 16, '27', 'จตุพร ยอดสง่า', '2016-11-24', '15:30:00', '2017-01-11 20:40:45'),
(290, 210, 14, 22, '58', 'อ.ชมพูนุท', '2016-11-28', '15:00:00', '2017-01-11 21:39:08'),
(291, 211, 31, 10, '46', 'อ.ณัฐพล  ศรีสมบูรณ์', '2016-12-27', '15:00:00', '2017-01-12 15:50:04'),
(292, 212, 31, 10, '46', 'อ.ณัฐพล  ศรีสมบูรณ์', '2016-11-22', '15:00:00', '2017-01-12 16:01:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
