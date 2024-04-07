-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 24, 2024 lúc 03:47 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoptrangsuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chatlieu`
--

CREATE TABLE `chatlieu` (
  `idchat` int(11) NOT NULL,
  `tenchat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chatlieu`
--

INSERT INTO `chatlieu` (`idchat`, `tenchat`) VALUES
(1, 'Vàng'),
(2, 'Bạc'),
(3, 'Hợp Kim Cao Cấp'),
(4, 'Platinum'),
(5, 'Dây thép cao cấp không gỉ'),
(6, 'Dây da tổng hợp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcomment`, `makh`, `idsp`, `content`) VALUES
(1, 2, 3, 'dep'),
(2, 2, 42, '  dep'),
(3, 2, 42, '  quá dẹp'),
(4, 2, 45, '  đẹp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `tenmau` varchar(60) NOT NULL,
  `tensize` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `idsp`, `soluongmua`, `thanhtien`, `tinhtrang`, `tenmau`, `tensize`) VALUES
(1, 38, 1, 14077000, 0, 'Vàng', '0'),
(1, 43, 2, 20000000, 0, 'Xanh Dương', '0'),
(9, 38, 1, 14077000, 0, 'Vàng', '0'),
(9, 43, 2, 20000000, 0, 'Xanh Dương', '0'),
(10, 38, 1, 14077000, 0, 'Vàng', '0'),
(10, 43, 2, 20000000, 0, 'Xanh Dương', '0'),
(11, 38, 1, 14077000, 0, 'Vàng', '0'),
(11, 43, 2, 20000000, 0, 'Xanh Dương', '0'),
(12, 42, 1, 15000000, 0, 'Trắng', '0'),
(12, 43, 1, 10000000, 0, 'Xanh Dương', '0'),
(13, 42, 1, 15000000, 0, 'Trắng', '0'),
(13, 43, 1, 10000000, 0, 'Xanh Dương', '0'),
(14, 42, 1, 15000000, 0, 'Trắng', '0'),
(14, 43, 1, 10000000, 0, 'Xanh Dương', '0'),
(15, 38, 3, 42231000, 0, 'Vàng', '0'),
(15, 42, 1, 15000000, 0, 'Trắng', '0'),
(15, 43, 1, 10000000, 0, 'Xanh Dương', '0'),
(16, 18, 4, 34660000, 0, 'Vàng + Trắng', '11'),
(17, 38, 1, 14077000, 0, 'Vàng', '49'),
(17, 39, 1, 3424000, 0, 'Vàng', '49'),
(18, 17, 1, 10678000, 0, 'Vàng + Trắng', '20'),
(18, 38, 7, 98539000, 0, 'Vàng', '49'),
(19, 17, 1, 10678000, 0, 'Vàng + Trắng', '20'),
(19, 38, 7, 98539000, 0, 'Vàng', '49'),
(20, 17, 1, 10678000, 0, 'Vàng + Trắng', '20'),
(20, 38, 7, 98539000, 0, 'Vàng', '49'),
(21, 17, 1, 10678000, 0, 'Vàng + Trắng', '20'),
(21, 38, 7, 98539000, 0, 'Vàng', '49'),
(22, 45, 2, 189466000, 0, 'Hồng + Trắng', '0'),
(23, 19, 1, 10862000, 0, 'Vàng + Trắng', '0'),
(23, 44, 1, 10000000, 0, 'Xà Cừ', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctsanpham`
--

CREATE TABLE `ctsanpham` (
  `idsp` int(11) NOT NULL,
  `idloai` int(11) NOT NULL,
  `idchat` int(11) NOT NULL,
  `idmau` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `giamgia` float NOT NULL,
  `hinh` varchar(120) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctsanpham`
--

INSERT INTO `ctsanpham` (`idsp`, `idloai`, `idchat`, `idmau`, `idsize`, `giamgia`, `hinh`, `dongia`, `soluongton`) VALUES
(3, 0, 0, 6, 4, 3, 'bongtai2.png', 483748, 12),
(3, 0, 0, 6, 6, 3, 'bongtai2.png', 94733000, 12),
(3, 0, 0, 8, 8, 23, 'bongtai2.png', 44324, 3),
(3, 36, 1, 5, 1, 14987200, 'kimcuong1.png', 17632000, 12),
(3, 36, 1, 5, 2, 14987200, 'kimcuong1.png', 17632000, 12),
(3, 36, 1, 5, 3, 14987200, 'kimcuong1.png', 17632000, 12),
(3, 36, 1, 5, 4, 14987200, 'kimcuong1.png', 17632000, 12),
(3, 36, 1, 5, 5, 14987200, 'kimcuong1.png', 17632000, 12),
(3, 36, 1, 5, 6, 14987200, 'kimcuong1.png', 17632000, 12),
(4, 36, 1, 5, 0, 0, 'kimcuong2.png', 9900000, 12),
(7, 36, 1, 5, 7, 0, 'kimcuong3.png', 8604000, 12),
(7, 36, 1, 5, 8, 0, 'kimcuong3.png', 8604000, 12),
(8, 36, 1, 5, 2, 0, 'kimcuong4.png', 12301000, 0),
(8, 36, 1, 5, 3, 0, 'kimcuong4.png', 12301000, 12),
(8, 36, 1, 5, 4, 0, 'kimcuong4.png', 12301000, 12),
(8, 36, 1, 5, 5, 0, 'kimcuong4.png', 12301000, 12),
(9, 36, 1, 5, 0, 0, 'kimcuong5.png', 5136000, 12),
(10, 36, 1, 5, 0, 0, 'kimcuong6.png', 10117000, 12),
(11, 10, 1, 2, 4, 0, 'kimcuong7.png', 8546000, 12),
(11, 10, 1, 2, 5, 0, 'kimcuong7.png', 8546000, 12),
(12, 13, 1, 2, 0, 0, 'kimcuong8.png', 98231000, 10),
(13, 15, 2, 5, 3, 0, 'nhan1.png', 6926000, 12),
(13, 15, 2, 5, 4, 0, 'nhan1.png', 6926000, 12),
(13, 15, 2, 5, 5, 0, 'nhan1.png', 6926000, 12),
(14, 15, 2, 5, 4, 0, 'nhan2.png', 6112000, 12),
(14, 15, 2, 5, 5, 0, 'nhan2.png', 6112000, 12),
(15, 15, 2, 5, 9, 0, 'nhan3.png', 9674000, 12),
(15, 15, 2, 5, 10, 0, 'nhan3.png', 9674000, 12),
(15, 15, 2, 5, 11, 0, 'nhan3.png', 9674000, 12),
(16, 15, 2, 5, 1, 0, 'nhan4.png', 9093000, 12),
(16, 15, 2, 5, 2, 0, 'nhan4.png', 9093000, 12),
(16, 15, 2, 5, 3, 0, 'nhan4.png', 9093000, 12),
(16, 15, 2, 5, 4, 0, 'nhan4.png', 9093000, 12),
(16, 15, 2, 5, 13, 0, 'nhan4.png', 9093000, 12),
(16, 15, 2, 5, 20, 0, 'nhan4.png', 9093000, 12),
(17, 15, 2, 5, 9, 0, 'nhan5.png', 10678000, 12),
(17, 15, 2, 5, 10, 0, 'nhan5.png', 10678000, 12),
(17, 15, 2, 5, 11, 0, 'nhan5.png', 10678000, 12),
(18, 15, 2, 5, 3, 0, 'nhan6.png', 8665000, 12),
(18, 15, 2, 5, 4, 0, 'nhan6.png', 8665000, 12),
(18, 15, 2, 5, 5, 0, 'nhan6.png', 8665000, 12),
(19, 15, 2, 5, 4, 0, 'nhan7.png', 10862000, 12),
(19, 15, 2, 5, 5, 0, 'nhan7.png', 10862000, 12),
(19, 15, 2, 5, 13, 0, 'nhan7.png', 10862000, 12),
(20, 13, 2, 2, 0, 0, 'bongtai1.png', 484000, 12),
(21, 13, 2, 2, 0, 0, 'bongtai2.png', 395000, 12),
(22, 13, 2, 2, 0, 0, 'bongtai3.png', 437000, 12),
(23, 13, 2, 2, 0, 0, 'bongtai4.png', 347000, 12),
(24, 13, 1, 1, 0, 0, 'bongtai5.png', 5427000, 12),
(26, 13, 1, 1, 0, 0, 'bongtai6.png', 2934000, 12),
(27, 13, 1, 1, 0, 0, 'bongtai7.png', 3548000, 12),
(28, 13, 1, 1, 0, 0, 'bongtai8.png', 11482000, 12),
(29, 13, 1, 1, 0, 0, 'bongtai9.png', 7568000, 12),
(30, 11, 2, 2, 16, 0, 'daychuyen1.png', 295000, 12),
(31, 11, 2, 2, 16, 0, 'daychuyen2.png', 290000, 12),
(32, 11, 2, 2, 16, 0, 'daychuyen3.png', 324000, 12),
(33, 11, 2, 5, 16, 0, 'daychuyen4.png', 19862000, 12),
(34, 11, 2, 5, 16, 0, 'daychuyen5.png', 5248000, 12),
(35, 11, 1, 1, 16, 0, 'daychuyen6.png', 14077000, 12),
(36, 11, 1, 1, 16, 0, 'daychuyen7.png', 678000, 12),
(37, 11, 1, 1, 16, 0, 'daychuyen8.png', 19763000, 12),
(38, 11, 1, 1, 16, 0, 'daychuyen9.png', 14077000, 12),
(39, 11, 1, 1, 16, 0, 'daychuyen10.png', 3424000, 12),
(40, 6, 5, 2, 0, 0, 'dongho1.png', 12456000, 12),
(41, 6, 5, 2, 0, 0, 'dongho2.jpg', 10000000, 12),
(42, 6, 5, 2, 0, 0, 'dongho3.png', 15000000, 12),
(43, 6, 5, 9, 0, 0, 'dongho4.png', 10000000, 12),
(44, 6, 5, 12, 0, 0, 'dongho5.png', 10000000, 12),
(45, 15, 3, 4, 10, 0, 'people.png', 94733000, 12),
(46, 0, 0, 3, 6, 3, '7.jpg', 900000, 12),
(50, 0, 0, 2, 1, 0, '12.jpg', 1000000, 1),
(50, 25, 4, 5, 6, 0, 'logo2.png', 900000, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 2, '2024-02-18', 0),
(2, 2, '2024-02-18', 0),
(3, 2, '2024-02-18', 0),
(4, 2, '2024-02-18', 0),
(5, 2, '2024-02-18', 0),
(6, 2, '2024-02-18', 0),
(7, 2, '2024-02-18', 0),
(8, 2, '2024-02-18', 0),
(9, 2, '2024-02-18', 34077000),
(10, 2, '2024-02-18', 34077000),
(11, 2, '2024-02-18', 34077000),
(12, 2, '2024-02-19', 25000000),
(13, 2, '2024-02-19', 25000000),
(14, 2, '2024-02-19', 25000000),
(15, 2, '2024-02-19', 67231000),
(16, 2, '2024-02-19', 34660000),
(17, 2, '2024-02-19', 17501000),
(18, 2, '2024-02-19', 0),
(19, 2, '2024-02-19', 0),
(20, 2, '2024-02-19', 0),
(21, 2, '2024-02-19', 109217000),
(22, 2, '2024-03-23', 189466000),
(23, 2, '2024-03-24', 20862000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'thaothao', 'thaone', '24f929c6ee111af13378f71e231099f6', 'thaothao1@gmail.com', 'hcm', '1234566788'),
(2, 'trình anh', 'anhanh12', '24f929c6ee111af13378f71e231099f6', 'anhanh12@gmail.com', 'HCM', '0912345678'),
(3, 'trình anh', 'anhanh12', '24f929c6ee111af13378f71e231099f6', 'anhanh12@gmail.com', 'HCM', '0912345678'),
(4, 'thanh', 'thanh12', '24f929c6ee111af13378f71e231099f6', 'thang12@gmail.com', 'hcm', '0912345678'),
(5, 'thaone', 'thaone123', 'dc08e04bdd7d0f2a19379af542e8ac7d', 'truongminhthaoc1.c3hn2019@gmail.com', 'hcm', '0912345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `idloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`idloai`, `tenloai`, `idmenu`) VALUES
(4, 'Trang Sức Bạc', 5),
(6, 'Đồng Hồ', 5),
(7, 'Đá quý', 5),
(11, 'Dây chuyền', 0),
(13, 'Bông tai', 0),
(15, 'Nhẫn', 0),
(21, 'Nhẫn Cặp', 0),
(25, 'Đồng hồ cặp', 0),
(26, 'Casio', 0),
(29, 'Fossil', 0),
(32, 'Olivia Burton', 0),
(33, 'Silvana', 0),
(35, 'Khác                                    ', 0),
(36, 'Trang Sức Vàng', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mau`
--

CREATE TABLE `mau` (
  `idmau` int(11) NOT NULL,
  `tenmau` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mau`
--

INSERT INTO `mau` (`idmau`, `tenmau`) VALUES
(1, 'Vàng'),
(2, 'Trắng'),
(3, 'Hồng'),
(4, 'Hồng + Trắng'),
(5, 'Vàng + Trắng'),
(6, 'Xám'),
(7, 'Hoa Văn'),
(8, 'Đa màu'),
(9, 'Xanh Dương'),
(10, 'Tím'),
(11, 'Đỏ'),
(12, 'Xà Cừ'),
(13, 'Đen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'thao', 'hcm', 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(300) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `idloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `soluotxem`, `ngaylap`, `mota`, `idloai`) VALUES
(3, 'Nhẫn Kim cương Sleeping Beauty', 0, '2023-12-12', 'Là tuyên ngôn cá tính của nàng công chúa Aura, chiếc nhẫn kim cương vàng 14K trong BST Sleeping Beauty chắc chắn sẽ là điểm nhấn cho outfit của quý cô. Sức hút riêng của thiết kế được kết tạo từ thiết kế cực kì duyên dáng với chi tiết đính kim cương cách điệu tinh xảo, tạo nên sản phẩm tinh tế chinh phục mọi ánh nhìn.\r\n\r\nDisney|PNJ tự hào mang đến những mẫu trang sức tinh tế, giúp nàng có nhiều sự lựa chọn cho phong cách của mình. Bằng tất thảy sự trân trọng và cảm xúc dành riêng cho ph', 15),
(4, 'Mặt dây chuyền Kim cương Kim tiền', 0, '2023-12-19', 'PNJ xin giới thiệu một món trang sức đặc biệt, giúp nàng thu hút mọi sự chú ý xung quanh với chiếc mặt dây chuyền vàng 14K sở hữu chi tiết Kim cương đính một cách tỉ mỉ trên chất liệu vàng 14K.\r\n\r\nKhông chỉ sang trọng, kim cương còn là loại đá cứng cỏi, bền bỉ bậc nhất hiện nay, giúp cho món trang sức của bạn trường tồn giữa dòng thời gian. Với sự kết hợp đồng điệu giữa vàng 14K và kim cương, chiếc mặt dây chuyền PNJ sở hữu một vẻ đẹp vừa trẻ trung, vừa toát lên khí chất của người phụ nữ quyền l', 11),
(7, 'Dây cổ Kim cương Tangled', 0, '2023-12-05', 'Disney|PNJ xin giới thiệu đến bạn phiên bản trang sức trong BST Tangled đặc sắc với một chế tác từ chất liệu vàng 14K, điểm xuyến bởi những viên kim cương cùng các chi tiết đậm chất Disney và đầy tính sáng tạo. Sự sắp xếp các chi tiết trên chiếc dây cổ tựa như những nốt nhạc tạo nên bản hợp xướng êm dịu và bay bổng.\r\n\r\nĐặc biệt hơn, chiếc dây cổ sẽ trở nên ý nghĩa hơn khi trở thành món quà ghi dấu yêu thương vào những dịp quan trọng. Đây chắc chắn sẽ là thứ giúp bạn gắn kết những khoảnh khắc đáng nhớ với mình hoặc người thương.', 11),
(8, 'Nhẫn Kim cương Disney|PNJ Tangled', 0, '2023-12-19', 'Kim cương vốn là món trang sức mang đến niềm kiêu hãnh và cảm hứng thời trang bất tận. Sở hữu riêng cho mình món trang sức kim cương chính là điều mà ai cũng mong muốn. Chiếc nhẫn trong BST Tangled từ thương hiệu Disney|PNJ được chế tác từ vàng 14K cùng điểm nhấn kim cương với 57 giác cắt chuẩn xác, tạo nên món trang sức đầy sự sang trọng và đẳng cấp.\r\n\r\nKim cương đã đẹp, trang sức kim cương lại càng mang sức hấp dẫn khó cưỡng. Sự kết hợp mới mẻ này chắc chắn sẽ tạo nên dấu ấn thời trang hiện đại và giúp quý cô trở nên nổi bật, tự tin và thu hút sự ngưỡng mộ của mọi người.', 15),
(9, 'Mặt dây chuyền First Diamond', 0, '2023-12-19', 'PNJ xin giới thiệu một món trang sức đặc biệt, giúp nàng thu hút mọi sự chú ý xung quanh với chiếc mặt dây chuyền sở hữu chi tiết Kim cương đính một cách tỉ mỉ trên chất liệu vàng 14K.\r\n\r\nKhông chỉ sang trọng, kim cương còn là loại đá cứng cỏi, bền bỉ bậc nhất hiện nay, giúp cho món trang sức của bạn trường tồn giữa dòng thời gian. Với sự kết hợp đồng điệu giữa vàng 14K và kim cương, chiếc mặt dây chuyền PNJ sở hữu một vẻ đẹp vừa trẻ trung, vừa toát lên khí chất của người phụ nữ quyền lực.', 11),
(10, 'Bông tai First Diamond', 0, '2023-12-18', 'Đôi bông tai được chế tác từ vàng 14K và sở hữu kiểu dáng nhỏ xinh, phù hợp với những quý cô ưa chuộng phong cách sang trọng. Đặc biệt hơn nữa, đôi bông tai sở hữu điểm nhấn Kim cương tạo nên vẻ đẹp tinh tế, tôn lên vẻ đẹp dịu dàng, quý phái cho người đeo.\r\n\r\nKim cương được xem là biểu tượng của sự quyền lực, giàu sang và quý phái, do đó nó được sử dụng để tạo nên các tuyệt tác trang sức kim cương tinh tế. Sự sáng tạo mạnh mẽ của các nhà thiết kế của PNJ được phô diễn thông qua đôi bông tai với vẻ đẹp đẳng cấp và thời thượng.', 13),
(11, 'Nhẫn đính đá ECZ', 0, '2024-01-17', 'Dù ở lứa tuổi nào, theo phong cách cổ điển hay hiện đại thì sắc màu của những viên đá ECZ màu trắng vẫn luôn biết \"\"chiều lòng\"\" các tín đồ thời trang. Mô phỏng nét kiêu sa của nàng, chiếc nhẫn vàng mới của PNJ nhẹ nhàng kết đính những viên đá trắng tròn trịa trên chất vàng 10K, mang đến sản phẩm đầy tinh tế, tôn lên nhan sắc của phái đẹp.\r\n\r\nCó thể nói, sản phẩm này như là lời ví von xinh đẹp mà PNJ gửi tặng đến các giai nhân. Vì nàng luôn biết cách rực rỡ theo sắc màu riêng, như cầu vồng tản ánh sắc không bao giờ trùng lắp.', 15),
(12, 'Vỏ bông tai Kim Cương', 0, '2024-01-02', 'Đôi bông tai là dòng trang sức với sự kết hợp độc đáo giữa vàng trắng 18K và những viên kim cương đạt tiêu chuẩn cao nhất về chất lượng cùng độ chính xác trong từng giác cắt. Màu sắc yêu kiều, thiết kế tinh xảo khi kết hợp cùng viên chủ Kim cương, chắc chắn đôi bông tai vàng 18K sẽ trở thành điểm nhấn nâng niu vẻ đẹp của nàng một cách khéo léo.\r\n\r\nNhấn nhá một chút sắc trắng từ bông tai cho phong thái thêm ấn tượng, nàng bừng sáng cùng chất riêng đầy kiêu hãnh. Và với nàng, dường như mọi sự khoa trương đều được tiết chế, mọi sự mềm mại đều bộc phát thành ánh sắc riêng rạng ngời.', 4),
(13, 'Nhẫn Vàng Trắng 10K đính đá', 0, '2024-02-01', 'Trọng lượng tham khảo: 12.89775phân\r\nHàm lượng chất liệu:4160\r\nLoại đá chính:Xoàn mỹ\r\nMàu đá chính:Trắng \r\nLoại đá phụ:Xoàn mỹ \r\nMàu đá phụ:Trắng\r\n \r\nThương hiệu:\r\nPNJ\r\n \r\nGiới tính:\r\nNữ', 15),
(14, 'Nhẫn Vàng Trắng 10K đính đá', 0, '2024-02-01', 'Trọng lượng tham khảo:10.10179phân\r\nHàm lượng chất liệu:4160\r\nLoại đá chính:Xoàn mỹ\r\nMàu đá chính:Trắng\r\nLoại đá phụ:Xoàn mỹ\r\nMàu đá phụ:Trắng\r\nThương hiệu:PNJ\r\nGiới tính:Nữ', 15),
(15, 'Nhẫn nam Vàng Trắng 10K đính đá', 0, '2024-02-01', 'Lấy cảm hứng từ biểu tượng mặt gậy như ý, PNJ mang đến BST Kim Long Trường Cửu với những món trang sức vàng được chế tác tinh xảo. BST mang đến phong độ, đẳng cấp, thu hút tài lộc và vượng khí cho các Quý Ông trong năm mới Giáp Thìn 2024.\r\nChiếc nhẫn được chế tác từ vàng 10K cùng nghệ thuật sắp đặt 9 viên đá ECZ mang ý nghĩa “Trường Cửu” được lồng ghép khéo léo, tạo điểm nhấn, biểu trưng cho ước mong sự nghiệp bền vững và chinh phục mọi đỉnh cao thành công.', 15),
(16, 'Nhẫn Kim cương Vàng Trắng 14K', 0, '2024-02-01', 'Trọng lượng tham khảo:5.53115phân\r\nHàm lượng chất liệu:5850\r\nLoại đá chính:Kim cương \r\nMàu đá chính:Trắng\r\nLoại đá phụ:Không gắn đá\r\nThương hiệu:PNJ\r\nGiới tính:Nữ', 15),
(17, 'Nhẫn nam Vàng Trắng 10K đính đá', 0, '2024-02-01', 'Lấy cảm hứng từ biểu tượng mặt gậy như ý, PNJ mang đến BST Kim Long Trường Cửu với những món trang sức vàng được chế tác tinh xảo. BST mang đến phong độ, đẳng cấp, thu hút tài lộc và vượng khí cho các Quý Ông trong năm mới Giáp Thìn 2024.\r\nChiếc nhẫn được chế tác từ vàng 10K cùng nghệ thuật sắp đặt 9 viên đá ECZ mang ý nghĩa “Trường Cửu” được lồng ghép khéo léo, tạo điểm nhấn, biểu trưng cho ước mong sự nghiệp bền vững và chinh phục mọi đỉnh cao thành công.', 15),
(18, 'Nhẫn Vàng Trắng 14K đính đá Topaz', 0, '2024-02-01', 'Lấy cảm hứng thiết kế từ Mặt gậy như ý và hình dáng của Cỏ bốn lá, PNJ mang đến BST Kim Bảo Như Ý với những món trang sức may mắn với ngụ ý mong cầu vạn sự hanh thông và mang đến năng lượng tích cực để tận hưởng cuộc sống.\r\n\r\nChiếc nhẫn được chế tác từ vàng 14K với điểm nhấn Kim Bảo, mang ý nghĩa cầu mong may mắn cho công danh sự nghiệp - tài lộc - tình duyên - sức khoẻ. Ngoài ra, cùng với chi tiết đính đá Topaz càng làm tăng vẻ đẹp lung linh cho sản phẩm.', 15),
(19, 'Nhẫn Nam Vàng Trắng Ý 18K', 0, '2024-02-01', 'Ngoài các loại vàng 10K, 14K hay 18K thì vàng Ý 18K cũng đang được nhiều người ưa chuộng bởi đặc tính dễ chế tác và giá thành hợp lý. Chiếc nhẫn được sản xuất từ chất liệu vàng Ý 18K cùng điểm nhấn đá CZ lấp lánh trên từng chi tiết.\r\nViên đá với những giác cắt chuẩn xác đính một cách tinh xảo trên chiếc nhẫn, tạo nên điểm nhấn tô điểm cho vẻ đẹp và phong cách của các quý ông. Hãy khoác lên mình ánh kim rực rỡ của mẫu trang sức CZ này và chinh phục ánh nhìn trên mỗi bước chân, chàng nhé!', 15),
(20, 'Bông tai bạc Pnjsilver Her Time', 0, '2024-02-02', 'Nếu bạn là một cô nàng sành điệu, luôn “săn lùng”những xu hướng phụ kiện thời trang mới nhất thì không thể bỏ lỡ sản phẩm bông tai của bộ sưu tập trang sức Her Time của PNJSilver. Sở hữu kiểu dáng khá mới mẻ, phối hợp tinh tế cùng sự hòa trộn màu sắc của chất liệu bạc, tạo một phụ kiện trang sức phá cách, giúp các nàng có sự lựa chọn phong phú hơn cho “tủ sưu tập trang sức” mình nhé!', 13),
(21, 'Bông tai trẻ em bạc PNJSilver', 0, '2024-02-02', 'Ngoài những chiếc váy màu sắc nổi bật, đôi giày nhỏ xinh thì bông tai bạc là một phần không thể thiếu giúp cho bé gái luôn điệu đà, đáng yêu. Đến với thương hiệu PNJSilver các bậc cha mẹ sẽ tha hồ làm “điệu”cho bé cưng với những bộ trang sức họa tiết trái cây nhỏ xinh.', 13),
(22, 'Bông tai bạc đính đá PNJSilver', 0, '2024-02-02', 'Hiển nhiên trang sức chính là phụ kiện giúp các quý cô trở nên xinh đẹp hơn, ngoài ra những món trang sức bạc đính đá còn giúp cho chủ sở hữu nổi bật. Không gói gọn trong sự đơn giản như trước cùng với xu hướng thời trang mới mẻ, đôi bông tai đính đá chính là item dành riêng cho các cô gái của PNJSilver.', 13),
(23, 'Bông tai bạc đính đá PNJSilver', 0, '2024-02-02', 'Một món phụ kiện nhỏ xinh cũng có tác dụng làm người trưng diện thêm phần cá tính hay điệu đà. Với những cô nàng yêu thích động vật thì khó lòng có thể từ chối đôi bông tai bạc đính đá này. Thiết kế ấn tượng đem lại cho bạn gái sự nhẹ nhàng và ngọt ngào.', 13),
(24, 'Bông tai Vàng 14K đính đá CZ', 0, '2024-02-02', 'Trọng lượng tham khảo:7.02429phân\r\nLoại đá chính:Xoàn mỹ\r\nLoại đá phụ:Xoàn mỹ\r\nThương hiệu:PNJ\r\nGiới tính:Nữ', 13),
(26, 'Bông tai Vàng 16K PNJ', 0, '2024-02-02', 'Mô phỏng nét hoàn mỹ đậm chất Á đông của người phụ nữ, PNJ đặt trọn tâm huyết và tình cảm vào từng chi tiết trên đôi bông tai mới. PNJ cho ra đời thiết kế đôi bông tai tinh tế, là sự phối trộn hài hoà giữa kiểu dáng và chất liệu vàng 16K chuẩn mực.\r\nVới mong muốn gửi gắm những cảm xúc yêu thương đến nàng thông qua những món trang sức nói chung và bông tai vàng nói riêng, PNJ tin rằng đây sẽ là món quà ý nghĩa nhất dành tặng cho người phụ nữ mà bạn yêu thương.', 13),
(27, 'Bông tai Vàng 18K PNJ', 0, '2024-02-02', 'Mô phỏng nét hoàn mỹ đậm chất Á đông của người phụ nữ, PNJ đặt trọn tâm huyết và tình cảm vào từng chi tiết trên đôi bông tai mới. PNJ cho ra đời thiết kế đôi bông tai tinh tế, là sự phối trộn hài hoà giữa kiểu dáng và chất liệu vàng 18K chuẩn mực.\r\nVới mong muốn gửi gắm những cảm xúc yêu thương đến nàng thông qua những món trang sức nói chung và bông tai vàng nói riêng, PNJ tin rằng đây sẽ là món quà ý nghĩa nhất dành tặng cho người phụ nữ mà bạn yêu thương.', 13),
(28, 'Bông tai Vàng 24K PNJ', 0, '2024-02-02', 'Ưu tiên hàng đầu cho các nàng dâu mới, PNJ mang đến những đôi bông tai sở hữu thiết kế vừa hiện đại vừa cổ điển. Chế tác từ vàng 24K (99% vàng nguyên chất), với đặc tính mềm nên thông thường những món trang sức này có kiểu dáng bắt mắt và cầu kỳ.\r\nĐối với người phương Đông, trang sức cưới mang ý nghĩa tinh thần, chúc phúc cho cuộc sống lứa đôi mà cả hai bên dòng họ gửi đến đôi vợ chồng trẻ, tượng trưng cho hạnh phúc viên mãn, kỷ vật minh chứng tình yêu vĩnh cửu.', 13),
(29, 'Bông tai Vàng 18K PNJ', 0, '2024-02-02', 'Mô phỏng nét hoàn mỹ đậm chất Á đông của người phụ nữ, PNJ đặt trọn tâm huyết và tình cảm vào từng chi tiết trên đôi bông tai mới. PNJ cho ra đời thiết kế đôi bông tai tinh tế, là sự phối trộn hài hoà giữa kiểu dáng và chất liệu vàng 18K chuẩn mực.\r\nVới mong muốn gửi gắm những cảm xúc yêu thương đến nàng thông qua những món trang sức nói chung và bông tai vàng nói riêng, PNJ tin rằng đây sẽ là món quà ý nghĩa nhất dành tặng cho người phụ nữ mà bạn yêu thương.', 13),
(30, 'Dây chuyền bạc PNJSilver dây đan', 0, '2024-02-02', 'Dây chuyền món trang sức đang trở thành xu hướng thời trang được khá nhiều các bạn trẻ yêu thích. Hơn hết các nàng có thể thỏa sức mix những kiểu mặt dây, mề đay lạ mắt, phá cách hoặc đánh dấu những khoảnh khắc đặc biệt hay kể một câu chuyện của bản thân qua những hạt Charm nhỏ xinh', 11),
(31, 'Mặt dây chuyền bạc đính đá PNJSilver', 0, '2024-02-02', 'Trong những kiểu mẫu thiết kế nữ trang thì biểu tượng trái tim luôn rất được ưa chuộng. Trang sức bạc được chế tác rất đa dạng và phong phú về kiểu dáng nhưng không làm mất đi ý nghĩa của nó. Với mặt dây chuyền bạc PNJSiver đính đá tượng trưng cho tình yêu đối lứa, mối tình kéo dài mãi mãi hay nó như là món quà tặng mong muốn bạn luôn đạt được những điều tốt đẹp nhất.', 11),
(32, 'Mặt dây chuyền bạc đính đá PNJSilver', 0, '2024-02-02', 'Không thể phủ nhận sức mạnh của những món đồ trang sức trong việc làm đẹp. Lấp lánh và sang trọng, trang sức làm từ chất liệu bạc được đông đảo bạn trẻ ưa chuộng. Với thiết kế mặt dây chuyền bạc bằng chữ đầy sức hút của thương hiệu trang sức PNJSilver. Hứa hẹn sẽ là một trong những món quà thú vị và bất ngờ nhưng đầy ý nghĩa dành cho nửa kia của mình.', 11),
(33, 'Dây chuyền Vàng Trắng 18K', 0, '2024-02-02', 'Xu hướng làm đẹp bằng trang sức vàng trắng được các bạn trẻ khá yêu thích, mang sắc trắng hiện đại và thời thượng, dây chuyền PNJ vàng trắng Ý 18K sở hữu nét đẹp lấp lánh thu hút mọi ánh nhìn. Với dây chuyền thời trang vàng trắng Ý PNJ, các nàng có thể kết hợp với nhiều mặt dây chuyền đính đá hay những hạt charm vàng trắng Ý để tạo nên dây cổ hoàn hảo nhất cho mình nhé.', 11),
(34, 'Mặt dây chuyền Vàng trắng Ý 18K', 0, '2024-02-02', 'Trang sức vàng Ý ngày càng trở nên phổ biến và được ưa chuộng trong thế giới hiện đại. Không chỉ được phái đẹp lựa chọn làm trang sức, mà phái đẹp cũng trở nên trẻ trung hơn, sành điệu hơn với những mặt dây chuyền, vòng tay… bằng vàng Ý. Với thiết kế mặt tròn trịa không khía cạnh trên chất liệu vàng trắng Ý của thương hiệu trang sức PNJ sang trọng hứa hẹn sẽ giúp chị em thêm phần nổi bật.\r\n\r\n', 11),
(35, 'Dây chuyền Vàng 18K PNJ', 0, '2024-02-02', 'Bằng việc kết hợp chất liệu vàng 18K cùng thiết kế tinh tế, sợi dây chuyền chính là điểm nhấn nổi bật, tô điểm thêm vẻ đẹp thanh lịch và duyên dáng cho nàng. Dây đeo mảnh thích hợp với những bộ trang phục có nhiều họa tiết, đồng thời tạo điểm nhìn cân bằng với các phụ kiện to bản khác.\r\nDù diện lên bộ cánh dạ tiệc hay đơn giản là oufit thường ngày, chiếc dây chuyền sẽ tạo điểm nhấn tuyệt đối xung quanh xương quai xanh và khơi gợi ánh nhìn xung quanh.', 11),
(36, 'Dây chuyền Vàng 18K PNJ kiểu dây bi', 0, '2024-02-02', 'Bằng việc kết hợp chất liệu vàng 18K cùng thiết kế tinh tế, sợi dây chuyền chính là điểm nhấn nổi bật, tô điểm thêm vẻ đẹp thanh lịch và duyên dáng cho nàng. Dây đeo mảnh thích hợp với những bộ trang phục có nhiều họa tiết, đồng thời tạo điểm nhìn cân bằng với các phụ kiện to bản khác.\r\nDù diện lên bộ cánh dạ tiệc hay đơn giản là oufit thường ngày, chiếc dây chuyền sẽ tạo điểm nhấn tuyệt đối xung quanh xương quai xanh và khơi gợi ánh nhìn xung quanh.', 11),
(37, 'Dây chuyền nam Vàng 18K PNJ', 0, '2024-02-02', 'Bằng việc kết hợp chất liệu vàng 18K cùng thiết kế tinh tế, sợi dây chuyền chính là điểm nhấn nổi bật, tô điểm thêm vẻ đẹp thanh lịch và duyên dáng cho nàng. Dây đeo mảnh thích hợp với những bộ trang phục có nhiều họa tiết, đồng thời tạo điểm nhìn cân bằng với các phụ kiện to bản khác.\r\nDù diện lên bộ cánh dạ tiệc hay đơn giản là oufit thường ngày, chiếc dây chuyền sẽ tạo điểm nhấn tuyệt đối xung quanh xương quai xanh và khơi gợi ánh nhìn xung quanh.', 11),
(38, 'Mặt dây chuyền Vàng 18K đính đá', 0, '2024-02-02', 'Từ sự kết hợp hoàn hảo giữa ánh kim rực rỡ của vàng 18K cùng sắc vàng cam của đá Citrine được đội ngũ thợ kim hoàn đính một cách tinh tế, PNJ tự hào mang đến chiếc mặt dây chuyền sang trọng đầy nóng bỏng.\r\nBên cạnh đó, sự điểm xuyến của những viên đá trắng càng làm tăng vẻ quý phái cho sản phẩm, giúp nàng dễ dàng phối chọn cùng những món trang sức khác. Với sự lộng lẫy đầy cuốn hút này, chiếc mặt dây của PNJ sẽ cùng nàng kiêu hãnh tỏa sáng trên mọi bước đường.', 11),
(39, 'Mặt dây chuyền Vàng 18K đính đá CZ', 0, '2024-02-02', 'Vẻ đẹp nàng tựa đóa hoa, có khi thuần khiết, có khi quyến rũ nhưng lại chẳng thể nào quên giống như thiết kế mặt dây chuyền CZ từ PNJ. Chất liệu vàng 18K chuẩn mực, đá CZ trắng hiện đại kết hợp với những đường cong duyên dáng tạo nên một tổng thể sắc sảo mà mềm mại, tựa như những đoá hoa xuân.\r\nThanh thoát trong chiếc đầm ôm nhẹ tôn dáng, yêu kiều quyến rũ cùng bộ đôi mặt dây và dây chuyền bắt mắt, nàng sẽ thu hút ánh nhìn. Với vẻ đẹp của sự tự tin ấy, nguồn năng lượng tích cực của nàng sẽ được lan toả ở bất cứ nơi nào nàng đến.', 11),
(40, 'Đồng Hồ Tissot T-Classic Nam', 0, '2024-02-03', 'Được trang bị bộ máy quartz cùng vẻ đẹp năng động, chiếc đồng hồ Tissot sẽ là phụ kiện giúp phái mạnh trông thật thu hút. Bộ vỏ bên ngoài của đồng hồ được chế tác từ thép không gỉ bền bỉ với thời gian.\r\n\r\nMột chiếc đồng hồ từ thương hiệu Tissot sẽ là những phụ kiện ưu tiên hàng đầu của quý ông. Kiểu dáng thể thao luôn mang lại cho cánh mày râu phong thái nam tính, mạnh mẽ và cực kỳ lôi cuốn. Người đàn ông thời đại mới chẳng những yêu cầu sự khỏe khoắn trong thiết kế mà còn đòi hỏi sự sang trọng, đẳng cấp.', 6),
(41, 'Đồng Hồ Tissot T-Lady Nữ', 0, '2024-02-03', 'Được trang bị bộ máy quartz cùng vẻ đẹp fashion, chiếc đồng hồ Tissot sẽ là phụ kiện giúp phái đẹp trông thật sành điệu và thu hút. Bộ vỏ bên ngoài của đồng hồ được chế tác từ thép không gỉ bền bỉ với thời gian.\r\n\r\nMột chiếc đồng hồ từ thương hiệu Tissot sẽ là những phụ kiện ưu tiên hàng đầu của quý cô. Kiểu dáng high fashion luôn mang lại cho quý cô phong thái nữ tính nhưng rất mạnh mẽ và cực kỳ lôi cuốn. Người phụ nữ thời đại mới chẳng những yêu cầu sự khỏe khoắn trong thiết kế mà còn đòi hỏi sự sang trọng, đẳng cấp.', 6),
(42, 'Đồng Hồ Tissot T-Classic Nữ', 0, '2024-02-03', 'Được trang bị bộ máy quartz cùng vẻ đẹp cổ điển, chiếc đồng hồ Tissot sẽ là phụ kiện giúp phái đẹp trông thật tinh tế và thu hút. Bộ vỏ bên ngoài của đồng hồ được chế tác từ thép không gỉ bền bỉ với thời gian.\r\n\r\nMột chiếc đồng hồ từ thương hiệu Tissot sẽ là những phụ kiện ưu tiên hàng đầu của quý cô. Kiểu dáng cổ điển luôn mang lại cho quý cô phong thái nữ tính nhưng rất mạnh mẽ và cực kỳ lôi cuốn. Người phụ nữ thời đại mới chẳng những yêu cầu sự khỏe khoắn trong thiết kế mà còn đòi hỏi sự sang trọng, đẳng cấp.', 6),
(43, 'Đồng hồ Fossil Harwell Nữ', 0, '2024-02-03', 'Đá Gắn Kèm Đồng Hồ:Không gắn đá\r\nChứng nhận Chronometer:Không\r\nGiới tính:Nữ', 6),
(44, 'Đồng hồ Orient Nam', 0, '2024-02-03', 'Chứng nhận Chronometer:Không\r\nChức năng chính:Moon Phase/ Sun Phase \r\nGiới tính:Nam', 6),
(45, 'nhẫn bạc 18 k', 3, '2024-02-07', 'đẹp, sáng , sang trọng', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idsize` int(11) NOT NULL,
  `tensize` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idsize`, `tensize`) VALUES
(1, '9'),
(2, '10'),
(3, '11'),
(4, '12\r\n'),
(5, '13'),
(6, '16'),
(7, '40'),
(8, '42\r\n'),
(9, '19'),
(10, '20'),
(11, '21'),
(12, '23'),
(13, '14'),
(14, '45'),
(15, '48'),
(16, '49'),
(17, '50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chatlieu`
--
ALTER TABLE `chatlieu`
  ADD PRIMARY KEY (`idchat`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`idsp`);

--
-- Chỉ mục cho bảng `ctsanpham`
--
ALTER TABLE `ctsanpham`
  ADD PRIMARY KEY (`idsp`,`idloai`,`idchat`,`idmau`,`idsize`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idloai`);

--
-- Chỉ mục cho bảng `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`idmau`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chatlieu`
--
ALTER TABLE `chatlieu`
  MODIFY `idchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `idloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `mau`
--
ALTER TABLE `mau`
  MODIFY `idmau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
