-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 11:25 AM
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
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `Hotline` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactTime` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LinkFaceBook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LinkInsta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LinkTwitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`Hotline`, `ContactTime`, `Location`, `LinkFaceBook`, `LinkInsta`, `LinkTwitter`, `Email`) VALUES
('0906 355 542', 'Từ 8:00 - 23:30 ', 'Tầng 15, 70-72 Bà Triệu, Quận Hoàn Kiếm, Hà Nội', 'https://www.facebook.com/groups/DamMeDuLich.YeuThichKhamPha', 'https://www.facebook.com/groups/DamMeDuLich.YeuThichKhamPha', 'https://www.facebook.com/groups/DamMeDuLich.YeuThichKhamPha', 'nguyenthidien2611@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotels`
--

CREATE TABLE `hotels` (
  `hotelID` int(11) NOT NULL,
  `hotelName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotelLocation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotelDes` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotelPhone` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hotels`
--

INSERT INTO `hotels` (`hotelID`, `hotelName`, `hotelLocation`, `hotelDes`, `hotelPhone`) VALUES
(1, 'Khu nghỉ dưỡng Fusion Cam Ranh', ' Lô D10b, Nguyễn Tất Thành, Cam Lâm, Cam Ranh, Biển Bãi Dài, Nha Trang, Việt Nam', '2N1Đ + Villa Với Hồ Bơi Riêng + Ăn Sáng Mọi Lúc Mọi Nơi | 2.199.000 VND/Phòng', '1900 1870.'),
(2, 'Khu nghỉ dưỡng The Anam Nha Trang', 'Lô D3, Bãi Dài, Cam Ranh, Nha Trang, Việt Nam', 'Gồm ăn sáng\r\nPhòng, Ban công, Quang cảnh vườn (King)\r\n\r\n1 giường cỡ king\r\n\r\nWifi miễn phí\r\n\r\nBữa sáng miễn phí\r\n\r\nBãi đậu xe miễn phí có nhân viên phục vụ\r\n\r\nĐồ uống miễn phí chào đón khách\r\n\r\nĐã bao gồm thuế & phí\r\n\r\nGiá rẻ (không hủy/thay đổi)', '19003726');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `restaurants`
--

CREATE TABLE `restaurants` (
  `resID` int(11) NOT NULL,
  `resName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resDes` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resLocation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resPhone` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `restaurants`
--

INSERT INTO `restaurants` (`resID`, `resName`, `resDes`, `resLocation`, `resPhone`) VALUES
(1, 'Nhà hàng Spice Viet Sài Gòn', 'Bữa trưa được đóng gói trong khay nhựa thực phẩm ngay trước khi giao', 'Sài Gòn', '097648232'),
(2, 'Nhà hàng Hà Thơi - Na Hang', 'Đóng góp vào phát triển du lịch, dịch vụ nhà hàng Hà Thơi, tổ 8, thị trấn Na Hang đã tạo được uy tín với thực khách, nhiều du khách đã hài lòng bởi cung cách phục vụ chu đáo, nhiều món ăn dân tộc ngon, bổ dưỡng đảm bảo an toàn vệ sinh thực phẩm, giá cả hợp lý. ', 'Na Hang', '097538632');

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

--
-- Đang đổ dữ liệu cho bảng `tourdetails`
--

INSERT INTO `tourdetails` (`TourID`, `TourSTDay`, `TourEDay`, `TourPrice`, `TourStatus`) VALUES
(1, '2021-10-12', '2021-10-18', 87000000, 1),
(1, '2021-11-09', '2021-11-18', 87000000, 1),
(2, '2021-10-03', '2021-10-05', 87000000, 1);

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
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`TourID`, `TourName`, `TourLocation`, `TourVehicle`, `TourDes`, `TourSchedule`, `TourImg`) VALUES
(1, 'COMBO TRỌN GÓI HỒI HƯƠNG TỪ CANADA', 'Canada', 'Máy bay', 'Trong tình hình dịch Covid 19 đang rất căng thẳng trên toàn thế giới, nhu cầu được quay trở về Việt Nam sinh sống và làm việc trong cộng đồng người Việt Nam ở nước ngoài đang rất cao. Các đối tượng được ưu tiên hồi hương trong thời điểm này bao gồm học sinh dưới 18 tuổi, sinh viên đã hoàn thành khóa học gặp khó khăn về chỗ ở và việc làm, người lao động hết hạn hợp đồng, mất việc, không còn thu nhập mà nước sở tại không đủ điều kiện hỗ trợ, khách du lịch, thương nhân, trí thức mắc kẹt tại nước ngoài do Covid 19, gặp khó khăn do không có nơi ở, không còn khả năng tài chính.\r\n\r\nNếu quý khách đang có dự định hoặc cần đăng ký cho người thân trở về Việt Nam tại thời điểm này, hãy liên hệ với IVIVU.COM để được tư vấn nhanh nhất, hiệu quả nhất.', 'Để đảm bảo có thể hồi hương Việt Nam thành công trong thời điểm Covid 19 này, quý khách có nguyện vọng hồi hương cần chuẩn bị và cung cấp đầy đủ các giấy tờ sau:\r\n\r\n- Passport Việt Nam còn hạn ít nhất 06 tháng tính đến ngày bay (bản scan có màu).\r\n\r\n- Giấy chứng nhận tiêm đủ 2 mũi vaccine hoặc giấy xác nhận khỏi bệnh Covid theo đúng quy định.\r\n\r\n- Kết quả test COVID-19 bằng phương pháp RT-PCR/RT-LAMP.\r\n\r\n- Bản cam kết phòng chống dịch COVID-19.\r\n\r\nQUY TRÌNH HỒI HƯƠNG VỀ VIỆT NAM\r\n\r\n-  Thực hiện xét nghiệm Covid tại nước sở tại theo phương pháp Real-time PRC trong vòng 72 giờ trước giờ bay (IVIVU sẽ được thông báo về thời điểm chính xác để quý khách đi lấy mẫu xét nghiệm).\r\n\r\n- Đến ngày bay, quý khách chuẩn bị đầy đủ giấy tờ và di chuyển đến sân bay để thực hiện chuyến bay. Sau khi đáp chuyến bay về đến Việt Nam, quý khách thực hiện khai báo y tế, nhân viên y tế tiến hành kiểm tra và xét nghiệm đồng thời hỗ trợ các thủ tục nhập cảnh, với những hành khách có sức khỏe ổn định sẽ được đưa ', 'https://cdn2.ivivu.com/2021/08/12/10/canada-01-750x390.jpg'),
(2, 'COMBO TRỌN GÓI HỒI HƯƠNG TỪ PHÁP', 'Pháp', 'Máy bay', 'Trong tình hình dịch Covid 19 đang rất căng thẳng trên toàn thế giới, nhu cầu được quay trở về Việt Nam sinh sống và làm việc trong cộng đồng người Việt Nam ở nước ngoài đang rất cao. Các đối tượng được ưu tiên hồi hương trong thời điểm này bao gồm học sinh dưới 18 tuổi, sinh viên đã hoàn thành khóa học gặp khó khăn về chỗ ở và việc làm, người lao động hết hạn hợp đồng, mất việc, không còn thu nhập mà nước sở tại không đủ điều kiện hỗ trợ, khách du lịch, thương nhân, trí thức mắc kẹt tại nước ngoài do Covid 19, gặp khó khăn do không có nơi ở, không còn khả năng tài chính.\r\n\r\nNếu quý khách đang có dự định hoặc cần đăng ký cho người thân trở về Việt Nam tại thời điểm này, hãy liên hệ với IVIVU.COM để được tư vấn nhanh nhất, hiệu quả nhất.', 'Để đảm bảo có thể hồi hương Việt Nam thành công trong thời điểm Covid 19 này, quý khách có nguyện vọng hồi hương cần chuẩn bị và cung cấp đầy đủ các giấy tờ sau:\r\n\r\n- Passport Việt Nam còn hạn ít nhất 06 tháng tính đến ngày bay (bản scan có màu).\r\n\r\n- Giấy chứng nhận tiêm đủ 2 mũi vaccine hoặc giấy xác nhận khỏi bệnh Covid theo đúng quy định.\r\n\r\n- Kết quả test Covid-19 bằng phương pháp RT-PCR/RT-LAMP.\r\n\r\n- Bản cam kết phòng chống dịch Covid-19.\r\n\r\nQUY TRÌNH HỒI HƯƠNG VỀ VIỆT NAM\r\n\r\n-  Thực hiện xét nghiệm Covid tại nước sở tại theo phương pháp Real-time PRC trong vòng 72 giờ trước giờ bay (IVIVU sẽ được thông báo về thời điểm chính xác để quý khách đi lấy mẫu xét nghiệm).\r\n\r\n- Đến ngày bay, quý khách chuẩn bị đầy đủ giấy tờ và di chuyển đến sân bay để thực hiện chuyến bay. Sau khi đáp chuyến bay về đến Việt Nam, quý khách thực hiện khai báo y tế, nhân viên y tế tiến hành kiểm tra và xét nghiệm đồng thời hỗ trợ các thủ tục nhập cảnh, với những hành khách có sức khỏe ổn định sẽ được đưa ', 'https://cdn2.ivivu.com/2021/10/06/16/phap-750x390.jpg'),
(3, 'COMBO TRỌN GÓI HỒI HƯƠNG TỪ MỸ', 'Mỹ', 'Máy bay', 'Trong tình hình dịch Covid 19 đang rất căng thẳng trên toàn thế giới, nhu cầu được quay trở về Việt Nam sinh sống và làm việc trong cộng đồng người Việt Nam ở nước ngoài đang rất cao. Các đối tượng được ưu tiên hồi hương trong thời điểm này bao gồm học sinh dưới 18 tuổi, sinh viên đã hoàn thành khóa học gặp khó khăn về chỗ ở và việc làm, người lao động hết hạn hợp đồng, mất việc, không còn thu nhập mà nước sở tại không đủ điều kiện hỗ trợ, khách du lịch, thương nhân, trí thức mắc kẹt tại nước ngoài do Covid 19, gặp khó khăn do không có nơi ở, không còn khả năng tài chính.\r\n\r\nNếu quý khách đang có dự định hoặc cần đăng ký cho người thân trở về Việt Nam tại thời điểm này, hãy liên hệ với IVIVU.COM để được tư vấn nhanh nhất, hiệu quả nhất.', 'Để đảm bảo có thể hồi hương Việt Nam thành công trong thời điểm Covid 19 này, quý khách có nguyện vọng hồi hương cần chuẩn bị và cung cấp đầy đủ các giấy tờ sau:\r\n\r\n- Passport Việt Nam còn hạn ít nhất 06 tháng tính đến ngày bay (bản scan có màu).\r\n\r\n- Giấy chứng nhận tiêm đủ 2 mũi vaccine hoặc giấy xác nhận khỏi bệnh Covid theo đúng quy định.\r\n\r\n- Kết quả test Covid-19 bằng phương pháp RT-PCR/RT-LAMP.\r\n\r\n- Bản cam kết phòng chống dịch Covid-19.\r\n\r\nQUY TRÌNH HỒI HƯƠNG VỀ VIỆT NAM\r\n\r\n-  Thực hiện xét nghiệm Covid tại nước sở tại theo phương pháp Real-time PRC trong vòng 72 giờ trước giờ bay (IVIVU sẽ được thông báo về thời điểm chính xác để quý khách đi lấy mẫu xét nghiệm).\r\n\r\n- Đến ngày bay, quý khách chuẩn bị đầy đủ giấy tờ và di chuyển đến sân bay để thực hiện chuyến bay. Sau khi đáp chuyến bay về đến Việt Nam, quý khách thực hiện khai báo y tế, nhân viên y tế tiến hành kiểm tra và xét nghiệm đồng thời hỗ trợ các thủ tục nhập cảnh, với những hành khách có sức khỏe ổn định sẽ được đưa ', 'https://cdn2.ivivu.com/2021/08/13/09/my-750x390.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `toursorder`
--

CREATE TABLE `toursorder` (
  `tourID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `dateOrder` datetime DEFAULT current_timestamp(),
  `quantityOrder` int(11) DEFAULT NULL,
  `totalOrder` float DEFAULT NULL,
  `statusOrder` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `toursorder`
--

INSERT INTO `toursorder` (`tourID`, `userID`, `dateOrder`, `quantityOrder`, `totalOrder`, `statusOrder`) VALUES
(3, 3, '2021-10-29 16:24:13', 3, NULL, NULL),
(1, 2, '2021-10-29 16:24:13', 4, NULL, NULL),
(2, 1, '2021-10-29 16:24:28', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userPass` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userEmail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userCode` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userPhone` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_date` datetime DEFAULT current_timestamp(),
  `userStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userID`, `userName`, `userPass`, `userEmail`, `userCode`, `userPhone`, `registration_date`, `userStatus`) VALUES
(1, 'huyen', '123456', 'huyen@gmail.com', NULL, '098394832', '2021-10-29 16:22:36', NULL),
(2, 'ha', '123456', 'ha@gmail.com', NULL, '089737283', '2021-10-29 16:23:36', NULL),
(3, 'dien', '123456', 'dien@gmail.com', NULL, '09839743', '2021-10-29 16:23:36', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_ad`
--

CREATE TABLE `users_ad` (
  `user_adID` int(11) NOT NULL,
  `user_adName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_adPass` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_adEmail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_adStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_ad`
--

INSERT INTO `users_ad` (`user_adID`, `user_adName`, `user_adPass`, `user_adEmail`, `user_adStatus`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotelID`);

--
-- Chỉ mục cho bảng `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`resID`);

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
-- Chỉ mục cho bảng `toursorder`
--
ALTER TABLE `toursorder`
  ADD KEY `tourID` (`tourID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Chỉ mục cho bảng `users_ad`
--
ALTER TABLE `users_ad`
  ADD PRIMARY KEY (`user_adID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `resID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `TourID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users_ad`
--
ALTER TABLE `users_ad`
  MODIFY `user_adID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tourdetails`
--
ALTER TABLE `tourdetails`
  ADD CONSTRAINT `tourdetails_ibfk_1` FOREIGN KEY (`TourID`) REFERENCES `tours` (`TourID`);

--
-- Các ràng buộc cho bảng `toursorder`
--
ALTER TABLE `toursorder`
  ADD CONSTRAINT `toursorder_ibfk_1` FOREIGN KEY (`tourID`) REFERENCES `tours` (`TourID`),
  ADD CONSTRAINT `toursorder_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
