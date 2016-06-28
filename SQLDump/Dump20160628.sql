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
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Full list of client details';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_list`
--

LOCK TABLES `client_list` WRITE;
/*!40000 ALTER TABLE `client_list` DISABLE KEYS */;
INSERT INTO `client_list` VALUES (1,'Gary','Spencer','GDT-UK','Nottingham','NG','','','','','','Male','Football, Snooker','Images/gdt_logo3.png'),(2,'Neil','Clayton','4 Jasmine Close','Clifton','Nottingham','NG11 8SZ','N/A','07891065063','wewontbyte@gmail.com','10/08/1983','Male','Gold, Snooker, Football','http://graph.facebook.com/1354146691/picture');
/*!40000 ALTER TABLE `client_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conversations`
--

DROP TABLE IF EXISTS `conversations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`conversation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='records creation of new conversations that messages can be linked to in order to be grouped together ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conversations`
--

LOCK TABLES `conversations` WRITE;
/*!40000 ALTER TABLE `conversations` DISABLE KEYS */;
INSERT INTO `conversations` VALUES (1,2,'2016-06-27 09:38:08'),(2,2,'2016-06-27 10:41:09');
/*!40000 ALTER TABLE `conversations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` varchar(600) NOT NULL,
  `m_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `conv_id` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='used to store chat information between GDT and learners';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,2,1,'Hi Gary, Can i please reschedule my lesson tomorrow for wednesday instead at the same time?','2016-06-27 08:22:46',1),(2,1,2,'Yes, no worries this has been changed and can now be seen on your profile','2016-06-27 08:22:46',1),(3,2,1,'Thanks Gary see you wednesday','2016-06-27 08:22:46',1),(4,2,1,'New Test?','2016-06-27 10:42:30',2),(5,1,2,'does it work?','2016-06-27 10:42:49',2),(6,2,1,'i hope so!','2016-06-27 10:43:02',2),(7,2,1,'Yeah i fixed after writing rubbish in this box at least 20 times','2016-06-28 19:41:52',2),(8,2,1,'Gary. Why are you not replying to me after all this time I have spent on your bloody site','2016-06-28 19:45:16',2),(9,2,1,'Does this work????','2016-06-28 19:46:49',2),(10,2,1,'not yet','2016-06-28 19:54:17',2),(11,2,1,'nope','2016-06-28 19:56:50',2),(12,2,1,'whoop','2016-06-28 20:07:20',2);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
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

-- Dump completed on 2016-06-28 21:19:56
