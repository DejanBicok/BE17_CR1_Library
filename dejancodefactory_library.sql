-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 12:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dejancodefactory_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `picture` longblob NOT NULL,
  `isbn_code` varchar(30) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `author_first_name` varchar(100) NOT NULL,
  `author_last_name` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `publisher_address` varchar(150) DEFAULT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `picture`, `isbn_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(90, '\"The Giving Tree\"', 0x363336666138363330623831632e6a7067, '9780060256654', 'The book follows the lives of an apple tree and a boy, who develop a relationship with one another.', 'Fiction', 'Shel', 'Silverstein', 'Harper & Row', '195 Broadway, New York, NY 10007', '1964-10-06'),
(91, '\"Lord of the Flies\"', 0x363336666139643433666635332e6a7067, '9781573226127', 'Story of a group of young boys who find themselves alone on a deserted island.', 'Adventure', 'William', 'Golding', 'Penguin Books', '1745 Broadway, New York, NY', '1954-09-17'),
(92, '\"Invisible Man\"', 0x363336666162326561663562332e6a7067, '9780141184425', 'Nameless young black man who moves in a 20th-century United States where reality is surreal and who can survive only through pretense', 'Science Fiction', 'Ralph', 'Ellison', 'Random House', '1745 Broadway in Manhattan, NY', '1952-04-14'),
(93, '\"War and Peace\"', 0x363336666163643938346462362e6a7067, '9781593080730', 'War and Peace broadly focuses on Napoleons invasion of Russia in 1812.', 'Historical novel', 'Leo', 'Tolstoy', 'The Russian Messenger', 'Moscow', '1869-02-05'),
(94, '\"The Corrections\"', 0x363336666164666462636566352e706e67, '9780374129989', 'Revolves around the troubles of an elderly Midwestern couple and their three adult children.', 'Novel', 'Jonathan', 'Franzen', 'Farrar, Straus and Giroux', 'Equitable Building New York City', '2001-09-01'),
(96, '\"Oryx and Crake\"', 0x363336666166356534653131342e6a7067, '9780385721677', 'Snowman spins fictional stories about individuals named Crake and Oryx, whom the Crakers understand as kinds of gods.', 'Speculative Fiction', 'Margaret', 'Atwood', 'McClelland and Stewart, Canada', 'Vintage Canada, Toronto, ON, 2009', '2003-05-10'),
(97, '\"Fingersmith\"', 0x363336666230613066326464362e6a7067, '9781573229722', 'Sue Trinder is an orphan who has been raised by petty thieves fingersmiths.', 'Crime Novel', 'Sarah', 'Waters', '‎Riverhead Books', '1745 Broadway Fl 21, New York City', '2002-02-04'),
(98, '\"The Known World\"', 0x363336666231613532373332332e6a7067, '9780965136716', 'The Known World weaves together the lives of freed and enslaved blacks, whites, and Indians.', 'Historical Novel', 'Edward', 'Jones', 'HarperCollins', '195 Broadway New York, NY 10007 USA', '2003-09-03'),
(100, '\"Harvest\"', 0x363336666233323162633533312e6a7067, '9781447211945', 'One of the great under-told narratives of English history.', 'Historical Fiction', 'Jim', 'Crace', 'Picador', 'United Kingdom, London', '2013-02-12'),
(102, '\"Nineteen Eighty Four\"', 0x363336666234373138393230312e6a706567, '9780451524935', 'A low ranking member of the Party, who is frustrated by the omnipresent eyes of the party.', 'Science Fiction', 'George', 'Orwell', 'Secker & Warburg', 'VAUXHALL BRIDGE ROAD, LONDON, England', '1949-06-08'),
(103, '\"Brave New World\"', 0x363336666235343764656532322e6a7067, '9780060850524', 'The novel examines a futuristic society, called the World State, that revolves around science and efficiency.', 'Science Fiction', 'Aldous', 'Huxley', 'Chatto & Windus', '20 VAUXHALL BRIDGE ROAD, LONDON, England', '2014-08-18'),
(104, '\"Crazy Rich Asians\"', 0x363336666236363637613230632e6a7067, '9780345803788', 'The book is about three wealthy, upper-class Chinese families.', 'Comedy', 'Kevin', 'Kwan', 'Doubleday', '1745 Broadway New York, USA', '2013-06-11'),
(105, '\"Life After Life\"', 0x363336666237623338396566322e6a7067, '9780316176491', 'This novel is as much about familial relations as it is about historical events.', 'Historical Fiction', 'Kate', 'Atkinson', 'Back Bay Books', '1271 Avenue of the Americas New York, USA', '2013-03-14'),
(106, '\"Born a Crime\"', 0x363336666239616265653933642e6a7067, '9780399588198', 'Born a Crime is the story of a mischievous young boy who grows into a restless young man as he struggles to find himself in a world where he was never supposed to exist.', 'Humor Autobiography', 'Trevor', 'Noah', 'Spiegel & Grau', 'New York City , USA', '2016-11-15'),
(107, '\"The Alchemist\"', 0x363336666330356430663466312e6a7067, '9780061122415', 'Andalusian shepherd boy who yearns to travel in search of a worldly treasure as extravagant as any ever found.', 'Adventure Fiction', 'Paulo', 'Coelho', 'HarperTorch', '195 Broadway New York City, US', '2006-09-01'),
(115, '', 0x6e6f626f6f6b2e706e67, '', '', '', '', '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN_code` (`isbn_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
