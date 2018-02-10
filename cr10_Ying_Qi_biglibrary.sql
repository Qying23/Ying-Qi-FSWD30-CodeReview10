-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 10. Feb 2018 um 13:53
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_Ying_Qi_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `firstName` varchar(55) DEFAULT NULL,
  `lastName` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `author`
--

INSERT INTO `author` (`author_id`, `firstName`, `lastName`) VALUES
(1, 'Joanne K.', 'Rowling'),
(2, 'Stephen', ' King'),
(3, 'Cheng', ' Tingyu '),
(4, 'Yuan', ' Zidan '),
(5, 'Hai', ' Yan '),
(6, 'Katja', ' Brandis');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Book`
--

CREATE TABLE `Book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ISBN_code` int(11) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `fk_author_id` int(11) DEFAULT NULL,
  `fk_size_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `Book`
--

INSERT INTO `Book` (`book_id`, `title`, `image`, `description`, `ISBN_code`, `published_date`, `fk_author_id`, `fk_size_id`) VALUES
(1, 'Harry Potter and the Philosophers Stone', 'http://www.bookstoyou.net/wp-content/uploads/2016/01/200px-Harry_Potter_and_the_Philosophers_Stone_Book_Cover.jpg', 'Eleven-year-old Harry Potter has been living an ordinary life, constantly abused by his surly and cold uncle and aunt, Vernon and Petunia Dursley and bullied by their spoiled bully of a son Dudley. ', 978, '1997-06-26', 1, 1),
(2, 'Harry Potter and the Chamber of Secrets', 'https://images-na.ssl-images-amazon.com/images/I/51oKzLklm7L.jpg', 'On Harry Potter\'s birthday in 1992, the Dursley family—Harry\'s Uncle Vernon, Aunt Petunia, and cousin Dudley—hold a dinner party for a potential client of Vernon\'s drill-manufacturing company.', 880, '1998-07-02', 1, 1),
(3, 'Harry Potter and the Prisoner of Azkaban', 'https://images-na.ssl-images-amazon.com/images/I/81lAPl9Fl0L.jpg', 'Harry is back at the Dursleys, where he sees on Muggle television that a prisoner named Sirius Black has escaped. ', 787999090, '1999-07-08', 1, 1),
(4, 'Harry Potter and the Goblet of Fire', 'https://tctechcrunch2011.files.wordpress.com/2007/12/074754624x02lzzzzzzz.jpeg', 'The book opens with Harry seeing Frank Bryce being killed by Lord Voldemort in a vision, and is awoken by his scar hurting. The Weasleys then take Harry and Hermione Granger to the Quidditch World Cup', 978, '2000-07-08', 1, 1),
(5, 'The Green Mile', 'http://www.sapnet.co.za/bookcovers/0/5/7/9780575084346.jpg', 'A first-person narrative told by Paul Edgecombe, the novel switches between Paul as an old man in the Georgia Pines nursing home sharing his story with fellow resident Elaine Connelly in 1996, and his time in 1932 as the block supervisor ', 978, '1996-08-29', 2, 1),
(6, 'Nirvana in Fire ', 'https://pgw.udn.com.tw/gw/photo.php?u=/readingimg/covert_page/book/89579.jpg&fw=280&sl=W&exp=3600', 'In sixth century China, there was a war between feudal Northern Wei and Southern Liang dynasties. ', 978, '1997-12-12', 5, 1),
(7, 'the princess Wei Yang', 'https://solstar24.files.wordpress.com/2016/02/tpwy1_zpsrevw2yba.jpg?w=663', 'Her husband loved her stepsister, deposed her as Empress and even forced her son into death. In that Cold Palace, she was forced to drink poisonous wine. So in the next lifetime, she made a promise to never do good deeds and help others', 978, '1997-12-12', 3, 1),
(8, ' Woodwalker', 'https://testingbooks.files.wordpress.com/2017/01/978-3-401-60196-0.jpg', '\r\nAt age 13, Carag moves away from home because he is fascinated by the human world and wants to live there in the future.', 978754659, '1997-12-12', 6, 1),
(9, 'Ode to Joy ', 'https://img3.doubanio.com/lpic/s28559284.jpg', 'the story about 5 different girls in the city.', 978142659, '2016-04-15', 4, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `CD`
--

CREATE TABLE `CD` (
  `cd_id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ISBN_code` int(11) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `fk_size_id` int(11) DEFAULT NULL,
  `fk_status_id` int(11) DEFAULT NULL,
  `fk_publisher_id` int(11) DEFAULT NULL,
  `fk_genre_id` int(11) DEFAULT NULL,
  `Artist` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `CD`
--

INSERT INTO `CD` (`cd_id`, `title`, `image`, `description`, `ISBN_code`, `published_date`, `fk_size_id`, `fk_status_id`, `fk_publisher_id`, `fk_genre_id`, `Artist`) VALUES
(1, 'The Very Best of Mozart', 'https://lastfm-img2.akamaized.net/i/u/ar0/47f75dea288849b4c90d0dcbc09a3cc5', 'Musik of Mozart', 67565, '2002-01-01', 3, 3, 1, 12, 'Mozart'),
(2, '8701', 'https://images-na.ssl-images-amazon.com/images/I/71qElptIaPL._SL1500_.jpg', 'nice Songs', 987645, '2001-08-07', 3, 3, 1, 13, 'Usher'),
(3, 'ABBA: Gold - Greatest Hits', 'https://images-na.ssl-images-amazon.com/images/I/51WHX26rRgL._SY355_.jpg', 'Songs', 12345, '2002-01-01', 1, 1, 1, 14, ' Agnetha Fältskog , Björn Ulvaeus, Anni-Frid Lyngstad');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `DVD`
--

CREATE TABLE `DVD` (
  `dvd_id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ISBN_code` int(11) DEFAULT NULL,
  `published_date` date DEFAULT NULL,
  `fk_size_id` int(11) DEFAULT NULL,
  `fk_status_id` int(11) DEFAULT NULL,
  `fk_publisher_id` int(11) DEFAULT NULL,
  `fk_genre_id` int(11) DEFAULT NULL,
  `actor` varchar(55) DEFAULT NULL,
  `actress` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `DVD`
--

INSERT INTO `DVD` (`dvd_id`, `title`, `image`, `description`, `ISBN_code`, `published_date`, `fk_size_id`, `fk_status_id`, `fk_publisher_id`, `fk_genre_id`, `actor`, `actress`) VALUES
(1, 'City lights ', 'https://theredlist.com/media/database/films/cinema/1930/city-lights/023-city-lights-theredlist.jpg', 'Citizens and dignitaries are assembled for the unveiling of a new monument to \"Peace and Prosperity\". ', 12345, '2002-01-01', 1, 3, 1, 8, 'Charlie Chaplin ', 'Virginia Cherrill '),
(2, 'Lawrence of Arabia', 'https://images-na.ssl-images-amazon.com/images/I/51gdoo-4gHL._SY300_.jpg', 'The Life of T. E. Lawrence in Arabia', 12345, '2002-01-01', 3, 3, 1, 1, 'Peter O’Toole ', '--'),
(3, 'Gone with the Wind ', 'https://upload.wikimedia.org/wikipedia/commons/b/b3/Gone_With_The_Wind_1967_re-release.jpg', 'On the eve of the American Civil War in 1861, Scarlett O\'Hara lives at Tara, her family\'s cotton plantation in Georgia, with her parents and two sisters.', 12345, '2002-01-01', 3, 3, 1, 1, 'Clark Gable ', 'Vivien Leigh ');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Genre`
--

CREATE TABLE `Genre` (
  `genre_id` int(11) NOT NULL,
  `Genre_Name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `Genre`
--

INSERT INTO `Genre` (`genre_id`, `Genre_Name`) VALUES
(1, 'Drama'),
(2, 'Horror'),
(3, 'Romance'),
(4, 'Tragedy'),
(5, 'Fantasy'),
(6, 'Mythology'),
(7, 'Adventure'),
(8, 'Comedy'),
(9, 'politics'),
(10, 'modern'),
(11, 'historical'),
(12, 'classic'),
(13, 'RnB'),
(14, 'disco'),
(15, 'Rock'),
(16, 'Pop'),
(17, 'mystery');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Media_status`
--

CREATE TABLE `Media_status` (
  `status_id` int(11) NOT NULL,
  `Standing` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `Media_status`
--

INSERT INTO `Media_status` (`status_id`, `Standing`) VALUES
(1, 'here'),
(2, 'reserved'),
(3, 'borrowed');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `firstName` varchar(55) DEFAULT NULL,
  `lastName` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `firstName`, `lastName`) VALUES
(1, '-', '-'),
(2, '-', 'United Artists '),
(3, '-', 'Columbia Pictures'),
(4, '-', 'Selznick '),
(5, '-', 'Bloomsbury Publishing'),
(6, '-', 'Simon & Schuster');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `size`
--

INSERT INTO `size` (`size_id`, `size`) VALUES
(1, 'big'),
(2, 'medium'),
(3, 'small');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Users`
--

CREATE TABLE `Users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(55) DEFAULT NULL,
  `lastName` varchar(55) DEFAULT NULL,
  `adress` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `fk_dvd_id` int(11) DEFAULT NULL,
  `fk_cd_id` int(11) DEFAULT NULL,
  `fk_book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `Users`
--

INSERT INTO `Users` (`user_id`, `firstName`, `lastName`, `adress`, `email`, `birthday`, `fk_dvd_id`, `fk_cd_id`, `fk_book_id`) VALUES
(1, 'Tobias', 'Moor', 'steg 9', 't.moor@gmx.com', '1980-10-11', 2, 3, 1),
(2, 'Honor', 'Smith', 'Gentzgasse 19/21', 'smith003@gmail.com', '1960-03-21', 3, 1, 9),
(3, 'Olivia', 'Schau', 'Augasse 65/1/6', 'o.schau@aon.com', '1988-06-20', 1, 2, 6);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indizes für die Tabelle `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `fk_size_id` (`fk_size_id`),
  ADD KEY `fk_author_id` (`fk_author_id`);

--
-- Indizes für die Tabelle `CD`
--
ALTER TABLE `CD`
  ADD PRIMARY KEY (`cd_id`),
  ADD KEY `fk_size_id` (`fk_size_id`),
  ADD KEY `fk_publisher_id` (`fk_publisher_id`),
  ADD KEY `fk_genre_id` (`fk_genre_id`),
  ADD KEY `fk_status_id` (`fk_status_id`);

--
-- Indizes für die Tabelle `DVD`
--
ALTER TABLE `DVD`
  ADD PRIMARY KEY (`dvd_id`),
  ADD KEY `fk_size_id` (`fk_size_id`),
  ADD KEY `fk_publisher_id` (`fk_publisher_id`),
  ADD KEY `fk_genre_id` (`fk_genre_id`),
  ADD KEY `fk_status_id` (`fk_status_id`);

--
-- Indizes für die Tabelle `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indizes für die Tabelle `Media_status`
--
ALTER TABLE `Media_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indizes für die Tabelle `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indizes für die Tabelle `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_dvd_id` (`fk_dvd_id`),
  ADD KEY `fk_cd_id` (`fk_cd_id`),
  ADD KEY `fk_book_id` (`fk_book_id`);

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `Book`
--
ALTER TABLE `Book`
  ADD CONSTRAINT `Book_ibfk_1` FOREIGN KEY (`fk_author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `Book_ibfk_2` FOREIGN KEY (`fk_size_id`) REFERENCES `size` (`size_id`),
  ADD CONSTRAINT `Book_ibfk_3` FOREIGN KEY (`fk_author_id`) REFERENCES `author` (`author_id`);

--
-- Constraints der Tabelle `CD`
--
ALTER TABLE `CD`
  ADD CONSTRAINT `CD_ibfk_1` FOREIGN KEY (`fk_size_id`) REFERENCES `size` (`size_id`),
  ADD CONSTRAINT `CD_ibfk_2` FOREIGN KEY (`fk_publisher_id`) REFERENCES `publisher` (`publisher_id`),
  ADD CONSTRAINT `CD_ibfk_3` FOREIGN KEY (`fk_genre_id`) REFERENCES `Genre` (`genre_id`),
  ADD CONSTRAINT `CD_ibfk_4` FOREIGN KEY (`fk_status_id`) REFERENCES `Media_status` (`status_id`);

--
-- Constraints der Tabelle `DVD`
--
ALTER TABLE `DVD`
  ADD CONSTRAINT `DVD_ibfk_1` FOREIGN KEY (`fk_size_id`) REFERENCES `size` (`size_id`),
  ADD CONSTRAINT `DVD_ibfk_2` FOREIGN KEY (`fk_publisher_id`) REFERENCES `publisher` (`publisher_id`),
  ADD CONSTRAINT `DVD_ibfk_3` FOREIGN KEY (`fk_genre_id`) REFERENCES `Genre` (`genre_id`),
  ADD CONSTRAINT `DVD_ibfk_4` FOREIGN KEY (`fk_status_id`) REFERENCES `Media_status` (`status_id`);

--
-- Constraints der Tabelle `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `Users_ibfk_1` FOREIGN KEY (`fk_dvd_id`) REFERENCES `DVD` (`dvd_id`),
  ADD CONSTRAINT `Users_ibfk_2` FOREIGN KEY (`fk_cd_id`) REFERENCES `CD` (`cd_id`),
  ADD CONSTRAINT `Users_ibfk_3` FOREIGN KEY (`fk_book_id`) REFERENCES `Book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
