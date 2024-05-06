-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 07:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1937rentals_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `by` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `meta_description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `name`, `by`, `slug`, `date`, `short_description`, `description`, `status`, `created_at`, `updated_at`, `meta_description`, `keywords`, `meta_title`) VALUES
(1, 't3OrqHvRWJu9XuWqHvg9trpNFJpHDiRcCheLWulK.jpg', 'WHY YOU SHOULD RENT A CAR?', 'CAR RENTAL TIPS', 'why-you-should-rent-a-car-', '2020-12-24', 'If you\'ve never rented a car before, this one\'s for you — we\'re going to tell you just what you\'re missing out on! Check out these 4 great advantages of renting…', '<p>An online game dolor sit amet, consectetur adipiscing eliSuspendiss mauris vitae lacus commodo iaculis eget vitae magna.\r\n                            Nam leohe a volutpat quis iaculis viverra id quam. Morbi pharetra, libero ut tempor finibus, metus massa pharetr ornare\r\n                            pharetra felis risus eu quam.</p>\r\n                            <h4>gaming an addiction?</h4>\r\n                            <p>Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvin condimentum dictum, sapien nibh auctor\r\n                            tortoris vulputate sapien tortor velit. Sed nulla congue euqua molestie grvida ipsum. Curabitr ut lacus vitae tellus\r\n                            lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor mi rutrum non. Donec non eros eget purus lobortis\r\n                            imperdiet ac vitae est.</p>\r\n                            \r\n                            <p>Aliquet cursus quam. Pellentesque pulvin condimentum dictum, sapien auctor tortoris vulputate sapien tortor velit. Sed\r\n                            nulla congue euqua molestie grvida ipsum. Curabitr ut lacus vitae tellus lacinia pretium. Proin vestibulum sollcitudin\r\n                            tortor, quis auctor mi rutrum non.</p>\r\n                            <blockquote>\r\n                                “ LOREM IPSUM DOLOR AMET CONSECTETUR ADIPISCING ELIT, ukjSED EIUSMOD TEMPOR INCIDIDUNT\r\n                                gaming LABORE ET DOLORE MAGNA ALIQUA”\r\n                            </blockquote>\r\n                            <p>Pellentesque pulvin condium dictum, sapien auctor tortoris vulputate sapien tortor velit. Sed nulla congue euqua\r\n                            molestie grvida ipsum. Curabitr lacus vitae tellus lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor mi\r\n                            rutru.Nisl nisi scelerisque eu ultrices vitae. Eu lobortis elementum nibh tellus molestie. Tellus orci auctor augue\r\n                            mauris augue neque. Sem fringilla ut morbi tincidunt augue interdum. Sed risus ultricies tristique nulla aliquet enim.</p>\r\n                            <ul class=\"blog-details-list\">\r\n                                <li>Sapien auctor tortoris vulputate sapien ?</li>\r\n                                <li>Curabitr lacus vitae tellus lacinia pretium vulputate ?</li>\r\n                                <li>Tellus orci auctor augue mauris ?</li>\r\n                            </ul>\r\n                            <p>Sapien auctor tortoris vulputate sapien tortor velit. Sed nul congue euqua molestie grvida ipsums Curabitr lacus vitae\r\n                            tellus lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor rutru.Nisl nisi scelerisque eu ultrices vitae.\r\n                            Eu lobortis elementum nibh tellus molestie.</p>\r\n                            <div class=\"blog-list-post-bottom\">\r\n                                <ul>\r\n                                    <li>\r\n                                        <i class=\"fas fa-tag\"></i>\r\n                                        <span>tags :</span>\r\n                                        <a href=\"#\">dota2</a>\r\n                                        <a href=\"#\">esports</a>\r\n                                        <a href=\"#\">matches</a>\r\n                                    </li>\r\n                                </ul>\r\n                            </div>', 1, '2021-11-12 06:06:58', '2022-04-08 05:10:59', '', '', NULL),
(2, 'CWZfmioU9QwNH1Y7U9JQrL1QyrBc4kSXPZ9M4w6Z.jpg', 'WHAT IS RENTAL COVER?', 'CAR RENTAL TIPS', 'what-is-rental-cover-', '2021-12-26', 'Want to rent a car soon? Read to know what is RentalCover, how it works and what is the difference between insurances offered by rental companies and RentalCover…', '<p>An online game dolor sit amet, consectetur adipiscing eliSuspendiss mauris vitae lacus commodo iaculis eget vitae magna.\r\n                            Nam leohe a volutpat quis iaculis viverra id quam. Morbi pharetra, libero ut tempor finibus, metus massa pharetr ornare\r\n                            pharetra felis risus eu quam.</p>\r\n                            <h4>gaming an addiction?</h4>\r\n                            <p>Donec orci enim, bibendum a augue quis, aliquet cursus quam. Pellentesque pulvin condimentum dictum, sapien nibh auctor\r\n                            tortoris vulputate sapien tortor velit. Sed nulla congue euqua molestie grvida ipsum. Curabitr ut lacus vitae tellus\r\n                            lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor mi rutrum non. Donec non eros eget purus lobortis\r\n                            imperdiet ac vitae est.</p>\r\n                            \r\n                            <p>Aliquet cursus quam. Pellentesque pulvin condimentum dictum, sapien auctor tortoris vulputate sapien tortor velit. Sed\r\n                            nulla congue euqua molestie grvida ipsum. Curabitr ut lacus vitae tellus lacinia pretium. Proin vestibulum sollcitudin\r\n                            tortor, quis auctor mi rutrum non.</p>\r\n                            <blockquote>\r\n                                “ LOREM IPSUM DOLOR AMET CONSECTETUR ADIPISCING ELIT, ukjSED EIUSMOD TEMPOR INCIDIDUNT\r\n                                gaming LABORE ET DOLORE MAGNA ALIQUA”\r\n                            </blockquote>\r\n                            <p>Pellentesque pulvin condium dictum, sapien auctor tortoris vulputate sapien tortor velit. Sed nulla congue euqua\r\n                            molestie grvida ipsum. Curabitr lacus vitae tellus lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor mi\r\n                            rutru.Nisl nisi scelerisque eu ultrices vitae. Eu lobortis elementum nibh tellus molestie. Tellus orci auctor augue\r\n                            mauris augue neque. Sem fringilla ut morbi tincidunt augue interdum. Sed risus ultricies tristique nulla aliquet enim.</p>\r\n                            <ul class=\"blog-details-list\">\r\n                                <li>Sapien auctor tortoris vulputate sapien ?</li>\r\n                                <li>Curabitr lacus vitae tellus lacinia pretium vulputate ?</li>\r\n                                <li>Tellus orci auctor augue mauris ?</li>\r\n                            </ul>\r\n                            <p>Sapien auctor tortoris vulputate sapien tortor velit. Sed nul congue euqua molestie grvida ipsums Curabitr lacus vitae\r\n                            tellus lacinia pretium. Proin vestibulum sollcitudin tortor, quis auctor rutru.Nisl nisi scelerisque eu ultrices vitae.\r\n                            Eu lobortis elementum nibh tellus molestie.</p>\r\n                            <div class=\"blog-list-post-bottom\">\r\n                                <ul>\r\n                                    <li>\r\n                                        <i class=\"fas fa-tag\"></i>\r\n                                        <span>tags :</span>\r\n                                        <a href=\"#\">dota2</a>\r\n                                        <a href=\"#\">esports</a>\r\n                                        <a href=\"#\">matches</a>\r\n                                    </li>\r\n                                </ul>\r\n                            </div>', 1, '2021-11-12 07:15:08', '2022-04-09 03:24:19', 'sadsadds', 'Khan', 'Huzaifa'),
(3, 'sEjydhnd5IVLdUls2sPxsy5ObtqZsdOy5sEJQbDM.jpg', 'Huzaifa', 'asd', 'huzaifa', '2021-03-08', 'saddsdsa', '<p>sadsdasad<br></p>', 1, '2022-04-09 03:22:31', '2022-04-09 03:22:31', 'sdaasd', 'asds', 'ads');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `no_of_days` int(11) NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `vehicle_id`, `start_date`, `end_date`, `start_time`, `end_time`, `car_name`, `no_of_days`, `total_amount`, `first_name`, `last_name`, `email`, `contact_no`, `created_at`, `updated_at`) VALUES
(1, 3, '2022-03-26', '2022-03-28', '16:45:00', '17:45:00', NULL, 3, 10500, 'sdsdfsdfsfs', 'sadasd', 'admin@admin.com', '324234', '2022-03-26 05:09:20', '2022-03-26 05:09:20'),
(2, 3, '2022-03-26', '2022-03-27', '18:15:00', '19:15:00', NULL, 2, 7000, 'sdsdfsdfsfs', 'sadasd', 'admin@admin.com', '3242341', '2022-03-26 05:15:00', '2022-03-26 05:15:00'),
(3, 3, '2022-03-26', '2022-03-28', '19:25:00', '19:28:00', NULL, 3, 10500, 'sdsdfsdfsfs', 'sadasd', 'admin@admin.com', '324234', '2022-03-26 17:24:34', '2022-03-26 17:24:34'),
(4, 3, '2022-03-26', '2022-03-27', '20:25:00', '21:25:00', NULL, 2, 7000, 'sdsdfsdfsfs', 'sadasd', 'admin@admin.com', '324234', '2022-03-26 18:22:50', '2022-03-26 18:22:50'),
(5, 3, '2022-03-26', '2022-03-27', '20:25:00', '21:25:00', NULL, 2, 7000, 'sdsdfsdfsfs', 'sadasd', 'admin@admin.com', '324234', '2022-03-26 18:24:16', '2022-03-26 18:24:16'),
(6, 3, '2022-03-28', '2022-03-30', '00:58:00', '00:59:00', NULL, 3, 10500, 'Umair', 'Bhatti', 'admin@admin.com', '1234234234', '2022-03-28 11:57:37', '2022-03-28 11:57:37'),
(7, 3, '2022-03-28', '2022-03-30', '00:58:00', '00:59:00', NULL, 3, 10500, 'Umair', 'Bhatti', 'admin@admin.com', '1234234234', '2022-03-28 11:57:46', '2022-03-28 11:57:46'),
(8, 3, '2022-03-28', '2022-03-30', '00:58:00', '00:59:00', NULL, 3, 10500, 'Umair', 'Bhatti', 'admin@admin.com', '1234234234', '2022-03-28 11:59:22', '2022-03-28 11:59:22'),
(9, 3, '2022-03-28', '2022-03-30', '02:03:00', '02:04:00', NULL, 3, 10500, 'Umair', 'Bhatti', 'admin@admin.com', '1234234234', '2022-03-28 11:59:50', '2022-03-28 11:59:50'),
(10, 3, '2022-03-28', '2022-03-29', '03:05:00', '04:05:00', NULL, 2, 7000, 'Umair', 'Bhatti', 'admin@admin.com', '1234234234', '2022-03-28 12:01:00', '2022-03-28 12:01:00'),
(11, 3, '2022-03-28', '2022-03-29', '04:05:00', '05:08:00', NULL, 2, 7000, 'Umair', 'Bhatti', 'admin@admin.com', '1234234234', '2022-03-28 12:02:37', '2022-03-28 12:02:37'),
(12, 3, '2022-03-28', '2022-03-29', '04:05:00', '05:08:00', NULL, 2, 7000, 'Umair', 'Bhatti', 'admin@admin.com', '1234234234', '2022-03-28 12:03:13', '2022-03-28 12:03:13'),
(13, 3, '2022-03-28', '2022-03-29', '04:05:00', '05:08:00', NULL, 2, 7000, 'Umair', 'Bhatti', 'admin@admin.com', '1234234234', '2022-03-28 12:04:24', '2022-03-28 12:04:24'),
(14, 3, '2022-03-30', '2022-03-31', '17:10:00', '17:12:00', 'Audi R8 Spyder', 2, 7000, 'sdsdfsdfsfs', 'sadasd', 'admin@admin.com', '324234', '2022-03-30 15:08:38', '2022-03-30 15:08:38'),
(15, 3, '2022-03-30', '2022-04-01', '17:42:00', '18:42:00', 'Audi R8 Spyder', 3, 10500, 'sdsdfsdfsfs', 'sadasd', 'admin@admin.com', '324234', '2022-03-30 15:40:03', '2022-03-30 15:40:03'),
(16, 3, '2022-03-30', '2022-03-31', '17:43:00', '18:43:00', 'Audi R8 Spyder', 2, 7000, 'sdsdfsdfsfs', 'sadasdaaa', 'admin@admin.com', '3242341', '2022-03-30 15:42:01', '2022-03-30 15:42:01'),
(17, 3, '2022-03-30', '2022-04-02', '16:50:00', '14:52:00', 'Audi R8 Spyder', 4, 14000, 'Umair', 'Bhatti', 'admin@admin.com', '516456456', '2022-03-30 15:50:21', '2022-03-30 15:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `meta_description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `logo`, `name`, `slug`, `status`, `created_at`, `updated_at`, `meta_description`, `keywords`, `meta_title`) VALUES
(1, 'EiaV4S3X3IoeIhU0WSEjbP9CW4Mbg16ILIUX9Boy.png', 'Ferrari', 'ferrari', 1, '2022-03-16 00:55:37', '2022-11-02 00:53:14', 'Ferrari Description SEO', 'Ferrari  Keywords SEO', 'Ferrari Title SEO'),
(2, 'FFYfg0er62rYaazhgrSL6JQYrzsruOBvmXVz13PV.png', 'Lamborghini', 'lamborghini', 1, '2022-03-16 00:58:18', '2022-04-11 00:04:03', '1937 Rentals | Lamborghini Description', '1937 Rentals | Lamborghini Keywords', '1937 Rentals | Lamborghini Title'),
(3, 'yMGvsxhWN2qSAUnIMTWIZEBpzjTuR1JXUwuzDgGR.png', 'Mercedes', 'mercedes', 1, '2022-03-16 00:58:30', '2022-11-02 00:56:27', 'Mercedes Description Seo', 'Mercedes  Keywords Seo', 'Mercedes Seo'),
(4, NULL, 'Audi', 'audi', 1, '2022-03-16 00:58:38', '2022-03-16 00:58:38', NULL, NULL, NULL),
(5, NULL, 'Porsche', 'porsche', 1, '2022-03-16 00:58:44', '2022-03-16 00:58:44', NULL, NULL, NULL),
(6, 'ifYgwwleNU2hx38gvXq5FuD8xAHUQHyroDm8RPif.png', 'Range Rover', 'range-rover', 1, '2022-03-16 00:58:54', '2022-04-01 07:35:56', NULL, NULL, NULL),
(7, 'Q4ZPW6u19R18QQmnbEcOCmMVD0zbdkcJRKgg23I1.png', 'Rolls Royce', 'rolls-royce', 1, '2022-03-16 00:59:40', '2022-04-01 07:36:08', NULL, NULL, NULL),
(8, NULL, 'BMW', 'bmw', 1, '2022-03-16 00:59:52', '2022-03-16 00:59:52', NULL, NULL, NULL),
(9, '9JYB0TcM45ho87uICzFagNmFQxe4lhWjGdiFL5lR.png', 'Bentley', 'bentley', 1, '2022-03-16 01:01:56', '2022-04-01 07:36:21', 'asd', 'sad', 'dsasda');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `image_one` varchar(255) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `heading_one` text DEFAULT NULL,
  `heading_two` text DEFAULT NULL,
  `description_one` longtext DEFAULT NULL,
  `description_two` longtext DEFAULT NULL,
  `link_one` text DEFAULT NULL,
  `link_two` text DEFAULT NULL,
  `link_three` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `category_id`, `page`, `image_one`, `image_two`, `heading_one`, `heading_two`, `description_one`, `description_two`, `link_one`, `link_two`, `link_three`, `date`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, NULL, 'home', 'NPdeBaoo3fbTzl6uoehlqMUG36fxkGfc69LNzAaV.mp4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-10-27 06:28:27', '2021-10-27 06:55:16'),
