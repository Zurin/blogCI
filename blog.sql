-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2019 at 05:49 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(45) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `name`, `role`) VALUES
('admin', '$2y$10$KIbTZfLH.szjimwyINpzb.zXPLk5egmalayy.nRDiftzMhST4EKt.', 'Admin', 'admin'),
('author', '$2y$10$WeW1.EkjYpCJ4vmYcNT65es3WJvmf8it7oQFY2WhbubkIG7AN2CC.', 'Author', 'author'),
('tes', '$2y$10$aSG68O6/8TxuFDhaBO6BYexuCjiATxbjTQVkrrEzRWsf4PR62APz6', 'User Tes', 'author'),
('userdummy', '$2y$10$7mXWGn6.4b2LuSqYMD70iew8bnBbMCWVwdZYA.ltZNKV/ZvI.b.v.', 'Tes lagi', 'author');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idpost`, `title`, `content`, `date`, `username`) VALUES
(1, 'Coba', '&lt;p&gt;Ini konten:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Satu&lt;/li&gt;&lt;li&gt;Dua&lt;/li&gt;&lt;/ol&gt;', '2019-02-25 05:11:10', 'admin'),
(2, 'Tes', '&lt;p&gt;Lorem ipsum&lt;/p&gt;', '2019-02-25 05:47:03', 'admin'),
(3, 'Lorem Ipsum', '&lt;p&gt;&lt;em style=\'color: rgb(34, 34, 34);\'&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/em&gt;&lt;/p&gt;', '2019-02-25 05:47:47', 'author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `fk_post_account_idx` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_account` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
