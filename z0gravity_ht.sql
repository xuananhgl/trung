-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2022 lúc 10:59 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `z0gravity_ht`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `article_url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `img_url`, `title`, `category`, `description`, `article_url`, `user_id`, `created`, `modified`) VALUES
(1, 'https://www.z0gravity.com/leblog/storage-z0G/2022/09/image-6-16.9-285x240.jpg', 'How to choose your project management software', 'COMPANIES', 'Choosing the right project management software or project management tool is a crucial question for companies.', 'https://www.z0gravity.com/leblog/mieux-gerer-ses-projets/', 1, '2022-10-27 08:49:42', '2022-11-04 09:27:01'),
(2, 'https://www.z0gravity.com/leblog/storage-z0G/2020/03/VISUEL-1-FB-09-03@2x-285x240.png', 'Public sector project management software', 'PUBLIC SECTOR', 'z0 Gravity is a project management software developed with and for local authorities. Thanks to its simple interface and on-board dashboard, this public sector project management software makes it possible to respond effectively to the time and budget constraints of local authorities.', 'https://www.z0gravity.com/leblog/logiciel-de-gestion-de-projet/', 1, '2022-10-27 08:51:03', '2022-10-27 08:51:03'),
(3, 'https://www.z0gravity.com/leblog/storage-z0G/2019/03/zOG-portefeuille-de-projet-V3-4-285x240.jpg', 'SaaS online project management software', 'PMO', 'Managing a project actually involves carrying out a succession of very different tasks for the company and which must often be carried out simultaneously: planning, distribution of resources, tasks, reporting activities, monitoring of the progress of projects, budget consumption, etc.', 'https://www.z0gravity.com/leblog/logiciel-gestion-portefeuille-projets-pour-optimiser-votre-activite/', 1, '2022-10-27 08:52:02', '2022-10-27 08:52:02'),
(4, 'https://www.z0gravity.com/leblog/storage-z0G/2019/04/ballons-dirigables-285x240.jpg', '7 key tips for properly equipping yourself with a project management tool', 'CUSTOMER', 'Decided it\'s time to invest in a project management tool for your business? Do you want to increase productivity and efficiency in the management of your day-to-day business and, at the same time, benefit all departments? It\'s a very good idea.', 'https://www.z0gravity.com/leblog/choisir-le-meilleur-outil-de-gestion-de-projet-pour-faire-decoller-son-activite/', 1, '2022-10-27 08:52:53', '2022-10-27 08:52:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles_i18n`
--

CREATE TABLE `articles_i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles_tags`
--

CREATE TABLE `articles_tags` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `video_url` varchar(255) NOT NULL,
  `btn_content` varchar(99) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `text_color` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `video_url`, `btn_content`, `image_url`, `background_color`, `text_color`, `user_id`, `created`, `modified`) VALUES
