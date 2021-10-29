-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 06:39 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_tourdl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourdetails`
--

CREATE TABLE `tourdetails` (
  `TourID` int(11) NOT NULL,
  `TourSTDay` date NOT NULL,
  `TourEDay` date DEFAULT NULL,
  `TourPrice` float DEFAULT NULL,
  `TourStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `TourID` int(11) NOT NULL,
  `TourName` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TourLocation` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TourVehicle` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TourDes` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TourSchedule` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TourImg` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tourdetails`
--
ALTER TABLE `tourdetails`
  ADD PRIMARY KEY (`TourID`,`TourSTDay`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`TourID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `TourID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tourdetails`
--
ALTER TABLE `tourdetails`
  ADD CONSTRAINT `tourdetails_ibfk_1` FOREIGN KEY (`TourID`) REFERENCES `tours` (`TourID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
