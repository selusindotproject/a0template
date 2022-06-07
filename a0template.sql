-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: a0template
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Current Database: `a0template`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `a0template` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `a0template`;

--
-- Table structure for table `t00_siswa`
--

DROP TABLE IF EXISTS `t00_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t00_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t00_siswa`
--

LOCK TABLES `t00_siswa` WRITE;
/*!40000 ALTER TABLE `t00_siswa` DISABLE KEYS */;
INSERT INTO `t00_siswa` VALUES (1,'3515112412740001','Dodo Ananto','1974-12-24'),(2,'3515110212160002','Rido Rizky Rahmansyah','2016-12-02'),(3,'3515111402040001','Farrel Ilham','2004-02-14');
/*!40000 ALTER TABLE `t00_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t01_sekolah`
--

DROP TABLE IF EXISTS `t01_sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t01_sekolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t01_sekolah`
--

LOCK TABLES `t01_sekolah` WRITE;
/*!40000 ALTER TABLE `t01_sekolah` DISABLE KEYS */;
INSERT INTO `t01_sekolah` VALUES (1,'Unggulan','Bojonegoro');
/*!40000 ALTER TABLE `t01_sekolah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t70_grup1`
--

DROP TABLE IF EXISTS `t70_grup1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t70_grup1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `induk` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t70_grup1`
--

LOCK TABLES `t70_grup1` WRITE;
/*!40000 ALTER TABLE `t70_grup1` DISABLE KEYS */;
INSERT INTO `t70_grup1` VALUES (1,0,'1','AKTIVA'),(2,0,'2','HUTANG'),(3,0,'3','MODAL'),(4,0,'4','PENDAPATAN'),(5,0,'5','HARGA POKOK PENJUALAN'),(6,0,'6','BIAYA');
/*!40000 ALTER TABLE `t70_grup1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t71_grup2`
--

DROP TABLE IF EXISTS `t71_grup2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t71_grup2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `induk` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t71_grup2`
--

LOCK TABLES `t71_grup2` WRITE;
/*!40000 ALTER TABLE `t71_grup2` DISABLE KEYS */;
INSERT INTO `t71_grup2` VALUES (1,1,'11','AKTIVA LANCAR'),(2,1,'12','AKTIVA TETAP'),(3,2,'21','HUTANG LANCAR'),(4,2,'22','HUTANG JANGKA PANJANG');
/*!40000 ALTER TABLE `t71_grup2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t72_grup3`
--

DROP TABLE IF EXISTS `t72_grup3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t72_grup3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `induk` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t72_grup3`
--

LOCK TABLES `t72_grup3` WRITE;
/*!40000 ALTER TABLE `t72_grup3` DISABLE KEYS */;
INSERT INTO `t72_grup3` VALUES (1,1,'1101','KAS');
/*!40000 ALTER TABLE `t72_grup3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t73_grup4`
--

DROP TABLE IF EXISTS `t73_grup4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t73_grup4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `induk` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t73_grup4`
--

LOCK TABLES `t73_grup4` WRITE;
/*!40000 ALTER TABLE `t73_grup4` DISABLE KEYS */;
/*!40000 ALTER TABLE `t73_grup4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t85_users`
--

DROP TABLE IF EXISTS `t85_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t85_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t85_users`
--

LOCK TABLES `t85_users` WRITE;
/*!40000 ALTER TABLE `t85_users` DISABLE KEYS */;
INSERT INTO `t85_users` VALUES (1,'127.0.0.1','administrator','$2y$10$0WLdONZvSVQ3O5Xp9Mkyg.LjOxqzkGaRXtlqm0yX9PAZmALrmiIju','admin@admin.com',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1654616859,1,'Admin','istrator','ADMIN','0'),(2,'::1',NULL,'$2y$10$533dArWbuiJql6Yj8sZiROoC17pUb7vVRgG5B.leWUvp8paHetA4i','opr@opr.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1648994771,1648994858,1,'Operator','-','Company','0');
/*!40000 ALTER TABLE `t85_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t86_groups`
--

DROP TABLE IF EXISTS `t86_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t86_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t86_groups`
--

LOCK TABLES `t86_groups` WRITE;
/*!40000 ALTER TABLE `t86_groups` DISABLE KEYS */;
INSERT INTO `t86_groups` VALUES (1,'admin','Administrator'),(2,'members','General User'),(3,'operator','Operator');
/*!40000 ALTER TABLE `t86_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t87_users_groups`
--

DROP TABLE IF EXISTS `t87_users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t87_users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `t86_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `t85_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t87_users_groups`
--

LOCK TABLES `t87_users_groups` WRITE;
/*!40000 ALTER TABLE `t87_users_groups` DISABLE KEYS */;
INSERT INTO `t87_users_groups` VALUES (7,1,1),(8,1,2),(9,1,3),(11,2,2),(12,2,3);
/*!40000 ALTER TABLE `t87_users_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t88_login_attempts`
--

DROP TABLE IF EXISTS `t88_login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t88_login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t88_login_attempts`
--

LOCK TABLES `t88_login_attempts` WRITE;
/*!40000 ALTER TABLE `t88_login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `t88_login_attempts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-07 22:50:33
