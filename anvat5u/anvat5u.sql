-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 11, 2023 lúc 12:39 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `anvat5u`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_BinhLuan` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_binhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ma_BinhLuan`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_binhluan`) VALUES
(36, 'có biếnnnnn', 12, 1, '0000-00-00'),
(37, 'có biếnnnnn', 12, 1, '0000-00-00'),
(45, 'em đồng ý với ý kiến của anh luôn í, trông ngon quá', 27, 4, '0000-00-00'),
(46, 'Hơi mặn ', 15, 5, '0000-00-00'),
(48, 'khô gà thầy ba đúng k', 17, 6, '0000-00-00'),
(49, 'Ngon', 17, 1, '0000-00-00'),
(52, '70k mà nhiều vậy shop ', 20, 5, '0000-00-00'),
(53, 'Ngon qa nên tui ăn hết r mới nhớ ch đánh giáaa, giaoo hàng nhahh, đóng gói cẩn thận, mng nên mua ăn thử nkaaa', 16, 1, '0000-00-00'),
(54, 'Giao hàng nhanh .... Đóng gói kỹ càng ... Rất đồng tiền ... Đúng yêu cầu mua...', 12, 1, '0000-00-00'),
(55, 'Giao hàng nhanh .... Đóng gói kỹ càng ... Rất đồng tiền ... Đúng yêu cầu mua...', 12, 1, '0000-00-00'),
(56, 'Tôi ăn hết sạch rồi. Shop chuẩn bị hàng lâu nhưng mà thôi bỏ qua . Giá thành ok. Ăn mực rim cay nhất còn ghẹ rim sữa ngon nè giòn ăn cuốn ko dứt được mồm luôn á các đồng chí. Nói chung ăn được chờ hơi lâu', 15, 1, '0000-00-00'),
(57, 'Tôi ăn hết sạch rồi. Shop chuẩn bị hàng lâu nhưng mà thôi bỏ qua . Giá thành ok. Ăn mực rim cay nhất còn ghẹ rim sữa ngon nè giòn ăn cuốn ko dứt được mồm luôn á các đồng chí. Nói chung ăn được chờ hơi lâu', 15, 8, '0000-00-00'),
(58, 'Sản phẩm rất ngon mk còn đc tặng gói tôm khô bé bé xinh xinh ăn rất ngon', 16, 8, '0000-00-00'),
(59, 'Mình ăn thì thấy hộp đầu tiên bị hôi dầu, khá gắt cổ, mẹ mình ăn miếng đầu thì ho liên tục không ăn nữa. Hộp thứ hai thì tạm ổn, mình cho lên bếp đảo thêm với chút nước mắm thì ăn ngon hơn và mềm hơn. Mấy cái cháy trên miếng da heo mình chụp là do mình đả', 20, 8, '0000-00-00'),
(60, 'Ghi nhầm địa chỉ dưới quê . Shiper bảo ck a ấy ship lên lại chỗ htai cho mh mà k bk sao nữa ????????????????????????????????????????????????????????????????????????', 21, 8, '0000-00-00'),
(61, 'rong biển kẹp của shop có vị mặn nhẹ k có vị mặn ngọt như những loại khác', 26, 8, '0000-00-00'),
(62, 'Giao hàng nhanh, đóng gói tốt. Sau góp ý lần trước thì đợt này hết bị khét rồi nhưng lại mất vị rong biển :(( được trc ngon có vị rong biển mà bị khét thôi. Lần này thật sự ko cảm nhận được vị rong biển luôn. Thay đổi lại xíu là quá tuyệt nhaaa. Vẫn mê nè', 27, 8, '0000-00-00'),
(63, 'Ngon , giòn, quá tuyệt vời Mình ăn hếT 1 hộp đầu tiên trong 1 ngày thôi á mn  Thêm mưa ngồi ăn là bị cuốn đỉnh luôn Mới mua lại phải mua tiếp nữa rồii', 28, 8, '0000-00-00'),
(64, 'Món mực quốc dân ngon và vừa vị. Sẽ ủng hộ shop món này đều đều. Cảm ơn shop', 50, 8, '0000-00-00'),
(67, 'Ngon', 27, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `ma_HangHoa` int(11) NOT NULL,
  `ten_hanghoa` varchar(255) NOT NULL,
  `don_gia` double(10,0) NOT NULL,
  `giam_gia` double(10,0) DEFAULT 0,
  `hinh` varchar(255) DEFAULT NULL,
  `trang_thai` enum('0','1') NOT NULL DEFAULT '0',
  `ngay_nhap` date NOT NULL,
  `mo_ta` varchar(255) DEFAULT NULL,
  `dac_biet` bit(1) NOT NULL DEFAULT b'0',
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`ma_HangHoa`, `ten_hanghoa`, `don_gia`, `giam_gia`, `hinh`, `trang_thai`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(12, 'Rong Biển Cháy Tỏi', 89000, 17800, 'rongbienchaytoi.png', '0', '2022-11-12', 'Rong biển cháy tỏi là món ăn vặt bổ dưỡng đang được yêu thích nhất hiện nay. Món ăn vặt này mang hương vị đậm đà của hương rong biển kết hợp với tỏi', b'1', 1, 5),
(15, 'Mực Rim Me', 135000, 27000, 'mucrimme.jpg', '0', '2022-11-13', 'Mực câu Phan Thiết rim mắm me Hộp 300gr: 135.000đ Mực câu nướng sơ có độ dai vừa, độ ngọt thịt rim với sốt me chua ngọt dẻo kẹo, hơi cay nhẹ, ăn với chén cơm nóng thì .....', b'0', 0, 2),
(16, 'Khô Gà Xé Cay', 100000, 20000, 'khogaxecay.jpg', '0', '2022-11-09', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 1),
(17, 'Khô Gà Lá Chanh', 100000, 20000, 'kho-ga-la-chanh-632.jpg', '0', '2022-11-10', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 1),
(20, 'Da Heo Chiên Giòn Mắm Tỏi', 70000, 14000, 'daheochiengionmamtoi.jpg', '0', '2022-11-11', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 4),
(21, 'Cơm Cháy Chiên Giòn', 90000, 18000, 'comchaychiengion.jpg', '0', '2022-11-12', 'Cơm cháy món ăn vặt gắn liền với tuổi thơ của mỗi người. Văn hóa ẩm thực phát triển, nhưng cơm cháy vẫn nổi bật với sức hút riêng của mình.', b'0', 0, 3),
(26, 'Rong biển sấy me', 80000, 16000, 'rongbiensayme.png', '0', '2022-11-15', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 5),
(27, 'Gạo lứt rong biển', 60000, 12000, 'gaolutrongbien.png', '0', '2022-11-15', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 5),
(28, 'Top mỡ chiên mắm', 52000, 10400, 'topmochienmam.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 4),
(29, 'Tóp mỡ chiên giòn', 100000, 20000, 'topmochiengion.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 4),
(30, 'Cơm cháy mắm và khô gà', 80000, 16000, 'comchaymam&khoga.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 3),
(31, 'Cơm cháy mắm tép', 70000, 14000, 'comchaymamtep.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 3),
(32, 'Cơm cháy mắm tỏi', 58000, 11600, 'comchaymamtoi.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 3),
(33, 'Cơm cháy mắm hành', 60000, 12000, 'comchaymamhanh.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 3),
(34, 'Cơm cháy rong biển', 78000, 15600, 'comchayrongbien.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 3),
(35, 'Cơm cháy siêu chà bông', 115000, 23000, 'comchaysieuchabong.png', '0', '2022-11-16', 'Cơm cháy món ăn vặt gắn liền với tuổi thơ của mỗi người. Văn hóa ẩm thực phát triển, nhưng cơm cháy vẫn nổi bật với sức hút riêng của mình.', b'0', 0, 3),
(36, 'Gạo lứt rong biển sấy', 78000, 15600, 'gaolutrongbiensay.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 3),
(37, 'Gạo lứt thanh', 80000, 16000, 'gaolutthanh.png', '0', '2022-11-16', '', b'0', 0, 3),
(38, 'Bắp sấy tẩm gia vị', 50000, 10000, 'bapsaytamgiavi.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 2),
(39, 'Chuối sấy', 50000, 10000, 'chuoisay.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 2),
(40, 'Chuối sấy Đà Lạt', 70000, 14000, 'chuoisaydalat.png', '0', '2022-11-16', 'Chuối là loại trái cây phổ biến vì trong chuối có chứa nhiều dinh dưỡng tốt cho sức khỏe.Chuối sấy là món ăn vặt vô cùng ưa chuộng và thu hút giới trẻ', b'0', 0, 2),
(41, 'Mít sấy', 75000, 15000, 'mitsay.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 2),
(43, 'Khô bò mắm tỏi', 150000, 30000, 'khobomamtoi.png', '0', '2022-11-16', 'Khô bò món ăn vặt đang được ưa chuộng nhất hiện nay. Với mùi vị cùng hương thơm đậm đà, khô bò đã chiếm trọn tâm hồn của mọi người.', b'0', 0, 1),
(44, 'Khô bò miếng', 160000, 32000, 'khobomieng.png', '0', '2022-11-16', 'Khô bò món ăn vặt đang được ưa chuộng nhất hiện nay. Với mùi vị cùng hương thơm đậm đà, khô bò đã chiếm trọn tâm hồn của mọi người.', b'0', 0, 1),
(45, 'Khô bò sợi', 160000, 32000, 'khobosoi.png', '0', '2022-11-16', 'Khô bò món ăn vặt đang được ưa chuộng nhất hiện nay. Với mùi vị cùng hương thơm đậm đà, khô bò đã chiếm trọn tâm hồn của mọi người.', b'0', 0, 1),
(46, 'Khô gà', 70000, 14000, 'khoga.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 1),
(47, 'Khô heo cháy tỏi', 130000, 26000, 'khoheochaytoi.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 1),
(48, 'Khô heo mè', 180000, 36000, 'khoheome.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 1),
(49, 'Khô mực sợi', 120000, 24000, 'khomucsoi.png', '0', '2022-11-16', 'Khô mực là món ăn vặt được ưa chuộng phổ biến đối với người Việt, còn gì tuyệt hơn khi món khô mực kết hợp cùng nước dừa ngọt ngọt, thanh thanh.', b'0', 0, 1),
(50, 'Khô mực hập nước dừa', 135000, 27000, 'khomuchapnuocdua.png', '0', '2022-11-16', 'Khô mực là món ăn vặt được ưa chuộng phổ biến đối với người Việt, còn gì tuyệt hơn khi món khô mực kết hợp cùng nước dừa ngọt ngọt, thanh thanh.', b'0', 0, 1),
(51, 'Mực câu Phan Thiết rim mắm me', 180000, 36000, 'muccauphanthietrimmamme.png', '0', '2022-11-16', 'Mua đồ ăn vặt ngon, bổ dưỡng, vệ sinh an toàn và chất lượng. Ăn Vặt 5 Ú đổi trả miễn phí - thanh toán đa dạng.', b'0', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `ma_HDCT` int(11) NOT NULL,
  `list_hh` text NOT NULL,
  `tong_tien` int(7) NOT NULL DEFAULT 0,
  `id_hddh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`ma_HDCT`, `list_hh`, `tong_tien`, `id_hddh`) VALUES
