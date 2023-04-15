-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 04:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiama`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Description` varchar(256) NOT NULL,
  `Img` varchar(400) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Id`, `Title`, `Description`, `Img`, `Type`) VALUES
(1, 'Promotion', 'Banner Khuyễn Mãi Trang Chủ', 'public/assets/clients/img/banner/100001.jpg', 4),
(2, 'Promotion', 'Banner Khuyễn Mãi Trang Chủ', 'public/assets/clients/img/banner/100002.jpg', 4),
(3, 'Promotion', 'Banner Khuyễn Mãi Trang Chủ', 'public/assets/clients/img/banner/100003.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `ParentId` int(11) NOT NULL,
  `Location` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `Name`, `Description`, `ParentId`, `Location`, `Status`) VALUES
(1, 'Test Category', 'Test Category', 0, 0, 1),
(2, 'Test Category', 'Test Category', 0, 0, 1),
(3, 'Test Category', 'Test Category', 0, 0, 1),
(4, 'Test Category', 'Test Category', 0, 0, 1),
(5, 'Test Category', 'Test Category', 0, 0, 1),
(6, 'Test Category', 'Test Category', 0, 0, 1),
(7, 'Test Category', 'Test Category', 0, 0, 1),
(8, 'Test Category', 'Test Category', 0, 0, 1),
(9, 'Test Category', 'Test Category', 0, 0, 1),
(10, 'Test Category', 'Test Category', 0, 0, 1),
(11, 'Test Category', 'Test Category', 0, 0, 1),
(12, 'Test Category', 'Test Category', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Descript` varchar(500) NOT NULL,
  `Parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Title`, `Descript`, `Parent`) VALUES
