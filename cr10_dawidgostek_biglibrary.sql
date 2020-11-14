-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 12:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_dawidgostek_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_dawidgostek_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_dawidgostek_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `author_last_name` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `publish_date` date NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publisher_size` varchar(6) NOT NULL,
  `type` varchar(4) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ISBN` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `images`, `author_first_name`, `author_last_name`, `short_description`, `publish_date`, `publisher_name`, `publisher_address`, `publisher_size`, `type`, `status`, `ISBN`) VALUES
(4, 'Harry Potter - Philosopher`s Stone', 'https://images-na.ssl-images-amazon.com/images/I/51DF6ZR8G7L._SX329_BO1,204,203,200_.jpg', 'Joanne', 'Rowling', 'Harry Potter and the Philosopher`s Stone is an enthralling start to Harry`s journey toward coming to terms with his past and facing his future. It was the first book written by Rowling, and she was praised for creating well-rounded characters and a fully realized wizard universe that coexisted with the present world.', '1997-06-26', 'Bloomsbury', 'WC1, London, England', 'big', 'book', 'available', '9780939173341'),
(5, 'Fifty Shades of Grey - Audio Book', 'https://upload.wikimedia.org/wikipedia/en/5/5e/50ShadesofGreyCoverArt.jpg', 'Erika', 'Leonard', 'Fifty Shades of Grey is a 2011 erotic romance novel by British author E. L. It became the first instalment in the Fifty Shades novel series that follows the deepening relationship between a college graduate, Anastasia Steele, and a young business magnate, Christian Grey.', '2012-04-01', 'Vintage Books', 'New York City, New York, USA', 'big', 'CD', 'reserved', '978-1-61213-028-6'),
(6, 'Harry Potter and the Chamber of Secrets', 'https://upload.wikimedia.org/wikipedia/en/5/5c/Harry_Potter_and_the_Chamber_of_Secrets.jpg', 'Joanne', 'Rowling', 'Harry and his friends are now forced to secretly uncover the truth about the chamber before the school closes or any lives are taken. When a crazy house-elf named Dobby arrives in Harry`s room, he warns him that there is a plot to destroy Hogwarts and that he shouldn`t return.', '1998-07-02', 'Bloomsbury Publishing', 'WC1, London, England', 'big', 'book', 'available', '9780439064873'),
(8, 'Ancient Egypt', 'https://images-na.ssl-images-amazon.com/images/I/51ELPz3-mfL.jpg', 'Discovery', 'Channel', 'If you only wanted one DVD about ancient Egypt, you could not do better than this. This starts about pre-3000 B.C. and follows the history of the Rulers, the priests, their Gods, the common people and the importance of the Nile River. It also includes their neighbors and how they influenced Egypt`s development.', '2010-10-11', 'Discovery Channel', 'New York City, New York, USA', 'medium', 'DVD', 'available', 'B003ZJAFSU'),
(9, 'The Little Prince - Audio Book', 'https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Littleprince.JPG/330px-Littleprince.JPG', 'Antoine', 'de Saint-Exupéry', 'Summaries. A pilot, stranded in the desert, meets a little boy who is a prince on a planet. Based on the story by Antoine de Saint-Exupery, this magical musical fable begins as a pilot makes a forced landing on the barren Sahara Desert. He is befriended by a \"little\" prince from the planet Asteroid B-612.', '1943-04-01', 'Reynal & Hitchcock', 'New York City, New York, USA', 'big', 'CD', 'reserved', '8580001044842'),
(11, 'Harry Potter and the Prisoner of Azkaban', 'https://upload.wikimedia.org/wikipedia/en/a/a0/Harry_Potter_and_the_Prisoner_of_Azkaban.jpg', 'Joanne', 'Rowling', 'Harry Potter and the Prisoner of Azkaban opens on the night before Harry`s thirteenth birthday, when he receives gifts by Owl Post from his friends at school. At this time, Aunt Marge comes to stay with the Dursleys, and she insults Harry`s parents numerous times. Harry accidentally causes her to inflate.', '1999-07-08', 'Bloomsbury', 'WC1, London, England', 'big', 'book', 'available', '9781484476253'),
(12, 'National Geographic: Sharks', 'https://images-na.ssl-images-amazon.com/images/I/61DARhSwAbL._AC_SY445_.jpg', 'National', 'Geographic', 'Hammerhead Highway: Sharks have thrived in the oceans for over 350 million years, but around 20 million years ago a new species emerged in the fossil records in a form unlike ever seen before...the Hammerhead Shark.', '2010-05-24', 'National Geographic', 'New York City, New York, USA', 'small', 'DVD', 'available', '5030697018151'),
(13, 'Bridget Jones`s Diary - Audio Book', 'https://upload.wikimedia.org/wikipedia/en/b/ba/BridgetJonesDiary.jpg', 'Helen', 'Fielding', 'Bridget Jones is an unattached 30-something who realizes she`s got to change her life. After a New Year`s Eve, she vows that this new year is the one in which she`ll get her act together. She`ll lose weight, she`ll smoke and drink less, and she`ll document it all in a diary.', '2000-05-10', 'Picador', 'London, UK', 'big', 'CD', 'available', '0-670-88072-8'),
(14, 'Harry Potter and the Deathly Hallows', 'https://upload.wikimedia.org/wikipedia/en/a/a9/Harry_Potter_and_the_Deathly_Hallows.jpg', 'Joanne', 'Rowling', 'The novel chronicles the events directly following Harry Potter and the Half-Blood Prince and the final confrontation between the wizards Harry Potter and Lord Voldemort. Deathly Hallows shattered sales records upon release, surpassing marks set by previous titles of the Harry Potter series.', '2007-07-21', 'Bloomsbury Publishing', 'WC1, London, England', 'big', 'book', 'available', '0-545-01022-5'),
(27, 'Harry Potter and the Order of the Phoenix', 'https://upload.wikimedia.org/wikipedia/en/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg', 'Joanne', 'Rowling', 'The Order of the Phoenix, a group sworn against Voldemort, is using its vast array of wizards and witches magical abilities to combat Voldemort. ... In retaliation, a new Defense Against the Dark Arts teacher is appointed by the Ministry in order to keep an eye on Hogwarts.', '2003-06-21', 'Bloomsbury Publishing', 'WC1, London, England', 'big', 'book', 'reserved', '0-7475-5100-6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
