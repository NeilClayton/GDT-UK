-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: gdtuk
-- ------------------------------------------------------
-- Server version	5.7.11-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `access_level`
--

DROP TABLE IF EXISTS `access_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access_level` (
  `access_id` int(11) NOT NULL AUTO_INCREMENT,
  `access_level` varchar(45) NOT NULL,
  PRIMARY KEY (`access_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Store the access levels within the application';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_level`
--

LOCK TABLES `access_level` WRITE;
/*!40000 ALTER TABLE `access_level` DISABLE KEYS */;
INSERT INTO `access_level` VALUES (1,'admin'),(2,'learner');
/*!40000 ALTER TABLE `access_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_list`
--

DROP TABLE IF EXISTS `client_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_list` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `address_1` varchar(45) NOT NULL,
  `town` varchar(45) NOT NULL,
  `address_3` varchar(45) DEFAULT NULL,
  `postcode` varchar(45) NOT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `DOB` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `Hobbies` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Full list of client details';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_list`
--

LOCK TABLES `client_list` WRITE;
/*!40000 ALTER TABLE `client_list` DISABLE KEYS */;
INSERT INTO `client_list` VALUES (1,'Gary','Spencer','GDT-UK','Nottingham','NG','','','','','','Male','Football, Snooker'),(2,'Neil','Clayton','4 Jasmine Close','Clifton','Nottingham','NG11 8SZ','N/A','07891065063','wewontbyte@gmail.com','10/08/1983','Male','Gold, Snooker, Football');
/*!40000 ALTER TABLE `client_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_list`
--

DROP TABLE IF EXISTS `user_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_list` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  `access_level` varchar(45) NOT NULL,
  `client_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Stores list of all users';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_list`
--

LOCK TABLES `user_list` WRITE;
/*!40000 ALTER TABLE `user_list` DISABLE KEYS */;
INSERT INTO `user_list` VALUES (1,'garyspencer','$2y$10$DY70dLsI80qKN7/6Fx290OdaozKKHMCUQohQK4je3U.Qoic1RT5Ty','1','1'),(2,'neilclayton','$2y$10$XhXzT9DZVT34ZHPqp6b2veu71eRLRVzBBFG.Rsiou8q7Wkb9PL1Vy','2','2');
/*!40000 ALTER TABLE `user_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `v_link` varchar(100) NOT NULL,
  `v_comment` varchar(100) DEFAULT NULL,
  `v_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,2,'Xgzvm8qNMkc','Its a game!','2016-06-18 12:06:10'),(2,2,'SlrzXQoVpK4','CSS stuff','2016-06-18 13:07:58'),(3,2,'tsePToj6nw4','Design Thinking','2016-06-18 13:15:11'),(4,2,'oZyz1Thj03c','Terry White Live','2016-06-18 13:15:11'),(5,2,'cfudXO_vzWk','Chili Peppers','2016-06-18 13:15:11'),(6,2,'jhkTnxqmqoY','First Week at Google','2016-06-18 13:15:11'),(7,2,'eefWIRVq2Bs','UX Live Stream','2016-06-18 13:15:11'),(8,2,'UuH023MYz-o','Google Interviews','2016-06-18 13:15:11'),(9,2,'WKa9UdJIuj4','More Dev Tips','2016-06-18 13:25:24');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-18 17:28:19
