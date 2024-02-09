-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 10:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Chairs'),
(2, 'Sofas'),
(3, 'beds'),
(6, 'Tables'),
(11, 'test1'),
(19, 'test11'),
(23, 'Empty');

-- --------------------------------------------------------

--
-- Table structure for table `fur`
--

CREATE TABLE `fur` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `small` varchar(30) DEFAULT NULL,
  `large` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `active` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fur`
--

INSERT INTO `fur` (`id`, `title`, `des`, `small`, `large`, `price`, `active`, `image`, `category_id`, `date`) VALUES
(2, 'Side Chairr', ' side chair is a chair without arms. Often used in the dining room as additional dining table seating, its armless silhouette makes it sleek enough to fit in and around small spaces   ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '3000', '1', '3.jpg', 1, '2023-10-29 22:26:04'),
(3, 'Queen Anne Chair', 'queen sits is called a throne. Monarchs — kings and queens — sit on thrones on special ceremonial occasions, and so do religious figures such as bishops and popes.\r\n ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '5000', '1', '10.jpg', 1, '2023-10-29 22:26:04'),
(4, 'Rocking Chair', 'rocking chair or rocker is a type of chair with two curved bands (also known as rockers) attached to the bottom of the legs, ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '2500', '1', '2.jpg', 1, '2023-10-29 22:26:04'),
(5, 'Metal Chair', 'Metal chairs are distinguished into different types which include the metal folding chair, metal dining chair and metal rocking chair ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '1200', '1', '1.jpg', 1, '2023-10-29 22:26:04'),
(7, 'Murphy Bed', 'A Murphy bed (also known as a pull-down bed, fold-down bed, or wall bed) is a bed that is hinged at one end to store vertically against the wall, or inside a closet or cabinet. Since they often can be used as both a bed or a closet, Murphy beds may be  ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '7000', '0', 's.png', 3, '2023-10-29 22:26:04'),
(10, 'Bookcase Bed', 'A bookcase bed is pretty much exactly what it sounds like—a storage bed with shelving units for books or enclosed storage for whatever needs to be stored.\r\n  ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '3000', '1', '10148.jpg', 3, '2023-10-29 22:26:04'),
(13, 'Convertible Bed', 'A convertible sleeper typically does not have a mattress hidden within the frame of the furniture. A convertible sleeper can act as a bed simply by changing its configuration so that it is easier to lie down on the cushions. Therefore, a convertible sleep', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '5000', '1', 'b9e2ac9967e3884287d24baffb325bad (1).jpg', 3, '2023-10-29 23:34:57'),
(14, ' Four-poster bed ', ' four-poster bed is a bed with four vertical columns, one in each corner, that support a tester, or upper (usually rectangular) panel. ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '7000', '1', 'VCT005_1_Supersize.jpg', 3, '2023-10-30 00:28:48'),
(15, 'Coffee table', 'A coffee table is a small table that is intended to be put in a sitting area and used for holding items like magazines, books, remote controls   ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '3000', '1', 'hemnes-coffee-table-light-brown__0835986_pe601393_s5.png', 6, '2023-10-30 00:31:56'),
(16, 'Computer Table', 'It is just additional commonly suggested as a computer desk, as well as its function is to deliver a workspace for a computer. The table can be   ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '2400', '1', 'p.png', 6, '2023-10-30 00:39:45'),
(18, 'The dressing table', 'Dressing tables are highly utilitarian (though not necessarily unattractive) and are usually built with a specific job in mind: woodworking, ..    ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '3000', '1', 'white-dressing-table-mirror-stool-set-victoria-range_MM28927-01.png', 6, '2023-11-01 01:21:01'),
(19, 'Dining table', 'Apart from being a place where you set meals, the table is also a workstation, study table, sewing table, and other household tasks. Considering that the role of the dining room table has evolved with time, it has become all the more necessary for peopl ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '8000', '1', 'Laceymai+86.6+L+x+35.4+W+Dining+Table.png', 6, '2023-11-01 01:27:22'),
(24, 'Ball Chair', 'The Ball Chair is also known as the globe chair and is famous for its unconventional shape. It is considered a classic of industrial design. More recent\r\n            ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '7500', '1', 'MIA-DOR-24.png', 1, '2023-11-01 20:44:13'),
(25, 'A club chair', 'A club chair is a comfortable armchair with a wide, sometimes oversized design profile. It’s upholstered either in leather or fabric for the most comfort. The traditional club chair design has arms, but you can also find armless club chairs, and often, th', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '50000', '1', 'download (2).jpg', 1, '2023-11-01 20:48:47'),
(27, 'waterbed ', 'A waterbed is a mattress that is filled with water. Because most mattresses are filled with a foam core or an innerspring system, a waterbed offers a unique sleeping experience  ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '3000', '1', 'UltraFrame_resized_302376d5-3286-47df-8fb4-649400418a3f_1200x630.png', 3, '2023-11-01 21:27:19'),
(28, 'Bar table', 'Bar table is a tall table specifically designed for use at a bar or in a dining area. Bar height tables were named after pubs and bars due to the height of the tables', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '4350', '1', '30802358.png', 6, '2023-11-02 01:13:00'),
(29, 'Sleigh bed ', 'A sleigh bed is a style of bed with curved or scrolled foot and headboards, thus resembling a sled or sleigh.sleigh bed is a result of the French and American Empire period of the early 19th century.\r\n\r\n  ', ' H 25 cm / Ø 12 cm', 'H 24 cm / Ø 25 cm', '100000', '1', 'chesterfield-bed.jpg', 3, '2023-11-02 01:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `date`, `active`) VALUES
(1, 'Hind Mohsen', 'Hind', 'hindmohsen2001@gmail.com', 'Hi@11111111', '2023-10-26 21:10:04', 1),
(2, 'Alaa Mohamed', 'Alaa', 'alaa22@gmail.com', 'Al$22222222', '2023-10-26 21:10:04', 0),
(3, 'Nada Yasser', 'Nada', 'nada@gmail.com', 'Na%33333333', '2023-10-26 21:10:04', 0),
(4, 'Mayar Mohamed', 'Mayar', 'mayar@gmail.com', 'Ma*44444444', '2023-10-26 21:10:04', 0),
(5, 'Doaa Adel', 'Doaa', 'doaa@gmail.com', 'Do^55555555', '2023-10-26 21:10:04', 0),
(6, 'Youmna Ibrahim', 'Yumna', 'youmna@gmail.com', 'Do^55555555', '2023-10-26 21:10:04', 0),
(7, 'Yasmin Mourad', 'Yasmin', 'yasmin@gmail.com', 'Ya@7777777', '2023-10-26 21:10:04', 0),
(8, 'Sara Rehan', 'Sara', 'Sara5@gmail.com', 'Sa%88888888', '2023-10-26 21:10:04', 0),
(9, 'Mona Agmad', 'Mona', 'Mona@gmail.com', 'Mo#999999999', '2023-10-26 21:10:04', 0),
(10, 'Wafaa Adam', 'Wafa', 'wafaa@gmail.com', 'Wa&12345678', '2023-10-26 21:10:04', 0),
(11, 'Huda Atef', 'Huda', 'huda@gmail.com', 'Hu123456987$', '2023-10-26 21:10:04', 0),
(12, 'Ola Atef', 'Ola', 'Ola@gmail.com', 'Ol$1234567', '2023-10-26 22:53:54', 0),
(13, 'Ola Atef', 'Ola', 'Ola@gmail.com', 'Ol$1234567', '2023-10-26 22:54:45', 0),
(14, 'Ola Atef', 'Ola', 'Ola@gmail.com', 'Ol$1234567', '2023-10-26 22:56:50', 0),
(15, 'Ahmed Gamal', 'Ahmed', 'ahmed@gmail.com', 'Ah^147852963', '2023-10-26 23:00:46', 0),
(16, 'Esraa Ali', 'Esraa', 'esraa@gmail.com', 'Es@1234567', '2023-10-27 12:39:39', 0),
(17, 'Youssef Amer', 'Yousse', 'youseef@gmail.com', 'Yo@123456789', '2023-10-28 23:24:19', 0),
(18, 'Hadir Fahim', 'Hadir', 'hadir@gmail.com', 'Ha$123456k', '2023-10-28 23:25:51', 0),
(19, 'Mai Amer', 'Mai', 'mai@gmail.com', 'Ma*12345678', '2023-10-28 23:32:01', 0),
(20, 'Mai Ramy', 'Mai', 'mai@gmail.com', 'Ma*12345678', '2023-10-28 23:33:09', 0),
(26, 'Rogina Tarek', 'Rogina', 'rogina@gmail.com', 'Ro&14763289', '2023-11-02 21:27:24', 0),
(27, 'Amira Fathy', 'Amira', 'amira@gmail.com', 'Am#444444444', '2023-11-02 21:33:04', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fur`
--
ALTER TABLE `fur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `fur`
--
ALTER TABLE `fur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fur`
--
ALTER TABLE `fur`
  ADD CONSTRAINT `fur_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
