-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2020 at 08:54 AM
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
  `matkb` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `masv` (`masv`,`matkb`),
  KEY `matkb` (`matkb`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dia_diem`
--

DROP TABLE IF EXISTS `dia_diem`;
CREATE TABLE IF NOT EXISTS `dia_diem` (
  `map` varchar(10) NOT NULL,
  `tenp` text NOT NULL,
  PRIMARY KEY (`map`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `sobuoituan` int(11) NOT NULL,
  PRIMARY KEY (`magv`),
  KEY `mak` (`mak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giang_vien`
--

INSERT INTO `giang_vien` (`magv`, `tengv`, `mak`, `sobuoituan`) VALUES
('100001', 'Nguyễn Văn Giảng Viên 1', 'CNTT', 4),
('100002', 'Nguyễn Văn Giảng Viên 2', 'CNTT', 4),
('100003', 'Nguyễn Văn Giảng Viên 3', 'CNTT', 4),
('100004', 'Nguyễn Văn Giảng Viên 4', 'CNTT', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hoc_ky`
--

DROP TABLE IF EXISTS `hoc_ky`;
CREATE TABLE IF NOT EXISTS `hoc_ky` (
  `mahk` varchar(10) NOT NULL,
  `tenhk` text NOT NULL,
  PRIMARY KEY (`mahk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`mag`),
  KEY `mahk` (`mahk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khung_gio`
--

INSERT INTO `khung_gio` (`mag`, `thu`, `cabatdau`, `soca`, `tuan`, `mahk`) VALUES
(56, 'Thứ 5', '1', 18, 18, 'HKI2020'),
(119, 'Thứ 4', '4', 18, 18, 'HKI2020'),
(120, 'Thứ 6', '4', 18, 18, 'HKI2020'),
(166, 'Thứ 7', '1', 18, 18, 'HKI2020'),
(177, 'Thứ 2', '4', 18, 18, 'HKI2020'),
(201, 'Thứ 3', '1', 18, 18, 'HKI2020'),
(213, 'Thứ 4', '3', 18, 18, 'HKI2020'),
(233, 'Thứ 2', '2', 18, 18, 'HKI2020'),
(258, 'Thứ 5', '4', 18, 18, 'HKI2020'),
(319, 'Thứ 2', '1', 18, 18, 'HKI2020'),
(380, 'Thứ 3', '2', 18, 18, 'HKI2020'),
(386, 'Thứ 2', '3', 18, 18, 'HKI2020'),
(459, 'Thứ 3', '4', 18, 18, 'HKI2020'),
(514, 'Thứ 5', '3', 18, 18, 'HKI2020'),
(550, 'Thứ 4', '1', 18, 18, 'HKI2020'),
(584, 'Thứ 6', '3', 18, 18, 'HKI2020'),
(627, 'Thứ 6', '1', 18, 18, 'HKI2020'),
(701, 'Thứ 6', '2', 18, 18, 'HKI2020'),
(793, 'Thứ 4', '2', 18, 18, 'HKI2020'),
(797, 'Thứ 3', '3', 18, 18, 'HKI2020');

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
  PRIMARY KEY (`mal`),
  KEY `mak` (`mak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`mam`),
  KEY `mak` (`mak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`masv`),
  KEY `mal` (`mal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinh_vien`
--

INSERT INTO `sinh_vien` (`masv`, `tensv`, `mal`) VALUES
('17004001', 'Nguyễn Văn A', '1CTT17A'),
('17004002', 'Nguyễn Thị B', '1CTT17A'),
('18004001', 'Trần Thị A', '1CTT18A'),
('18004002', 'Trần Văn B', '1CTT18A');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`matkb`),
  KEY `mam` (`mam`,`mag`),
  KEY `mag` (`mag`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dang_ky`
--
ALTER TABLE `dang_ky`
  ADD CONSTRAINT `dang_ky_ibfk_1` FOREIGN KEY (`masv`) REFERENCES `sinh_vien` (`masv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dang_ky_ibfk_2` FOREIGN KEY (`matkb`) REFERENCES `tkb_thuc_hanh` (`matkb`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD CONSTRAINT `giang_vien_ibfk_1` FOREIGN KEY (`mak`) REFERENCES `khoa` (`mak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khung_gio`
--
ALTER TABLE `khung_gio`
  ADD CONSTRAINT `khung_gio_ibfk_1` FOREIGN KEY (`mahk`) REFERENCES `hoc_ky` (`mahk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`mak`) REFERENCES `khoa` (`mak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD CONSTRAINT `sinh_vien_ibfk_1` FOREIGN KEY (`mal`) REFERENCES `lop` (`mal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tkb_thuc_hanh`
--
ALTER TABLE `tkb_thuc_hanh`
  ADD CONSTRAINT `tkb_thuc_hanh_ibfk_1` FOREIGN KEY (`mam`) REFERENCES `mon` (`mam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tkb_thuc_hanh_ibfk_2` FOREIGN KEY (`mag`) REFERENCES `khung_gio` (`mag`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
