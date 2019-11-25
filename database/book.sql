-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2014 at 04:52 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `subcat` varchar(35) NOT NULL,
  `bdesc` longtext NOT NULL,
  `edition` varchar(10) NOT NULL,
  `publisher` varchar(35) NOT NULL,
  `price` int(5) NOT NULL,
  `img` longtext NOT NULL,
  `pdf` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `subcat`, `bdesc`, `edition`, `publisher`, `price`, `img`, `pdf`) VALUES
(1, 'Travels in the History of Architecture', '1', 'The twentieth-century architect Mies van der Rohe once declared that Àrchitecture starts when you carefully put two bricks together. In Travels in the History of Architecture renowned architectural writer Robert Harbison looks closely at such bricks, taking us on a journey through the great themes and movements of architecture, from antiquity to the present day. Using his own experience of the physical fabric of buildings, Harbison interprets the conceptions of the original architects and makers, pointing out carefully crafted detail and inspiring form along the way. Beginning with the great temples and tombs of the Egyptians, and the monuments and shrines of Greek and Roman architecture, and concluding with the museums of the twenty-first century, each chapter of Harbison Travels focuses on a moment in architectural history, with chapters devoted to, among others, Byzantine, Baroque, Mannerism, Historicism and Functionalism. His free-ranging approach draws in references from history, literature and art to illuminate his theme: from a poem praising marble decoration to help us understand how its makers saw Hagia Sophia, to a French Rococo painting to probe the meaning of an English landscape garden.', '2011', 'Reaktion Books Limited', 500, 'upload_image/art1.jpg', 'upload_ebook/art1.txt'),
(2, 'Architectura: Elements of Architectural Style', '1', 'By tracing the development of particular structures and building components from around the world and throughout history, Architectura presents a unique overview of the history of architecture and building. The text explores the social and cultural contexts surrounding the basic building forms, as well the means of constructing buildings. The book explains the technical achievements of builders, architects, and engineers; describes the diverse aesthetics of particular periods and movements; and celebrates the beauty and majesty of the world’s greatest buildings. In addition, the book is exquisitely produced, and feature technical drawings, diagrams, awe-inspiring photographs, and original illustrations; it is fully authoritative, featuring contributions from a range of academics and experts from around the world. In short, it will suit both the professional and general readers, as well as presenting an attractive gift purchase.', '2009', 'Frances Lincoln', 400, 'upload_image/art2.jpg', 'upload_ebook/architec.txt');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Architecture'),
(2, 'Economics'),
(3, 'Fiction'),
(4, 'Forestry and Wildlife'),
(5, 'Health and Physics'),
(6, 'Historical'),
(7, 'Sports and Physical Education'),
(8, 'Terrorism'),
(9, 'Tourism'),
(10, 'Tracking'),
(11, 'Yoga');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ques` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `o_id` int(4) NOT NULL AUTO_INCREMENT,
  `o_name` varchar(40) NOT NULL,
  `o_phone` varchar(20) NOT NULL,
  `o_address` longtext NOT NULL,
  `bname` longtext NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `subcat_id` int(4) NOT NULL AUTO_INCREMENT,
  `parent_id` int(4) NOT NULL,
  `subcat_name` varchar(35) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_name`) VALUES
(1, 1, 'Architecture'),
(2, 2, 'Economics'),
(3, 3, 'Fiction'),
(4, 4, 'Forest and Wildlife'),
(5, 5, 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(35) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `uname`, `pass`, `gender`, `email`, `contact`, `city`) VALUES
(1, 'Rituraj', 'rituraj', 'rocking', 'Male', 'singhalrituraj6@gmail.com', '8800447470', 'New Delhi'),
(2, 'admin', 'admin', 'admin1234', 'Male', 'admin@gmail.com', '9058340763', 'Mathura'),
(3, 'Sonam', 'sonamp', '1234', 'Female', 'sonampathak4@gmail.com', '9451273160', 'Varanasi');
