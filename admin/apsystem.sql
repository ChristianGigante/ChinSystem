# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-10-18 21:12:25
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'Dino','$2y$10$s//iWu4xttzouk2B2J/m9OhXWJKh2dY8UKIV92ZGEo6G93SuB9SYK','Dino','Ilustrisimo','download.jpg','2018-04-30');

#
# Structure for table "attendance"
#

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

#
# Data for table "attendance"
#

INSERT INTO `attendance` VALUES (86,5,'2022-09-17','08:00:00',1,'17:30:00',8),(87,5,'2022-09-18','15:29:03',0,'00:00:00',0),(90,5,'2022-10-06','08:00:00',1,'18:42:11',9.7),(92,6,'2022-10-06','07:45:00',0,'00:00:00',6.75),(93,6,'2022-10-07','08:14:18',0,'00:00:00',0),(94,5,'2022-10-07','08:15:19',0,'08:15:30',0);

#
# Structure for table "books"
#

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(25) NOT NULL,
  `book_publisher` varchar(20) DEFAULT NULL,
  `book_price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "books"
#


#
# Structure for table "instructors"
#

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE `instructors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instructors_id` varchar(15) NOT NULL DEFAULT '0',
  `firstname` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `department` varchar(255) NOT NULL DEFAULT '',
  `rate` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "instructors"
#

INSERT INTO `instructors` VALUES (1,'1112','Emerson John','Chin','chanu12','chinchanzu1112','BSIT',100),(2,'1113','Kenneth Jean','Martinez','ken1112','qasasads','BEED',100),(3,'1114','Arjay','Chin','Chanu','arjay1112','BSCRIM',100),(4,'1111','Julian','Chin','julian1112','qwqwqwq','BSMT',100);

#
# Structure for table "load_sheet"
#

DROP TABLE IF EXISTS `load_sheet`;
CREATE TABLE `load_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instructors_id` varchar(15) NOT NULL DEFAULT '0',
  `subject_code` varchar(255) NOT NULL DEFAULT '',
  `descriptive_title` varchar(255) NOT NULL DEFAULT '',
  `days` varchar(255) NOT NULL DEFAULT '',
  `time_in` time NOT NULL DEFAULT '00:00:00',
  `time_out` time NOT NULL DEFAULT '00:00:00',
  `section` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

#
# Data for table "load_sheet"
#

INSERT INTO `load_sheet` VALUES (5,'1112','ITE112','Computer Programming 1','MWF','00:10:00','00:11:00','North'),(6,'1112','ITE111','Introduction to Computing','MWF','00:08:00','00:09:00','West'),(8,'1112','SOCSCI110','Understanding the Self','TTH','00:12:00','00:02:00','East'),(9,'1112','HIST110','Readings in the Philippine History','MWF','00:00:00','00:00:00','North'),(10,'1112','LIT110','The Contemporary World','MWF','00:00:00','00:00:00','North'),(11,'1112','MATH110','Mathematics in the Modern World','TTH','00:00:00','00:00:00','West'),(12,'1112','FIL110','Komunikasyon sa Akademikong Filipino','TTH','00:00:00','00:00:00','North'),(13,'1112','PE1','Movement Enhancement  ','Friday','00:00:00','00:00:00','West'),(14,'1112','NSTP1','National Service Training Program 1','Friday','00:00:00','00:00:00','West');