(6, NULL, 'home', 'n838UM5TxyMO2te20rVewQlYAR3SZNtztL8IZyAy.jpg', 'hkDv7Vpvn6yXiuNIuxM8Wi12uvPCP0m6252kR5XZ.png', NULL, NULL, '<h2>Welcome To<span> 1937</span></h2>\r\n                                    <div class=\"inner\">\r\n                                        <h2>Car Rental</h2>\r\n                                        <h6 class=\"vertical-title\">1937</h6>\r\n                                        <p>1937 Car Rentals is the best luxury car rental services in Dubai, we have a big fleet of 50 sports and luxury vehicles, we are known for the professional services we offer.</p>\r\n                                    </div>', NULL, NULL, NULL, NULL, NULL, 1, 2, '2021-10-27 13:01:57', '2022-03-31 04:02:08'),
(9, NULL, 'home', 'iKmYKKvtBwWDUqwWIg7RzpRep2IFr2eRNtzq2jz0.png', NULL, 'FIRST CLASS SERVICE', 'https://elitebiz.ae/llc-company-formation/mainland-license', 'WE OFFER SERVICES, EASY BOOKING AND INSTANT DELIVERY', NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-10-29 00:53:29', '2022-03-31 05:43:24'),
(10, NULL, 'home', 'YXSdoPm5VsC5pBO26Hbd3YRESBS319qdAlsX3D7S.png', NULL, 'PICK & DROP', 'https://elitebiz.ae/our-services/freezone-services', 'FREE PICKUP AND DELIVERY ACROSS DUBAI', NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-10-29 00:53:57', '2022-03-31 05:45:40'),
(11, NULL, 'home', '2aQlq72z3Rb0N3ofGl24947Nwy0aaIfuxm0yFTdb.png', NULL, 'CAR SUPPORT', '#', '24/7 ROADSIDE ASSISTANCE', NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-10-29 00:54:23', '2022-03-31 05:46:17'),
(15, NULL, 'home', 'fHoCMNQRbzgiA0spgqDBYPuxHspADSBvZUjAIMAD.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, '2021-10-29 06:00:50', '2022-03-31 08:08:30'),
(16, NULL, 'home', 'iHayBiyDedlKeBbWaYsbMcXRcQV1MaEYQxZyRvYU.png', NULL, '50', 'Total Cars', NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, '2021-10-29 06:36:36', '2022-03-31 11:16:10'),
(17, NULL, 'home', 'ycQbioxJbtDtiithcOxmhEbVWXPaiBOi1JQdHgyz.png', NULL, 'LAMBORGHINI URUS', '4500', '2022-04-15', NULL, NULL, NULL, NULL, '2022-04-15', 1, 6, '2021-10-29 01:56:09', '2022-03-31 11:34:58'),
(18, NULL, 'home', 'fsltN3BHqeI2huipHPw0D7WLRXXcGUbdE42qqn3l.png', NULL, 'RANGE ROVER SVR', '2200', 'Professional service provider in business formation, the team is very professional, quick in replying and always good in following up. Elite business setup gave us the best advice and really helped us through all the paper works.', NULL, NULL, NULL, NULL, '2022-04-10', 1, 6, '2021-10-29 01:58:59', '2022-03-31 11:35:53'),
(20, NULL, 'home', 'Z1cnWdp0vlLdR5NAjrmfdZoQLizABgp2k44vfk7s.gif', NULL, NULL, NULL, '<h2><span>Lamborghini</span></h2>\r\n                                        <div class=\"inner\">\r\n                                            <h3>HURACAN PERFORMANTE</h3>\r\n                                            <p>Book Lamborghini Huracan Performante, the ultimate crossover of exceptional style and high performance.</p>\r\n                                        </div>', NULL, NULL, NULL, NULL, NULL, 1, 8, '2021-10-29 07:06:49', '2022-03-31 12:03:50'),
(25, NULL, 'about_us', 'B9cGis6dGGbfsI1iWyaPfHnot3ydiAIeE4SEzq5L.png', 'F5v5dz8ouix75KxWX0E5NnmZVAOBpYVXZn4uvt8o.png', 'US30IncJ0EIx58vZGq5aFMxSsB2xtgxOGpd0sxXZ.png', '500', '<div class=\"section-title mb-25\">\r\n                    <h2>About <span>US</span></h2>\r\n                </div>\r\n                <div class=\"inner-about-content\">\r\n                    <p>1937 Car Rental is the best luxury car rental services in Dubai, we have a big fleet of 50 sports and luxury vehicles, we are known for the professional services we offer, We offer a wide range of supercars, luxury cars &amp; Suvs in the market for daily rental, The difference is in the details and that’s why our car rental services are the best in town, with a team of experts and quality trained professionals in the tourism and automobile industry, we stand out for quality and good taste, to offer you with a unique experience, get in touch with us to know more.</p>\r\n                </div>', '10', NULL, NULL, NULL, NULL, 1, 1, '2021-10-30 06:56:21', '2022-03-31 12:41:01'),
(31, NULL, 'our_services', 'FEzXEEMVbLK7BU6WBzWwSTmuTLzWBC1Q6g3Fb4o0.jpg', NULL, 'Imtiaz Yousaf', 'Operation Manager', '<div class=\"section-title mb-25 ml10\">\r\n                    <h2>DESERT <span>SAFARI</span></h2>\r\n                </div>\r\n                <div class=\"inner-about-content ml10\">\r\n                    <p>We have a team To assist you with desert safari packages offer entertainment and has proven to be excellent in services and capturing the hearts of our valuable guests. It provides guests a fun and thrilling experience in the desert, For bookings and other enquiries, feel free to get in touch with us.</p>\r\n                </div>', NULL, '#', '#', '#', NULL, 1, 1, '2021-10-30 05:45:45', '2022-03-31 14:55:43'),
(32, NULL, 'our_services', 'DtPOeFERqFKqdnRcDs3MakspUfPW15KVMsqljaay.jpg', NULL, 'Angielyn Lavarias', 'Office Administrator Officer', '<div class=\"section-title mb-25\">\r\n                    <h2>HOTEL <span>BOOKING</span></h2>\r\n                </div>\r\n                <div class=\"inner-about-content\">\r\n                    <p>Compete with 100 players on a remote Lorem Ipsn gravida. Pro ain gravida nibh vel velit an auctor aliqueenean\r\n                    ollicitudin ain gravida nibh vel version an ipsum. Lorem Ipsn gravida. Pro ain gravida nibh vevelit auctor aliqueenean ollicitudin ain gravida nibh vel version an ipsum.</p>\r\n                    <p>Compete with 100 players on a remote Lorem Ipsn gravida. Pro ain gravida nibh vel velit an auctor aliqueenean\r\n                    ollicitudin ain gravida nibh vel version an ipsum. Lorem Ipsn gravida. Pro ain gravida nibh vevelit auctor aliqueenean ollicitudin ain gravida nibh vel version an ipsum.</p>\r\n                </div>', NULL, '#', '#', '#', NULL, 1, 1, '2021-10-30 05:46:22', '2022-03-31 14:57:44'),
(34, NULL, 'office_space', 'saPqo1CPdME5tq2s0F26CQvK5phApl2y6I8Wngvp.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-10-30 06:59:18', '2021-11-13 03:05:29'),
(35, NULL, 'office_space', NULL, NULL, 'Full Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '2021-10-30 07:10:15', '2021-10-30 07:11:05'),
(36, NULL, 'office_space', NULL, NULL, 'Shared Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '2021-10-30 07:11:14', '2021-10-30 07:24:36'),
(37, NULL, 'office_space', NULL, NULL, 'Desk Space', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '2021-10-30 07:11:23', '2021-11-13 03:09:37'),
(38, 35, 'office_space', '3aO8yt9NG70EIbZgUIZYOOOT2T2QuZDgLO61TEpB.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-11-01 00:27:37', '2021-11-01 00:27:37'),
(39, 35, 'office_space', '8RYtqFRIp2w1B7SjGS5gD13QZQww0QVwhdzI599Q.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-11-01 00:40:36', '2021-11-01 00:40:36'),
(40, 35, 'office_space', 'MpMb9Rcs4u0xZs1bdrBWN8Y14ERBoDCaw7ryrw4D.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-11-01 00:40:47', '2021-11-01 00:40:47'),
(41, 36, 'office_space', 'yBhNv3AbZvk80KvavZ4DkNuNhqwOP7uN8TUNUT0L.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-11-01 00:41:03', '2021-11-01 00:41:03'),
(42, 37, 'office_space', 'dp8wWB3TATRhvTxXIOR1cHbJViyGzYxc6YjEwJaW.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-11-01 00:41:25', '2021-11-01 00:41:33'),
(43, NULL, 'trade_license', 'SSir0ik9CAu44JWZ0xmlXYeuioFLU2v36KniAqfQ.jpg', NULL, 'Affordable Trade License in UAE, General Trading License in Dubai', NULL, '<p>Upon starting you business in the UAE, one of the important part is to obtain a business license. The most employed and required type of permit is the commercial or trade one. It designates all the major activities that you can carry out. The renewal &amp; trade license cancellation in Dubai requires expert knowledge.</p>\r\n\r\n					<h1 class=\"page-title\">Approving Authorities</h1>\r\n\r\n					<p>For any entity which is established or going through liquidation process has to go through stress filled steps in order to get the legal work done regarding their licenses. Dubai Chamber of Commerce and DED (Department of Economic Development) controls all of the procedures related to trade license in Dubai.</p>\r\n\r\n					<p>However, for some business categories, the licensing necessitates approval from authorities and certain ministries such as financial institutions and banks, insurance companies, Central Bank, Economy and Commerce ministry. Manufacturing businesses require the special consent from the Ministry of Industry and Finance, whereas, medical and pharmaceutical products need approval from the Ministry of Health. If you find yourself in oil or gas production, there are several other authorities from whom you need approvals for cancellation and trade license renewal in Dubai. Some major activities such as insurance and jewelry setups require a financial guarantee which is issued by a bank already operating in UAE.</p>\r\n\r\n<h2 class=\"page-title\">Affordable Trade License in UAE</h2>\r\n\r\n					<p>When it comes to the costs of establishing a business in the UAE free zone, we are entirely open and honest with our customers. A large part of this is just ensuring that we have the freedom to tailor a solution to your specific requirements. Whether you need a single-shareholder trade license, a dual (or more) shareholder trade license, or visas for employees or dependants, we\'ll assist you choose the best choice for you so you don\'t overpay. For affordable trade license for  your business setup, Virtuzone has cost-effective, customised solutions. To discover more, schedule a free consultation now.</p>', NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-11-01 06:13:22', '2022-01-03 14:13:08'),
(44, NULL, 'trade_license', NULL, NULL, NULL, NULL, '<div class=\"tab\">\r\n																	<button type=\"button\" id=\"btn11\" class=\"active\" onclick=\"tab1(event, \'Btn1\')\">Information</button>\r\n																	<button type=\"button\" class=\"tablinks1\" onclick=\"tab1(event, \'Btn2\')\">Documents Required</button>\r\n																</div>\r\n\r\n																<div id=\"Btn1\" class=\"tabcontent1\">\r\n																	<div class=\"wpb_wrapper\">\r\n																		<div class=\"wpb_text_column wpb_content_element\">\r\n																			<div class=\"wpb_wrapper\">\r\n																				<br>\r\n																				<p><b>Types of Trade Licenses in Dubai</b></p>\r\n																				<p>All of the startups can ask for the permit from one of these 3 categories</p>\r\n\r\n																				<ul>\r\n																					<li><b>Commercial:</b></li>\r\n																					<p>This will cover your trading activities</p>\r\n\r\n																					<li><b>Professional:</b></li>\r\n																					<p>Artists and craftsmen apply for this type and get registered</p>\r\n\r\n																					<li><b>Industrial:</b></li>\r\n																					<p>For manufacturing activities and industrial working</p>\r\n																				</ul>\r\n\r\n																				<p>Some special licenses such as Entrepreneurial Business License, Business Operation Permit, etc are also issued by the authorities with specific criteria.</p>\r\n\r\n																				<p><b>Process of Trade License Renewal in Dubai</b></p>\r\n																				<p>By hiring our expert professional, you can have an error free renewal. There are 2 process through which you can have your permit renewed</p>\r\n\r\n																				<p><b>Process #1</b></p>\r\n\r\n																				<ul>\r\n																					<li>At any Tas’heel Centre, the documents can be submitted to DED counters.</li>\r\n																					<li>The payment is provided to the cashier in the form of cash to receive your license on spot.</li>\r\n																				</ul>\r\n\r\n\r\n																				<p>You can also pay the fees later through bank account or credit card for trade license renewal in Dubai.</p>\r\n\r\n																				<p>Timings of Tas’heel Centre: Saturday to Thursday 7:30am to 7:00pm</p>\r\n\r\n																				<p><b>Process #2</b></p>\r\n\r\n																				<ul>\r\n																					<li><b>Make Your ID</b></li>\r\n																					<p>You can create a new account for your company in DED website. Submit the required information to get your new user name and password. You will get an authorization form at the bottom of the page. Print it, fill the information, sign and put seal for verification and submit at the DED Business Village branch or Dubai Mall branch. Don’t forget to attach the partners list, license copy to get authorization.</p>\r\n\r\n																					<li><b>Activated Account at DED Website</b></li>\r\n																					<p>Your ID will be generated and you can manage your transaction for renewal and other requirements. Once you get the EJARO, it will be automatically linked with the system of license renewal. When you click the option of RENEW, it will navigate you to staff information and EJARI details. Upon clicking CONTINUE, you will receive a payment voucher. To submit the fee you can use your credit card or direct debit account or submit cash at DED branches.</p>\r\n\r\n																					<p>There are several offline and online portals available by the DED. We at PRO Desk, strive to provide services from start to finish for the trade license renewal in Dubai. Contact us for hassle free offers.</p>\r\n																				</ul>\r\n\r\n																			</div>\r\n																		</div>\r\n																		<div class=\"empty_space_10\"></div>\r\n																		\r\n																	</div>\r\n																</div>\r\n\r\n																<div id=\"Btn2\" class=\"tabcontent1 tab-links1\">\r\n																	<br>\r\n																	<p><b>Documents for Trade License Renewal in Dubai</b></p>\r\n																	<p>Hiring our company will ensure that all the papers required by various authorities are submitted on time without any error which can save your time and efforts of standing in long queues.</p>\r\n\r\n																	<ul>\r\n																		<li>BR/1 – Completed Typed form</li>\r\n																		<li>Trade License Copy</li>\r\n																		<li>Tenancy Contract Copy and Certificate of EJARI Registration.</li>\r\n																	</ul>\r\n\r\n																	<p>Make sure that your tenancy contract has minimum one month validity.</p>\r\n\r\n																	<p>Each and every company conducting their activities in the UAE is required to apply for trade license renewal in Dubai annually.</p>\r\n																</div>', NULL, NULL, NULL, NULL, NULL, 1, 2, '2021-11-01 07:05:55', '2021-11-01 02:08:11'),
(45, NULL, 'trade_license', NULL, NULL, NULL, NULL, '<div class=\"tab\">\r\n																	<button type=\"button\" id=\"btn21\" class=\"active\" onclick=\"tab2(event, \'Btn4\')\">Information</button>\r\n																	<button type=\"button\" class=\"tablinks2\" onclick=\"tab2(event, \'Btn5\')\">Documents Required</button>\r\n																</div>\r\n\r\n																<div id=\"Btn4\" class=\"tabcontent2\">\r\n																	<div class=\"wpb_wrapper\">\r\n																		<div class=\"wpb_text_column wpb_content_element\">\r\n																			<div class=\"wpb_wrapper\">\r\n																				<br>\r\n																				<p><b>Trade License Cancellation in Dubai</b></p>\r\n\r\n																				<p>There is a large part of business closing in the UAE which deals with the compensation for its employees. The employer has to deal with the cancellation of staff visas and work permits. A profound coordination is required in between Ministry of Labor and Naturalization &amp; Residency Department.</p>\r\n\r\n																				<p>As per the labor law of the UAE, employers should give a paid notice of two month to the employees before terminating the contract. There are various things you have to take care before trade license cancellation in Dubai. In such situations, a helping hand is never a bad idea. You can contact PRO Desk to take your worries away while you can relax during the liquidation process of your company.</p>\r\n\r\n																				<p>In some situations, employees are allowed to keep the residency visa until the license of the company runs out. Prior to cancellation and finalizing labor contacts, it is mandatory to formally cancel Etisalat and DEWA accounts to retrieve your deposits.</p>\r\n\r\n																				<p>Taking all of this in consideration, trade license cancellation in Dubai requires the approvals from federal and government authorities and specific document applications.</p>\r\n\r\n																			</div>\r\n																		</div>\r\n																		<div class=\"empty_space_10\"></div>\r\n																	</div>\r\n																</div>\r\n\r\n																<div id=\"Btn5\" class=\"tabcontent2 tab-links2\">\r\n																	<br>\r\n																	<p><b>Documents for Trade License Cancellation in Dubai</b></p>\r\n\r\n																	<p>The documents required for trade license cancellation in Dubai are as under</p>\r\n\r\n																	<ul>\r\n																		<li>Licensing and Registration Application form submission</li>\r\n																		<li>Original license, but if it is ended a copy should be submitted</li>\r\n																		<li>NOC or no-objection letter which is duly issued by Ministry of Social Affairs &amp; Labor</li>\r\n																		<li>Cancellation of Visa of the partner. If the applicant is a non GCC national, and sponsored by the license should also apply for visa cancellation.</li>\r\n																		<li>UAE Central Bank NOC for cancellation of foreign exchange dealer, shares &amp; bonds broker, money market &amp; currencies broker.</li>\r\n																	</ul>\r\n\r\n																</div>', NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-11-01 07:05:55', '2021-11-01 02:08:50'),
(46, NULL, 'career', NULL, NULL, NULL, NULL, '<div class=\"section-head \">\r\n										\r\n										<h3>Career</h3>\r\n										<p>At elite business setup, we are always looking for individuals seeking the best opportunity, to grow in their skills, join our professional team, we will train you with our experts, fill in the form below, our hr team will get in touch with you if there is an opening, welcome to our team.</p>\r\n									</div>', NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-11-01 07:22:16', '2021-11-01 02:32:09'),
(47, NULL, 'office_space', '58YIrf77HWRabCoIB0kcrvZBVgs3nJuHSroOKQFO.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-11-13 03:06:47', '2021-11-13 03:07:04'),
(50, NULL, 'home', 'M8o7JKGnyrJAjI9vyLVzZs6pw6zV59HIS0jpZ39b.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, '2022-03-31 07:12:01', '2022-03-31 07:12:01'),
(51, NULL, 'home', 'L0qC9Vc7Uuz9I4KJKP8NsySEGjEYQJdUxjsOj8S3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, '2022-03-31 07:13:20', '2022-03-31 07:13:20'),
(52, NULL, 'home', 'LGqbrYaHi4NRWt5IFv5hvlNWB4cVuKYx4GMJOjfM.png', NULL, '10', 'Drivers We Have', NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, '2022-03-31 11:18:23', '2022-03-31 11:18:23'),
(53, NULL, 'home', 'o6KI6fCFwXkmT9LmR1vCPpNHXFSh96xQwmRy8c5e.png', NULL, '2000', 'Happy Clients', NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, '2022-03-31 11:18:45', '2022-03-31 11:18:45'),
(54, NULL, 'home', '8xGOyhBMCOm5H71SkojkGGTfESJ9kjT12nEecJIy.png', NULL, '10', 'Years in Business', NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, '2022-03-31 11:19:11', '2022-03-31 11:19:11'),
(55, NULL, 'home', 'UmfS58TVw8kX1Qdmj0VqM62Uk6V1vg3Jjta6gioQ.png', NULL, 'SIMON GRUBER', '<p>Professional team got back to us very quick with our requirement helped us till the end of our stay, good fleet.</p>\r\n                                                    <span>Thank You</span>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, '2022-03-31 11:53:18', '2022-04-01 09:12:09'),
(56, NULL, 'our_services', 'immw4J73aXbezXgcNADlGWhsSm3WcMhkMTj7hszr.jpg', NULL, NULL, NULL, '<div class=\"section-title mb-25 ml10\">\r\n                    <h2>YACHTS</h2>\r\n                </div>\r\n                <div class=\"inner-about-content ml10\">\r\n                    <p>Compete with 100 players on a remote Lorem Ipsn gravida. Pro ain gravida nibh vel velit an auctor aliqueenean\r\n                    ollicitudin ain gravida nibh vel version an ipsum. Lorem Ipsn gravida. Pro ain gravida nibh vevelit auctor aliqueenean ollicitudin ain gravida nibh vel version an ipsum.</p>\r\n                    <p>Compete with 100 players on a remote Lorem Ipsn gravida. Pro ain gravida nibh vel velit an auctor aliqueenean\r\n                    ollicitudin ain gravida nibh vel version an ipsum. Lorem Ipsn gravida. Pro ain gravida nibh vevelit auctor aliqueenean ollicitudin ain gravida nibh vel version an ipsum.</p>\r\n                </div>', NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-31 14:58:14', '2022-03-31 14:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `route` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `meta_title`, `keywords`, `meta_description`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '1937 Rentals | Home', 'Corporate PRO services Dubai , Best business setup consultants in dubai,  No 1 business setup company in Dubai', 'Home Page', 'home', 1, '2022-04-07 05:27:16', '2022-04-11 00:10:42'),
(2, 'About Us', 'about-us', 'sadasdasda | dsfasfdsa', 'df', 'Hello I am Good', 'about_us', 1, '2022-04-07 05:36:53', '2022-04-08 00:12:37'),
(3, 'Our Services', 'our-services', 'df', 'df', 'df', 'our_services', 1, '2022-04-07 05:49:25', '2022-04-07 05:49:25'),
(4, 'Blog', 'blogs', 'df', 'df', 'df', 'blogs', 1, '2022-04-07 05:49:25', '2022-04-07 05:49:25'),
(5, 'Contact Us', 'contact-us', 'Best business setup consultants in Dubai | Corporate Pro Services Dubai', 'df', 'Corporate PRO services Dubai, Our set of Best business setup consultants in dubai includes professional support as we are No 1 business setup company in Dubai', 'contact_us', 1, '2022-04-07 05:50:29', '2022-04-07 00:51:54'),
(6, 'All Vehicles', 'all-vehicles', 'All Vehicles', 'asd', 'asd', 'all_vehicles', 1, '2022-04-12 10:13:43', '2022-04-12 10:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Elite Business Setup', '2021-10-26 05:41:38', '2021-10-26 05:41:38'),
(2, 'site_logo_header', 'DdgDiaOzUSxGNlvoQyqZLOBuPp7R3AkZRherCMND.png', '2021-10-26 05:42:17', '2023-05-31 00:58:38'),
(3, 'site_email', 'info@1937rentals.ae', '2021-10-26 09:25:48', '2022-04-02 08:28:28'),
(4, 'contact_no', '+971 50 807 3737', '2021-10-26 09:27:05', '2022-04-02 08:28:29'),
(5, 'address', 'Shop # 2, Capital Golden Tower, Dubai, UAE', '2021-10-26 09:54:18', '2022-04-02 08:28:29'),
(6, 'timings', 'Saturday to Thursday / 9:00 AM to 6:00 PM', '2021-10-26 09:54:18', '2021-11-16 17:54:28'),
(7, 'social_twitter', '#', '2021-10-26 09:54:18', '2021-10-26 05:27:05'),
(8, 'social_facebook', '#', '2021-10-26 09:54:18', '2022-04-02 08:38:20'),
(9, 'social_linkedin', '#', '2021-10-26 09:54:18', '2021-10-26 05:27:05'),
(10, 'social_pinterest', '#', '2021-10-26 09:54:18', '2022-04-02 08:38:20'),
(11, 'footer_about', '1937 Car Rentals is the best luxury car rental services in Dubai, we have a big fleet of 50 sports and luxury vehicles, we are known for the professional services we offer.', '2021-10-26 09:54:18', '2022-04-02 08:28:29'),
(12, 'google_location', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.747953978321!2d55.27192611544868!3d25.17798703865741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6920e3178097%3A0xcfd9d03021a93859!2sCapital%20Golden%20Tower!5e0!3m2!1sen!2s!4v1645267117012!5m2!1sen!2s', '2021-10-26 10:29:05', '2022-04-02 08:29:15'),
(13, 'header_image', 't99Zi8OgatKz8KJBeTKYVEAFwkWmEXtCsvy6l83N.jpg', '2021-10-27 09:24:03', '2022-03-31 03:40:24'),
(14, 'social_instagram', '#', '2021-10-26 09:54:18', '2022-04-02 08:38:20'),
(15, 'site_logo_footer', 'LWUSe4ubIGbLui6DoTy0BdOEBnlGmsC0rP3lqZco.png', '2021-10-26 05:42:17', '2021-10-27 04:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `brand_id`, `featured_image`, `name`, `price`, `slug`, `description`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(3, 4, '9iFvdBkZiuNOQLYPjjT0zWDk8hvZB68qiMhll2NQ.png', 'Audi R8 Spyder', 3500, 'audi-r8-spyder', '<p>The Audi R8 Spyder is one the most excellent choice while travelling the new city to explore the infrastructure and amazing sights. 1937 rentals bring you the latest Audi R8 cabriolet to drive on and make your dream come true. It has a capacity of 4 passengers’ seats and luggage space for 3 and having 2 doors. The car has an engine power of V10 and Maximum Horsepower @ RPM. 602 @ 8100. With daily mileage of around 250KM. It is a convertible car to make you hear all the sounds of wind while driving a super car. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-16 07:29:35', '2022-03-16 07:59:31'),
(4, 4, 'LqTVVkhWSbEwI9d0heijvmF7xtyPLh875ikSAaiQ.png', 'Audi RS Q3', 1600, 'audi-rs-q3', '<p>Audi RSQ3 is stylish yet sporty which comes in an economical rate to rent out. It has the engine power of 2.5l five-cylinder single turbo engine. Investing a bit more in such a spectacular car on rental basis while enjoying your trip is the first priority of Audi fans. This car has a Sportback with passenger capacity for 4 people. The horsepower of Audi RSQ3 is 394bhp at 5800 rpm with 345 lb. ft torque production at 1800 to 5850 rpm. This car accelerates from 0 to 62mph within 4.5 secs. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 02:15:06', '2022-03-21 02:15:06'),
(5, 4, 'b74vuE5rrDHJsyCSoSqsCR73ZXysCUjStJ8qe2zg.png', 'Audi RS 3', 1200, 'audi-rs-3', '<p>Audi RS3 is a car which is best for small family with reasonable leg space and headspace. It a type which comes under the range of sports back car. Investing a bit more in such a spectacular car on rental basis while enjoying your vocational trip is the first priority. It has the most unique type of five-cylinder engine with power full exotic speed. This car accelerates from 0 to 100km/h within just 9.1 seconds. with seating capability of 5 and luggage capacity of 340L. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 02:18:37', '2022-03-21 02:18:37'),
(6, 4, 'lXutOyWpM0SV4AXnw3mK8GrfZoj7ueWJdLff60c6.png', 'Audi Q8', 1200, 'audi-q8', '<p>Audi Q8 is a moderate sized SUV with all the luxury and elite features. This car highly equipped with all the specifications and premium interiors. It is the best type of car to rent out when you want to stay in a same car and enjoy the whole journey together. Audi q8 has V6 engine which goes up to 335 HP at 5000 RPM with 369 lb. ft torque at 1370 rpm. It has the capacity for five occupants with around 30.5cubic ft behind the rear seats of this car. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 02:22:28', '2022-03-21 02:22:28'),
(7, 4, '20Kk3yGayBRn8w0VdUf3mVA7dw27iJGe839yzR02.png', 'Audi RS Q8', 2500, 'audi-rs-q8', '<p>Choose to travel within the spectacular manner with ongoing thrill throughout the journey. With a tranquil SUV Audi RS Q8. This is one of the best choices for family of 4 or more. The engine power of this SUV has a huge twin-turbocharged 4.0-liter V-8 engine that produces 591 horsepower and 590 lb. ft of torque. The fastest and most smooth SUV car which has the capacity of 5 seats for passengers and luggage space for 4 and body layout with 5 doors. To invest for lifelong experiences is the best and first choice of most SUV car lovers. This car gives you daily mileage of around 250KM. To make your whole journey remarkable and memorable our Audi RS q8, is at your service with the best specs and faultless smooth drive. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 02:26:23', '2022-03-21 02:26:23'),
(8, 5, 'epbd1y6J65x9L5f10FKA7m80GBq1CikuZ75ut9IN.png', '911 Carrera S Cabriolet', 3000, '911-carrera-s-cabriolet', '<p>Porsche is one of the most luxurious brands which offers it customer pure heritage of old luxury feel. This iconic Porsche 911 Carrera is a two-seater sports auto with a V6 turbocharged machine generating plentitude of power alongside perfect running. The Porsche 911 has 2 Petrol Engine on offer. The Petrol machine is 2981 cc and 3996 cc. It\'s available with Manual &amp; Automatic transmission. Depending upon the variant and energy type the 911 has a mileage of and Ground clearance of 911 is 109. The 911 is 4-seater and having 6-cylinder autos and has length of 4519 mm, range of 1852 mm and a wheelbase of 2450 mm. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(9, 5, 'jVMLkYXyTlTxsAIbXmfA9HphIG975ReDPcDSh4SX.png', '911 Carrera Coupe', 2000, '911-carrera-coupe', '<p>A sleek look with 2 doors is a range of Coupe super cars. It is the perfect choice for couples who want to experience the super speed with the luxury comfort. This car has an engine power of v10 and the top speed of 308 km/h and goes like crazy from 0 to 100 in just 3.7 sec. lay out of this car is 2 doors with 2 passenger’s seats. And 1 luggage capacity. Our car gives you daily mileage of around 250KM. To make your whole journey remarkable and memorable, our Porsche 911 Carrera Coupe, is at your service with seamless smooth drive. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 02:54:47', '2022-03-21 02:54:47'),
(10, 5, 'NRRXbeILh3w9mFKZ99fLHzi3TApG7C8HlSeH7mwQ.png', 'PORSCHE CAYENNE COUPE', 1500, 'porsche-cayenne-coupe', '<p>Porsche has something which makes them unique is their heritage of cool and calm sleek designs along with the super speed. It is the number one choice of super car lovers. those who want to drive a super speedy ride with the peace of mind. It has an engine power of v6 it gives you an acceleration of 0 to 100 km/h within just 6.0 sec. and a top speed of 243km/h and max torque of 450 NM. All these specs show this car is not less than any super car. It has 5 seats with 5 doors lay out and 3 luggage space. Our car gives you daily mileage of around 250KM. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 02:58:55', '2022-03-21 02:58:55'),
(11, 5, 'XWZzrfXyYxOAaR1cs301lnrRaTfVrKcYWvRIh8PO.png', 'PORSCHE CAYENNE COUPE GTS', 2500, 'porsche-cayenne-coupe-gts', '<p>Porsche has something which makes them unique is their heritage of cool and calm sleek designs along with the super speed. It is the number one choice of super car lovers. those who want to drive a super speedy ride with the peace of mind. This car ahs the twin turbo V8 engine which does not sound so heavy but sporty and soothing for car lovers. this car generates 0 to 100 km/h in just 4.5 seconds. this car has 4 seats for occupants under the style of coupe Cayenne. This car can carry around 745L luggage and 1710L with folded rear seats. Our team stays connected for roadside assistance 24/7. Our car gives you daily mileage of around 250KM.We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 03:43:04', '2022-03-21 03:43:04'),
(12, 6, 'QrrMHcjMl8eMttMNer0UCK7GPSMkdvZRYyGhlOYa.png', 'Range Rover SVR', 2200, 'range-rover-svr', '<p>Travel with complete family or group of people within the sporty SVR by Range Rover is wiser then traveling in so many different cars. This car is a special edition in terms of class, interior, looks, design, aerodynamics, cabin and what not. Not only does this new SUV look stunning, but you’re also heading to the roads of Dubai with the fastest, most important Land Rover ever produced. This model is backed by a 575 hp interpretation of the 5.0-liter V8 supercharged engine and generates 516 lb.-ft of torque. The luggage capacity of this car is approximately 900L. Our team stays connected for roadside assistance 24/7. Our car gives you daily mileage of around 250KM.We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-21 03:54:43', '2022-03-21 03:54:43'),
(13, 6, 'iTAUkIrZ0RtCuT62U0jUEb7E7ZGZ5VKIScss6FCM.png', 'Range Rover VOUGE', 1500, 'range-rover-vouge', '<p>Range Rover Vogue is just the car from the very beginning type of car amongst Range rover variants. This is the best muscular SUV from Range Rover’s range of SUVs. The best part about travelling by road is that it gives you so much power to explore the city form another perspective. The engine power of this car is 45.0 V8 supercharged vogue engine. With the horsepower of 2500 to 5500 RPM. This car is triple rowed seating alignment which has 7 occupant’s spacious cabin. With the luggage capacity of around 591 liters. This monstrous car has the power to accelerates from 0 to 100 km/h in just 6seconds. Our team stays connected for roadside assistance 24/7. Our car gives you daily mileage of around 250KM.We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 03:58:08', '2022-03-21 03:58:08'),
(14, 6, 'nQekqJocqEKz4BuETiuGYLe7lf4RqeFmLYzAwIWh.png', 'Range Rover Sport', 1400, 'range-rover-sport', '<p>Range Rover sport has the classiest body outlook. The sleekness, smoothness, and muscular body cuts make this car look so dashing while running on the roads. This car is going to give you a comfortable peaceful ride off-road as well. This beast comes with an engine of V8 370 hp (276 kW) and 510 Nm. (376 lb. Ft). A perfect selection for number of 5 occupants who want to enjoy the long journey in a relaxed luxury manner. Range Rover Sport is quite spacious that is why luggage around 3 is not a big deal to carry in this car which could be like 784L. The outlay of this hunk of 5 doors. This car has the capacity to boost from 0 to 100km/h within just 7.2 seconds even being fully loaded. Our team stays connected for roadside assistance 24/7 as well. Our car gives you daily mileage of around 250KM.We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 04:25:42', '2022-03-21 04:25:42'),
(15, 6, 'q4hlFXw18XaaKlTZJWEKIGoTqkWXKMtEasU8PgMz.png', 'Range Rover Velar', 1200, 'range-rover-velar', '<p>This car has all the luxury features with connectivity, comfort, and sustainable interior to go on road or off road as well. This car has beautifully balanced in terms of all convenience and space room. Range Rover Velar is one of the best amongst all type of SUV with all the latest technologies to ravel with. The engine of strong power of V6 with max power 247 bhp at 5500 rpm. And max toque is around 365nm at 1200 rpm. This car has the unique capability to go from 0 to 100km/h within just 6.7sec while fully loaded. It has 5 seating capacity with approx. 513L, and it is expandable to 1250L with folded seats. Our team stays connected for roadside assistance 24/7 as well. Our car gives you daily mileage of around 250KM.We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 04:31:22', '2022-03-21 04:31:22'),
(16, 8, '6BGOaLGJrqGKMtCeh7GrpbTc7RQCmTTZi5Xv0ppM.png', 'BMW X6 40 I M', 1800, 'bmw-x6-40-i-m', '<p>BMW X6 IM is a medium sized elite class crossover car. It is basically derived from coupe styled cars. Best to deliver luxury comfort and feel with super max speed and specs. The engine capability of this car is around 408KW at 547 horsepower at 6000rpm. It is the number one choice of luxury car lovers. those who want to drive a super speedy ride with the luxurious interiors and classy outlay. Around 5 occupants can sit comfortably in this car. But preferably 4, for a longer journey. BMW x6 can carry luggage capability of almost 580L. Our team stays connected for roadside assistance 24/7 as well. Our car gives you daily mileage of around 250KM.We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 04:35:09', '2022-03-21 04:35:09'),
(17, 8, 'PaqNrvG0HRDOshRHqBlHfzDogFflJa29HxvSD7C8.png', 'BMW m3C', 2000, 'bmw-m3c', '<p>BMW M3C is a classic looked car with having 2 doors. And sleek, attractive exterior and aerodynamics. With the luxury features and classical interior this car becomes the most demanding among our customers. This car has an engine power of this car is at manual 6 in 2000, this car has the classical look of fastback with 2 doors coupe. Tis car has 365 Nm / 269 lb.-ft of with V6 engine. Around 5 occupants can sit comfortably in this car. But preferably 4, for a longer journey. It has the trunk load capacity of around 410l. Our team stays connected for roadside assistance 24/7 as well. Our car gives you daily mileage of around 250KM.We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 04:54:47', '2022-03-21 04:54:47'),
(18, 9, 'sCw8RK73qAMXYhzqTKWZfSfvsbN11r3xWxJpanwg.png', 'Bentley GTC', 4500, 'bentley-gtc', '<p>Planning to look best sightseeing in a reasonable convertible car then this car is definitely the best choice for you. It is the best type of car to rent out when you want to stay in a same car and enjoy the whole journey with open or covered top. Traveling in a GTC is a dream of grand tours lovers, but only few can fulfill this. The aesthetic looks and specifications make it superior in its own class with high-end features. This car come with V8 engine has a capacity of 4 seats for occupants. And luggage capacity for 3 and has 2 doors. Bentley has this charm to give you comfortable ride with luxury features and class. And our car gives you around 250 KM daily mileage. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-21 04:58:18', '2022-03-21 04:58:18'),
(19, 9, 'xpirUnnN6GrKXgBuWUdpT0gEySxK41macvbyoNVM.png', 'Bentley Flying Spur', 4000, 'bentley-flying-spur', '<p>Bentley Flying Spur is not an ordinary car in terms of outlook and interiors. This has the best interior from craftsmanship to comfort its riders. The sleek and smooth look makes it even more attractive and enhance its true beauty. Bentley flying Spur, sedan car come with 6litre. Twin turbocharged w12 engine. This car has 8-speed Quick shift automatic transmission. And torque production of 900Nm, 664 lb. ft @ 1500-5000 rpm. This car has power to go from 0 to 100km/h in just 3.8 secs. With capacity for 4 passengers. And luggage room for 4 and has 4 doors. It has the large cabin which gives you spacious travelling with fine legroom all around the city and gives you around 250 KM daily mileage. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 05:01:49', '2022-03-21 05:01:49'),
(20, 7, 'Pv4lWj9x495RZEn1OtPNxyrQNfNDnvkagbPxmQY0.png', 'Rolls Royce Dawn', 4500, 'rolls-royce-dawn', '<p>We are excited to let you feel the sensory luxurious feel of our rental car Rolls Royce Dawn. We would like you to enjoy the best infrastructure of Dubai in some extraordinary car to travel in. A smooth one touch rooftop accompanies you to experience the best views and allow you to capture classical picture all around the journey. Rolls Royce Dawn give you four-seater comfortable cabin with a luggage capacity of 2. And 6.6-liter V12 twin turbo engine which gives you enormous max 820Nm@1500-5000rpm torque. We offer you our services on credit card or cash with free cancellation in case of emergency. With daily mileage of around 250KM. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 05:05:00', '2022-03-21 05:05:00'),
(21, 7, 'bskfdD2AOeKlwsH01nna4mqTQqqMFPZTSFqW4R7e.png', 'Rolls Royce Cullinan', 6000, 'rolls-royce-cullinan', '<p>What stop you to rent out Rolls Royce Cullinan for your travel in Dubai? when we are here to give you best rates for such a luxurious car. Investing a bit more while traveling is never a bad option to try, as it will stay longer with you in your good memories. This car offers you to have luggage of 4, which is around 580L with you. with 5 finest seats for passengers to enjoy even a long journey peacefully. with an engine power V12 and 563 HP at 5000 rpm. This SUV car is the first priority for a family ride in a super beast. this car can go from 0 to 100km/h in just 4.8 sec which is quite fast for such SUVs. With automatic transmission. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 05:09:26', '2022-03-21 05:09:26'),
(22, 7, 'Q7ofLTh9fX4KDvEiSULCcClX0NBC9E7uq34hAZ1B.png', 'Rolls Royce Wraith', 4000, 'rolls-royce-wraith', '<p>What stop you to rent out Rolls Royce Wraith for your travel in Dubai? when we are here to give you best rates for such a luxurious car. Investing a bit more while traveling is never a bad option to try, as it will stay longer with you in your good memories. This car offers you to have luggage of 4, which is around 580L with you. with 5 finest seats for passengers to enjoy even a long journey peacefully. with an engine power V12 and 563 HP at 5000 rpm. This SUV car is the first priority for a family ride in a super beast. this car can go from 0 to 100km/h in just 4.8 sec which is quite fast for such SUVs. With automatic transmission. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-21 05:15:53', '2022-03-21 05:15:53'),
(23, 2, 'LVhK5gbNvIgYTCIDwDFHfk4XqkGjVW5klm0Bu9z3.png', 'Lamborgini Urus', 4500, 'lamborgini-urus', '<p>This car is number one super luxurious sports SUV. Which is the best choice to full fill your dream of driving a sports car while travelling with your whole family. Our Lamborghini Urus has a twin-turbo engine power of V8 it goes like crazy from 0 to 62 mph in 3.6 seconds and reaches a top speed of 190 mph. this SUV with sporty engine is masterly choice to stay in budget and travel with a family in a luxurious manner. This car gives you daily mileage of around 250KM. To make your whole journey remarkable and memorable our Lamborghini Urus, is at your service with the best specs and faultless smooth drive. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-21 05:33:46', '2022-03-21 05:33:46'),
(24, 2, 'RSvL7T2B77ON0BCI0ACfa7GUjaLWqTKU9vzQacYP.png', 'Lamborgini Evo Spider', 4500, 'lamborgini-evo-spider', '<p>This car gives you the outstanding exterior with impressive and premium interior. This high-class car is vigorously speedy. It has the engine power of V10 displaces 5.2l and produces the maximum horsepower of 631 HP with 442 lb. Ft of torque production for seamless drive. It has seven speed automatic transmission. It has 2 seats for passengers and a luggage space for 1 baggage. This car goes from 0 to 100 km/h like a beast within just 3.1 secs. To invest in luxurious rental cars is the one of the premium choices while travelling around the Dubai which has a lot of places for sightseeing. It has a strong engine of V10 power. With daily mileage of around 250KM. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-21 05:37:36', '2022-03-21 05:37:36'),
(25, 2, 'nCqjtJZI2IuQHT3IC8LAP63rTV5E1O1Hwg6NVV8P.png', 'Lamborgini Evo Coupe', 3800, 'lamborgini-evo-coupe', '<p>A best choice for the lovers of sightseeing. This car gives you thrill of enjoying highest speed car with the comfort of luxurious and premium quality interiors. Evo coupe is the best combination for speed and power of V10 Engine. The Horsepower of car is RPM. 630 At 8000; Maximum Torque @ RPM. 442 which gives the thrilling yet effortless ride on challenging roads. With the capacity of 2 passenger’s seat with 1 baggage space and 2 doors layout, that make this car the best for an induvial or for couple. With the daily mileage of 250KM. We offer you our services on credit card or cash with free cancellation in case of emergency. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 05:41:28', '2022-03-21 05:41:28'),
(26, 3, 'TbUcYUSsTORNShNY2hw92aIqQTIKc5kTL7Xl0wjI.png', 'Mercedes G Class 63', 3000, 'mercedes-g-class-63', '<p>The best part about travelling by road is that it gives you so much power to explore the city form another perspective. With our Mercedes G class 63 we get you a chance to visit whole city with a builder type class SUV who is capable enough to carry 5 passengers. With an engine capability of 4.0L V8 engine that is quite powerful to make you experience the flow of super cars with your family. This car gives you the 577 Horsepower with 6000 RPM power torque for smooth and feasible ride on the difficult routes as well. It has the automatic transmission. And luggage capacity of around 38.1 to 68.6 cubic. Ft which goes around 4 luggage bags. The speed of the car is works like a booming power from 0 to 60 mph within just 4.5 sec and this boost is quite attractive for such a bulky or heavy SUV car. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-21 05:48:22', '2022-03-21 05:48:22'),
(27, 3, 'YnzCis3lZdc5uB7FPfOTakaL7eQRZqoYBqOzUcXq.png', 'Mercedes GT 63 S', 2500, 'mercedes-gt-63-s', '<p>GT63s is one of the top-notch or high-end variant of all grand tours by Mercedes. The most luxury comfort, class, and features that Mercedes GT 63 S has to offer to its travelers. Mercedes GT62 S is a 4-door super grand tour car with an engine power of V8 and torque of 500Nm at 369 lb. Ft. The interior of Mercedes GT 63 S is extremely exceptional and supreme which makes it the high demand car for business class rental services. It has 4 passenger’s seats. With luggage capacity for 3 and 4 doors. Our car gives you daily mileage of around 250KM. To make your whole journey remarkable and memorable, our Mercedes GT 63 S, is at your service with effortless smooth drive. With automatic transmission. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 05:55:01', '2022-03-21 05:55:01'),
(28, 3, 'TeRrQZq5vfjWLcG4YBrLmNpAyNBcxNf2SNZk5EXb.png', 'Mercedes C Class Cabriolet', 800, 'mercedes-c-class-cabriolet', '<p>A lover of convertible car is always attracted towards cabriolet Mercedes. This car has the power to give you both the experiences of open-air and covered roof within a single car. This car has the engine power of V6 and four seats for passengers to travel a hassle-free long journey. Mercedes c class Cabriolet is capable enough to cater the luggage for 1. And having 2 doors lay out with extremely crisp and sound exteriors. This car has a cruise control as well to enhance your driving experience. And give the daily mileage of 250 km. To make your whole journey remarkable and memorable, our Mercedes c class Cabriolet, is at your service with trouble free smooth drive with automatic transmission. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 05:59:17', '2022-03-21 05:59:17'),
(29, 3, 'VD8lVW3GRAzDBnPKTi71TmhRfr88hl8jt8RrZRdu.png', 'Mercedes E450 AMG Cabriolet', 800, 'mercedes-e450-amg-cabriolet', '<p>An attractive looks and seamless drive of the convertible car make it special. This car is quite good for couple or an adventurous individual who wants to experience whole ride with another level of thrill and fun. A well-equipped combination of amazing interiors and crispy exterior. This car has an engine of V6 with 3L twin turbo capacity. And 9 speed automatic transmission. four seats for passengers to travel a hassle-free long journey. Mercedes c class Cabriolet is capable enough to cater the luggage for 1. And having 2 doors lay out with extremely crisp and sound exteriors. This car has a cruise control as well to enhance your driving experience. And give the daily mileage of 250 km. Our team is ready to serve you for 24/7 roadside assistance. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 06:17:59', '2022-03-21 06:17:59'),
(30, 3, 'Z8VZn3GND5JEs9T08gskrFXPnxq2IsClsyp4Os9U.png', 'Mercedes A35 AMG Hashback', 1000, 'mercedes-a35-amg-hashback', '<p>Mercedes Hatchback A35 AMG has its own class and looks. The shape and features of this car make this ca no less than any super car in terms of speed and comfort. This car is quite economical to rent out and spacious enough for 5 person’s family. This car has an engine power of 2.0l inline twin turbo Engine and horsepower of 302 HP at the rate of 5800 RPM torque. This car has an AMG 7 speed automatic transmission. And it can carry weightage of luggage around 370.1 to 210L cargo or baggage. This car is just like big blast in small packet it goes from 0 to 100KM/h in just 4.7 secs. The comfort and luxury feel of this car is outclass. And give the daily mileage of 250 km. Our team is ready to serve you for 24/7 roadside assistance. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 06:37:42', '2022-03-21 06:37:42'),
(31, 3, 'w2lrwEFUAV6EOouIDnszQ5JPQ05KmLOoEQk42jnt.png', 'Mercedes S Class', 1000, 'mercedes-s-class', '<p>Mercedes S class is a type of car which has all the luxury features and full-sized sedan. It has first class comfort impressive and elite design with 5-person seating capacity for passengers. It has the engine power of M256 number of cylinders are 6. Max power goes up to 362.07 BHP at 5500 -6100 Rpm. Max torque 500nm at 1600 to 4500 Rpm. This car is top spot of Mercedes categories. This is the first choice amongst business class. Latest model goes from 0 to 100km/h with in just 5.1 secs. The comfort and luxury feel of this car is outclass. And give the daily mileage of 250 km. Our team is ready to serve you for 24/7 roadside assistance. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 06:43:34', '2022-03-21 06:43:34'),
(32, 1, 'YV4Ju6EycgdvC6ZmOpWiymICPLzxqdq3PE35ObOV.png', 'Ferrari 488 Spider', 4000, 'ferrari-488-spider', '<p>A super-fast car is another name of Ferrari. This car has open roof top. And this car gives you complete thrill of open-air drive with extreme level comfort. It has the most vigorous and dynamic V8 engine which goes like crazy from 0 to100 within 3 seconds only and this speedy beast accelerates around 661 HP with almost 561 lb. Ft torque production which make this an effortless car to drive. Ferrari 488 spider has 2 passenger seats and 1 luggage capacity with the layout of 2 doors. This car comes with a cruise control to enhance your whole driving experience. The comfort and luxury feel of this car is outclass. And give the daily mileage of 250 km. Our team is ready to serve you for 24/7 roadside assistance. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 06:46:48', '2022-03-21 06:46:48'),
(33, 1, 'UtkgSql6c4CyZodcDfbSKw56pwVjc8r0gzqQ5b7q.png', 'Ferrari 488 GTB', 3800, 'ferrari-488-gtb', '<p>This is a top-of-the-line grand tour amongst all Ferrari 488 variants. And it will make your whole experience of driving a super car more thrilled with extra ordinary luxury feel and comfort. This car has accompanied with the most heavy and powerful engine of V8. The engine boost from 0 to 100 km/h within just 3.1 seconds and this speed giant generates 661 HP with almost 561 lb. Ft torque production which make this an effortless car to drive. Ferrari 488 GTB has 2 passenger seats and 1 luggage capacity with the fits out of 2 doors. With automatic transmission. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 06:53:08', '2022-03-21 06:53:08'),
(34, 1, 'YAo2xhPPsAP8loXoeXWz9gwzzIEoWR72oSMUuBMZ.png', 'Ferrari F8 Tributo Spyder', 5500, 'ferrari-f8-tributo-spyder', '<p>The best part about travelling in a super car, is that it gives you so much power to explore the city from another perspective. Experience such things while travelling makes the everlasting pleasing memories. F8 Tributo Spyder has its own charm and breaking speed limit characteristic. The most demanding car for speed lovers. This is one of the mid-range engine cars. This super car has the most exotic sleeky look. This car has V8 engine which accelerates 710 HP at 8000 RPM and crazy boom from 0 to 100km/h in 2.9 secs. And maximum torque is 568 lb. Ft. at 3250 RPM. Ferrari F8 Tributo has 2 passenger seats and 1 luggage capacity with the fits out of 2 doors. This car comes with a cruise control to enhance your whole driving experience. With automatic transmission. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 1, 1, '2022-03-21 06:57:21', '2022-03-21 06:57:21'),
(35, 1, 'nJRW0G67D1xVp9UCxpb7EjGHaUaGQ8I0QS1eKXlG.png', 'Ferrari F8 Tributo', 4500, 'ferrari-f8-tributo', '<p>The best part about travelling in a super car, is that it gives you so much power to explore the city from another perspective. Experience such things while travelling makes the everlasting pleasing memories. F8 Tributo has its own charm and breaking speed limit characteristic. The most demanding car for speed lovers. This is one of the mid-range engine cars. This super car has the most exotic sleeky look. This car has V8 engine which accelerates 710 HP at 8000 RPM and crazy boom from 0 to 100km/h in 2.9 secs. And maximum torque is 568 lb. Ft. at 3250 RPM. Ferrari F8 Tributo has 2 passenger seats and 1 luggage capacity with the fits out of 2 doors. This car comes with a cruise control to enhance your whole driving experience. With automatic transmission. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 07:09:06', '2022-03-21 07:09:06'),
(36, 1, 'z3q4ey4MyS72Lc9aUCOmHypv0LA3GDZa4b9lTUkA.png', 'Ferrari F8 Roma', 5500, 'ferrari-f8-roma', '<p>F8 Roma is a car of convenience with class and luxurious feel. It is a type of coupe car. It gives you exotic feel for racetrack alongside satisfying and pleasing drive on back road. It is choice of people who wants a fascinating yet luxurious feel in a smooth car which has speed and class both. It has thundering power of V8 engine with 612 HP. It has 2 seats and 1 luggage room. So, make your impression classy among your friends and colleagues and rent out a sports car from us in economical rates. With daily mileage of around 250KM. To make your whole experience remarkable and memorable our Ferrari Roma is at your service with the best specs and faultless smooth drive. Our team stays connected for roadside assistance 24/7. We offer you premium cars with exclusive services like free pickup and drop off and free cancellation facility at an event of emergency. 1937 rentals provide their services over cash or credit card for the ease of their clients.</p>', 0, 1, '2022-03-21 07:25:55', '2022-03-21 07:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_features`
--

CREATE TABLE `vehicle_features` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_features`
--

INSERT INTO `vehicle_features` (`id`, `vehicle_id`, `name`, `value`, `is_featured`, `created_at`, `updated_at`) VALUES
(5, 3, 'Engine', 'V10', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(6, 3, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(7, 3, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(8, 3, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(9, 3, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(10, 3, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(11, 3, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(12, 3, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(13, 3, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(14, 3, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(15, 3, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(16, 3, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(17, 3, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(18, 3, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(19, 3, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(20, 3, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(21, 3, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(22, 3, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(23, 3, 'Price', '3500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(24, 3, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(25, 4, 'Engine', 'V5', 1, '2022-03-21 02:15:06', '2022-03-21 02:15:06'),
(26, 4, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(27, 4, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(28, 4, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(29, 4, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(30, 4, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(31, 4, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(32, 4, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(33, 4, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(34, 4, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(35, 4, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(36, 4, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(37, 4, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(38, 4, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(39, 4, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(40, 4, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(41, 4, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(42, 4, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(43, 4, 'Price', '1600', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(44, 4, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(45, 5, 'Engine', 'V5', 1, '2022-03-21 02:18:37', '2022-03-21 02:18:37'),
(46, 5, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(47, 5, 'Doors', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(48, 5, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(49, 5, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(50, 5, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(51, 5, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(52, 5, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(53, 5, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(54, 5, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(55, 5, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(56, 5, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(57, 5, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(58, 5, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(59, 5, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(60, 5, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(61, 5, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(62, 5, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(63, 5, 'Price', '1200', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(64, 5, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(65, 6, 'Engine', 'V6', 1, '2022-03-21 02:22:29', '2022-03-21 02:22:29'),
(66, 6, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(67, 6, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(68, 6, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(69, 6, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(70, 6, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(71, 6, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(72, 6, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(73, 6, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(74, 6, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(75, 6, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(76, 6, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(77, 6, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(78, 6, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(79, 6, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(80, 6, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(81, 6, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(82, 6, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(83, 6, 'Price', '1200', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(84, 6, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(85, 7, 'Engine', 'V8', 1, '2022-03-21 02:26:23', '2022-03-21 02:26:23'),
(86, 7, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(87, 7, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(88, 7, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(89, 7, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(90, 7, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(91, 7, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(92, 7, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(93, 7, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(94, 7, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(95, 7, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(96, 7, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(97, 7, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(98, 7, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(99, 7, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(100, 7, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(101, 7, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(102, 7, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(103, 7, 'Price', '2500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(104, 7, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(105, 8, 'Engine', 'V6', 1, '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(106, 8, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(107, 8, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(108, 8, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(109, 8, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(110, 8, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(111, 8, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(112, 8, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(113, 8, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(114, 8, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(115, 8, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(116, 8, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(117, 8, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(118, 8, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(119, 8, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(120, 8, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(121, 8, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(122, 8, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(123, 8, 'Price', '3000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(124, 8, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(125, 9, 'Engine', 'V8', 1, '2022-03-21 02:54:47', '2022-03-21 02:54:47'),
(126, 9, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(127, 9, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(128, 9, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(129, 9, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(130, 9, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(131, 9, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(132, 9, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(133, 9, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(134, 9, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(135, 9, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(136, 9, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(137, 9, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(138, 9, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(139, 9, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(140, 9, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(141, 9, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(142, 9, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(143, 9, 'Price', '2000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(144, 9, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(145, 10, 'Engine', 'V6', 1, '2022-03-21 02:58:55', '2022-03-21 02:58:55'),
(146, 10, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(147, 10, 'Doors', '6', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(148, 10, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(149, 10, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(150, 10, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(151, 10, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(152, 10, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(153, 10, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(154, 10, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(155, 10, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(156, 10, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(157, 10, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(158, 10, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(159, 10, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(160, 10, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(161, 10, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(162, 10, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(163, 10, 'Price', '1500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(164, 10, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(165, 11, 'Engine', 'V8', 1, '2022-03-21 03:43:04', '2022-03-21 03:43:04'),
(166, 11, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(167, 11, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(168, 11, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(169, 11, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(170, 11, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(171, 11, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(172, 11, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(173, 11, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(174, 11, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(175, 11, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(176, 11, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(177, 11, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(178, 11, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(179, 11, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(180, 11, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(181, 11, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(182, 11, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(183, 11, 'Price', '2500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(184, 11, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(185, 12, 'Engine', 'V8', 1, '2022-03-21 03:54:43', '2022-03-21 03:54:43'),
(186, 12, 'Seats', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(187, 12, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(188, 12, 'Luggage', '5', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(189, 12, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(190, 12, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(191, 12, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(192, 12, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(193, 12, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(194, 12, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(195, 12, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(196, 12, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(197, 12, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(198, 12, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(199, 12, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(200, 12, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(201, 12, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(202, 12, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(203, 12, 'Price', '2200', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(204, 12, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(205, 13, 'Engine', 'V8', 1, '2022-03-21 03:58:08', '2022-03-21 03:58:08'),
(206, 13, 'Seats', '7', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(207, 13, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(208, 13, 'Luggage', '5', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(209, 13, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(210, 13, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(211, 13, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(212, 13, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(213, 13, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(214, 13, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(215, 13, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(216, 13, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(217, 13, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(218, 13, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(219, 13, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(220, 13, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(221, 13, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(222, 13, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(223, 13, 'Price', '1500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(224, 13, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(225, 14, 'Engine', 'V8', 1, '2022-03-21 04:25:42', '2022-03-21 04:25:42'),
(226, 14, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(227, 14, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(228, 14, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(229, 14, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(230, 14, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(231, 14, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(232, 14, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(233, 14, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(234, 14, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(235, 14, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(236, 14, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(237, 14, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(238, 14, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(239, 14, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(240, 14, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(241, 14, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(242, 14, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(243, 14, 'Price', '1400', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(244, 14, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(245, 15, 'Engine', 'V4', 1, '2022-03-21 04:31:22', '2022-03-21 04:31:22'),
(246, 15, 'Seats', '7', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(247, 15, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(248, 15, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(249, 15, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(250, 15, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(251, 15, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(252, 15, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(253, 15, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(254, 15, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(255, 15, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(256, 15, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(257, 15, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(258, 15, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(259, 15, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(260, 15, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(261, 15, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(262, 15, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(263, 15, 'Price', '1200', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(264, 15, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(265, 16, 'Engine', 'V6', 1, '2022-03-21 04:35:09', '2022-03-21 04:35:09'),
(266, 16, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(267, 16, 'Doors', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(268, 16, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(269, 16, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(270, 16, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(271, 16, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(272, 16, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(273, 16, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(274, 16, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(275, 16, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(276, 16, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(277, 16, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(278, 16, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(279, 16, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(280, 16, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(281, 16, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(282, 16, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(283, 16, 'Price', '1800', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(284, 16, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(285, 17, 'Engine', 'V6', 1, '2022-03-21 04:54:47', '2022-03-21 04:54:47'),
(286, 17, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(287, 17, 'Doors', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(288, 17, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(289, 17, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(290, 17, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(291, 17, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(292, 17, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(293, 17, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(294, 17, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(295, 17, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(296, 17, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(297, 17, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(298, 17, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(299, 17, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(300, 17, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(301, 17, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(302, 17, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(303, 17, 'Price', '2000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(304, 17, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(305, 18, 'Engine', 'V8', 1, '2022-03-21 04:58:19', '2022-03-21 04:58:19'),
(306, 18, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(307, 18, 'Doors', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(308, 18, 'Luggage', '2', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(309, 18, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(310, 18, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(311, 18, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(312, 18, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(313, 18, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(314, 18, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(315, 18, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(316, 18, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(317, 18, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(318, 18, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(319, 18, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(320, 18, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(321, 18, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(322, 18, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(323, 18, 'Price', '4500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(324, 18, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(325, 19, 'Engine', 'V8', 1, '2022-03-21 05:01:49', '2022-03-21 05:01:49'),
(326, 19, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(327, 19, 'Doors', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(328, 19, 'Luggage', '2', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(329, 19, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(330, 19, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(331, 19, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(332, 19, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(333, 19, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(334, 19, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(335, 19, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(336, 19, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(337, 19, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(338, 19, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(339, 19, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(340, 19, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(341, 19, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(342, 19, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(343, 19, 'Price', '4000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(344, 19, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(345, 20, 'Engine', 'V12', 1, '2022-03-21 05:05:00', '2022-03-21 05:05:00'),
(346, 20, 'Seats', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(347, 20, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(348, 20, 'Luggage', '2', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(349, 20, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(350, 20, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(351, 20, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(352, 20, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(353, 20, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(354, 20, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(355, 20, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(356, 20, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(357, 20, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(358, 20, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(359, 20, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(360, 20, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(361, 20, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(362, 20, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(363, 20, 'Price', '4500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(364, 20, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(365, 21, 'Engine', 'V12', 1, '2022-03-21 05:09:26', '2022-03-21 05:09:26'),
(366, 21, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(367, 21, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(368, 21, 'Luggage', '4', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(369, 21, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(370, 21, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(371, 21, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(372, 21, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(373, 21, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(374, 21, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(375, 21, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(376, 21, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(377, 21, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(378, 21, 'Security Amount', '3000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(379, 21, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(380, 21, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(381, 21, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(382, 21, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(383, 21, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(384, 21, 'Price', '6000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(385, 21, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(386, 22, 'Engine', 'V12', 1, '2022-03-21 05:15:53', '2022-03-21 05:15:53'),
(387, 22, 'Seats', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(388, 22, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(389, 22, 'Luggage', '2', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(390, 22, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(391, 22, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(392, 22, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(393, 22, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(394, 22, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(395, 22, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(396, 22, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(397, 22, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(398, 22, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(399, 22, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(400, 22, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(401, 22, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(402, 22, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(403, 22, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(404, 22, 'Price', '4000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(405, 22, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(406, 23, 'Engine', 'V8', 1, '2022-03-21 05:33:46', '2022-03-21 05:33:46'),
(407, 23, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(408, 23, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(409, 23, 'Luggage', '2', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(410, 23, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(411, 23, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(412, 23, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(413, 23, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(414, 23, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(415, 23, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(416, 23, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(417, 23, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(418, 23, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(419, 23, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(420, 23, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(421, 23, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(422, 23, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(423, 23, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(424, 23, 'Price', '4500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(425, 23, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(426, 24, 'Engine', 'V10', 1, '2022-03-21 05:37:36', '2022-03-21 05:37:36'),
(427, 24, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(428, 24, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(429, 24, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(430, 24, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(431, 24, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(432, 24, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(433, 24, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(434, 24, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(435, 24, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(436, 24, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(437, 24, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(438, 24, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(439, 24, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(440, 24, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(441, 24, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(442, 24, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(443, 24, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(444, 24, 'Price', '4500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(445, 24, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(446, 25, 'Engine', 'V10', 1, '2022-03-21 05:41:29', '2022-03-21 05:41:29'),
(447, 25, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(448, 25, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(449, 25, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(450, 25, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(451, 25, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(452, 25, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(453, 25, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(454, 25, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(455, 25, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(456, 25, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(457, 25, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(458, 25, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(459, 25, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(460, 25, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(461, 25, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(462, 25, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(463, 25, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(464, 25, 'Price', '3800', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(465, 25, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(466, 26, 'Engine', 'V8', 1, '2022-03-21 05:48:22', '2022-03-21 05:48:22'),
(467, 26, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(468, 26, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(469, 26, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(470, 26, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(471, 26, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(472, 26, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(473, 26, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(474, 26, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(475, 26, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(476, 26, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(477, 26, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(478, 26, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(479, 26, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(480, 26, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(481, 26, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(482, 26, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(483, 26, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(484, 26, 'Price', '3000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(485, 26, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(486, 27, 'Engine', 'V8', 1, '2022-03-21 05:55:01', '2022-03-21 05:55:01'),
(487, 27, 'Seats', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(488, 27, 'Doors', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(489, 27, 'Luggage', '3', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(490, 27, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(491, 27, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(492, 27, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(493, 27, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(494, 27, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(495, 27, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(496, 27, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(497, 27, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(498, 27, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(499, 27, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(500, 27, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(501, 27, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(502, 27, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(503, 27, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(504, 27, 'Price', '2500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(505, 27, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(506, 28, 'Engine', 'V8', 1, '2022-03-21 05:59:17', '2022-03-21 05:59:17'),
(507, 28, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(508, 28, 'Doors', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(509, 28, 'Luggage', '2', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(510, 28, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(511, 28, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(512, 28, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(513, 28, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(514, 28, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(515, 28, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(516, 28, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(517, 28, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(518, 28, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(519, 28, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(520, 28, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(521, 28, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(522, 28, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(523, 28, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(524, 28, 'Price', '800', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(525, 28, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(526, 29, 'Engine', 'V6', 1, '2022-03-21 06:17:59', '2022-03-21 06:17:59'),
(527, 29, 'Seats', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(528, 29, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(529, 29, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(530, 29, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(531, 29, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(532, 29, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(533, 29, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(534, 29, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(535, 29, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(536, 29, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(537, 29, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(538, 29, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(539, 29, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(540, 29, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(541, 29, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(542, 29, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(543, 29, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(544, 29, 'Price', '800', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(545, 29, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(546, 30, 'Engine', '2.0L', 1, '2022-03-21 06:37:42', '2022-03-21 06:37:42'),
(547, 30, 'Seats', '4', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(548, 30, 'Doors', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(549, 30, 'Luggage', '2', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(550, 30, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(551, 30, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(552, 30, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(553, 30, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(554, 30, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(555, 30, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(556, 30, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(557, 30, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(558, 30, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(559, 30, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(560, 30, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(561, 30, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(562, 30, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(563, 30, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(564, 30, 'Price', '1000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(565, 30, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(566, 31, 'Engine', 'V6', 1, '2022-03-21 06:43:34', '2022-03-21 06:43:34'),
(567, 31, 'Seats', '5', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(568, 31, 'Doors', '3', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(569, 31, 'Luggage', '2', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(570, 31, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(571, 31, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(572, 31, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(573, 31, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(574, 31, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(575, 31, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(576, 31, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(577, 31, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(578, 31, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(579, 31, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(580, 31, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(581, 31, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(582, 31, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(583, 31, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(584, 31, 'Price', '1000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(585, 31, 'Deposit', '3000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(586, 32, 'Engine', 'V8', 1, '2022-03-21 06:46:48', '2022-03-21 06:46:48'),
(587, 32, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(588, 32, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(589, 32, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(590, 32, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(591, 32, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(592, 32, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(593, 32, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(594, 32, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(595, 32, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(596, 32, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(597, 32, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(598, 32, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(599, 32, 'Security Amount', '3000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(600, 32, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(601, 32, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(602, 32, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(603, 32, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(604, 32, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(605, 32, 'Price', '4000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(606, 32, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(607, 33, 'Engine', 'V8', 1, '2022-03-21 06:53:08', '2022-03-21 06:53:08'),
(608, 33, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(609, 33, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(610, 33, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(611, 33, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(612, 33, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(613, 33, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(614, 33, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(615, 33, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(616, 33, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(617, 33, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(618, 33, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(619, 33, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(620, 33, 'Security Amount', '3000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(621, 33, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(622, 33, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(623, 33, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(624, 33, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(625, 33, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(626, 33, 'Price', '3800', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(627, 33, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(628, 34, 'Engine', 'V8', 1, '2022-03-21 06:57:21', '2022-03-21 06:57:21');
INSERT INTO `vehicle_features` (`id`, `vehicle_id`, `name`, `value`, `is_featured`, `created_at`, `updated_at`) VALUES
(629, 34, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(630, 34, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(631, 34, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(632, 34, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(633, 34, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(634, 34, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(635, 34, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(636, 34, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(637, 34, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(638, 34, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(639, 34, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(640, 34, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(641, 34, 'Security Amount', '3000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(642, 34, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(643, 34, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(644, 34, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(645, 34, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(646, 34, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(647, 34, 'Price', '5500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(648, 34, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(649, 35, 'Engine', 'V8', 1, '2022-03-21 07:09:06', '2022-03-21 07:09:06'),
(650, 35, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(651, 35, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(652, 35, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(653, 35, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(654, 35, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(655, 35, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(656, 35, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(657, 35, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(658, 35, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(659, 35, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(660, 35, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(661, 35, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(662, 35, 'Security Amount', '3000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(663, 35, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(664, 35, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(665, 35, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(666, 35, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(667, 35, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(668, 35, 'Price', '4500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(669, 35, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(670, 36, 'Engine', 'V8', 1, '2022-03-21 07:25:55', '2022-03-21 07:25:55'),
(671, 36, 'Seats', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(672, 36, 'Doors', '2', 1, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(673, 36, 'Luggage', '1', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(674, 36, 'Free Pickup-Drop Off', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(675, 36, 'AUX', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(676, 36, 'USB', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(677, 36, 'Cruise Control', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(678, 36, 'Bluetooth', 'Yes', 0, '2022-03-16 07:29:35', '2022-03-16 07:29:35'),
(679, 36, 'Automatic', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(680, 36, 'Parking Sensor', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(681, 36, 'Navigation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(682, 36, 'Full Insurance', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(683, 36, 'Security Amount', '3000', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(684, 36, 'Security Type', 'Card Only', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(685, 36, 'Payment Type', 'Credit Card & Cash', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(686, 36, 'Free Cancellation', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(687, 36, '24/7 Customer Service', 'Yes', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(688, 36, 'Mileage Daily', 'KM250', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(689, 36, 'Price', '5500', 0, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(690, 36, 'Deposit', '5000', 1, '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(691, 37, 'Engine', 'Vq1', 0, '2022-04-04 13:20:32', '2022-04-04 13:20:32'),
(692, 38, 'asd', '5', 0, '2022-04-06 14:10:39', '2022-04-06 14:10:39'),
(693, 39, 'Engine', 'Yes', 0, '2022-04-11 00:05:53', '2022-04-11 00:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_gallery_images`
--

CREATE TABLE `vehicle_gallery_images` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_gallery_images`
--

INSERT INTO `vehicle_gallery_images` (`id`, `vehicle_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 3, 'KqVgsdrizLTBSJfcLjFCMgvWresSXbq7NMAw7yvD.jpg', '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(5, 3, 'Mmhsv9FVnQn76QhpQQ6dLiDOma9iQgUIvKp5aW5O.jpg', '2022-03-16 07:29:36', '2022-03-16 07:29:36'),
(6, 3, 'G2riB4JAP8jIj8awjYEOAahyASjtWPN1D20CYRlT.jpg', '2022-03-16 07:29:37', '2022-03-16 07:29:37'),
(7, 4, 'ZjwCygbhbYahAR26AfNJt5s6sZE2Waemq2ym4WCd.jpg', '2022-03-21 02:15:06', '2022-03-21 02:15:06'),
(8, 4, 'EtJg86vp5GWj4RWQWhrXLO5F6QRAlE8bk3sy7G8w.jpg', '2022-03-21 02:15:06', '2022-03-21 02:15:06'),
(9, 4, 'pTaluwxNWcvcPNd7mVkbgzqnEWQXOhYLE4ge7NAO.jpg', '2022-03-21 02:15:06', '2022-03-21 02:15:06'),
(10, 5, 'AaH0K94QzOlCgiWFaqozG947gyXAKK1oXBP3yVAU.jpg', '2022-03-21 02:18:37', '2022-03-21 02:18:37'),
(11, 5, 'ApZpYmyEbKDCCLYCi75figzxffqusmJObSO645jV.jpg', '2022-03-21 02:18:37', '2022-03-21 02:18:37'),
(12, 5, 'utHUvndpp4IK09F4GI70eY7HKHWyFUhQ4OFTyOCj.jpg', '2022-03-21 02:18:37', '2022-03-21 02:18:37'),
(13, 5, 'FGm5GK8SvIOyRxVeJXHLEZS21CwPdTYA6w5ANuBb.jpg', '2022-03-21 02:18:37', '2022-03-21 02:18:37'),
(14, 6, 'bfZJbqZa26WzEatve4JzXL5vZpHM0osc5eOHVAMU.jpg', '2022-03-21 02:22:29', '2022-03-21 02:22:29'),
(15, 6, 'wKdjdLRPKoiTXTAa7SYTXD2vMRyqAWsH8yvBG6yK.jpg', '2022-03-21 02:22:29', '2022-03-21 02:22:29'),
(16, 6, '1I8qDKkZ2zrUyaeyBEOVdrpv9XbmFs4hdXUUkoNx.jpg', '2022-03-21 02:22:29', '2022-03-21 02:22:29'),
(17, 6, '7lFHN2OdKCdtcej2rwEEh6BLoTKgojzwRhzVN2ru.jpg', '2022-03-21 02:22:29', '2022-03-21 02:22:29'),
(18, 7, 'y9X3HZuzKXqUa2JxvSDYlBkH5pFWoe8Brytpf1UH.jpg', '2022-03-21 02:26:23', '2022-03-21 02:26:23'),
(19, 7, '1psFPY4AvlGoVGxo7vyc23leter1lieoMRQyF5R6.jpg', '2022-03-21 02:26:23', '2022-03-21 02:26:23'),
(20, 7, '9b1eo08EA6L2p8Dg1lrgqP65BcRnoTF9DFIwF1vB.jpg', '2022-03-21 02:26:23', '2022-03-21 02:26:23'),
(21, 7, '0ZhuM0paOXdrW7t2zEwuMAoybO46tOQ7GxzuwfBS.jpg', '2022-03-21 02:26:23', '2022-03-21 02:26:23'),
(22, 7, 'EEP8n5ZpKbVxUKINtvAuj2VjDUydn2S4BwgszqnP.jpg', '2022-03-21 02:26:24', '2022-03-21 02:26:24'),
(23, 8, 'PSDOI1ZTQZIhxZaJpoJqqA7d0RAy3upDFyzFiXt5.jpg', '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(24, 8, 'pC2b6xhznf1mfVaN3OlL3CsG6VzDlSKIMGhLSH9z.jpg', '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(25, 8, 'Qn95ifu0pCoN7ziqnLi8ie9bniWbcdlrErMPuuqW.jpg', '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(26, 8, '5mUSih20h8dghUcq6MOrK2TF3K3h8govGtD4uRvq.jpg', '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(27, 8, 'KUJAqNSLIbYMzEetJXHUDfGG6EGRZJxxlqUWy78q.jpg', '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(28, 8, 'dlqg5guDP48JMWxEAE0tWyQahM8lPSlURJuFjAHz.jpg', '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(29, 8, 'SvTNpB853IPGNxj0sfPt0oTMBo36W2fqxXhOwpjr.jpg', '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(30, 8, 'KIev5Cm83mvJSy4BtG5VIMzKFQbiz7RxrRdiYmg8.jpg', '2022-03-21 02:35:26', '2022-03-21 02:35:26'),
(31, 9, 'QSVZgGnKrVeMXeW2w031Vj4Hqh2t7LtQHmtzVsgM.jpg', '2022-03-21 02:54:47', '2022-03-21 02:54:47'),
(32, 9, '9XirrIRqZkk7ErHX77NRINdOzqPMp7tErFl4dwBQ.jpg', '2022-03-21 02:54:47', '2022-03-21 02:54:47'),
(33, 9, 'GjTnFQDIajXA9lV0ImsfAX9TnUdimvDrTgmQUIQh.jpg', '2022-03-21 02:54:47', '2022-03-21 02:54:47'),
(34, 10, 'NdUGUpqjW7VePEeOxF5XRpJXJAJN35TSUIomSQJz.jpg', '2022-03-21 02:58:55', '2022-03-21 02:58:55'),
(35, 10, 'vHrTOuU45CYb20UWZ9Le4iudoDprrubHWyb8RFgO.jpg', '2022-03-21 02:58:55', '2022-03-21 02:58:55'),
(36, 10, 'hYFRPjum0LXv8lRvaMWBKHxCLo8W2UROpx3NQo0t.jpg', '2022-03-21 02:58:55', '2022-03-21 02:58:55'),
(37, 11, 'MkKz6TCX7GmgEIPeZLvLp7HUsOUZvDQd4hiM95ES.jpg', '2022-03-21 03:43:04', '2022-03-21 03:43:04'),
(38, 11, 'wNEo8glie5NrIwm9SlyWoNZM8AhrqZCNxzt2xM8f.jpg', '2022-03-21 03:43:04', '2022-03-21 03:43:04'),
(39, 11, 'ITNzozQ6CkCb4epnaYkTwcK7RiAYX2wq3DkEkqPm.jpg', '2022-03-21 03:43:04', '2022-03-21 03:43:04'),
(40, 11, '5X1vHWROHrzOabUwQYthkZE4DEVXJoNJSEsxWCaB.jpg', '2022-03-21 03:43:04', '2022-03-21 03:43:04'),
(41, 11, 'nkdnPi8QQzxbZHxPuXRTflRIQ6RqzJ1Qrwf510DT.jpg', '2022-03-21 03:43:04', '2022-03-21 03:43:04'),
(42, 12, 'JlPqS0OLUFXUZVhCGf0nUPi6uv8d4KJGFNA31FLX.jpg', '2022-03-21 03:54:43', '2022-03-21 03:54:43'),
(43, 12, 'Jvu37WqyGTIpRDyg8U5rLyF6nPw9N1s6nrnsqk3v.jpg', '2022-03-21 03:54:43', '2022-03-21 03:54:43'),
(44, 12, '4MsP16QifG03PIO0Yf11tTShatLQF1aALDUtv87o.jpg', '2022-03-21 03:54:43', '2022-03-21 03:54:43'),
(45, 13, '69z2PDc6wnoIxZ1K7O78LokWaoBFQrwuPZHp0EmJ.jpg', '2022-03-21 03:58:08', '2022-03-21 03:58:08'),
(46, 13, '2OZ5KYLCc0S2WVEEbnAGmwKRKzeVQ5xm1VMaqCKn.jpg', '2022-03-21 03:58:08', '2022-03-21 03:58:08'),
(47, 13, 'mWNAl2rspPRQL2gXEfOut9aB0h1f6eezWEscso29.jpg', '2022-03-21 03:58:09', '2022-03-21 03:58:09'),
(48, 14, 'fQq9pn0oES6WIQgmah1NuY0AxLEFxklC8YAoX88a.jpg', '2022-03-21 04:25:42', '2022-03-21 04:25:42'),
(49, 14, 'oP5jA0uXFNdu2NnHUEHm0oLvlLtd2gAyZYEc97QE.jpg', '2022-03-21 04:25:42', '2022-03-21 04:25:42'),
(50, 14, 'tPf33gMGRJEt1QrjxMT8VQMKg5uxrn5pqTMQhxFx.jpg', '2022-03-21 04:25:42', '2022-03-21 04:25:42'),
(51, 14, '60n8zqXlI3jsHN61g05jYqbBMBEeCIgJI4pfPlwj.jpg', '2022-03-21 04:25:42', '2022-03-21 04:25:42'),
(52, 14, 'Yda9K9YutklkFf3y2rIM5BPaINliXbQA41IviLTg.jpg', '2022-03-21 04:25:42', '2022-03-21 04:25:42'),
(53, 15, 'E7HpWpszCj3dOksdgyiYd8Vky3B7yb22LKNc0JQJ.jpg', '2022-03-21 04:31:22', '2022-03-21 04:31:22'),
(54, 15, 'zxDpnhrz9jgHJjzhhDTT5Nd95FmcB164v9yPWsyR.jpg', '2022-03-21 04:31:22', '2022-03-21 04:31:22'),
(55, 15, '5JzzmBGXhf47QIjuqo8LLNiunTRT2Kd4EHxvFnBQ.jpg', '2022-03-21 04:31:22', '2022-03-21 04:31:22'),
(56, 16, 'gjbxzB1zjZeAusIkMHn0MGJraDhgwsPjLoOgxut5.jpg', '2022-03-21 04:35:09', '2022-03-21 04:35:09'),
(57, 16, 'vIAxvnaGFh56cAJQ9rXy0DxVAwHLEonYOJblWtvJ.jpg', '2022-03-21 04:35:09', '2022-03-21 04:35:09'),
(58, 17, 'ZX8aHTvqljr3w08FbikBSENTpiaIEE6pUJ89A8Tw.jpg', '2022-03-21 04:54:47', '2022-03-21 04:54:47'),
(59, 17, 'Agzck07QfIIBj282Nmatom77dN4A2PnWu6gV3KQ5.jpg', '2022-03-21 04:54:47', '2022-03-21 04:54:47'),
(60, 17, '6FmY0APpseLJgFuFsxDbEVW5W18dpwa4xWKA4nlW.jpg', '2022-03-21 04:54:47', '2022-03-21 04:54:47'),
(61, 17, '5KLcpQ41PiXFKJbMw0HoGGrGOzqMaK7bbvo9iLnk.jpg', '2022-03-21 04:54:47', '2022-03-21 04:54:47'),
(62, 18, 'fqqpz1pmpyayoka22OH9PfJU8IY1vKJnr9X9gMGw.jpg', '2022-03-21 04:58:19', '2022-03-21 04:58:19'),
(63, 18, 'Ty6Z8LRBkmz4OrSd7PzB9JOXJtO8KXXVOBlAlFW5.jpg', '2022-03-21 04:58:19', '2022-03-21 04:58:19'),
(64, 18, 'NDwKPwo2A2dBzKIqrS6TgMNM0erdR2DIVbtBZQM4.jpg', '2022-03-21 04:58:19', '2022-03-21 04:58:19'),
(65, 19, 'RNJoVqS3ZmerZCkRtnH48Cco8A5VTNt873HuR0rK.jpg', '2022-03-21 05:01:49', '2022-03-21 05:01:49'),
(66, 19, 'VdbetXQ5DuNj3zo0bdqsJDZf9NP6GLgCYiil7bQb.jpg', '2022-03-21 05:01:49', '2022-03-21 05:01:49'),
(67, 19, 'UiSvhizJ2dwMZD1BklERhN53Yfed8Mr9pmeOII31.jpg', '2022-03-21 05:01:49', '2022-03-21 05:01:49'),
(68, 20, 'T0rMHpykD53gQHyTj3jY76Xs6QOkrhpAL4AbGN4F.jpg', '2022-03-21 05:05:01', '2022-03-21 05:05:01'),
(69, 20, 'Y986pYN7vTwBAxQBVU16kWGhUpX83g4KYM44GXfO.jpg', '2022-03-21 05:05:01', '2022-03-21 05:05:01'),
(70, 20, 'A43NBVxS1Q87xwj2f9xT13UO8nxT5vbxmqSV6Zv2.jpg', '2022-03-21 05:05:01', '2022-03-21 05:05:01'),
(71, 20, '0zTCjfVsNs8tohFRub9UAFLbuvSCyPc5tWcWGXNG.jpg', '2022-03-21 05:05:01', '2022-03-21 05:05:01'),
(72, 21, 'KxAfl3bpGedQSR4JmuiU4rvfYdF7eNzQ06MF0IPw.jpg', '2022-03-21 05:09:26', '2022-03-21 05:09:26'),
(73, 21, 'fQcaNCfiK1pMf2sVi5w6cv3EacWAZchOpldNJqy4.jpg', '2022-03-21 05:09:26', '2022-03-21 05:09:26'),
(74, 21, 'JP0bwpF3YH4N7jzdTY9ISvJlT984NWQU4R81dyoG.jpg', '2022-03-21 05:09:26', '2022-03-21 05:09:26'),
(75, 22, 'jSiBSqZ99uXoLm9YFPJcIhzh4x0OXcfqHvAedalE.jpg', '2022-03-21 05:15:53', '2022-03-21 05:15:53'),
(76, 22, 'wwjXetnwplozlJgkRyuZNsoa8l96NpIgp8JngGAz.jpg', '2022-03-21 05:15:53', '2022-03-21 05:15:53'),
(77, 22, 'noEmT6BGroUlFfCrOi0ev7mImmNbrao3FcpWT8q0.jpg', '2022-03-21 05:15:53', '2022-03-21 05:15:53'),
(78, 22, 'wbigGxWQnvyqXs0aVlBl5a461oSDT1qGIPAGEFhC.jpg', '2022-03-21 05:15:54', '2022-03-21 05:15:54'),
(79, 23, 'e5puhSC1P7vaG61a3B6A2H0yvOZ4DO5L8BF1xQM2.jpg', '2022-03-21 05:33:47', '2022-03-21 05:33:47'),
(80, 23, 'ztcraJqkBS5XGSTikvAB8ZbzCcPmZQXbH0uqzSEp.jpg', '2022-03-21 05:33:47', '2022-03-21 05:33:47'),
(81, 23, 'fQo7CJIbEiAVaN6YAFFkP6FlD84hFUKhcqnGNzuC.jpg', '2022-03-21 05:33:47', '2022-03-21 05:33:47'),
(82, 23, 'jWHgBjkZIShikOOH8pvY9ka5tBKnmZkqBMVORrYx.jpg', '2022-03-21 05:33:47', '2022-03-21 05:33:47'),
(83, 23, '67A55gEZCYmjs5XEzf54z9SBDN9Yedrvpf3orbpF.jpg', '2022-03-21 05:33:47', '2022-03-21 05:33:47'),
(84, 24, 'fUXNySifwMvElpGKDGuA2hnwR15K5fmxHwjB7jTu.jpg', '2022-03-21 05:37:36', '2022-03-21 05:37:36'),
(85, 24, '0IDSWdVaJdImXbyAWxmeE3V7hKzuihc048qvMdii.jpg', '2022-03-21 05:37:36', '2022-03-21 05:37:36'),
(86, 24, 'Jnkpv2qSHveqevwv7kY7fAaVJb4k8YVBsUigog7k.jpg', '2022-03-21 05:37:36', '2022-03-21 05:37:36'),
(87, 24, 'fVC5SrCsorHqj7nIo4nwG4mWLPuI5xqZGZwvua2G.jpg', '2022-03-21 05:37:36', '2022-03-21 05:37:36'),
(88, 24, '82BXUKZ7hjYY7EnhieNr3MsVCyDiZ3A4g7q5qzAq.jpg', '2022-03-21 05:37:36', '2022-03-21 05:37:36'),
(89, 24, 'mnjpKer2mY6d148a6IqbXbSILqA4o0LTFLcLnBPh.jpg', '2022-03-21 05:37:36', '2022-03-21 05:37:36'),
(90, 24, 'GotbTNaHwxejSjGXmr6cQdZaiQsYnl2s5b8zaVzF.jpg', '2022-03-21 05:37:37', '2022-03-21 05:37:37'),
(91, 25, 'VL7cTYRtl79tRZgMDBrODOSeZhoLEjV6eT8FdEGL.jpg', '2022-03-21 05:41:29', '2022-03-21 05:41:29'),
(92, 25, 'p0bSGtjsjT2lBHT36iTvsiTAymBvARrmcFNkxu6f.jpg', '2022-03-21 05:41:29', '2022-03-21 05:41:29'),
(93, 25, 'G9ly9T6H3LdYsYeAVWkQBtsL24SvUZwJfYhMc6dd.jpg', '2022-03-21 05:41:29', '2022-03-21 05:41:29'),
(94, 26, 'hKj7LjQO3NfEkahm3bXTdPm2VNDBC4uv7PTKIYyF.jpg', '2022-03-21 05:48:22', '2022-03-21 05:48:22'),
(95, 26, 'ST8yTGytfdv28Z4szrORVY3sBEJSjsDdSa5tvOq5.jpg', '2022-03-21 05:48:22', '2022-03-21 05:48:22'),
(96, 26, 'G7XIIgOIOovFezTqcqzC4j0WshtRPvf5AwpmCPFU.jpg', '2022-03-21 05:48:23', '2022-03-21 05:48:23'),
(97, 26, 'FkKTfMSihNbmErEC93LMOuMyKG0XeraI9Mhgj5ap.jpg', '2022-03-21 05:48:23', '2022-03-21 05:48:23'),
(98, 26, 'xZA3RJiExvyBXl5a7JXcZsHaaA0UGXW8ScH7QNrK.jpg', '2022-03-21 05:48:23', '2022-03-21 05:48:23'),
(99, 27, '6ySIu0IGcbXw2l7kNchtovCXeqQa8kfSjWdTiUb2.jpg', '2022-03-21 05:55:01', '2022-03-21 05:55:01'),
(100, 27, 'sXuh081QZjudx7QUO4rdIdCFDTDIYmXWm6lkTsas.jpg', '2022-03-21 05:55:02', '2022-03-21 05:55:02'),
(101, 27, 'UnxcHCkaf4KX3mf7w2evXhxMCqcsQwrR21NmeTKg.jpg', '2022-03-21 05:55:02', '2022-03-21 05:55:02'),
(102, 28, 'joCCtYPQDV5U3vQLaCyjz2R4plwCPLIROp2b4G6E.jpg', '2022-03-21 05:59:17', '2022-03-21 05:59:17'),
(103, 28, 'yDE1wzyPZI91WhsWnGwjsBNyS8juv8mmTvZPgvP4.jpg', '2022-03-21 05:59:17', '2022-03-21 05:59:17'),
(104, 28, 'F6p8SNYJynoiJ0xUlxa1LtBoto9feEyUzPcQvPma.jpg', '2022-03-21 05:59:17', '2022-03-21 05:59:17'),
(105, 28, 'QtD9IB0eohxGv3t918EZLNjQgXmHuoJOWqH8he0k.jpg', '2022-03-21 05:59:17', '2022-03-21 05:59:17'),
(106, 29, 'mHClozQqYNJfIPmWm8RZFd9K2p5YxvD1lnu9qxvY.jpg', '2022-03-21 06:17:59', '2022-03-21 06:17:59'),
(107, 29, 'onM8Qd3q4OgKvW4P747lrF4NbZWzpvpqHLzs73ox.jpg', '2022-03-21 06:17:59', '2022-03-21 06:17:59'),
(108, 29, 'NYdcSPyBcVTfR2Axt24b8hSKJGFedzEAC0qEEBbD.jpg', '2022-03-21 06:17:59', '2022-03-21 06:17:59'),
(109, 30, 'AQRBNdFVjaKgIByTC8BowRgmE3zdPWuQ42uIBMaR.jpg', '2022-03-21 06:37:42', '2022-03-21 06:37:42'),
(110, 30, 'bta9resowCasvrmKwghOkLH7DHn7iJWbK9qJXoPj.jpg', '2022-03-21 06:37:42', '2022-03-21 06:37:42'),
(111, 30, '6BQraU5UogeULxW4r7vQkEeBYXh01kGC0rwJtb57.jpg', '2022-03-21 06:37:42', '2022-03-21 06:37:42'),
(112, 30, '9HyhDP9CfnYKmwwBwhHxaZtfOLoa2UcHLCMJmsEe.jpg', '2022-03-21 06:37:42', '2022-03-21 06:37:42'),
(113, 31, 'FHQXlxQ64n11FqWvtChrTBkIExV44kF7GakCloym.jpg', '2022-03-21 06:43:34', '2022-03-21 06:43:34'),
(114, 31, '8JZVA88alpkH04zwHsx9PFCnCrRwwa9IRuooYMAh.jpg', '2022-03-21 06:43:34', '2022-03-21 06:43:34'),
(115, 31, 'CMgIKgtSuwO5Wz2gMkljT1IUH8IyHwRqfLpaSgnL.jpg', '2022-03-21 06:43:34', '2022-03-21 06:43:34'),
(116, 31, 'SSXqmtxO8YW4nVOTweu1ONUTxXGtmEpl8xN6cRTD.jpg', '2022-03-21 06:43:34', '2022-03-21 06:43:34'),
(117, 32, 'H0kA7l0T3KqIz2JUqNsbiNaJDZWSLNlBnzsG65gH.jpg', '2022-03-21 06:46:48', '2022-03-21 06:46:48'),
(118, 32, 'FriFVXfTclYwzGFKj0rtstzv0JfHYkY1c9Ppkm1y.jpg', '2022-03-21 06:46:48', '2022-03-21 06:46:48'),
(119, 32, 'mB7hq9HsRwqajGJPSyuFwJUcwQFpJfXfD8YsoX2I.jpg', '2022-03-21 06:46:48', '2022-03-21 06:46:48'),
(120, 32, 'aLtNrJ2YDLbDuvG3BemoIET9FmwnJzTDtgFHhBmE.jpg', '2022-03-21 06:46:48', '2022-03-21 06:46:48'),
(121, 33, 'qOas0AMq3nQhVQsIGc1fWE7o456cWfLVeSQHQ1eV.jpg', '2022-03-21 06:53:08', '2022-03-21 06:53:08'),
(122, 33, 'RIA5VFkfuyxWkn0ojnbP7jlldqijFPA7LgWV6pQj.jpg', '2022-03-21 06:53:08', '2022-03-21 06:53:08'),
(123, 33, 'JyC5xiyKs8ZXnfBtkFjtkUaR4ouS6myPVrc26IGK.jpg', '2022-03-21 06:53:08', '2022-03-21 06:53:08'),
(124, 33, 'YIg1d4CUk3AkbkRBLRibaaSzxHOpes40XDuPNpZG.jpg', '2022-03-21 06:53:08', '2022-03-21 06:53:08'),
(125, 33, 'upanzEmvd2dMcjTuK1EuKVSqAZlqFD9VIccbizQ5.jpg', '2022-03-21 06:53:08', '2022-03-21 06:53:08'),
(126, 34, 'YWCi4nxrUD9U0z7mGrabMGOzx9LkBYLIn5ux7vAV.jpg', '2022-03-21 06:57:21', '2022-03-21 06:57:21'),
(127, 34, 'nicaF2IARgVgp2sduOSPKz0u0QEwko4FW7zzWVWT.jpg', '2022-03-21 06:57:21', '2022-03-21 06:57:21'),
(128, 34, 'd8qhjQbnX9iu4tMtfHKB6fEeC60Q86NJhsMdIcI3.jpg', '2022-03-21 06:57:21', '2022-03-21 06:57:21'),
(129, 35, 'HqjIFAvk4sgktjavexPabD4U1TcCUgSqjsf9cAEf.jpg', '2022-03-21 07:09:06', '2022-03-21 07:09:06'),
(130, 35, 'lyFF2chhXtRqfS49b8u4aat7wtivPqxL0iPiwZM6.jpg', '2022-03-21 07:09:06', '2022-03-21 07:09:06'),
(131, 35, '43N0ruNN3o6iZb32JVOvotquvsa5XvITVTnHYAqZ.jpg', '2022-03-21 07:09:06', '2022-03-21 07:09:06'),
(132, 35, 'iv5lBdZFTciGJF9MozHODdcnWniz9z3FGRTceH8v.jpg', '2022-03-21 07:09:06', '2022-03-21 07:09:06'),
(133, 36, '8Sx27XO6yHF6wwsZfv00fwaFKIAkrERIdvZ4pME5.jpg', '2022-03-21 07:25:55', '2022-03-21 07:25:55'),
(134, 36, 'NVs59VEogcRHnggePecxQ2YclEwPh96blfGdjk3H.jpg', '2022-03-21 07:25:55', '2022-03-21 07:25:55'),
(135, 36, '9kJOlw6DcbXoW9jth3qgtAhq9XEV8voIPV4agAmA.jpg', '2022-03-21 07:25:55', '2022-03-21 07:25:55'),
(136, 37, '9qWSR65M0stfqcEUpZlAt8xIljZZEjIvgWMBUW1K.jpg', '2022-04-04 13:20:32', '2022-04-04 13:20:32'),
(137, 37, '8fWQCykKprp8LlCbTSecq0GYqgfJfsxM3WjMLwy9.jpg', '2022-04-04 13:20:32', '2022-04-04 13:20:32'),
(138, 37, 'eyaNih3n2JMO1sKTOpIdqfjVvEUVCpsQQ0jPTS4W.jpg', '2022-04-04 13:20:32', '2022-04-04 13:20:32'),
(139, 38, 'DK71Icq05HaiRKfUiKOS3cUzaO7a7KoWlLOgE5nV.png', '2022-04-06 14:10:39', '2022-04-06 14:10:39'),
(140, 38, 'KIToxYM2SLiyYRFUGYhSt5q0aqHe0pchBkmlfFY5.png', '2022-04-06 14:10:39', '2022-04-06 14:10:39'),
(141, 38, 'yQktLmnLKA5roUldsm8zJbAddWtOaxhpd5XOKJ79.png', '2022-04-06 14:10:39', '2022-04-06 14:10:39'),
(142, 38, 'HQ9zadtcmeUsx9rsqYXMNIV0XYGKBghmWJjUrlnp.png', '2022-04-06 14:10:39', '2022-04-06 14:10:39'),
(143, 39, 'EccrFZilcY8w0XpK347KfUasOL7KPCKXDR5Dqu6w.png', '2022-04-11 00:05:53', '2022-04-11 00:05:53'),
(144, 39, 'TplYdgjWGC3L0pnduqwaHFQE0LeRhlUJ9hQDcDQ2.png', '2022-04-11 00:05:53', '2022-04-11 00:05:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_gallery_images`
--
ALTER TABLE `vehicle_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=694;

--
-- AUTO_INCREMENT for table `vehicle_gallery_images`
--
ALTER TABLE `vehicle_gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
