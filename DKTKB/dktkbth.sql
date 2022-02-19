-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2020 at 10:17 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dktkbth`
--

-- --------------------------------------------------------

--
-- Table structure for table `dang_ky`
--

DROP TABLE IF EXISTS `dang_ky`;
CREATE TABLE IF NOT EXISTS `dang_ky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `masv` varchar(10) NOT NULL,
  `matkb` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dia_diem`
--

DROP TABLE IF EXISTS `dia_diem`;
CREATE TABLE IF NOT EXISTS `dia_diem` (
  `map` varchar(10) NOT NULL,
  `tenp` text NOT NULL,
  PRIMARY KEY (`map`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dia_diem`
--

INSERT INTO `dia_diem` (`map`, `tenp`) VALUES
('A201', 'Phòng A201'),
('A202', 'Phòng A202'),
('A203', 'Phòng A203'),
('A205', 'Phòng A205'),
('A206', 'Phòng A206'),
('A207', 'Phòng A207'),
('C604', 'Phòng C604'),
('C605', 'Phòng C605');

-- --------------------------------------------------------

--
-- Table structure for table `giang_vien`
--

DROP TABLE IF EXISTS `giang_vien`;
CREATE TABLE IF NOT EXISTS `giang_vien` (
  `magv` varchar(10) NOT NULL,
  `tengv` text NOT NULL,
  `mak` varchar(10) NOT NULL,
  `mam` varchar(10) NOT NULL,
  PRIMARY KEY (`magv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giang_vien`
--

INSERT INTO `giang_vien` (`magv`, `tengv`, `mak`, `mam`) VALUES
('100001', 'Nguyễn Văn Giảng Viên 1', 'CNTT', 'TTCB01'),
('100002', 'Nguyễn Văn Giảng Viên 2', 'CNTT', 'TTCB02'),
('100003', 'Nguyễn Văn Giảng Viên 3', 'CNTT', 'TTCB03'),
('100004', 'Nguyễn Văn Giảng Viên 4', 'CNTT', 'TTCB04'),
('100005', 'Nguyễn Văn Giảng Viên 5', 'CNTT', 'TTCB01'),
('100006', 'Nguyễn Văn Giảng Viên 6', 'CNTT', 'TTCB02'),
('100007', 'Nguyễn Văn Giảng Viên 7', 'CNTT', 'TTCB03'),
('100008', 'Nguyễn Văn Giảng Viên 8', 'CNTT', 'TTCB04'),
('100009', 'Nguyễn Văn Giảng Viên 9', 'CNTT', 'TTCB05'),
('100010', 'Nguyễn Văn Giảng Viên 10', 'CNTT', 'TTCB05'),
('100011', 'Nguyễn Văn Giảng Viên 11', 'CNTT', 'TTCB06'),
('100012', 'Nguyễn Văn Giảng Viên 12', 'CNTT', 'TTCB06'),
('100013', 'Nguyễn Văn Giảng Viên 13', 'CNTT', 'TTCB07'),
('100014', 'Nguyễn Văn Giảng Viên 14', 'CNTT', 'TTCB07'),
('100015', 'Nguyễn Văn Giảng Viên 15', 'CNTT', 'TTCB08'),
('100016', 'Nguyễn Văn Giảng Viên 16', 'CNTT', 'TTCB08');

-- --------------------------------------------------------

--
-- Table structure for table `hoc_ky`
--

DROP TABLE IF EXISTS `hoc_ky`;
CREATE TABLE IF NOT EXISTS `hoc_ky` (
  `mahk` varchar(10) NOT NULL,
  `tenhk` text NOT NULL,
  PRIMARY KEY (`mahk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoc_ky`
--

INSERT INTO `hoc_ky` (`mahk`, `tenhk`) VALUES
('HKI2020', 'Học Kỳ 1 năm 2020'),
('HKII2020', 'Học Kỳ 2 năm 2020');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

DROP TABLE IF EXISTS `khoa`;
CREATE TABLE IF NOT EXISTS `khoa` (
  `mak` varchar(10) NOT NULL,
  `tenk` text NOT NULL,
  PRIMARY KEY (`mak`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`mak`, `tenk`) VALUES
('CNTT', 'Khoa Công Nghệ Thông Tin');

-- --------------------------------------------------------

--
-- Table structure for table `khung_gio`
--

DROP TABLE IF EXISTS `khung_gio`;
CREATE TABLE IF NOT EXISTS `khung_gio` (
  `mag` int(11) NOT NULL,
  `thu` varchar(10) NOT NULL,
  `cabatdau` varchar(10) NOT NULL,
  `soca` int(11) NOT NULL,
  `tuan` int(11) NOT NULL,
  `mahk` varchar(10) NOT NULL,
  PRIMARY KEY (`mag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khung_gio`
--

INSERT INTO `khung_gio` (`mag`, `thu`, `cabatdau`, `soca`, `tuan`, `mahk`) VALUES
(214, 'Thứ 2', '1', 18, 18, 'HKI2020'),
(281, 'Thứ 2', '2', 18, 18, 'HKI2020'),
(179, 'Thứ 2', '3', 18, 18, 'HKI2020'),
(515, 'Thứ 2', '4', 18, 18, 'HKI2020'),
(549, 'Thứ 3', '1', 18, 18, 'HKI2020'),
(203, 'Thứ 3', '2', 18, 18, 'HKI2020'),
(301, 'Thứ 3', '3', 18, 18, 'HKI2020'),
(708, 'Thứ 3', '4', 18, 18, 'HKI2020'),
(760, 'Thứ 4', '1', 18, 18, 'HKI2020'),
(495, 'Thứ 4', '2', 18, 18, 'HKI2020'),
(605, 'Thứ 4', '3', 18, 18, 'HKI2020'),
(687, 'Thứ 4', '4', 18, 18, 'HKI2020'),
(251, 'Thứ 5', '1', 18, 18, 'HKI2020'),
(352, 'Thứ 5', '2', 18, 18, 'HKI2020'),
(65, 'Thứ 5', '3', 18, 18, 'HKI2020'),
(278, 'Thứ 5', '4', 18, 18, 'HKI2020'),
(602, 'Thứ 6', '1', 18, 18, 'HKI2020'),
(306, 'Thứ 6', '2', 18, 18, 'HKI2020'),
(713, 'Thứ 6', '3', 18, 18, 'HKI2020'),
(39, 'Thứ 6', '4', 18, 18, 'HKI2020'),
(137, 'Thứ 7', '1', 18, 18, 'HKI2020');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `mal` varchar(10) NOT NULL,
  `tenl` text NOT NULL,
  `mak` varchar(10) NOT NULL,
  `khoa` text NOT NULL,
  PRIMARY KEY (`mal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`mal`, `tenl`, `mak`, `khoa`) VALUES
('1CTT17A', 'Đại học Công Nghệ Thông Tin 2017', 'CNTT', 'Khóa 42'),
('1CTT18A', 'Đại học Công Nghệ Thông Tin 2018', 'CNTT', 'Khóa 43'),
('1CTT19A', 'Đại học Công Nghệ Thông Tin 2019', 'CNTT', 'Khóa 44'),
('1CTT20A', 'Đại học Công Nghệ Thông Tin 2020', 'CNTT', 'Khóa 45');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

DROP TABLE IF EXISTS `mon`;
CREATE TABLE IF NOT EXISTS `mon` (
  `mam` varchar(10) NOT NULL,
  `tenm` text NOT NULL,
  `mak` varchar(10) NOT NULL,
  PRIMARY KEY (`mam`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`mam`, `tenm`, `mak`) VALUES
('TTCB01', 'Lập Trình Web', 'CNTT'),
('TTCB02', 'Kiểm Thử PM', 'CNTT'),
('TTCB03', 'Lập Trình Java', 'CNTT'),
('TTCB04', 'Lập Trình CSDL', 'CNTT'),
('TTCB05', 'Lập Trình Window', 'CNTT'),
('TTCB06', 'Lập Trình Android', 'CNTT'),
('TTCB07', 'Phân Tích Thiết Kế Hệ Thống', 'CNTT'),
('TTCB08', 'Lập Trình Hướng Đối Tượng', 'CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `sinh_vien`
--

DROP TABLE IF EXISTS `sinh_vien`;
CREATE TABLE IF NOT EXISTS `sinh_vien` (
  `masv` varchar(10) NOT NULL,
  `tensv` text NOT NULL,
  `mal` varchar(10) NOT NULL,
  PRIMARY KEY (`masv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinh_vien`
--

INSERT INTO `sinh_vien` (`masv`, `tensv`, `mal`) VALUES
('17004001', 'Nguyễn Văn A', '1CTT17A'),
('18004001', 'Trần Thị A', '1CTT18A'),
('17004002', 'Nguyễn Thị B', '1CTT17A'),
('18004002', 'Trần Văn B', '1CTT18A'),
('17004003', 'Nguyễn Thị C', '1CTT17A'),
('17004004', 'Nguyễn Thị D', '1CTT17A'),
('17004005', 'Nguyễn Thị E', '1CTT17A'),
('17004006', 'Nguyễn Thị F', '1CTT17A'),
('17004007', 'Nguyễn Thị G', '1CTT17A'),
('17004008', 'Nguyễn Thị H', '1CTT17A'),
('17004009', 'Nguyễn Thị K', '1CTT17A'),
('17004010', 'Nguyễn Văn A', '1CTT17A'),
('17004011', 'Nguyễn Thị B', '1CTT17A'),
('17004012', 'Nguyễn Thị C', '1CTT17A'),
('17004013', 'Nguyễn Thị D', '1CTT17A'),
('17004014', 'Nguyễn Thị E', '1CTT17A'),
('17004015', 'Tạ Thanh Bình', '1CTT17A'),
('17004016', 'Nguyễn Thị G', '1CTT17A'),
('17004017', 'Nguyễn Thị H', '1CTT17A'),
('17004018', 'Nguyễn Thị K', '1CTT17A'),
('18004019', 'Nguyễn Văn A', '1CTT18A'),
('18004020', 'Nguyễn Thị B', '1CTT18A'),
('18004003', 'Nguyễn Thị C', '1CTT18A'),
('18004004', 'Nguyễn Thị D', '1CTT18A'),
('18004005', 'Nguyễn Thị E', '1CTT18A'),
('18004006', 'Nguyễn Thị F', '1CTT18A'),
('18004007', 'Nguyễn Thị G', '1CTT18A'),
('18004008', 'Nguyễn Thị H', '1CTT18A'),
('18004009', 'Nguyễn Thị K', '1CTT18A'),
('18004010', 'Nguyễn Văn A', '1CTT18A'),
('18004011', 'Nguyễn Thị B', '1CTT18A'),
('18004012', 'Nguyễn Thị C', '1CTT18A'),
('18004013', 'Nguyễn Thị D', '1CTT18A'),
('18004014', 'Nguyễn Thị E', '1CTT18A'),
('18004015', 'Nguyễn Thị E', '1CTT18A'),
('18004016', 'Nguyễn Thị G', '1CTT18A'),
('18004017', 'Nguyễn Thị H', '1CTT18A'),
('18004018', 'Nguyễn Thị K', '1CTT18A');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE IF NOT EXISTS `tai_khoan` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `loai` int(11) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`user`, `pass`, `loai`) VALUES
('17004001', 'MTIzNDU2', 1),
('17004002', 'MTIzNDU2', 1),
('18004001', 'MTIzNDU2', 1),
('18004002', 'MTIzNDU2', 1),
('admin', 'MTIzNDU2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tkb_thuc_hanh`
--

DROP TABLE IF EXISTS `tkb_thuc_hanh`;
CREATE TABLE IF NOT EXISTS `tkb_thuc_hanh` (
  `matkb` int(10) NOT NULL AUTO_INCREMENT,
  `mam` varchar(10) NOT NULL,
  `mag` int(11) NOT NULL,
  `soluongsv` int(11) NOT NULL,
  PRIMARY KEY (`matkb`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tkb_thuc_hanh`
--

INSERT INTO `tkb_thuc_hanh` (`matkb`, `mam`, `mag`, `soluongsv`) VALUES
(1, 'TTCB01', 214, 30),
(2, 'TTCB02', 281, 30),
(3, 'TTCB03', 179, 30),
(4, 'TTCB04', 515, 30),
(5, 'TTCB05', 549, 30),
(6, 'TTCB06', 203, 30),
(7, 'TTCB07', 301, 30),
(8, 'TTCB01', 708, 30),
(9, 'TTCB02', 760, 30),
(10, 'TTCB03', 495, 30),
(11, 'TTCB04', 605, 30),
(12, 'TTCB05', 687, 30),
(13, 'TTCB06', 251, 30),
(14, 'TTCB07', 352, 30),
(15, 'TTCB01', 65, 30),
(16, 'TTCB02', 278, 30),
(17, 'TTCB03', 602, 30),
(18, 'TTCB04', 306, 30),
(19, 'TTCB05', 713, 30),
(20, 'TTCB06', 39, 30),
(21, 'TTCB07', 137, 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
