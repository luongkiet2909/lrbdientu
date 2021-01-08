-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2021 lúc 05:41 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `elaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_06_11_145812_create_tbl_admin_table', 1),
(22, '2019_06_17_161852_create_tbl_category_product', 1),
(23, '2019_06_19_152045_create_tbl_brand_product', 1),
(24, '2019_06_19_155204_create_tbl_product', 1),
(25, '2019_08_17_030852_tbl_customer', 1),
(26, '2019_08_17_044054_tbl_shipping', 2),
(30, '2019_08_28_142718_tbl_payment', 3),
(31, '2019_08_28_142750_tbl_order', 3),
(32, '2019_08_28_142810_tbl_order_details', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hòa Trần', '0932023992', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_slug`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(2, 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 0, NULL, NULL),
(3, 'SONY', 'SONY', 'SONY', 0, NULL, NULL),
(4, 'APPLE', 'APPLE', 'APPLE', 0, NULL, NULL),
(5, 'XIAOMI', 'XIAOMI', 'XIAOMI', 0, NULL, NULL),
(6, 'VSMART', 'VSMART', 'VSMART', 0, NULL, NULL),
(7, 'ASUS', 'ASUS', 'ASUS', 0, NULL, NULL),
(8, 'VIVO', 'VIVO', 'VIVO', 0, NULL, NULL),
(9, 'LG', 'LG', 'LG', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_category_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `slug_category_product`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(4, 'SAMSUNG', 'SAMSUNG', 'admin@gmail.com', 0, NULL, NULL),
(5, 'IPHONE', 'IPHONE', 'IPHONE', 0, NULL, NULL),
(6, 'OPPO', 'OPPO', 'OPPO', 0, NULL, NULL),
(7, 'XIAOMI', 'XIAOMI', 'XIAOMI', 0, NULL, NULL),
(8, 'VSMART', 'VSMART', 'VSMART', 0, NULL, NULL),
(9, 'ASUS', 'ASUS', 'ASUS', 0, NULL, NULL),
(10, 'VIVO', 'VIVO', 'VIVO', 0, NULL, NULL),
(11, 'LG', 'LG', 'LG', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(4, 'Hòa Trần', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0932023992', NULL, NULL),
(5, 'chien', 'chien@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '097423123', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 3, '15,300,000', 'Đang chờ xử lý', NULL, NULL),
(2, 4, 3, 4, '15,300,000', 'Đang chờ xử lý', NULL, NULL),
(3, 4, 3, 5, '15,300,000', 'Đang chờ xử lý', NULL, NULL),
(5, 4, 4, 7, '5,000,000', 'Đang chờ xử lý', NULL, NULL),
(6, 4, 5, 8, '10,000,000', 'Đang chờ xử lý', NULL, NULL),
(7, 4, 5, 9, '500,000', 'Đang chờ xử lý', NULL, NULL),
(8, 4, 6, 10, '11,500,000', 'Đang chờ xử lý', NULL, NULL),
(9, 4, 7, 11, '1,000,000', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Máy PS4 màu đỏ', '5000000', 3, NULL, NULL),
(2, 2, 1, 'Tay cầm chơi game PS4 màu đỏ', '60000', 5, NULL, NULL),
(3, 3, 3, 'Máy PS4 màu đỏ', '5000000', 3, NULL, NULL),
(4, 3, 1, 'Tay cầm chơi game PS4 màu đỏ', '60000', 5, NULL, NULL),
(5, 5, 3, 'Máy PS4 màu đỏ', '5000000', 1, NULL, NULL),
(6, 6, 3, 'Máy PS4 màu đỏ', '5000000', 2, NULL, NULL),
(7, 7, 2, 'Tay cầm chơi game PS4 màu trắng', '500000', 1, NULL, NULL),
(8, 8, 2, 'Tay cầm chơi game PS4 màu trắng', '500000', 3, NULL, NULL),
(9, 8, 3, 'Máy PS4 màu đỏ', '5000000', 2, NULL, NULL),
(10, 9, 2, 'Tay cầm chơi game PS4 màu trắng', '500000', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Đang chờ xử lý', NULL, NULL),
(2, '1', 'Đang chờ xử lý', NULL, NULL),
(3, '1', 'Đang chờ xử lý', NULL, NULL),
(4, '1', 'Đang chờ xử lý', NULL, NULL),
(5, '2', 'Đang chờ xử lý', NULL, NULL),
(6, '2', 'Đang chờ xử lý', NULL, NULL),
(7, '2', 'Đang chờ xử lý', NULL, NULL),
(8, '2', 'Đang chờ xử lý', NULL, NULL),
(9, '2', 'Đang chờ xử lý', NULL, NULL),
(10, '2', 'Đang chờ xử lý', NULL, NULL),
(11, '2', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_slug`, `category_id`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(5, 'Apple iPhone X 64GB Mới-Chưa active', 'Apple iPhone X 64GB Mới-Chưa active', 5, 4, 'Thông số kỹ thuật\r\nBộ nhớ trong	\r\n32 GB\r\nCamera chính	\r\n12 MP\r\nCamera phụ	\r\n5.0 MP\r\nCPU	\r\nApple A9\r\nĐộ phân giải màn hình	\r\nHD (750 x 1334 Pixels)\r\nHệ điều hành	\r\niOS 12\r\nKích thước màn hình	\r\n4.7 inches\r\nRAM	\r\n2GB\r\nThẻ sim	\r\n1 nano SIM\r\nPin\r\n1715mA', '1. Thiết kế\r\nThật khó để có thể phân biệt được iPhone 6s và iPhone 6 nếu như cầm trên tay 2 thiết bị này. Vì iPhone 6s không có thay đổi khác biệt gì so với người tiền nhiệm của mình. Đây có lẽ là một điểm trừ mà người dùng iPhone phàn nàn sau khi chiếc điện thoại này ra mắt. Điểm thay đổi duy nhất cũng là thay đổi đáng giá đó chính là iPhone 6s sử dụng nhôm 7000 để chế tạo khung máy với độ bền cao hơn, chống va đập tốt hơn rất nhiều so với thế hệ trước. Apple cũng đã thêm vào gioăng cao su nhỏ bên trong máy giúp sản phẩm có khả năng chống nước nhẹ mặc dù hãng không hề công bố tính năng này.', '10990000', 'x_2-300x30087.jpg', 0, NULL, NULL),
(6, 'samsung A70', 'samsung A70', 4, 2, 'chất lượng tốt', 'hàng nhập', '6000000', 'product-816.PNG', 0, NULL, NULL),
(7, 'Iphone 11 Pro', 'Iphone 11 Pro', 5, 4, 'hàng đẹp', 'hàng nhập 100%', '33000000', 'product-151.PNG', 0, NULL, NULL),
(8, 'samsung A71', 'samsung A71', 4, 2, 'asdd', 'asdds', '5000000', 'product-1610.PNG', 0, NULL, NULL),
(9, 'Apple iPhone 11 64Gb Mới trần (LL/A)', 'Apple iPhone 11 64Gb Mới trần (LL/A)', 5, 4, 'asdasd', 'asdsdas', '14890000', 'IP11-300x30094.jpg', 0, NULL, NULL),
(10, 'Apple iPhone 12 64GB Chính hãng VN/A', 'Apple iPhone 12 64GB Chính hãng VN/A', 5, 4, 'asd', 'asd', '21600000', 'thumb_IP12Pro_37.jpg', 0, NULL, NULL),
(11, 'Apple iPhone Xs MAX 512GB quốc tế cũ 99%', 'Apple iPhone Xs MAX 512GB quốc tế cũ 99%', 5, 4, 'asd', 'asd', '14890000', 'xs_max-300x3000.jpg', 0, NULL, NULL),
(12, 'Xiaomi Poco M3 Chính hãng', 'Xiaomi Poco M3 Chính hãng', 7, 5, 'dsad', 'asdasd', '3590000', 'thumb_M3-324.jpg', 0, NULL, NULL),
(13, 'Vsmart Joy 4 Ram 4Gb 64Gb Chính Hãng', 'Vsmart Joy 4 Ram 4Gb 64Gb Chính Hãng', 8, 6, 'asd', 'asd', '3250000', 'thumb_joy4_190.jpg', 0, NULL, NULL),
(14, 'Vivo iQOO 3 5G cũ 99', 'Vivo iQOO 3 5G cũ 99', 10, 8, 'asd', 'asd', '8990000', 'thumb_iqoo3_137.jpg', 0, NULL, NULL),
(15, 'Asus ROG Phone 3 (Strix Edition)', 'Asus ROG Phone 3 (Strix Edition)', 9, 7, 'asd', 'asd', '12950000', 'thumb_RG3-147.jpg', 0, NULL, NULL),
(16, 'Apple iPhone 7 Plus 32GB quốc tế cũ 99%', 'Apple iPhone 7 Plus 32GB quốc tế cũ 99%', 5, 4, 'asd', 'asd', '6290000', 'iPhone-7-plus-jetback93.png', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(1, 'Hoa tran', '123/123 TPHCM', '0932023992', 'htt@gmail.com', 'Đơn hàng giao trong ngày', NULL, NULL),
(2, 'Hoa tran', 'dasdas', '0932023992', 'htt@gmail.com', 'dasdadas', NULL, NULL),
(3, 'ChâuHoa tran', '123/123 TPHCM', '0932023992', 'htt@gmail.com', 'Dơn hàng giao nhanh', NULL, NULL),
(4, 'Hoa tran', '123/123 TPHCM', '0932023992', 'htt@gmail.com', 'dasdasdas', NULL, NULL),
(5, 'Hoa tran', '123/123 TPHCM', '0932023992', 'htt@gmail.com', 'Đơn hàng đặt', NULL, NULL),
(6, 'Hoa tran', '123/123 TPHCM', '0932023992', 'htt@gmail.com', 'dasdasdasdasd', NULL, NULL),
(7, 'hoa', '39 dien bien phu', '0956512447', 'htt@gmail.com', 'asdwdwd', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
