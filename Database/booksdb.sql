-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 06:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin_name`, `admin_email`, `admin_password`, `admin_id`) VALUES
(3, 'Meet', 'md@gmail.com', 'meet1234', '893'),
(4, 'Darshak', 'dk@gmail.com', 'darshak1234', '683');

-- --------------------------------------------------------

--
-- Table structure for table `books details`
--

CREATE TABLE `books details` (
  `book_id` int(10) NOT NULL,
  `book_title` text NOT NULL,
  `book_ISBN` bigint(50) NOT NULL,
  `book_genre` varchar(500) NOT NULL,
  `book_description` text NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `book_price` int(10) NOT NULL,
  `book_pages` int(10) NOT NULL,
  `book_dimension` varchar(10) NOT NULL,
  `book_publisher` varchar(50) NOT NULL,
  `book_language` varchar(50) NOT NULL,
  `author_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books details`
--

INSERT INTO `books details` (`book_id`, `book_title`, `book_ISBN`, `book_genre`, `book_description`, `author_name`, `book_price`, `book_pages`, `book_dimension`, `book_publisher`, `book_language`, `author_description`) VALUES
(2, 'Rich Dad Poor Dad', 456789123, 'Self-help book', 'Good', 'Robert Kiosaki', 250, 193, '14', 'Warner Books Ed', 'English', 'Top selling Author'),
(3, 'Ikigai: The Japanese Secret to a Long and Happy Life', 2147483647, 'Self-help book', 'Ikigai gently unlocks simple secrets we can all use to live long, meaningful, happy lives. Science-based studies weave beautifully into honest, straight-talking conversation you won’t be able to put down. Warm, patient, and kind, this book pulls you gently along your own journey rather than pushing you from behind.', 'Héctor García, Francesc Miralles', 300, 208, '14', 'Penguin Publishing Group, 2017', 'English', 'Héctor García and Francesc Miralles are the coauthors of The Book of Ichigo Ichie: The Art of Making the Most of Every Moment, the Japanese Way. Héctor is a citizen of Japan, where he has lived for over a decade, and is the author of A Geek in Japan, a #1 bestseller in Japan. Francesc is the author of a number of bestselling self-help and inspirational books and of the novel Love in Lowercase, which has been translated into twenty languages.'),
(4, 'Shoe Dog: A Memoir by the Creator of Nike', 1501135929, 'Biography, Autobiography, Memoir', 'In this instant and tenacious New York Times bestseller, Nike founder and board chairman Phil Knight “offers a rare and revealing look at the notoriously media-shy man behind the swoosh” (Booklist, starred review), illuminating his company’s early days as an intrepid start-up and its evolution into one of the world’s most iconic, game-changing, and profitable brands.', 'Phil Knight', 10, 400, '6 x 1 x 9 ', 'Scribner; Reprint edition (May 1, 2018)', 'English', 'One of the world’s most influential business executives, Phil Knight is the founder of Nike, Inc. He served as CEO of the company from 1964 to 2004, as board chairman through 2016, and he is currently Chairman Emeritus. He lives in Oregon with his wife, Penny.'),
(5, 'The Power of Now: A Guide to Spiritual Enlightenment', 1577314808, 'Self-help book', 'A powerful, insightful guide to achieving spiritual balance shows readers the impediments posed by the mind to the path of enlightenment and the secret to connecting with essence of Being, all the while emphasizing the importance of living in the moment. Reprint. 250,000 first printing. $150,000 ad/promo.', 'Eckhart Tolle', 219, 251, '13.97 x 1.', 'New World Library; Reprint edition (1 November 200', 'English', 'World-renowned spiritual teacher Eckhart Tolle conveys simple wisdom that transcends any particular religion, doctrine, or guru. His #1 NYT bestselling book is a modern classic in the field of personal growth and spirituality; Oprah Winfrey credits The Power of Now with helping her to \"get through September 11, 2001\" and she featured it on her December 2002 \"Oprah&;s Favorite Things\" show. A native of Germany, Eckhart Tolle attended the University of London, and upon graduation went on to become a research scholar and supervisor at Cambridge University. At 29, a profound spiritual awakening virtually dissolved his personal identity and sparked a radical change in the course of his life. It marked the beginning of an intense inward journey and he devoted the next decade to understanding, deepening, and integrating that transformation. For the past ten years, he has acted as a counselor and spiritual guide, facilitating sold-out groups in Europe and North America. He lives in Vancouver, British Columbia.'),
(6, 'Clean Code', 9780132350884, 'Engineering ,computer', 'Clean Code: A Handbook Of Agile Software Craftsman presents the authors’ best practices for cleaning code.', 'Robert Cecil Martin', 1786, 431, '17.78 x 2.', 'Pearson Education India', 'English', 'Also known as ‘Uncle Bob’, Robert Cecil Martin is an American author and software consultant. He has spent several decades in the field of software engineering and consultancy.  Other books by the author include Agile Software Development: Principles, Patterns And Practices, Designing Object-Oriented C++ Applications Using The Booch Method, and The Clean Coder: A Code Of Conduct For Professional Programmers.'),
(7, 'Theory of Machines', 9788121925242, 'Technology & Engineering,mechanical', 'Theory of Machines is a comprehensive reference book for B.E and B.Tech students from the Mechanical Engineering stream.', ' Khurmi R. S.', 795, 1071, '250*160 mm', 'S Chand & Co Ltd', 'English', 'NA'),
(8, 'Electric Energy: An Introduction, Third Edition (Power Electronics and Applications Series)', 1466503033, 'Technology & Engineering,Electrical', 'The search for renewable energy and smart grids, the societal impact of blackouts, and the environmental impact of generating electricity, along with the new ABET criteria, continue to drive a renewed interest in electric energy as a core subject. Keeping pace with these changes, Electric Energy: An Introduction, Third Edition restructures the traditional introductory electric energy course to better meet the needs of electrical and mechanical engineering students.', ' Mohamed A. El-Sharkawi', 7000, 606, '18.42 x 2.', 'CRC Press; 3rd edition', 'English', 'Mohamed A. El-Sharkawi is a fellow of the IEEE and a professor of electrical engineering in the energy area at the University of Washington. He has published more than 250 papers and holds five licensed patents in the area of renewable energy VAR management and minimum arc sequential circuit breaker switching. For more information, please visit Professor El-Sharkawi’s website at the University of Washington.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(20) NOT NULL,
  `cart_total` int(20) NOT NULL,
  `book_id` int(10) NOT NULL,
  `price_total` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `cart_total`, `book_id`, `price_total`) VALUES
(57, 2, 2, 500),
(57, 2, 3, 600),
(57, 3, 5, 657);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_total` int(10) NOT NULL,
  `order_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `order_total`, `order_quantity`) VALUES
(423, 51, '2020-11-17', 1100, 4),
(454, 51, '2020-11-17', 900, 3),
(696, 51, '2020-11-17', 310, 2),
(701, 51, '2020-11-17', 1319, 5),
(709, 39, '2020-11-17', 1750, 6),
(741, 51, '2020-11-17', 1319, 5),
(840, 51, '2020-11-17', 1250, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` bigint(15) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `user_address` text NOT NULL,
  `user_city` varchar(20) NOT NULL,
  `user_pincode` int(6) NOT NULL,
  `sec_que_1` text NOT NULL,
  `sec_que_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `user_mobile`, `user_password`, `user_type`, `user_address`, `user_city`, `user_pincode`, `sec_que_1`, `sec_que_2`) VALUES
(32, 'rushabh', 'donda', 'rd@gmail.com', 9756481546, 'rushabh123', 0, 'vijayraj', 'Bhavnagar', 390654, 'ramu', 'gcet'),
(39, 'Meet', 'Dabhi', 'md@gmail.com', 6453658798, 'md1234', 0, 'Katargam', 'Surat', 395004, 'md', 'gcet'),
(48, 'Chandler', 'Bing', 'cbing@gmail.com', 9856472316, 'chandler1234', 1, 'New York', 'New York', 234566, 'Bing', 'MIT'),
(50, 'Ross', 'Geller', 'rgeller@gmail.com', 8647546574, 'ross1234', 0, 'New York', 'New York', 234566, 'geller', 'gcet'),
(51, 'Monica', 'Geller', 'gmonica@gmail.com', 7546856475, 'monica1234', 1, 'New York', 'New York', 234566, 'ramu', 'gcet'),
(57, 'Walter', 'White', 'white@gmail.com', 9756481546, 'danger1234', 0, 'Albaquerque', 'Maxico', 234566, 'dsdad', 'angutho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `books details`
--
ALTER TABLE `books details`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books details`
--
ALTER TABLE `books details`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=978;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
