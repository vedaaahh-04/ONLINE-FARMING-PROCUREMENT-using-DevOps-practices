-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 04:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpofp`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE farmers (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pno` bigint(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO farmers(`fname`, `lname`, `pno`, `uname`, `password`, `address`) VALUES
('Abhiram', 'Polagani', 7981160999, 'abhiram', 'asdfghjkl', '17/126,edeplli,machlipatnam'),
('bhagyam', 'ramineni', 9876543210, 'bhagyam', 'bhagyam', 'gudlavalleru'),
('chaitanya', 'koneti', 8309999999, 'chaitu21', 'chaitu21', '4/144,edepalli,machilipatnam'),
('ishan', 'kishan', 2222222222, 'ishank', 'ishank', '21-5-1,mumbai,maharastra'),
('parvathi', 'sunnam', 7981160999, 'parvathi', 'parvathi', 'hanuman statue'),
('rohit', 'sharma', 1111111111, 'rsharma', 'asdfghjkl', '54-32/1,meenapur,guntur'),
('Sasidhar', 'Tammana', 9701582886, 'sasi33', 'sasi33', '2-4/22,chilakaluripeta,guntur'),
('surendra', 'borra', 5667655678, 'surendra', 'surendra', '2-3a,gudlavalleru,krishna'),
('Virat', 'Kohli', 9999999999, 'vkohli18', 'zxcvbzxcvb', '2-3-9/11,kohlipur,delhi');

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE retailers (
  `rfname` varchar(20) NOT NULL,
  `rlname` varchar(20) NOT NULL,
  `rpno` bigint(20) NOT NULL,
  `runame` varchar(20) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `raddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailer`
--

INSERT INTO retailers (`rfname`, `rlname`, `rpno`, `runame`, `rpassword`, `raddress`) VALUES
('Abhiram', 'Polagani', 9999999999, 'abhiram01', 'asdfghjkl', '17/126,Edepalli,Machulipatnam'),
('gyaani', 'meruga', 8989898989, 'gyaani44', 'zzxxzzxxzz', '2-2-98,gudlavalleru,krishna'),
('Jaswanth', 'Vucha', 9299994495, 'jaswanth', 'jaswanth', '16/266,valandapalem,machilipatnam'),
('SivaNag', 'Mannem', 8639854409, 'MrSiva', 'mrsiva', '3-4/11, gec colony , gudlavalleru'),
('natarajan', 'nattu', 1231231231, 'nattu111', 'asdfgasdfg', '23/43-1,somajiguda,hyderabad'),
('Parvathi', 'Sunnam', 7846578589, 'parvathi', 'parvathi', '5-8/76,gudlavalleru,krishna district'),
('Prasad', 'Reddy', 7658364847, 'prasad', 'prasad', '3-4/22,kochipudi,krishna district'),
('Sasidhar', 'Thammana', 9381644869, 'sasi01', 'sasi01', '15/456,119,drivers colony,machilipatnam'),
('dhawan', 'shikkar', 9878564343, 'shikkar', 'shikkar', '5-4/116,bapatla,krishna.'),
('srinu', 'Anneboina', 7676767676, 'srinu12', 'srinu12', '2-4-123,gudlavalleru,krishna');

-- --------------------------------------------------------

--
-- Table structure for table `retailerdata`
--

CREATE TABLE retailerdata (
  firstname varchar(20) NOT NULL,
  lastname varchar(20) NOT NULL,
  phoneno bigint(20) NOT NULL,
  addres varchar(100) NOT NULL,
  item varchar(20) NOT NULL,
  quantity int(20) NOT NULL,
  price int(20) NOT NULL,
  username varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailerdata`
--

INSERT INTO retailerdata (`firstname`, `lastname`, `phoneno`, `address`, `item`, `quantity`, `price`, `username`) VALUES
('Abhiram', 'Polagani', 9999999999, '17/126,Edepalli,Machulipatnam', 'rice', 50, 55, 'abhiram01'),
('gyaani', 'meruga', 8989898989, '2-2-98,gudlavalleru,krishna', 'wheat', 40, 54, 'gyaani44'),
('gyaani', 'meruga', 8989898989, '2-2-98,gudlavalleru,krishna', 'rice', 50, 45, 'gyaani44'),
('Jaswanth', 'Vucha', 9299994495, '16/266,valandapalem,machilipatnam', 'rice', 60, 53, 'jaswanth'),
('Jaswanth', 'Vucha', 9299994495, '16/266,valandapalem,machilipatnam', 'wheat', 45, 64, 'jaswanth'),
('Jaswanth', 'Vucha', 9299994495, '16/266,valandapalem,machilipatnam', 'tobacco', 55, 41, 'jaswanth'),
('dhawan', 'shikkar', 9878564343, '5-4/116,bapatla,krishna.', 'rice', 70, 52, 'shikkar'),
('dhawan', 'shikkar', 9878564343, '5-4/116,bapatla,krishna.', 'wheat', 30, 58, 'shikkar'),
('dhawan', 'shikkar', 9878564343, '5-4/116,bapatla,krishna.', 'corn', 55, 50, 'shikkar'),
('dhawan', 'shikkar', 9878564343, '5-4/116,bapatla,krishna.', 'cotton', 100, 90, 'shikkar'),
('natarajan', 'nattu', 1231231231, '23/43-1,somajiguda,hyderabad', 'wheat', 40, 57, 'nattu111'),
('natarajan', 'nattu', 1231231231, '23/43-1,somajiguda,hyderabad', 'corn', 54, 40, 'nattu111'),
('Prasad', 'Reddy', 7658364847, '3-4/22,kochipudi,krishna district', 'rice', 44, 53, 'prasad'),
('Prasad', 'Reddy', 7658364847, '3-4/22,kochipudi,krishna district', 'wheat', 35, 40, 'prasad'),
('Prasad', 'Reddy', 7658364847, '3-4/22,kochipudi,krishna district', 'gnuts', 30, 90, 'prasad'),
('Prasad', 'Reddy', 7658364847, '3-4/22,kochipudi,krishna district', 'cotton', 70, 95, 'prasad'),
('natarajan', 'nattu', 1231231231, '23/43-1,somajiguda,hyderabad', 'tobacco', 60, 130, 'nattu111'),
('natarajan', 'nattu', 1231231231, '23/43-1,somajiguda,hyderabad', 'gnuts', 45, 84, 'nattu111'),
('Parvathi', 'Sunnam', 7846578589, '5-8/76,gudlavalleru,krishna district', 'rice', 40, 51, 'parvathi'),
('Parvathi', 'Sunnam', 7846578589, '5-8/76,gudlavalleru,krishna district', 'wheat', 70, 36, 'parvathi'),
('Parvathi', 'Sunnam', 7846578589, '5-8/76,gudlavalleru,krishna district', 'cotton', 55, 90, 'parvathi'),
('srinu', 'Anneboina', 7676767676, '2-4-123,gudlavalleru,krishna', 'cotton', 100, 60, 'srinu12'),
('Prasad', 'Reddy', 7658364847, '3-4/22,kochipudi,krishna district', 'tobacco', 100, 150, 'prasad'),
('Sasidhar', 'Thammana', 9381644869, '15/456,119,drivers colony,machilipatnam', 'sugar', 50, 25, 'sasi01'),
('Sasidhar', 'Thammana', 9381644869, '15/456,119,drivers colony,machilipatnam', 'tobacco', 50, 100, 'sasi01'),
('SivaNag', 'Mannem', 8639854409, '3-4/11, gec colony , gudlavalleru', 'corn', 44, 60, 'MrSiva'),
('Abhiram', 'Polagani', 9999999999, '17/126,Edepalli,Machulipatnam', 'corn', 78, 9000, 'abhiram01'),
('Abhiram', 'Polagani', 9999999999, '17/126,Edepalli,Machulipatnam', 'cotton', 50, 100, 'abhiram01'),
('Prasad', 'Reddy', 7658364847, '3-4/22,kochipudi,krishna district', 'jute', 40, 52, 'prasad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer`
--
ALTER TABLE farmers
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `retailer`
--
ALTER TABLE retailers
  ADD PRIMARY KEY (`runame`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
