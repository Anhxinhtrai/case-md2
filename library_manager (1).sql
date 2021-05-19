-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 19, 2021 lúc 10:54 AM
-- Phiên bản máy phục vụ: 8.0.25-0ubuntu0.20.04.1
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `library_manager`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `author_id` int NOT NULL,
  `authorName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`author_id`, `authorName`) VALUES
(1, 'Nguyễn Du'),
(6, 'Ngô Tất Tố');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `book_id` int NOT NULL,
  `year` int DEFAULT NULL,
  `bookName` varchar(255) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `language_id` int DEFAULT NULL,
  `author_id` int DEFAULT NULL,
  `location_id` int DEFAULT NULL,
  `storage_id` int DEFAULT NULL,
  `publisher_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`book_id`, `year`, `bookName`, `amount`, `category_id`, `language_id`, `author_id`, `location_id`, `storage_id`, `publisher_id`) VALUES
(22, 1988, 'Cuộc đời của Trọng', 100, 1, 1, 1, 1, 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `borrowing_cards`
--

CREATE TABLE `borrowing_cards` (
  `card_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `book_id` int DEFAULT NULL,
  `borrowing_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `borrowing_cards`
--

INSERT INTO `borrowing_cards` (`card_id`, `user_id`, `book_id`, `borrowing_date`, `return_date`, `status`) VALUES
(88, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(89, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(90, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(91, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(92, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(93, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(94, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(95, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(96, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(97, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(98, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(99, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(100, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(101, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(102, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(103, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(104, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(105, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(106, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(107, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(108, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(109, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(110, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(111, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(112, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(113, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(114, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(115, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(116, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(117, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(118, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(119, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(120, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(121, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(122, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(123, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(124, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(125, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(126, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(127, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(128, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(129, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(130, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(131, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(132, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(133, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(134, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(135, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(136, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(137, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(138, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(139, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(140, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(141, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(142, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(143, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(144, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(145, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(146, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(147, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(148, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(149, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(150, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(151, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(152, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(153, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(154, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(155, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(156, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(157, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(158, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(159, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(160, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(161, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(162, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(163, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(164, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(165, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(166, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(167, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(168, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(169, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(170, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(171, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(172, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(173, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(174, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(175, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(176, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(177, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(178, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(179, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(180, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(181, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(182, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(183, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(184, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(185, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(186, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(187, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(188, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(189, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(190, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(191, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(192, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(193, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(194, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(195, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(196, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(197, NULL, NULL, '2021-05-18', '2021-05-18', 'not return'),
(198, NULL, NULL, '2021-05-19', '2021-05-19', 'not return'),
(199, NULL, NULL, '2021-05-19', '2021-05-19', 'not return'),
(200, NULL, NULL, '2021-05-19', '2021-05-19', 'not return'),
(201, NULL, NULL, '2021-05-19', '2021-05-19', 'not return'),
(202, NULL, NULL, '2021-05-19', '2021-05-19', 'not return'),
(203, NULL, NULL, '2021-05-19', '2021-05-19', 'not return');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `categoriesName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `categoriesName`) VALUES
(1, 'hư cấu'),
(2, 'Kiếm Hiệp'),
(3, 'Trữ tình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `languages`
--

CREATE TABLE `languages` (
  `language_id` int NOT NULL,
  `languageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `languages`
--

INSERT INTO `languages` (`language_id`, `languageName`) VALUES
(1, 'Viet Nam'),
(2, 'China'),
(3, 'English');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `locations`
--

CREATE TABLE `locations` (
  `location_id` int NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `shelf` varchar(255) DEFAULT NULL,
  `drawer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `locations`
--

INSERT INTO `locations` (`location_id`, `area`, `shelf`, `drawer`) VALUES
(1, 'khu vực 1', 'háng thứ 4', 'ngăn thứ nhất'),
(2, 'Khu B', 'Giá 12', 'ngắn 8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publishers`
--

CREATE TABLE `publishers` (
  `publisher_id` int NOT NULL,
  `publisherName` varchar(255) DEFAULT NULL,
  `publisherAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `publishers`
--

INSERT INTO `publishers` (`publisher_id`, `publisherName`, `publisherAddress`) VALUES
(1, 'Kim Đồng', 'Cam Cọn - Bảo Yên - Lào Cai'),
(2, 'Kim Đồng', 'Cam Cọn - Bảo Yên - Lào Cai'),
(3, 'giáo dục việt nam', 'Hà');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `storage`
--

CREATE TABLE `storage` (
  `storage_id` int NOT NULL,
  `storageName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `storage`
--

INSERT INTO `storage` (`storage_id`, `storageName`) VALUES
(6, 'Kho số 1'),
(25, 'Kho số 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `userName`, `password`, `name`, `phone`) VALUES
(8, 'trong', '13123', 'trong', 113),
(9, 'trong1', '1', '1', 1),
(10, 'Duy', '123', 'Trong', 1234243),
(11, 'Tuan', '123', '123', 123),
(12, 'trum2k1', '123', '123', 1234243),
(13, 'admin', '123', 'Trọng Trùm', 911),
(14, 'Trang ne', '123', 'Mai Thị Thu Trang', 998),
(15, 'test', '1', 'Quaan', 1234243),
(16, 'Hoang', '1', 'Hoang dz', 113);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `storage_id` (`storage_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Chỉ mục cho bảng `borrowing_cards`
--
ALTER TABLE `borrowing_cards`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`);

--
-- Chỉ mục cho bảng `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Chỉ mục cho bảng `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Chỉ mục cho bảng `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`storage_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `borrowing_cards`
--
ALTER TABLE `borrowing_cards`
  MODIFY `card_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publisher_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `storage`
--
ALTER TABLE `storage`
  MODIFY `storage_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `books_ibfk_4` FOREIGN KEY (`location_id`) REFERENCES `locations` (`location_id`),
  ADD CONSTRAINT `books_ibfk_5` FOREIGN KEY (`storage_id`) REFERENCES `storage` (`storage_id`),
  ADD CONSTRAINT `books_ibfk_6` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`publisher_id`);

--
-- Các ràng buộc cho bảng `borrowing_cards`
--
ALTER TABLE `borrowing_cards`
  ADD CONSTRAINT `borrowing_cards_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `borrowing_cards_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
