-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2019 lúc 04:44 AM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `course`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activated`
--
CREATE DATABASE KHOA_HOC
USE

CREATE TABLE activated (
  User_Activated varchar(20)NOT NULL,
  Name_Activated varchar(50)   NOT NULL
)

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE admin (
  User_Namee varchar(20)  NOT NULL,
  UserName varchar(50) NOT NULL,
  PassWordd varchar(50) NOT NULL,
  Email varchar(50) NOT NULL,
  Levell int NOT NULL
)
--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`User_Name`, `UserName`, `PassWord`, `Email`, `Level`) VALUES
('ID1', 'Linh Nguyen', '123456', 'nguyenthimylinh8897@gmail.com', 2),
('ID2', 'Loan Nguyen', '123', 'loannguyen@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE bill (
  User_bill varchar(20)  NOT NULL,
  User_Customer varchar(20)  NOT NULL,
  User_course varchar(50)  NOT NULL,
  Total_money varchar(50)  NOT NULL
) 

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE course(
  User_course varchar(50)  NOT NULL,
  User_teacher varchar(20)  NOT NULL,
  User_Sale varchar(50) NOT NULL,
  User_Activated varchar(20)  NOT NULL,
  Course_Name varchar(250)  NOT NULL,
  Images varchar(250)  NOT NULL,
  Document varchar(500) NOT NULL
) 

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE customers (
  User_Customer varchar(20)  NOT NULL,
  Name_Customer varchar(250)  NOT NULL,
  Adress varchar(250)  NOT NULL,
  Email varchar(250)  NOT NULL,
  Phone_Numbe varchar(50)  NOT NULL,
  Bank_ID varchar(50)  NOT NULL,
  Describe varchar(250) NOT NULL
)

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`User_Customer`, `Name_Customer`, `Adress`, `Email`, `Phone_Number`, `Bank_ID`, `Describe`) VALUES
('ID1', 'Nguyễn Thị Mỹ Linh', 'Hương Sơn - Hà Tĩnh', 'nguyenmylinh8897@gmail.com', '0969298340', '1472659767752', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level`
--

CREATE TABLE level (
  User_level varchar(50)  NOT NULL,
  Lavel_Name varchar(50)  NOT NULL,
  School varchar(250) NOT NULL
) 

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE sale (
  User_Sale varchar(50)  NOT NULL,
  Name_Sale varchar(250)  NOT NULL,
  Sale_Percentage varchar(50)  NOT NULL
) 

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE teacher (
  User_teacher varchar(20) NOT NULL,
  User_TypeOfCourse varchar(50) NOT NULL,
  Teacher_name varchar(50) NOT NULL,
  Phone_number varchar(50)  NOT NULL,
  Email varchar(50) NOT NULL,
  Teacher_image varchar(250) NOT NULL,
  Describee varchar(250)  NOT NULL,
  User_level varchar(50) NOT NULL
) 
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `typeofcourse`
--

CREATE TABLE typeofcourse (
  User_TypeOfCourse varchar(50) NOT NULL,
  Name_TypeOfCourse varchar(250)  NOT NULL
) 

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE video (
  User_video varchar(50)  NOT NULL,
  User_teacher varchar(20)  NOT NULL,
  User_course varchar(50)  NOT NULL,
  Name_video varchar(250)  NOT NULL,
  Time_vide varchar(50) NOT NULL,
  Lear_video varchar(250)  NOT NULL
) 

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activated`
--
ALTER TABLE activated
  ADD PRIMARY KEY (User_Activated);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE admin
  ADD PRIMARY KEY (User_Namee);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`User_bill`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`User_course`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE customers
  ADD User_video varchar(50)  NOT NULL

--
-- Chỉ mục cho bảng `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`User_level`);

--
-- Chỉ mục cho bảng `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`User_Sale`);

ALTER TABLE course
 User_video 
--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`User_teacher`);

--
-- Chỉ mục cho bảng `typeofcourse`
--
ALTER TABLE `typeofcourse`
  ADD PRIMARY KEY (`User_TypeOfCourse`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`User_video`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
