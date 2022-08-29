-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 11, 2021 lúc 12:24 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `user`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `Email`, `fname`, `lname`, `password`) VALUES
(16, 'trandangnguyenbao2810@gmail.com', 'Trần Đăng Nguyễn ', 'Bảo', '123'),
(17, 'quocthinh@gmail.com', 'Trần Quốc ', 'Thịnh', '12345'),
(18, 'ngoctoan@gmail.com', 'Phạm Trần Ngọc', 'Toán', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin-datban`
--

CREATE TABLE `admin-datban` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ngay` date NOT NULL,
  `thoigian` varchar(255) NOT NULL,
  `khach` int(30) NOT NULL,
  `loinhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_category`
--

CREATE TABLE `admin_category` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `maLH` int(30) NOT NULL,
  `giasanpham` int(11) NOT NULL,
  `soluong` int(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin_category`
--

INSERT INTO `admin_category` (`id`, `tensp`, `masp`, `maLH`, `giasanpham`, `soluong`, `hinhanh`, `tomtat`, `noidung`) VALUES
(30, 'Bò Xào Măng Trúc', '10001', 100, 79, 100, 'bo1.jpg', 'không', 'Bò Xào Măng Trúc Không chỉ ngon, đây còn là món ăn bổ dưỡng bởi thịt bò giàu chất sắc, khoáng chất còn măng trúc là bài thuốc thiên nhiên tốt cho sức khỏe.'),
(31, 'Cá Kho Tộ', '10002', 100, 59, 100, 'cakho.png', '', 'Món cá lóc kho tộ có thể dùng để ăn trong mọi bữa cơm gia đình. Ăn cá lóc kho tộ đậm đà với cơm trắng khi còn nóng sẽ càng cảm nhận được vị ngon khó cưỡng. Với màu sắc bắt mắt, chỉ cần múc cá kho tộ ra tô cũng đủ kích thích vị giác của các thành viên nhà bạn rồi.'),
(32, 'Ba Chỉ Rang', '10003', 100, 69, 100, 'bachirang.jpg', '', 'Ba Chỉ Rang là món ngon và lạ miệng này để chiêu đãi cả nhà nhân những ngày mưa lạnh rồi đấy. Chắc chắn rằng ai trong gia đình bạn cũng sẽ cảm thấy hứng thú với món ăn này ngay từ cái nhìn đầu tiên và bị cuốn hút vào nó ngay khi ăn thử.'),
(33, 'Cơm Rang Kim Chi', '10004', 100, 30, 100, 'comrang.jpg', '', 'Cơm rang kim chi là món ăn khá giống với món cơm rang dưa bò của Việt Nam. Món ăn này phù hợp với mọi bữa ăn trong ngày, thậm chí là cả những bữa tiệc buffet ấm cúng.'),
(34, 'Tùm Hùm Cháy Khói', '10101', 101, 735, 100, 'haisan.jpg', '', 'Tôm hùm cháy tỏi đang được nhiều người yêu thích. Từ hương vị thơm ngon, ngọt dịu của thịt tôm hùm cho tới tỏi giòn giòn kết hợp tạo hành hương vị đặc trưng'),
(35, 'Sò lông nước mỡ hành', '10102', 101, 75, 100, 'goisua.jpg', '', 'Sò lông nướng mỡ hành nóng hổi thơm, chuẩn bài thì ăn kèm với 1 chén nước chấm tắc đặc sệt chua cay nhé. Món ăn này phải ăn khi còn nóng mới ngon, nên bạn cứ tụ họp gia đình, vừa trò chuyện tưng bừng vừa thưởng thức sò lông nướng mỡ hành thơm béo thì còn gì tuyệt vời hơn.'),
(36, 'Gỏi Sứa', '10103', 101, 40, 100, '3miengcathanh.jpg', '', 'Món nộm sứa thập cẩm có đủ vị giòn của sứa cùng các nguyên liệu, vị chua của chanh và giấm, vị mặn của muối, vị cay của ớt và tỏi cùng các loại rau thơm. Tất cả đã hòa quyện tạo nên một hương vị rất mới lạ, một món ăn giải nhiệt tuyệt vời khi cả nhà đã ngán ngẩm những món ăn chiên rán nhiều dầu mỡ.'),
(37, 'Cua Rang Me', '10104', 101, 144, 100, 'cuarang.jpg', '', 'Món cua rang me có vị béo béo, ngòn ngọt của thịt cua, kết hợp vị mằn mặn của nước mắm cùng vị chua thanh của những trái me chín, hòa quyện vào với nhau tạo nên một mùi thơm vô cùng độc đáo và hấp dẫn.'),
(38, 'Đậu Hũ Chiên Giòn', '10101', 102, 12, 1000, 'dauhu.jpg', '', 'Tàu hủ là một món ăn quen thuộc được sử dụng trong việc chế biến các món ăn. Nhất là các món ăn dành thay đổi thực đơn cho gia đình.\r\n'),
(39, 'Canh Nấm Hạt Sen', '10202', 102, 40, 100, 'canh.png', '', 'Để cân bằng lại khẩu vị với những món mặn, bạn có thể bổ sung canh nấm hạt sen vào thực đơn đãi tiệc chay. Món canh không chỉ có hương vị thanh đạm mà còn giàu dưỡng chất, giúp bồi bổ, hồi phục sức khỏe rất tốt.'),
(40, 'Gỏi Cuốn Chay', '10203', 102, 20, 100, 'goicuon.jpg', '', 'Để tìm một món ăn thanh đạm nhưng đầy đủ dưỡng chất thì gỏi cuốn ngũ sắc sẽ là gợi ý hoàn hảo cho bạn.'),
(41, 'Gà Chay Sốt Nước Mắm', '10204', 102, 44, 100, 'gachay.png', '', 'Đây là món ăn tốt cho sức khỏe bởi món ăn có sự kết hợp của nhiều nguyên liệu giàu dưỡng chất như gà chay, các loại nấm như nấm rơm, nấm mỡ, nấm đông cô, nấm hương. Gà chay được áp chảo chín vàng, tỏa mùi thơm lừng, kết hợp với một nhĩ, nấm hương thái sợi nhỏ và gia vị hạt nêm chay, xì dầu… tạo nên một món chay hấp dẫn. Thịt gà được tẩm ướp kĩ lưỡng hòa quyện cùng nước xốt xì dầu và nấm tươi ngon sẽ khiến thực khách có một bữa ăn ngon miệng.'),
(42, 'Bia Heineken', '10301', 103, 28, 100, 'henei.jpg', '', '“Heineken không chỉ là bia, Heineken còn là thế giới của niềm đam mê và sự sảng khoái”.'),
(44, 'Pepsi', '10303', 103, 20, 1000, 'pepsi.jpg', '', ' Pepsi mang đến cho ta cảm giác sảng khoái và có vị thích thú trong từng bữa ăn. Là điểm nhấn của sự ngọt ngào và thuần khiết trong bạn! \"Cùng Pepsi nâng tầm tình bạn\".'),
(45, 'Aquafina', '10304', 103, 10, 1000, 'aqua.jpg', '', '\"Aquafina\" thức uống của sự trong suốt, bữa ăn của bạn sẽ tuyệt vời hơn nếu có \'Aquafina\'. \"Aquafina\" thức uống của sự thuần khiết'),
(48, 'Budweiser', '10302', 103, 44, 1000, 'budwei.jpg', '', 'Budweiser hương vị của tình bạn. Cùng Budwei cùng sảng khoái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_contact`
--

CREATE TABLE `admin_contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_datban`
--

CREATE TABLE `admin_datban` (
  `id_order` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ngay` date NOT NULL,
  `thoigian` varchar(255) NOT NULL,
  `khach` int(30) NOT NULL,
  `loinhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin_datban`
--

INSERT INTO `admin_datban` (`id_order`, `ten`, `phone`, `Email`, `ngay`, `thoigian`, `khach`, `loinhan`) VALUES
(13, 'Trần Đăng Nguyễn Bảo', '0328272512', 'nguyenbao2810@gmail.com', '2021-08-05', '11 giờ:15 phút', 20, 'có trẻ nhỏ'),
(14, 'Trần Đăng Nguyễn Bảo', '0328272512', 'nguyenbao2810@gmail.com', '2021-08-05', '7 giờ:00 phút', 20, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_donhang`
--

CREATE TABLE `admin_donhang` (
  `id` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_lh`
--

CREATE TABLE `admin_lh` (
  `id` int(11) NOT NULL,
  `tenlh` varchar(255) NOT NULL,
  `maLH` int(30) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin_lh`
--

INSERT INTO `admin_lh` (`id`, `tenlh`, `maLH`, `hinhanh`) VALUES
(5, 'Hải Sản', 101, 'haisan1.jpg'),
(6, 'Đồ Chay', 102, 'monchay.jpg'),
(7, 'Thức Uống', 103, 'nuoc.jpg'),
(8, 'Các Món Thịt', 100, 'thit.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_order`
--

CREATE TABLE `cart_order` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tenmonhang` varchar(255) NOT NULL,
  `giatien` decimal(10,0) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart_order`
--

INSERT INTO `cart_order` (`id_cart`, `id_user`, `tenmonhang`, `giatien`, `soluong`, `tongtien`) VALUES
(171, 18, 'Bò Xào Măng Trúc', '79', 9, '711'),
(174, 18, 'Cá Kho Tộ', '59', 10, '590'),
(175, 18, 'Bia Heineken', '28', 1000, '28000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `Email`, `phone`, `fname`, `lname`, `password`) VALUES
(18, 'baoan1407@gmail.com', '0328272512', 'Trần Đăng Bảo', 'An', '123'),
(19, 'dangkhoa@gmail.com', '0245126548', 'Ngô Trần Đăng', 'Khoa', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_donhang`
--

CREATE TABLE `user_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tongtien` decimal(10,0) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_donhang`
--

INSERT INTO `user_donhang` (`id_donhang`, `id_user`, `tongtien`, `diachi`, `tinhtrang`) VALUES
(53, 18, '1247', 'Long An', 'Đang Lên Đơn'),
(55, 18, '1064', 'Bà Rịa Vũng Tàu', 'Đang Giao Hàng'),
(65, 18, '29301', 'Bà Rịa Vũng Tàu', 'Chờ Nhận Hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `admin-datban`
--
ALTER TABLE `admin-datban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin_category`
--
ALTER TABLE `admin_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin_datban`
--
ALTER TABLE `admin_datban`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `admin_donhang`
--
ALTER TABLE `admin_donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin_lh`
--
ALTER TABLE `admin_lh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart_order`
--
ALTER TABLE `cart_order`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `user_donhang`
--
ALTER TABLE `user_donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `admin-datban`
--
ALTER TABLE `admin-datban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `admin_category`
--
ALTER TABLE `admin_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `admin_contact`
--
ALTER TABLE `admin_contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `admin_datban`
--
ALTER TABLE `admin_datban`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `admin_donhang`
--
ALTER TABLE `admin_donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `admin_lh`
--
ALTER TABLE `admin_lh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `cart_order`
--
ALTER TABLE `cart_order`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user_donhang`
--
ALTER TABLE `user_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
