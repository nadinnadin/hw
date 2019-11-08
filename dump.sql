-- MySQL dump 10.17  Distrib 10.3.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: actors
-- ------------------------------------------------------
-- Server version	10.3.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actorsss`
--

DROP TABLE IF EXISTS `actorsss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actorsss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL DEFAULT 'Chinese noname',
  `name` varchar(255) NOT NULL DEFAULT 'Chinese noname',
  `age` int(3) NOT NULL DEFAULT 20,
  `gender` enum('m','f') DEFAULT 'f',
  `move` varchar(255) NOT NULL DEFAULT 'noname',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actorsss`
--

LOCK TABLES `actorsss` WRITE;
/*!40000 ALTER TABLE `actorsss` DISABLE KEYS */;
INSERT INTO `actorsss` VALUES (1,'Robbins','Tim',61,'m','The Shawshank Redemption'),(2,'Brando','Marlon',80,'m','The Godfather'),(3,'Bale','Christian',45,'m','The Dark Knight'),(4,'Travolta','John',65,'m','Pulp Fiction'),(5,'Bloom','Orlando',42,'m','The Lord of the Rings: The Return of the King');
/*!40000 ALTER TABLE `actorsss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indexid`
--

DROP TABLE IF EXISTS `indexid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indexid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indexid`
--

LOCK TABLES `indexid` WRITE;
/*!40000 ALTER TABLE `indexid` DISABLE KEYS */;
INSERT INTO `indexid` VALUES (1),(2),(3),(4);
/*!40000 ALTER TABLE `indexid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producer`
--

DROP TABLE IF EXISTS `producer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL DEFAULT 'Chinese noname',
  `name` varchar(255) NOT NULL DEFAULT 'Chinese noname',
  `age` int(3) NOT NULL DEFAULT 20,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producer`
--

LOCK TABLES `producer` WRITE;
/*!40000 ALTER TABLE `producer` DISABLE KEYS */;
INSERT INTO `producer` VALUES (1,'Jackson','Peter',58),(2,'Tarantino','Quentin',56),(3,'Nolan','Christopher',49),(4,'Coppola','Francis Ford',80),(5,'Darabont','Frank',60);
/*!40000 ALTER TABLE `producer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producer_positions`
--

DROP TABLE IF EXISTS `producer_positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producer_positions` (
  `acrors_id` int(11) NOT NULL DEFAULT 0,
  `producer_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producer_positions`
--

LOCK TABLES `producer_positions` WRITE;
/*!40000 ALTER TABLE `producer_positions` DISABLE KEYS */;
INSERT INTO `producer_positions` VALUES (1,5),(2,4),(3,3),(4,2),(5,1);
/*!40000 ALTER TABLE `producer_positions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-08 11:51:23
