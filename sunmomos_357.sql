-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 18, 2022 lúc 11:50 PM
-- Phiên bản máy phục vụ: 10.5.15-MariaDB-cll-lve
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sunmomos_357`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `band_ip`
--

CREATE TABLE `band_ip` (
  `id` int(11) NOT NULL,
  `ip_band` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `band_ip`
--

INSERT INTO `band_ip` (`id`, `ip_band`, `status`, `url_config`) VALUES
(10, '1.52.167.228', 'block', 'CHANLE357.CLUB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `id_xep` int(11) DEFAULT NULL,
  `namectk` text CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `namestk` text CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bank`
--

INSERT INTO `bank` (`id`, `id_xep`, `namectk`, `namestk`, `img`, `status`, `url_config`) VALUES
(20, 10, 'LE CONG VINH', '9999992999929', 'https://submxh.net/img/recharge/momo.png', 1, 'CHANLE357.CLUB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_sitecon`
--

CREATE TABLE `ds_sitecon` (
  `id_site` int(11) NOT NULL,
  `username` varchar(999) NOT NULL,
  `domain` varchar(999) NOT NULL,
  `token` varchar(999) DEFAULT NULL,
  `ip` varchar(999) NOT NULL,
  `date` varchar(999) NOT NULL,
  `site_me` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `site_con` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_buy`
--

CREATE TABLE `history_buy` (
  `id` int(11) NOT NULL,
  `username` varchar(999) NOT NULL,
  `type` varchar(999) DEFAULT NULL,
  `hinh_thuc` varchar(999) DEFAULT NULL,
  `soluong` varchar(999) DEFAULT NULL,
  `number_star` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `number_end` int(255) NOT NULL,
  `time_buy` int(255) NOT NULL,
  `tong_tien` varchar(999) DEFAULT NULL,
  `link_buy` varchar(999) DEFAULT NULL,
  `server_buy` varchar(999) DEFAULT NULL,
  `list_msg` text CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `ghichu` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` varchar(999) DEFAULT NULL,
  `ma_gd` varchar(999) DEFAULT NULL,
  `date` varchar(999) DEFAULT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `history_buy`
--

INSERT INTO `history_buy` (`id`, `username`, `type`, `hinh_thuc`, `soluong`, `number_star`, `number_end`, `time_buy`, `tong_tien`, `link_buy`, `server_buy`, `list_msg`, `ghichu`, `status`, `ma_gd`, `date`, `url_config`) VALUES
(8, 'nguyenducduy', 'sub_vip', 'Login Website', '500', 'Error', 1000, 0, '4000', '597906747', '1', '', '', 'Success', 'ID_312450765', '2022-04-15 12:12:12', 'CHANLE357.CLUB'),
(9, 'nguyenducduy1', 'sub_vip', 'Login Website', '500000000', 'Error', 0, 0, '4320000000', '65555', '1', '', '', 'Start', 'ID_51843589', '2022-04-15 16:25:40', 'CHANLE357.CLUB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_naptien`
--

CREATE TABLE `history_naptien` (
  `id` int(11) NOT NULL,
  `type` varchar(999) NOT NULL,
  `username` varchar(999) NOT NULL,
  `loaithe` varchar(999) DEFAULT NULL,
  `menhgia` varchar(999) NOT NULL,
  `sothe` varchar(999) DEFAULT NULL,
  `soseri` varchar(999) DEFAULT NULL,
  `thucnhan` varchar(999) DEFAULT NULL,
  `trangthai` varchar(999) NOT NULL,
  `date` varchar(999) DEFAULT NULL,
  `namemomo` text CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `phonemomo` varchar(999) DEFAULT NULL,
  `tranid` varchar(999) DEFAULT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_api`
--

CREATE TABLE `list_api` (
  `id` int(11) NOT NULL,
  `username` varchar(999) DEFAULT NULL,
  `token` varchar(999) DEFAULT NULL,
  `date` varchar(999) DEFAULT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `name_api` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `link_callback` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_hotro`
--

CREATE TABLE `list_hotro` (
  `id` int(11) NOT NULL,
  `username` varchar(999) DEFAULT NULL,
  `loai_hotro` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `tieu_de_hotro` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `id_hotro` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `date` varchar(999) DEFAULT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `noi_dung_hotro` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `noi_dung_xuly` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_site`
--

CREATE TABLE `log_site` (
  `id` int(11) NOT NULL,
  `username` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `ip` varchar(999) DEFAULT NULL,
  `date` varchar(999) DEFAULT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `log_site`
--

INSERT INTO `log_site` (`id`, `username`, `note`, `ip`, `date`, `url_config`) VALUES
(121, 'nhanleaker', 'Đăng kí tài khoản', '1.52.167.228', '2022-04-14 13:21:23', 'CHANLE357.CLUB'),
(122, 'phamhuan', 'Đăng kí tài khoản', '171.251.237.235', '2022-04-14 21:37:31', 'CHANLE357.CLUB'),
(123, 'phamhuan', '', '171.251.237.235', '2022-04-14 21:38:31', 'CHANLE357.CLUB'),
(124, 'phamhuan', '', '171.251.237.235', '2022-04-14 21:39:27', 'CHANLE357.CLUB'),
(125, 'phamhuan', '', '171.251.237.235', '2022-04-14 21:41:47', 'CHANLE357.CLUB'),
(126, 'nguyenducduy', '', '171.251.237.235', '2022-04-15 12:02:17', 'CHANLE357.CLUB'),
(127, 'nguyenducduy', ' Đã Tạo Giao Dịch sub-vip Với Số Tiền 4000', '171.251.237.235', '2022-04-15 12:12:13', 'CHANLE357.CLUB'),
(128, 'nguyenducduy1', 'Đăng kí tài khoản', '171.237.174.11', '2022-04-15 15:27:12', 'CHANLE357.CLUB'),
(129, 'nguyenducduy1', 'địt mẹ mày', '117.6.169.41', '2022-04-15 16:20:19', 'CHANLE357.CLUB'),
(130, 'nguyenducduy1', ' Đã Tạo Giao Dịch sub-vip Với Số Tiền 4320000000', '117.6.169.41', '2022-04-15 16:25:41', 'CHANLE357.CLUB'),
(131, 'nguyenducduy1', 'Đăng kí website con', '117.6.169.41', '2022-04-15 16:26:04', 'CHANLE357.CLUB'),
(132, 'Adminvipntt', 'Đăng kí tài khoản', '103.74.105.8', '2022-04-16 18:26:16', 'CHANLE357.CLUB'),
(133, 'Vanlam77', 'Đăng kí tài khoản', '171.247.188.127', '2022-04-16 18:26:22', 'CHANLE357.CLUB'),
(134, 'buiducduydzvcl', 'Đăng kí tài khoản', '125.234.234.173', '2022-04-16 18:29:39', 'CHANLE357.CLUB'),
(135, 'nguyenducduy', '', '117.6.169.15', '2022-04-17 13:50:31', 'CHANLE357.CLUB'),
(136, 'vhh2405', 'Đăng kí tài khoản', '59.153.235.235', '2022-04-17 15:24:43', 'CHANLE357.CLUB'),
(137, 'huynhan', 'Đăng kí tài khoản', '42.112.156.206', '2022-04-17 15:31:26', 'CHANLE357.CLUB'),
(138, 'bentancoder', 'Đăng kí tài khoản', '14.184.123.71', '2022-04-17 18:51:19', 'CHANLE357.CLUB'),
(139, 'nhatcssit', 'Đăng kí tài khoản', '14.243.104.178', '2022-04-17 19:02:06', 'CHANLE357.CLUB'),
(140, 'Congduc19082006', 'Đăng kí tài khoản', '113.185.44.50', '2022-04-17 19:15:34', 'CHANLE357.CLUB'),
(141, 'vanbao', 'Đăng kí tài khoản', '125.234.231.160', '2022-04-17 19:59:39', 'CHANLE357.CLUB'),
(142, 'admin123', 'Đăng kí tài khoản', '125.235.232.237', '2022-04-17 22:51:17', 'CHANLE357.CLUB'),
(143, 'Tienbip', 'Đăng kí tài khoản', '171.234.11.197', '2022-04-18 16:47:14', 'CHANLE357.CLUB'),
(144, 'nguyenducduy', '', '125.235.232.237', '2022-04-18 18:07:25', 'CHANLE357.CLUB'),
(145, 'okvnss', 'Đăng kí tài khoản', '125.212.157.88', '2022-04-18 19:40:24', 'CHANLE357.CLUB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `note_thongbao`
--

CREATE TABLE `note_thongbao` (
  `id` int(11) NOT NULL,
  `nguoidang` varchar(999) NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `date` varchar(999) NOT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `note_thongbao`
--

INSERT INTO `note_thongbao` (`id`, `nguoidang`, `noidung`, `date`, `url_config`) VALUES
(30, 'nguyenducduy', '1', '2022-04-15 15:34:16', 'CHANLE357.CLUB'),
(31, 'nguyenducduy', 'NDD test', '2022-04-17 14:51:06', 'CHANLE357.CLUB'),
(32, 'nguyenducduy', 'fggfhfgfh', '2022-04-17 14:51:12', 'CHANLE357.CLUB'),
(33, 'nguyenducduy', 'fghfghfhfgfgh', '2022-04-17 14:51:17', 'CHANLE357.CLUB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `value` longtext COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `key`, `value`) VALUES
(1, 'url_admin', 'CHANLE357.CLUB'),
(2, 'trang_thai_auto', 'ON'),
(3, 'token_auto_dvfb', 'omNeETa17C3SAIgQrMbkK4R2X'),
(4, 'link_host', 'https://sng106.arandomserver.com:2083/cpsess0503461694/'),
(5, 'ip_host', '172.96.185.244'),
(6, 'username_host', 'tmuasubin2'),
(7, 'password_host', 'Az9Daily510480568'),
(8, 'id_cloud_flare', 'a711f12da5337580f4dc5424433423ab'),
(9, 'key_cloud_flare', '54048c78b7aad2a0d88649a2de6e7b5f786ca'),
(10, 'email_cloud_flare', 'nguyenanhkietmedia@gmail.com'),
(11, 'name_sv1', 'dakota.ns.cloudflare.com'),
(12, 'name_sv2', 'karsyn.ns.cloudflare.com'),
(15, 'token_auto_trum', ''),
(16, 'token_auto_autofb', ''),
(17, 'id_auto_autofb', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `server_service`
--

CREATE TABLE `server_service` (
  `id` int(11) NOT NULL,
  `code_service` varchar(999) DEFAULT NULL,
  `server_service` varchar(999) DEFAULT NULL,
  `rate_service` varchar(999) DEFAULT NULL,
  `title_service` text CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `server_name` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `server_text` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status_service` int(11) DEFAULT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `server_service`
--

INSERT INTO `server_service` (`id`, `code_service`, `server_service`, `rate_service`, `title_service`, `server_name`, `server_text`, `status_service`, `url_config`) VALUES
(4037, 'sub_sale', '4', '7', 'y', 'g', '', 1, 'CHANLE357.CLUB'),
(4038, 'sub_sale', '5', '7', 'vfgg', 'testr', '', 1, 'CHANLE357.CLUB'),
(4039, 'sub_speed', '6', '11', ';', 'Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4040, 'sub_speed', '7', '6', 'l', 'Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4041, 'sub_speed', '10', '6', 'vv', 'sv7 - Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4042, 'sub_quality', '1', '11', 'd', 'Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4043, 'sub_quality', '2', '11', 'ff', 'Tốc độ 50 -&gt; 300/ 1 ngày, có bảo hành tự động trong 7 ngày.', '', 1, 'CHANLE357.CLUB'),
(4044, 'sub_quality', '3', '6', 'gg', 'gg', '', 1, 'CHANLE357.CLUB'),
(4045, 'sub_vip', '1', '6', 'trr', '- Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4046, 'sub_vip', '2', '6', 'gg', 'gg', '', 1, 'CHANLE357.CLUB'),
(4047, 'sub_v2', '1', '6', 'iu', 'sv7 - Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4048, 'sub_v3', '2', '11', 'ff', 'fff', '', 1, 'CHANLE357.CLUB'),
(4049, 'sub_v3', '12', '11', 'fgf', 'fff', '', 1, 'CHANLE357.CLUB'),
(4050, 'like_page_sale', '1', '6', 'hh', 'hh', '', 1, 'CHANLE357.CLUB'),
(4051, 'like_page_speed', '1', '6', 'hgg', 'gg', '', 1, 'CHANLE357.CLUB'),
(4052, 'like_page_quality', '1', '6', 'bb', 'Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4053, 'mat_live', '4', '6', 'f', 'Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4054, 'view_video', '1', '6', 'c', 'Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4055, 'share_sale', '1', '6', 'ffr', 'gg', '', 1, 'CHANLE357.CLUB'),
(4056, 'share', '1', '6', 'd', 'Tốc độ 50 -&gt; 300/ 1 ngày, có bảo hành tự động trong 7 ngày.', '', 1, 'CHANLE357.CLUB'),
(4057, 'mem_gr', '1', '11', 'f', '- Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4058, 'view_story', '1', '11', 'h', 'h', '', 1, 'CHANLE357.CLUB'),
(4059, 'cmt', '1', '6', 'gv', 'Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4060, 'like_post_sale', '4', '11', 'fff', 'fff', '', 1, 'CHANLE357.CLUB'),
(4061, 'like_post', '3', '11', 'dddd', 'dd', '', 1, 'CHANLE357.CLUB'),
(4062, 'like_cmt', '1', '11', 'ff', 'ff', '', 1, 'CHANLE357.CLUB'),
(4063, 'cmt', '2', '6', 'ddddddddddddddddddddddddddddddddddddddddddddddddddd', 'Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB'),
(4064, 'like_ins', '1', '6', 'hbg', 'g', '', 1, 'CHANLE357.CLUB'),
(4065, 'sub_ins', '1', '6', 'r', 'sv7 - Tốc độ ổn (đơn lên sau 5s -&gt; 24h, mua từng đơn 1 thử thấy ổn thì mua) max không giới hạn, không bảo hành, không chạy cho pro5 (đang đông, đơn có thể delay lâu tới 24h).', '', 1, 'CHANLE357.CLUB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `partner_id` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `partner_key` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `token_facebook` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `id_page` longtext CHARACTER SET utf32 COLLATE utf32_vietnamese_ci DEFAULT NULL,
  `id_page_chat` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `mail_config` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `pass_mail_config` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `base_url` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `cuphap` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `site_napthe` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `logo` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `trangthai_auto` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `full_name_admin` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone_zalo` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `rate_ctv` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `rate_daily` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `rate_admin` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ten_website` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `logo_user` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `favicon` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `api_automm` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `callback_momo` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `script_live_chat` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `bao_tri` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `logo_mini` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `tu_khoa` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `anhbia` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `user_auto_dvfb` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `pass_auto_dvfb` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ck_ctv` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ck_dl` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ck_npp` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `gioi_thieu_web` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ck_user` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `thongbao` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `anh_thong_bao` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ck_thecao` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `trang_thai_lam_tron` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `token_auto_dvfb` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `theme_home` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `theme_login` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `theme_landing` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `so_du_tao_site` int(11) NOT NULL,
  `so_tieu_tao_site` int(11) NOT NULL,
  `cap_bac_tao_site` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `bot_tele` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `id_chat_tele` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `thong_bao_mail` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `nap_km_bank` int(255) NOT NULL,
  `bg_header_site` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `bg_navbar_site` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `icon_color_site` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `text_color_site` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `modal_color` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `tuyet_roi` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `partner_id`, `partner_key`, `facebook`, `token_facebook`, `id_page`, `id_page_chat`, `mail_config`, `pass_mail_config`, `base_url`, `cuphap`, `site_napthe`, `logo`, `trangthai_auto`, `full_name_admin`, `phone_zalo`, `rate_ctv`, `rate_daily`, `rate_admin`, `ten_website`, `logo_user`, `favicon`, `api_automm`, `callback_momo`, `script_live_chat`, `bao_tri`, `logo_mini`, `tu_khoa`, `anhbia`, `user_auto_dvfb`, `pass_auto_dvfb`, `ck_ctv`, `ck_dl`, `ck_npp`, `gioi_thieu_web`, `ck_user`, `thongbao`, `anh_thong_bao`, `ck_thecao`, `trang_thai_lam_tron`, `token_auto_dvfb`, `theme_home`, `theme_login`, `theme_landing`, `so_du_tao_site`, `so_tieu_tao_site`, `cap_bac_tao_site`, `status`, `bot_tele`, `id_chat_tele`, `thong_bao_mail`, `nap_km_bank`, `bg_header_site`, `bg_navbar_site`, `icon_color_site`, `text_color_site`, `modal_color`, `tuyet_roi`, `url_config`) VALUES
(1, '9', '9', 'https://www.facebook.com/Nguyen.Duc.Duy.Vo.Dich.Thien.Ha', 'EAABwzLixnjYBAIlTl7FuZAnVoTiZAdEm5OUdQJzNEZAalOarV1UkWKkBZBSEMpAIUbTMqexfrsNodUEOiyqZCuqZCxwSllGtpBfp8MspRI626OMyeFK6ZCWO23u3AQfCSzofQWfZBnSHKFpydmchQp5hrz4WTmN30yJjPLNNrq1fIKTnDpOGHZB8WElMi0Af1KH2ZCzfPOZCl7tRAZDZD', '100060561671124', '0', 'ndd.vpbq@gmail.com', 'pxuqfbsgwigydolo', 'https://muasub.in/', 'NAPTIEN', 'thesieure', 'https://i.imgur.com/pXFVBb6.png', 'ON', 'Nhân Đẹp Zai', '0966080507', '100000', '5000000', '10000000', 'CHANLE357.CLUB', 'https://ui-avatars.com/api/?background=random&name=', 'https://i.imgur.com/wnUcFV0.png', '1', 'https://NTIENDAT.CLICK/callback/callback_bank.php', '', 'ON', 'https://png.pngtree.com/png-vector/20190830/ourlarge/pngtree-vector-illustration-initial-letter-s-and-circle-icon-logo-modern-design-png-image_1715953.jpg', 'MUASUB.IN,muasub,muasub.in, automxh, Tăng like Facebook, tuongtaccheo, traodoisub, tăng like, tăng follow facebook, tiktok, instagram, miễn phí, tương tác chéo, trao đổi sub. Hệ thống mua like uy tín, Tăng like giá rẻ , Dịch vụ tăng like tăng sub giá rẻ, tăng view video FB, Tăng người xem Livestream, tăng theo dõi, tăng like Facebook, tuongtaccheo, traodoisub, tăng like, tăng follow facebook, tiktok, instagram, miễn phí, tương tác chéo, trao đổi sub, giá rẻ đảm bảo uy tín, chất lượng...', 'https://ipg-connect.com/wp-content/uploads/2020/02/Pic1.jpg', 'nguyenducduy', 'anhlatrum', '8', '7', '0', 'MUASUB.IN - #1 BEST PANEL SOCIAL MEDIA VN 2022', '50', 'Nguyễn Đức Duy', 'https://i.imgur.com/bFkuUEY.jpeg', '3000000', 'OFF', 'omNeETa17C3SAIgQrMbkK4R2X', '1', '3', '5', 2147483647, 1000000, '1', 'active', '0', '0', 'ON', 0, '#f5f4fe', '#000000', '#212529', '#ffffff', '', 'ON', 'CHANLE357.CLUB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_bao_modal`
--

CREATE TABLE `thong_bao_modal` (
  `id` int(11) NOT NULL,
  `loai_tb` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `text_thong_bao` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `status` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `thong_bao_modal`
--

INSERT INTO `thong_bao_modal` (`id`, `loai_tb`, `text_thong_bao`, `status`, `url_config`) VALUES
(21, 'like_post', '', 'ON', 'CHANLE357.CLUB'),
(22, 'sub_sale', 'ndd', 'ON', 'CHANLE357.CLUB'),
(23, 'cx_post', '', 'OFF', 'CHANLE357.CLUB'),
(24, 'cmt', '', 'OFF', 'CHANLE357.CLUB'),
(25, 'like_page_sale', '', 'OFF', 'CHANLE357.CLUB'),
(26, 'share', '', 'OFF', 'CHANLE357.CLUB'),
(27, 'mat_live', '', 'OFF', 'CHANLE357.CLUB'),
(28, 'view_video', '', 'OFF', 'CHANLE357.CLUB'),
(29, 'like_cmt', '', 'OFF', 'CHANLE357.CLUB'),
(30, 'view_story', '', 'OFF', 'CHANLE357.CLUB'),
(31, 'mem_gr', '', 'OFF', 'CHANLE357.CLUB'),
(32, 'like_ins', '', 'OFF', 'CHANLE357.CLUB'),
(33, 'cmt_ins', '', 'OFF', 'CHANLE357.CLUB'),
(34, 'sub_ins', '', 'OFF', 'CHANLE357.CLUB'),
(35, 'like_tiktok', '', 'OFF', 'CHANLE357.CLUB'),
(36, 'cmt_tiktok', '', 'OFF', 'CHANLE357.CLUB'),
(37, 'sub_tiktok', '', 'ON', 'CHANLE357.CLUB'),
(38, 'sub_youtube', '', 'OFF', 'CHANLE357.CLUB'),
(39, 'like_youtube', '', 'OFF', 'CHANLE357.CLUB'),
(40, 'nap_the', 'ndd', 'ON', 'CHANLE357.CLUB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(999) DEFAULT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `password` varchar(999) DEFAULT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `token` varchar(999) DEFAULT NULL,
  `capbac` varchar(999) DEFAULT NULL,
  `money` varchar(999) DEFAULT NULL,
  `tongnap` varchar(999) DEFAULT NULL,
  `tongtru` varchar(999) DEFAULT NULL,
  `banned` varchar(999) DEFAULT NULL,
  `time_banned` varchar(999) DEFAULT NULL,
  `ip` varchar(999) DEFAULT NULL,
  `cuphap` varchar(999) DEFAULT NULL,
  `date` varchar(999) DEFAULT NULL,
  `lastdate` varchar(999) DEFAULT NULL,
  `otp_code` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `url_config` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `email`, `token`, `capbac`, `money`, `tongnap`, `tongtru`, `banned`, `time_banned`, `ip`, `cuphap`, `date`, `lastdate`, `otp_code`, `url_config`) VALUES
(100, 'nguyenducduy', 'Nguyễn Đức Duy', 'Mjg2NTZlMjY4MGM0MjgzNGMxYTgzMDMzYjc5MzhlNGM=', 'buiducduy.vpbq@gmail.com', 'eyJhbGciOzhNBpWxxkjgYEJsEHQmOcvIqgkTmYcjPtPEIbyGQrRbanTvFnjYdUEemIUAcQCnIgWlRvYwTDPUWjnxViXOlQckgLKhbTlhWhuoU1650211205OGRjMWNiMDRmNzRlZDMwODE0MTU0MmVhYzQyYzQzZjM==', '4', '100000916000', '100000920000', '4000', '0', NULL, '117.6.169.46', 'NAPTIEN nguyenducduy', '2022-04-13 17:12:52', '2022-04-18 22:36:35', '', 'CHANLE357.CLUB'),
(105, 'nhanleaker', 'Võ Trung Nhân', 'NWI2ZWQzNTY2YTJhZDg1NDkyOWZmMjdiNDI3OGUxNTk=', 'dragonmc403@gmail.com', 'eyJhbGciOIvGkOkeITmLmNBcUxzbxzjzmYjbtQvxhYzbPXRaSIOhKuYWQjrndUPmPPgolCExDJvwybQRYWUlcjZEWgAhlMqcTUnpcQOEnkglh1649917281NGVkODljZjliN2I4YmEzNmFlY2FhNmRmNjI0NWNlODc==', '0', '0', '0', '0', '0', NULL, '1.52.167.228', 'NAPTIEN nhanleaker', '2022-04-14 13:21:21', '2022-04-18 15:33:09', '', 'CHANLE357.CLUB'),
(106, 'phamhuan', 'Phạm Huân', 'M2U4OGM2NzJkN2FjZDdhOTE4MDA4NDc1OWMwNjI0ZWE=', 'phamhuan123@gmail.com', 'eyJhbGciONUIxExiRbvIlYgMBhjgvmhIbpzEHgYzcJlnYWkQARKqEObEVYUXdCchPTlPQTWOWbjgtyORmxjQLROkUuPnwmzDzskFjTmQxTWUc1649947049YzJjNDYwNWFkMTdkYjk3YTlhMDhhOGJiM2Q0ZjVlMWY==', '0', '0', '84000', '0', '0', NULL, '171.251.237.235', 'NAPTIEN phamhuan', '2022-04-14 21:37:29', NULL, '', 'CHANLE357.CLUB'),
(108, 'nguyenducduy1', 'Nguyễn Đức Duy', 'ZjliMTQ3NzIxZDdhMzI3MTVhZDkwYjA1OTgxZjdjZjI=', 'blo29755@gmail.com', 'eyJhbGciOWbOoUzejntPPvPIlUnQQqIjnWJjSfYVybEmYvAEkGnOIxNmHElQcYdrTisgxmDxLBRukvaWhIhbxzbgRgRcPhMzTZQWFcmzUCpEO1650011230MmIxMmM0MDFlNDRkNGRhMzA2NDk5MzQzZjJkODllN2Q==', '99', '0', '0', '0', '0', NULL, '117.6.169.41', 'NAPTIEN nguyenducduy1', '2022-04-15 16:26:04', NULL, '', 'TAIXIU5S.ME'),
(109, 'adminvipntt', 'NT Huy', 'MjhhZWEyMzUyNmVhNmU3ZmZmNDY3OTcxM2NjOGJhNjY=', 'Hackergamevpn@gmail.com', 'eyJhbGciOSbUhVaLYrRltFkqgRdjEImwlxckTWvhOzMTJQIKgPmYhRjmWBECxUoxzbvuUcODIeTczYgXbvQYsGETNnnpPcUlOnOIEAvhjHZbk1650108373Y2Y1YWY3MzBjZTcyMDQwOTBmNDNiZmE2ZGFiYWUzNDI==', '0', '0', '0', '0', '0', NULL, '103.74.105.8', 'NAPTIEN Adminvipntt', '2022-04-16 18:26:13', '2022-04-16 20:57:40', '', 'CHANLE357.CLUB'),
(110, 'vanlam77', 'Trần văn lâm', 'NDBlYTJmZTU4NjgxY2RkOTJlNjFmOTQ3MjE5YzFhZjE=', 'trantrung6528@gmail.com', 'eyJhbGciOYkBTWnQYUhmRZUbbQgIRgyIlxkkjWMewhmOzrThzEcUlvcnGcXtTnQPIQPkjWPxOzzpOdLgHYqbVSnFCsRjJcmlEvEabPfxojuvx1650108380MzdlMzIyODUyNGRjMDAxYmFmYWZkYzY1YjNhZjA2MDk==', '0', '0', '0', '0', '0', NULL, '171.247.188.127', 'NAPTIEN Vanlam77', '2022-04-16 18:26:20', NULL, '', 'CHANLE357.CLUB'),
(111, 'buiducduydzvcl', 'Nguyễn Đức Duy', 'N2IwZjJiYzJkMjk4ZGNmYmUyYWQ5NzE2ZDlhNWYyYTI=', 'buiducfffduy.vpbq@gmail.com', 'eyJhbGciOhFgYUlvQXVcOjBqLmPkYbnYtZneanIcmWsxgkuRkEEOvUIGRnYfHbxTkmEvbljMxCoxTzPvRbUiyQAzRKTcjIlWOrQhlJIPSUhOW1650108577YjNiODY1M2NkZmJhYWE2MWE2NzU0NDBhOWU3MmVlMGU==', '0', '0', '0', '0', '0', NULL, '125.234.234.173', 'NAPTIEN buiducduydzvcl', '2022-04-16 18:29:37', '2022-04-16 19:00:20', '', 'CHANLE357.CLUB'),
(112, 'vhh2405', 'Vũ hoàng hiệp', 'NzNjYmM0NDg4M2NlMDkwMjVlOTAxMTM5MjY3OTVmYWM=', 'vuhiep123564@gmail.com', 'eyJhbGciOOYzlqsUBSfthUgnaYbZmJUHRTYAzvPhIRQRmQOOucTxPQbkEgWEjcbgUzxmXvMPvQVIRnzekjIcjikNEwjoKLWxIxGgnldPDvpWh1650183879NGQ0MTkzM2MxM2QzZTNhOTdjNjA5ZTJlNWQ2NWUxYzc==', '0', '0', '0', '0', '0', NULL, '59.153.235.235', 'NAPTIEN vhh2405', '2022-04-17 15:24:39', '2022-04-17 15:46:23', '', 'CHANLE357.CLUB'),
(113, 'huynhan', 'huynhan', 'YzcyMTEyOTM1ODk4NjI1NjgyOWQyNzY1ODAzZTA2MDA=', 'auphongtran@gmail.com', 'eyJhbGciOrjbdxohzUOUvbzzCUYzxhBWiVLfkDRhtIcQkEWmHOMERIbQXQYIjPgvqTumvGeSRRKFsOavygYPklxEkhOTwllPTjYNpngZnPJgQ1650184283Mzg3NDVmMTI1MzA5YjZhY2RhNTdhZjM0ODczZmQzMGI==', '0', '0', '0', '0', '0', NULL, '42.112.156.206', 'NAPTIEN huynhan', '2022-04-17 15:31:23', NULL, '', 'CHANLE357.CLUB'),
(114, 'bentancoder', 'bentancoder', 'ZTk3NjU5MTIwZmMzNTE0NzA4Zjc3OTI4ODM1MDA5Njc=', 'bentancoder@gmail.com', 'eyJhbGciOIYVuvtkWknWhsmQlxjCYPcZDAgdxvxkqcmEYRvPULzjIOTkPIQJIiBazvnUbglzMTWWcUYnKhbQTFjgbRpOmjnTRSElObENhQHEz1650196275OGNiYTUyMmVjZGE2N2Q5MGUxZTgzZmRhZDk4ZGIxY2E==', '0', '0', '0', '0', '0', NULL, '14.184.123.71', 'NAPTIEN bentancoder', '2022-04-17 18:51:15', '2022-04-18 21:21:44', '', 'CHANLE357.CLUB'),
(115, 'nhatcssit', 'Phạm Quang Nhật', 'MjY5NWIzYmNhNTk3Y2YyZmRhNTQ1ODVjZWE4OTAyZDU=', 'kenedm645@gmail.com', 'eyJhbGciOcYTYjUEZEkVWJhTumReTpYbEnymPbWdclxrnilchIEUIvKOIwvFzlQbjYczjhTvPgLfkQzCazPbRjgthsOANGPmRQkMnxlIXODRx1650196922YzQ3NTFjNDYzMjVlNGRmYzViZTEyYzEwNDMxNTg0Mjg==', '0', '0', '0', '0', '0', NULL, '14.243.104.178', 'NAPTIEN nhatcssit', '2022-04-17 19:02:02', NULL, '', 'CHANLE357.CLUB'),
(116, 'congduc19082006', 'Công Đức', 'MmVmNTQ3YmMzNDVjZWE4OWY3MDdlYmNiYjJmZDRmMGU=', 'congduc19082006@gmail.com', 'eyJhbGciOYOafccjWbTriPneUncQzQCUghldjVTOEOyzPGzthnjEgYEbRblEJgDqXgRwkoLmxUlzTMWUkhNpQYxIWITSjvZRYvBPkxWumsAHR1650197731Yjg3MWYwOWU3NTE4MGI5NzQxMzJmZjMwYTQ5YTY4ZmE==', '0', '0', '0', '0', '0', NULL, '113.185.44.50', 'NAPTIEN Congduc19082006', '2022-04-17 19:15:31', '2022-04-18 22:11:12', '', 'CHANLE357.CLUB'),
(117, 'vanbao', 'Hồ Văn Bảo', 'NTY4ZWRiNGM1YTdkNzc3NzU1ODI1NTgyZWRlZGJlZDQ=', 'hhhhhh@gmail.com', 'eyJhbGciOmEAPzTjEIuHvEpIlDnxTKhhPRWPQbbORvIdeYjqkUEYnwrtazQlYMgPhTsZcLzoNBcggYQxFIkkWyXOxbzmUgOjUjfWOJClchbSi1650200376ZWE4OWNkODc0ZDRjN2U5NTA1ZTNjNjkyMTg5ODZlZDE==', '0', '0', '0', '0', '0', NULL, '125.234.231.160', 'NAPTIEN vanbao', '2022-04-17 19:59:36', NULL, '', 'CHANLE357.CLUB'),
(118, 'admin123', 'Adminga', 'MTA3ZTAzMGIwMDFiMWQ2NThmYTY1NDZhNTI5ZGY1NmU=', 'anhlatrum560@gmail.com', 'eyJhbGciOkGOExRgatmHWYXyISgOhDAWsQLRlEUjKeJIRTWUwUYMxvQvfvYbilZzTBncgjbEzTRjONxlYrbPqnhOmUkEnTIlCPhkxdhnIVkgc1650210673N2JmYTlhNzE4MjkwNWU1NmM5OGJhOTVlYWNjZjZhZWE==', '0', '0', '0', '0', '0', NULL, '125.235.232.237', 'NAPTIEN admin123', '2022-04-17 22:51:13', '2022-04-17 22:54:28', '', 'CHANLE357.CLUB'),
(119, 'tienbip', 'Tienbip3', 'MWEyYzZiZjY1NGU4OWMwODdkZTJlMGM1ZmFlNTZlZTU=', 'Toanphuc74@gmail.com', 'eyJhbGciOIjkgpOohQQgWwRmRjKbEWmPOuEnllOPQTxjIWEbvqkidYAvbTPzCQynvYUZXUGcVzmBnabIcjRlOrLHzxhIntsecckUgxSxFTYNg1650275230MjUzYmI1OTI5NjQyNTAwYmEwNDljM2IwOGM0ZDY0OTQ==', '0', '0', '0', '0', '0', NULL, '171.234.11.197', 'NAPTIEN Tienbip', '2022-04-18 16:47:10', NULL, '', 'CHANLE357.CLUB'),
(120, 'okvnss', 'Azdv Me', 'ZDBkZDAwMGJjZjdmNzM1OTM3MzQ5NDkwMTE3MjAwNTk=', 'azdvpro@gmail.com', 'eyJhbGciOHxYbeTAlWRNcXqPncjgcYQMfzdOrlzcZOxUvPnPhmhLkEKFkzRmmubOUxEbBwkYRnQxOIYWPRgiTaEvsgvhIWjIVvWQlyjGCgUhJ1650285621Yjc5MjZhZjRhMjY5ZjY3NWRiMzM5ZWQ2YmYyYTU2YWQ==', '0', '0', '0', '0', '0', NULL, '125.212.157.88', 'NAPTIEN okvnss', '2022-04-18 19:40:21', NULL, '', 'CHANLE357.CLUB');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `band_ip`
--
ALTER TABLE `band_ip`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ds_sitecon`
--
ALTER TABLE `ds_sitecon`
  ADD PRIMARY KEY (`id_site`);

--
-- Chỉ mục cho bảng `history_buy`
--
ALTER TABLE `history_buy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_naptien`
--
ALTER TABLE `history_naptien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_api`
--
ALTER TABLE `list_api`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_hotro`
--
ALTER TABLE `list_hotro`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `log_site`
--
ALTER TABLE `log_site`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `note_thongbao`
--
ALTER TABLE `note_thongbao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `server_service`
--
ALTER TABLE `server_service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_bao_modal`
--
ALTER TABLE `thong_bao_modal`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `band_ip`
--
ALTER TABLE `band_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `ds_sitecon`
--
ALTER TABLE `ds_sitecon`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `history_buy`
--
ALTER TABLE `history_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `history_naptien`
--
ALTER TABLE `history_naptien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `list_api`
--
ALTER TABLE `list_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `list_hotro`
--
ALTER TABLE `list_hotro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `log_site`
--
ALTER TABLE `log_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT cho bảng `note_thongbao`
--
ALTER TABLE `note_thongbao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `server_service`
--
ALTER TABLE `server_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4066;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `thong_bao_modal`
--
ALTER TABLE `thong_bao_modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