(1, 'Chủ Đề', 'Chủ Đề', 0),
(2, 'Thiết Kế', 'Thiết Kế', 0),
(3, 'Hoa Tươi', 'Hoa Tươi', 0),
(4, 'Quà Tặng', 'Quà Tặng', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `CreatedDate` date NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `LastName`, `FirstName`, `Phone`, `Email`, `UserName`, `Password`, `CreatedDate`, `Status`) VALUES
(1, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky1', 'dinhky', '2023-03-20', 1),
(2, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky2', 'dinhky', '2023-03-20', 1),
(3, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky3', 'dinhky', '2023-03-20', 1),
(4, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky4', 'dinhky', '2023-03-20', 1),
(5, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky5', 'dinhky', '2023-03-20', 1),
(6, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky6', 'dinhky', '2023-03-20', 1),
(7, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky7', 'dinhky', '2023-03-20', 1),
(8, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky8', 'dinhky', '2023-03-20', 1),
(9, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky9', 'dinhky', '2023-03-20', 1),
(10, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky10', 'dinhky', '2023-03-20', 1),
(11, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky11', 'dinhky', '2023-03-20', 1),
(12, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky12', 'dinhky', '2023-03-20', 1),
(13, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky13', 'dinhky', '2023-03-20', 1),
(14, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky14', 'dinhky', '2023-03-20', 1),
(15, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky15', 'dinhky', '2023-03-20', 1),
(16, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky16', 'dinhky', '2023-03-20', 1),
(17, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky17', 'dinhky', '2023-03-20', 1),
(18, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky18', 'dinhky', '2023-03-20', 1),
(19, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky19', 'dinhky', '2023-03-20', 1),
(20, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky20', 'dinhky', '2023-03-20', 1),
(21, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky21', 'dinhky', '2023-03-20', 1),
(22, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky22', 'dinhky', '2023-03-20', 1),
(23, '', 'kienphan', '', '', 'kienphan', '123', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Position` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `LastName`, `FirstName`, `Phone`, `Email`, `UserName`, `Password`, `Position`, `CreatedDate`, `Status`) VALUES
(1, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky23', 'dinhky', 1, '2023-03-19', 1),
(2, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky24', 'dinhky1', 1, '2023-03-19', 1),
(3, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky25', 'dinhky2', 1, '2023-03-19', 1),
(4, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky26', 'dinhky3', 1, '2023-03-19', 1),
(5, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky27', 'dinhky4', 1, '2023-03-19', 1),
(6, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky28', 'dinhky5', 1, '2023-03-19', 1),
(7, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky29', 'dinhky6', 1, '2023-03-19', 1),
(8, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky30', 'dinhky7', 1, '2023-03-19', 1),
(9, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky31', 'dinhky8', 1, '2023-03-19', 1),
(10, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky32', 'dinhky9', 1, '2023-03-19', 1),
(11, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky33', 'dinhky10', 1, '2023-03-19', 1),
(12, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky34', 'dinhky11', 1, '2023-03-19', 1),
(13, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky35', 'dinhky12', 1, '2023-03-19', 1),
(14, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky36', 'dinhky13', 1, '2023-03-19', 1),
(15, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky37', 'dinhky14', 1, '2023-03-19', 1),
(16, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky38', 'dinhky15', 1, '2023-03-19', 1),
(17, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky39', 'dinhky16', 1, '2023-03-19', 1),
(18, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky40', 'dinhky17', 1, '2023-03-19', 1),
(19, 'Đinh', 'Kỳ', '(+84)398755231', 'dinhky2468@gmail.com', 'dinhky41', 'dinhky18', 1, '2023-03-19', 1),
(20, 'kien', '', '', '', 'kienphan69', '123', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Id` int(11) NOT NULL,
  `Total` double NOT NULL,
  `Status` int(11) NOT NULL,
  `StatusDescription` varchar(20) NOT NULL,
  `CreatedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `SalePrice` double NOT NULL,
  `ShortDescription` varchar(4000) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Img` varchar(500) NOT NULL,
  `Path` varchar(500) NOT NULL,
  `Hot` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `SKU` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Title`, `Price`, `SalePrice`, `ShortDescription`, `Quantity`, `Img`, `Path`, `Hot`, `Discount`, `SKU`) VALUES
(1, 'Luôn Bên Em', 100, 150, 'Luôn Bên Em', 100, 'public/assets/clients/img/product/luon-ben-em.jpg', 'luon-ben-em', 1, 18, 'SKU TEST'),
(2, 'Yêu Kiều', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/yeu-kieu.jpg', 'yeu-kieu', 1, 18, 'SKU TEST'),
(3, 'Tươi Sáng', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/tuoi-sang.jpg', 'tuoi-sang', 1, 18, 'SKU TEST'),
(4, 'Ngày Đầu Tiên', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/ngay-dau-tien.jpg', 'ngay-dau-tien', 1, 18, 'SKU TEST'),
(5, 'Only You', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/only-you.jpg', 'only-you', 1, 18, 'SKU TEST'),
(6, 'Ngày Tinh Khôi', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/ngay-tinh-khoi.jpg', 'ngay-tinh-khoi', 1, 18, 'SKU TEST'),
(7, 'Hồng Dịu Dàng', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/hong-diu-dang.jpg', 'hong-diu-dang', 1, 18, 'SKU TEST'),
(8, 'NgàyChung Đôi', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/ngay-chung-doi.jpg', 'ngay-chung-doi', 1, 18, 'SKU TEST'),
(9, 'Lẵng Hoa Hạnh Phúc', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/lang-hoa-hanh-phuc.jpg', 'lang-hoa-hanh-phuc', 1, 18, 'SKU TEST'),
(10, 'Lẵng Hoa Yêu Thương', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/lang-hoa-yeu-thuong.jpg', 'lang-hoa-yeu-thuong', 1, 18, 'SKU TEST'),
(11, 'Riêng Mình Em', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/rieng-minh-em.jpg', 'rieng-minh-em', 1, 18, 'SKU TEST'),
(12, 'Giỏ Hoa Chào Xuân', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/gio-hoa-chao-xuan.jpg', 'gio-hoa-chao-xuan', 1, 18, 'SKU TEST'),
(13, 'Lẵng Hoa Yêu Thương', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/lang-hoa-yeu-thuong.jpg', 'lang-hoa-yeu-thuong', 1, 18, 'SKU TEST'),
(14, 'Chúc Thành Công', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/chuc-thanh-cong.jpg', 'chuc-thanh-cong', 1, 18, 'SKU TEST'),
(15, 'Màu Tình Yêu', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/mau-tinh-yeu.jpg', 'mau-tinh-yeu', 1, 18, 'SKU TEST'),
(16, 'Be Happy', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/be-happy.jpg', 'be-happy', 1, 18, 'SKU TEST'),
(17, 'Bó Hoa Ban Mai', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/bo-hoa-ban-mai.jpg', 'bo-hoa-ban-mai', 1, 18, 'SKU TEST'),
(18, 'Sức Sống', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/suc-song.jpg', 'suc-song', 1, 18, 'SKU TEST'),
(19, 'Giấc Mơ Ngọt Ngào', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/giac-mo-ngot-ngao.jpg', 'giac-mo-ngot-ngao', 1, 18, 'SKU TEST'),
(20, 'Yêu Thương Tím', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/yeu-thuong-tim.jpg', 'yeu-thuong-tim', 1, 18, 'SKU TEST'),
(21, 'Món Quà Tình Yêu', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/mon-qua-tinh-yeu.jpg', 'mon-qua-tinh-yeu', 1, 18, 'SKU TEST'),
(22, 'Hoa Chúc Mừng Rực Rỡ', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/hoa-chuc-mung-ruc-ro.jpg', 'hoa-chuc-mung-ruc-ro', 1, 18, 'SKU TEST'),
(23, 'Yêu Hay Không Yêu', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/yeu-hay-khong-yeu.jpg', 'yeu-hay-khong-yeu', 1, 18, 'SKU TEST'),
(24, 'Hoàn Hảo', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/hoan-hao.jpg', 'hoan-hao', 1, 18, 'SKU TEST'),
(25, 'Tim Tình Yêu', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/tim-tinh-yeu.jpg', 'tim-tinh-yeu', 1, 18, 'SKU TEST'),
(26, 'I Love You', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/i-love-you.jpg', 'i-love-you', 1, 18, 'SKU TEST'),
(27, 'Mãi Bên Nhau', 100, 150, 'Shot Description', 100, 'public/assets/clients/img/product/mai-ben-nhau.jpg', 'mai-ben-nhau', 1, 18, 'SKU TEST');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Id` int(11) NOT NULL,
  `Title` varchar(400) NOT NULL,
  `Description` varchar(4000) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Created_Date` date NOT NULL,
  `Img` varchar(4000) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `Id` int(11) NOT NULL,
  `Url` varchar(300) NOT NULL,
  `Rewrite` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`Id`, `Url`, `Rewrite`) VALUES
(2, 'hoa-sinh-nhat', 'product/list/1'),
(3, 'hoa-khai-truong', 'product/list/2'),
(4, 'hoa-cuoi', 'product/list/3'),
(5, 'hoa-chia-buon', 'product/list/4'),
(6, 'hoa-tot-nghiep', 'product/list/5'),
(7, 'hoa-valentine', 'product/list/6'),
(8, 'hoa-chuc-mung', 'product/list/7'),
(9, 'hoa-ky-niem', 'product/list/8'),
(10, 'bo-hoa', 'product/list/9'),
(11, 'lang-hoa', 'product/list/10'),
(12, 'gio-hoa', 'product/list/11'),
(13, 'ke-hoa', 'product/list/12'),
(14, 'binh-hoa', 'product/list/13'),
(15, 'hop-hoa', 'product/list/14'),
(19, 'hoa-hong', 'product/list/15'),
(20, 'hoa-baby', 'product/list/16'),
(21, 'hoa-huong-duong', 'product/list/17'),
(22, 'hoa-lan-ho-diep', 'product/list/18'),
(23, 'hoa-tulip', 'product/list/19'),
(24, 'hoa-ly', 'product/list/20'),
(25, 'hoa-cuc', 'product/list/21'),
(26, 'hoa-sen', 'product/list/22'),
(27, 'hoa-dong-tien', 'product/list/23'),
(28, 'hoa-mau-don', 'product/list/24'),
(29, 'gau-bong', 'product/list/25'),
(30, 'chocolate', 'product/list/26'),
(31, 'banh-kem', 'product/list/27'),
(32, 'gio-trai-cay', 'product/list/28'),
(33, 'gio-qua-tang', 'product/list/29'),
(34, 'hoa-sinh-nhat/(.+)', 'product/detail/$1'),
(35, 'hoa-khai-truong/(.+)', 'product/detail/$1'),
(36, 'hoa-cuoi/(.+)', 'product/detail/$1'),
(37, 'hoa-chia-buon/(.+)', 'product/detail/$1'),
(38, 'hoa-tot-nghiep/(.+)', 'product/detail/$1'),
(39, 'hoa-valentine/(.+)', 'product/detail/$1'),
(40, 'hoa-chuc-mung/(.+)', 'product/detail/$1'),
(41, 'hoa-ky-niem/(.+)', 'product/detail/$1'),
(42, 'bo-hoa/(.+)', 'product/detail/$1'),
(43, 'lang-hoa/(.+)', 'product/detail/$1'),
(44, 'gio-hoa/(.+)', 'product/detail/$1'),
(45, 'ke-hoa/(.+)', 'product/detail/$1'),
(46, 'binh-hoa/(.+)', 'product/detail/$1'),
(47, 'hop-hoa/(.+)', 'product/detail/$1'),
(48, 'hoa-hong/(.+)', 'product/detail/$1'),
(49, 'hoa-baby/(.+)', 'product/detail/$1'),
(50, 'hoa-huong-duong/(.+)', 'product/detail/$1'),
(51, 'hoa-lan-ho-diep/(.+)', 'product/detail/$1'),
(52, 'hoa-tulip/(.+)', 'product/detail/$1'),
(53, 'hoa-ly/(.+)', 'product/detail/$1'),
(54, 'hoa-cuc/(.+)', 'product/detail/$1'),
(55, 'hoa-sen/(.+)', 'product/detail/$1'),
(56, 'hoa-dong-tien/(.+)', 'product/detail/$1'),
(57, 'hoa-mau-don/(.+)', 'product/detail/$1'),
(58, 'gau-bong/(.+)', 'product/detail/$1'),
(59, 'chocolate/(.+)', 'product/detail/$1'),
(60, 'banh-kem/(.+)', 'product/detail/$1'),
(61, 'gio-trai-cay/(.+)', 'product/detail/$1'),
(62, 'gio-qua-tang/(.+)', 'product/detail/$1'),
(63, 'quan-tri', 'admin/dashboard'),
(64, 'tai-khoan-cua-toi', 'user/myaccount'),
(65, 'portfolio', 'page/portfolio'),
(66, 'tin-tuc', 'page/news'),
(67, 'lien-he', 'page/contact'),
(68, 'gio-hang', 'user/shoppingcart'),
(69, 'admin/employee', 'admin/renderemployee'),
(70, 'admin/customer', 'admin/rendercustomer'),
(71, 'admin/categories', 'admin/rendercategories'),
(72, 'admin/product', 'admin/renderproduct'),
(73, 'admin/order', 'admin/renderOrder'),
(74, 'admin/review', 'admin/renderreview');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `Id` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `Id` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Descript` varchar(300) NOT NULL,
  `Parent` int(11) NOT NULL,
  `Path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`Id`, `Title`, `Descript`, `Parent`, `Path`) VALUES
(1, 'Hoa Sinh Nhật', 'Hoa Sinh Nhật', 1, 'hoa-sinh-nhat'),
(2, 'Hoa Khai Trương', 'Hoa Khai Trương', 1, 'hoa-khai-truong'),
(3, 'Hoa Cưới', 'Hoa Cưới', 1, 'hoa-cuoi'),
(4, 'Hoa Chia Buồn', 'Hoa Chia Buồn', 1, 'hoa-chia-buon'),
(5, 'Hoa Tốt Nghiệp', 'Hoa Tốt Nghiệp', 1, 'hoa-tot-nghiep'),
(6, 'Hoa Valentine', 'Hoa Valentine', 1, 'hoa-valentine'),
(7, 'Hoa Chúc Mừng', 'Hoa Chúc Mừng', 1, 'hoa-chuc-mung'),
(8, 'Hoa Kỷ Niệm', 'Hoa Kỷ Niệm', 1, 'hoa-ky-niem'),
(9, 'Bó Hoa', 'Bó Hoa', 2, 'bo-hoa'),
(10, 'Lẵng Hoa', 'Lẵng Hoa', 2, 'lang-hoa'),
(11, 'Giỏ Hoa', 'Giỏ Hoa', 2, 'gio-hoa'),
(12, 'Kệ Hoa', 'Kệ Hoa', 2, 'ke-hoa'),
(13, 'Bình Hoa', 'Bình Hoa', 2, 'binh-hoa'),
(14, 'Hộp Hoa', 'Hộp Hoa', 2, 'hop-hoa'),
(15, 'Hoa Hồng', 'Hoa Hồng', 3, 'hoa-hong'),
(16, 'Hoa Baby', 'Hoa Baby', 3, 'hoa-baby'),
(17, 'Hoa Hướng Dương', 'Hoa Hướng Dương', 3, 'hoa-huong-duong'),
(18, 'Hoa Lan Hồ Điệp', 'Hoa Lan Hồ Điệp', 3, 'hoa-lan-ho-diep'),
(19, 'Hoa Tulip', 'Hoa Tulip', 3, 'hoa-tulip'),
(20, 'Hoa Ly', 'Hoa Ly', 3, 'hoa-ly'),
(21, 'Hoa Cúc', 'Hoa Cúc', 3, 'hoa-cuc'),
(22, 'Hoa Sen', 'Hoa Sen', 3, 'hoa-sen'),
(23, 'Hoa Đồng Tiền', 'Hoa Đồng Tiền', 3, 'hoa-dong-tien'),
(24, 'Hoa Mẫu Đơn ', 'Hoa Mẫu Đơn ', 3, 'hoa-mau-don'),
(25, 'Gấu Bông', 'Gấu Bông', 4, 'gau-bong'),
(26, 'Chocolate', 'Chocolate', 4, 'chocolate'),
(27, 'Bánh Kem', 'Bánh Kem', 4, 'banh-kem'),
(28, 'Giỏ Trái Cây', 'Giỏ Trái Cây', 4, 'gio-trai-cay'),
(29, 'Giỏ Quà Tặng', 'Giỏ Quà Tặng', 4, 'gio-qua-tang');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_product`
--

CREATE TABLE `sub_category_product` (
  `Id` int(11) NOT NULL,
  `SubCategoryId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category_product`
--

INSERT INTO `sub_category_product` (`Id`, `SubCategoryId`, `ProductId`) VALUES
(1, 15, 1),
(2, 15, 2),
(3, 15, 3),
(4, 15, 4),
(5, 15, 5),
(6, 15, 6),
(7, 15, 7),
(8, 15, 8),
(9, 15, 9),
(10, 15, 10),
(11, 15, 11),
(12, 15, 12),
(13, 15, 13),
(14, 15, 14),
(15, 15, 15),
(16, 15, 16),
(17, 15, 17),
(18, 15, 18),
(19, 15, 19),
(20, 15, 20),
(21, 15, 21),
(22, 15, 22),
(23, 15, 23),
(24, 15, 24),
(25, 15, 25),
(26, 15, 26),
(27, 15, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sub_category_product`
--
ALTER TABLE `sub_category_product`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sub_category_product`
--
ALTER TABLE `sub_category_product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;