-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 11:56 AM
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
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_table`
--

CREATE TABLE `movie_table` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_length` float NOT NULL,
  `m_lang` varchar(100) NOT NULL,
  `m_quality` varchar(100) NOT NULL,
  `m_size` varchar(250) NOT NULL,
  `format` varchar(200) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `m_rel_date` date NOT NULL,
  `m_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_table`
--

INSERT INTO `movie_table` (`m_id`, `m_name`, `m_length`, `m_lang`, `m_quality`, `m_size`, `format`, `genre`, `m_rel_date`, `m_image`) VALUES
(1, 'Robin Hood', 40.45, 'English', '480p, 720p – WEB-DL HD', '400MB ,800MB', 'MKV', 'Action', '2018-11-30', 'img/img1.jpg'),
(2, 'joker', 50.38, 'English', '480p, 720p – WEB-DL HD', '800MB, 2GB', 'MP4, MKV', 'Sad emotional', '2019-10-04', 'img/img2.jpg'),
(3, 'popeye', 30, 'English', 'HD 4D', '400MB, 2GB', 'MKV ,MP4', 'Action', '2019-08-15', 'img/img4.jpg'),
(4, 'Baghi 3', 30.05, 'Hindi', 'HD, WLD-HD 480p', '700Mb , 2GB', 'MKV, MP3', 'Action', '2020-03-06', 'img/img9.jpg'),
(5, 'Captain America', 20.05, 'English', '480p, 720p – WEB-DL HD', '800Mb, 2GB', 'MKV, MP4', 'Marvel', '2011-07-20', 'img/img16.jpg'),
(6, 'Hicki', 40.45, 'Hindi', '480p, 720p – WEB-DL HD', '500MB', 'MP4', 'Hindi Drama', '2018-05-18', 'img/img11.jpg'),
(7, 'Race 3\r\n', 35.5, 'Hindi', '480p, 720p – WEB-DL HD', '700MB', 'MKV, MP4', 'Action Thriller', '2018-09-21', 'img/img10.jpg'),
(8, 'Pirates of caribbean(dead man tells no tales)', 80.5, 'English', '480p, 720p – WEB-DL HD', '900MB', 'MKV', 'Fantacy', '2017-12-12', 'img/img5.jpg'),
(9, 'pirates 0f carribbean(Dead Man Curse)', 90.5, 'english', '480p, 720p – WEB-DL HD', '1GB', '480p, 720p – WEB-DL HD', 'Fantacy', '2016-08-18', 'img/img18.png'),
(10, 'Iron Man 2', 36.5, 'English', '480p, 720p – WEB-DL HD', '900 MB', 'MKV', 'Marvel', '2017-11-17', 'img/img19.jpeg'),
(11, 'Luka Chuppi', 70.01, 'Hindi', '480p, 720p – WEB-DL HD', '800 MB', 'MP4', 'Love Story', '2019-03-01', 'img/img26.jpg'),
(12, 'Meri Pyari Bindu', 60.01, 'Hindi', '480p, 720p – WEB-DL HD', '700 MB', 'MKV', 'Love Story', '2020-05-12', 'img/img27.jpg'),
(13, 'Yeh Jawani Hai Deewani', 100.1, 'Hindi', '480p, 720p – WEB-DL HD', '400 MB', 'MKV', 'Love Story', '2017-05-31', 'img/img30.jpg'),
(14, 'Sanam Re', 50.49, 'Hindi', '480p, 720p – WEB-DL HD', '600 MB', 'MP4', 'Love Story', '0000-00-00', 'img/img32.jpg'),
(15, '2 States', 60.05, 'Hindi', '480p, 720p – WEB-DL HD', '400 MB', 'MKV', 'Love Story', '2018-04-18', 'img/img20.jpg'),
(16, 'Half Girlfriend', 50.7, 'Hindi', '480p, 720p – WEB-DL HD', '900 MB', 'MKV', 'Love Story', '2018-05-19', 'img/img22.jpg'),
(17, 'Golmaal Again', 80.05, 'Hindi', '480p, 720p – WEB-DL HD', '300 MB', 'MKV, MP4', 'Horror Comedy', '2019-08-30', 'img/img23.jpg'),
(18, 'Bhool Bhulaiya 2', 10.05, 'Hindi', '480p, 720p – WEB-DL HD', '600 MB', 'MKV, MP4', 'Horror Comedy', '2020-07-31', 'img/img25.jpg'),
(19, 'Roohi', 80.5, 'Hindi', '480p, 720p – WEB-DL HD', '600 MB', 'MKV, MP4', 'Horror Comedy', '2020-04-11', 'img/img31.jpg'),
(20, 'Stree', 70.45, 'Hindi', '480p, 720p – WEB-DL HD', '500 MB', 'MKV, MP4', 'Horror Comedy', '2019-08-31', 'img/img33.jpg'),
(21, 'Great Grand Masti', 79.5, 'Hindi', '480p, 720p – WEB-DL HD', '', 'MKV, MP4', 'Horror Comedy', '2017-07-15', 'img/img34.jpg'),
(22, 'Final War', 40.45, 'English', '480p, 720p – WEB-DL HD', '900 MB', 'MKV', 'Fantacy', '2015-07-30', 'img/img14.jpg'),
(23, 'Seventh Son', 40.45, 'English', '480p, 720p – WEB-DL HD', '700 MB', 'MKV', 'Fantacy', '2018-04-22', 'img/img15.jpg'),
(24, 'Captain Marvel', 40.45, 'English', '480p, 720p – WEB-DL HD', '800 MB', 'MKV, MP4', 'Marvel', '2018-09-15', 'img/img7.jpg'),
(25, 'Avengers 2', 40.45, 'English', '480p, 720p – WEB-DL HD', '600 MB', 'MKV, MP4', 'Marvel', '0000-00-00', 'img/img8.jpg'),
(26, 'Hulk', 40.45, 'English', '480p, 720p – WEB-DL HD', '400 MB', 'MKV, MP4', 'Marvel', '2015-05-13', 'img/img13.jpg'),
(27, 'Avengers Infinity War', 40.45, 'English', '480p, 720p – WEB-DL HD', '900 MB', 'MKV, MP4', 'Marvel', '2019-04-27', 'img/img28.jpg'),
(28, 'Avengers The End Game', 40.45, 'English', '480p, 720p – WEB-DL HD', '800 MB', 'MKV, MP4', 'Marvel', '2020-04-26', 'img/img29.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_table`
--
ALTER TABLE `movie_table`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_table`
--
ALTER TABLE `movie_table`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
