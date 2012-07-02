-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2012 at 04:25 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rzcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Past events', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Current events', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `lecturer` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `lecturer_website` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `lecturer`, `date`, `lecturer_website`, `description`, `category_id`, `created`, `modified`) VALUES
(3, 'Third title', 'lecturer', '2012-07-02 12:57:00', 'd asda asd ', 'aas asdas', 1, '2012-07-02 12:58:04', '2012-07-02 14:55:12'),
(4, 'Fourth title', 'rami', '2012-07-02 12:58:00', 'ksksksk', 'lsalsdl kjasd ', 1, '2012-07-02 12:59:00', '2012-07-02 12:59:00'),
(5, 'Fifth title', 'lecturere', '2012-07-02 12:59:00', 'asdas dasd', 'fifth description', 1, '2012-07-02 12:59:34', '2012-07-02 12:59:55'),
(7, 'Title', 'Lecturer', '2012-07-02 16:23:00', 'www.google.com', 'this is a description', 2, '2012-07-02 16:23:32', '2012-07-02 16:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` longtext COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `created`, `modified`) VALUES
(1, 'Home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim ornare metus nec dictum. Mauris dapibus tortor sed mauris elementum facilisis. Quisque vitae felis justo, non dignissim orci. Duis erat tellus, iaculis eget cursus non, mollis non ante. Etiam et nisl vitae sapien egestas pulvinar. Nunc eleifend mollis felis sed mattis. In hac habitasse platea dictumst. Vestibulum consequat enim a sem luctus porttitor. Nunc porttitor, diam nec pulvinar congue, dolor leo commodo leo, eget imperdiet ligula dui vel felis. Donec a libero dui.\r\n\r\nInteger vehicula, justo in convallis mollis, purus purus imperdiet elit, nec imperdiet leo tortor id eros. Nulla volutpat vehicula sem. Fusce sollicitudin orci ut tortor condimentum ullamcorper auctor magna vulputate. Mauris eu nisl in metus ornare volutpat sit amet at arcu. Pellentesque id ultrices nibh. Proin sit amet est porttitor quam vestibulum aliquet. Etiam porttitor, urna id ultrices porta, enim nisl venenatis massa, at sodales nulla dui eget orci. Etiam eget augue mauris, sed vehicula leo. Sed varius lorem ac risus pulvinar non consequat nibh vulputate. Duis tortor magna, dignissim sed porta ut, aliquet sit amet elit.\r\n\r\nSed ullamcorper est at mauris dictum sit amet fermentum tellus placerat. Fusce nec arcu turpis, ut luctus metus. Duis lorem dolor, iaculis nec malesuada sed, venenatis tempor turpis. Vivamus fermentum bibendum lorem sit amet malesuada. Morbi ultricies lorem nec erat varius ac rhoncus leo eleifend. Sed ac lacus massa, vel scelerisque magna. Aenean faucibus nunc enim, eget luctus metus. Nam venenatis odio feugiat odio varius porttitor. Praesent sapien leo, placerat id tempor non, ultrices ac nisl. Donec at diam tortor, eget pellentesque sem. Quisque lorem sem, blandit quis malesuada non, euismod eu velit. Morbi at sapien neque. Quisque placerat, nisi sit amet auctor condimentum, lacus lectus accumsan felis, sit amet porta augue augue tincidunt nisi. Duis et elit sem, vitae auctor dolor. Morbi interdum erat eu justo rhoncus bibendum. Ut vitae nisl metus.', '2012-06-29 00:00:00', '2012-07-02 16:10:43'),
(2, 'About', 'about content', '2012-06-29 00:00:00', '2012-06-29 14:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `created`, `modified`) VALUES
(1, 'Auditing', 'hi hi hi', '2012-06-29 00:00:00', '2012-07-02 16:13:18'),
(2, 'Accounting & book keeping', 'why???', '2012-06-29 00:00:00', '2012-06-29 00:00:00'),
(3, 'Feasibility studies', 'Our firm has conducted feasibility and economic studies for many types of startup projects in a variety of industries that include manufacturing, agricultural, hospitality management, media and other business activities for large and small businesses. These studies focused on the economic viability of the proposed projects by means of retrieving valuable market data, using proper assessment tools, conducting financial analysis and projections of expected returns on the investment. In addition to start up project studies we also have conducted studies for investment and expansion opportunities for existing companies. Moreover, we provide assistance in acquiring the necessary capital funds in the form of loans or investments from financial institutions and investors', '2012-06-29 00:00:00', '2012-06-29 00:00:00'),
(4, 'Other', 'These include special assignments requested by our clients such as assurance services (internal controls, report reliability, quality assurance...), cost assessment analysis, fraud inspections, setting up companies, and other similar activities.', '2012-06-29 00:00:00', '2012-06-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created`, `modified`) VALUES
(1, 'Rami', 'rami', '6ebd2f9eee33cd9f3da062f4dcb1dcc0958d262c', '2012-06-28 19:13:35', '2012-06-28 19:13:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