(1, 'Fédérateur. Personnalisé. Souple & adapté.a', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.1', 'aaa', 'Découvrez z0 Gravity', '/userfiles/banners/d2.png', '#bfd5e8', '#f0f2f4', 1, '2022-10-27 03:58:04', '2022-11-04 09:38:37'),
(2, 'Fédérateur. Personnalisé. Souple & adapté.c', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.2', 'aaa', 'Découvrez z0 Gravity', 'https://images.squarespace-cdn.com/content/v1/5b7d960e372b9653287cff63/1616001906165-BO1UZGROID8DYI4WWL11/700x400-espacio_co3.jpg', '#b1e7c8', '#938a8a', 1, '2022-10-27 04:03:57', '2022-11-04 09:39:02'),
(33, 'Fédérateur. Personnalisé. Souple & adapté.33', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.33', 'aaa', 'Découvrez z0 Gravity', 'https://images.squarespace-cdn.com/content/v1/5b7d960e372b9653287cff63/1616001906165-BO1UZGROID8DYI4WWL11/700x400-espacio_co3.jpg', '#f1f6fa', '#363535', 8, '2022-11-03 01:14:57', '2022-11-04 09:42:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners_i18n`
--

CREATE TABLE `banners_i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `role`, `created`, `modified`) VALUES
(1, 'Administrator', '2022-10-27 10:41:12', '2022-10-27 10:41:19'),
(2, 'Translator', '2022-10-27 10:43:01', '2022-10-27 10:43:03'),
(3, 'Subcribers', '2022-10-27 03:50:44', '2022-10-27 03:50:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `title`, `created`, `modified`) VALUES
(1, 'bai viet so 1', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `testimonial_author` varchar(255) DEFAULT NULL,
  `testimonial_author_position` varchar(255) DEFAULT NULL,
  `testimonial_url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `testimonials`
--

INSERT INTO `testimonials` (`id`, `logo_url`, `description`, `testimonial_author`, `testimonial_author_position`, `testimonial_url`, `user_id`, `created`, `modified`) VALUES
(1, '/img/logo_forbes.jpg', 'First of all there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.', 'Stéphane Touchet1', 'PMO service client Orange Sud-Ouest', 'https://www.forbes.com/', 1, '2022-10-27 04:36:16', '2022-11-04 09:37:53'),
(2, '/img/logo_forbes.jpg', 'First of all there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.a', 'Stéphane Touchet1', 'PMO service client Orange Sud-Ouest1', 'https://www.forbes.com/', 1, '2022-10-27 04:37:34', '2022-11-04 09:38:20'),
(3, '/img/logo_forbes.jpg', 'First of all there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.11', 'Stéphane Touchet', 'PMO service client Orange Sud-Ouest', 'https://www.forbes.com/', 1, '2022-10-27 04:37:48', '2022-11-04 03:12:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testimonials_i18n`
--

CREATE TABLE `testimonials_i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_url` varchar(100) DEFAULT NULL,
  `user_role_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_email`, `user_password`, `user_url`, `user_role_id`, `created`, `modified`) VALUES
(1, 'administrator', '$2y$10$r1iXqqrLg6fEGGPCYlKUR.oxxzS5c79jcT4USjBIzgx4V9../jngm', '', 1, '2022-10-27 10:44:11', '2022-10-28 04:43:34'),
(2, 'translator', '123456789', NULL, 2, '2022-10-27 10:44:43', '2022-10-27 10:44:45'),
(3, 'subcriber', '123456789', NULL, 3, '2022-10-27 10:45:07', '2022-10-27 10:45:13'),
(7, 'ad1@gmail.com', '$2y$10$eejE2w9POwFrAn0xPiWCLe7PpgEu03nk3OS1LtDSMQM6YTDa4Fmx6', '', 1, '2022-10-28 04:14:23', '2022-10-30 10:30:35'),
(8, 'ad2@gmail.com', '$2y$10$b0pwF43nhUQAT6ABDfOba.yK6WkLROAQb8lF.ruJndEAAX2esFF8q', '', 1, '2022-10-30 10:32:56', '2022-10-30 10:32:56'),
(9, 'us1@gmail.com', '$2y$10$tRfZKUpOcopxKJN0zjEvdOCKF4kvKS3f6.az2sw5mA4DjOI.5SFQ.', '', 3, '2022-10-30 10:33:33', '2022-10-30 10:33:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `visualeditors`
--

CREATE TABLE `visualeditors` (
  `ID` int(11) NOT NULL,
  `banner_id` int(11) NOT NULL,
  `testimonials_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `visualeditors`
--

INSERT INTO `visualeditors` (`ID`, `banner_id`, `testimonials_id`, `article_id`) VALUES
(1, 33, 2, 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_key` (`user_id`);

--
-- Chỉ mục cho bảng `articles_i18n`
--
ALTER TABLE `articles_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD PRIMARY KEY (`article_id`,`tag_id`),
  ADD KEY `tag_key` (`tag_id`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_key` (`user_id`);

--
-- Chỉ mục cho bảng `banners_i18n`
--
ALTER TABLE `banners_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Chỉ mục cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_key` (`user_id`);

--
-- Chỉ mục cho bảng `testimonials_i18n`
--
ALTER TABLE `testimonials_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_key` (`user_role_id`);

--
-- Chỉ mục cho bảng `visualeditors`
--
ALTER TABLE `visualeditors`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `articles_i18n`
--
ALTER TABLE `articles_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `banners_i18n`
--
ALTER TABLE `banners_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `testimonials_i18n`
--
ALTER TABLE `testimonials_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD CONSTRAINT `articles_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `articles_tags_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Các ràng buộc cho bảng `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
