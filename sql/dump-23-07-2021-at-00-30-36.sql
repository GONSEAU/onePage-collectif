-- DUMPED ON 23/07/2021 at 00:30:36

-- MariaDB dump 10.19  Distrib 10.5.11-MariaDB, for Linux (x86_64)
--
-- Host: mariadb    Database: niwee
-- ------------------------------------------------------
-- Server version	10.5.11-MariaDB

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
-- Current Database: `niwee`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `pgwu2964_onepage_collectif` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pgwu2964_onepage_collectif`;

--
-- Table structure for table `onepage_collectif_admin`
--

DROP TABLE IF EXISTS `onepage_collectif_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `onepage_collectif_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `onepage_collectif_admin`
--

LOCK TABLES `onepage_collectif_admin` WRITE;
/*!40000 ALTER TABLE `onepage_collectif_admin` DISABLE KEYS */;
INSERT INTO `onepage_collectif_admin` VALUES (1,'John','password');
/*!40000 ALTER TABLE `onepage_collectif_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `onepage_collectif_section_apropos`
--

DROP TABLE IF EXISTS `onepage_collectif_section_apropos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `onepage_collectif_section_apropos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `first_image` varchar(255) NOT NULL,
  `first_text` text NOT NULL,
  `second_image` varchar(255) NOT NULL,
  `second_text` text NOT NULL,
  `title_text_1` varchar(255) NOT NULL,
  `title_text_2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `onepage_collectif_section_apropos`
--

LOCK TABLES `onepage_collectif_section_apropos` WRITE;
/*!40000 ALTER TABLE `onepage_collectif_section_apropos` DISABLE KEYS */;
INSERT INTO `onepage_collectif_section_apropos` VALUES (1,'A PROPOS','test3','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','test1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','Une équipe à votre service','Cest chez vous que ça se passe !');
/*!40000 ALTER TABLE `onepage_collectif_section_apropos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `onepage_collectif_section_nav`
--

DROP TABLE IF EXISTS `onepage_collectif_section_nav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `onepage_collectif_section_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_logo` varchar(255) DEFAULT NULL,
  `item_1` varchar(255) DEFAULT NULL,
  `item_2` varchar(255) DEFAULT NULL,
  `item_3` varchar(255) DEFAULT NULL,
  `item_4` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `calendly` longblob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `onepage_collectif_section_nav`
--

LOCK TABLES `onepage_collectif_section_nav` WRITE;
/*!40000 ALTER TABLE `onepage_collectif_section_nav` DISABLE KEYS */;
INSERT INTO `onepage_collectif_section_nav` VALUES (1,'logoRobinFinal','A propos','Team barber','Nos réalisations','Nous contactez','Barber Home','test');
/*!40000 ALTER TABLE `onepage_collectif_section_nav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `onepage_collectif_section_team`
--

DROP TABLE IF EXISTS `onepage_collectif_section_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `onepage_collectif_section_team` (
  `photo_member` varchar(255) NOT NULL,
  `name_member` varchar(255) NOT NULL,
  `text_member` text NOT NULL,
  `facebook_member` varchar(255) NOT NULL,
  `twitter_member` varchar(255) NOT NULL,
  `insta_member` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `onepage_collectif_section_team`
--

LOCK TABLES `onepage_collectif_section_team` WRITE;
/*!40000 ALTER TABLE `onepage_collectif_section_team` DISABLE KEYS */;
INSERT INTO `onepage_collectif_section_team` VALUES ('Weber','Max','Es gibt zwei Arten, Politik zu machen: entweder eine für die Politik oder eine für die Politik.','','','',1),('Karl','Karl','Es gibt keine richtige oder falsche Ernährung, es gibt nur Grade der Ausbeutung der Menschheit.','','','',2),('freud','Sig','Artung papa maman ! Ich werde dich töten, um größer zu werden !','','','',3);
/*!40000 ALTER TABLE `onepage_collectif_section_team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-22 22:30:38