(54, '[{\"ma_hh\":\"26\",\"so_luong\":1,\"tong_tien\":64000}]', 64000, 838),
(55, '[{\"ma_hh\":\"26\",\"so_luong\":1,\"tong_tien\":64000}]', 64000, 8097),
(56, '[{\"ma_hh\":\"15\",\"so_luong\":1,\"tong_tien\":108000}]', 108000, 6873),
(57, '[{\"ma_hh\":\"49\",\"so_luong\":1,\"tong_tien\":96000}]', 96000, 488);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadondathang`
--

CREATE TABLE `hoadondathang` (
  `ma_HDDH` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `so_dien_thoai` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `ngay_lap_HD` date NOT NULL,
  `trang_thai` bit(1) NOT NULL DEFAULT b'0' COMMENT 'đang giao hàng / giao thành công / giao thất bại',
  `ghi_chu_admin` varchar(255) DEFAULT NULL,
  `ghi_chu_kh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadondathang`
--

INSERT INTO `hoadondathang` (`ma_HDDH`, `ma_kh`, `ho_ten`, `so_dien_thoai`, `email`, `dia_chi`, `ngay_lap_HD`, `trang_thai`, `ghi_chu_admin`, `ghi_chu_kh`) VALUES
(118, 1, 'bảo long 2', 123456789, 'huynhngocblong@gmail.com', 'ada', '0000-00-00', b'0', NULL, '1'),
(488, 1, 'asd', 123123123, 'khoavan1305@gmail.com', '123', '0000-00-00', b'0', NULL, '123'),
(645, 1, '2', 123456789, 'huynhngocblong@gmail.com', '1222231', '0000-00-00', b'0', NULL, '1'),
(684, 1, 'bảo long', 123456789, '1', '958 35 32 lac long quan', '0000-00-00', b'0', NULL, 'lllllllllllllllllll'),
(838, 1, '1', 1, '1', '1', '0000-00-00', b'0', NULL, '1'),
(1767, 5, 'a', 0, 'a', 'a', '0000-00-00', b'0', NULL, 'a'),
(2591, 1, 'bảo long', 123456789, 'huynhngocblong@gmail.com', '958 35 32 lac long quan', '0000-00-00', b'0', NULL, '2'),
(3824, 1, 'bảo long 2', 123456789, 'huynhngocblong@gmail.com', 'ada', '0000-00-00', b'0', NULL, '1'),
(4295, 1, 'bảo long 2', 123456789, 'huynhngocblong@gmail.com', 'ada', '0000-00-00', b'0', NULL, '1'),
(4978, 1, '22', 0, 'huynhngocblong@gmail.com', 'sađá', '0000-00-00', b'0', NULL, '2'),
(6373, 1, 'bảo long', 123456789, '2', '1', '0000-00-00', b'0', NULL, '1'),
(6873, 5, 'ád', 0, 'ád', 'ád', '0000-00-00', b'0', NULL, 'ád'),
(8097, 5, 'ádasd', 0, 'ádasd', 'ádasd', '0000-00-00', b'0', NULL, 'ádasd'),
(9887, 1, 'bảo long', 123456789, 'huynhngocblong@gmail.com', '2', '0000-00-00', b'0', NULL, 'lllllllllllllllllll');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_KhachHang` int(11) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(12) NOT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0',
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ma_KhachHang`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `so_dien_thoai`, `hinh`, `kich_hoat`, `vai_tro`) VALUES
(1, 'admin', 'admin', '123456', 'admin@gmail.com', '123456789', NULL, b'0', 1),
(4, ' Bảo Long', 'baolong411', 'longdapda123', 'longdeptrai@gmail.com', '0777663476', NULL, b'0', 0),
(5, 'Nguyễn Bá Thân', 'bathan', 'bathan', 'bathan@gmail.com', '0815198298', NULL, b'0', 0),
(6, ' vinh', 'vinhng', 'asdasd', 'vinhnguyen91203@gmail.com', ' 0123456789', NULL, b'0', 0),
(8, 'Vo Dinh Kha   ', 'dinhkha1 ', '123456', '123123@gmail.com   ', '12345678', NULL, b'0', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `ma_LoaiHang` int(11) NOT NULL,
  `ten_loaihang` varchar(50) NOT NULL,
  `so_thu_tu` int(2) DEFAULT NULL,
  `trang_thai` bit(1) NOT NULL DEFAULT b'0' COMMENT 'nếu là 0 thì còn hàng, nếu là 1 thì hết hàng	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`ma_LoaiHang`, `ten_loaihang`, `so_thu_tu`, `trang_thai`) VALUES
(1, 'Khô gà', 1, b'0'),
(2, 'Mực Rim', 2, b'0'),
(3, 'Cơm Cháy', 3, b'0'),
(4, 'Da Heo', 4, b'0'),
(5, 'Rong Biển', 5, b'0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_BinhLuan`),
  ADD KEY `fk_binhluan_hanghoa` (`ma_hh`),
  ADD KEY `fk_binhluan_khachhang` (`ma_kh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`ma_HangHoa`),
  ADD KEY `fk_hanghoa_loaihang` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`ma_HDCT`),
  ADD KEY `fk_hdct_hddh` (`id_hddh`);

--
-- Chỉ mục cho bảng `hoadondathang`
--
ALTER TABLE `hoadondathang`
  ADD PRIMARY KEY (`ma_HDDH`),
  ADD KEY `fk_hddh_khachhang` (`ma_kh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_KhachHang`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`ma_LoaiHang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_BinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `ma_HangHoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `ma_HDCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `hoadondathang`
--
ALTER TABLE `hoadondathang`
  MODIFY `ma_HDDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9888;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_KhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `ma_LoaiHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_binhluan_hanghoa` FOREIGN KEY (`ma_hh`) REFERENCES `hanghoa` (`ma_HangHoa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_binhluan_khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_KhachHang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `fk_hanghoa_loaihang` FOREIGN KEY (`ma_loai`) REFERENCES `loaihang` (`ma_LoaiHang`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `fk_hdct_hddh` FOREIGN KEY (`id_hddh`) REFERENCES `hoadondathang` (`ma_HDDH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadondathang`
--
ALTER TABLE `hoadondathang`
  ADD CONSTRAINT `fk_hddh_khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_KhachHang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
