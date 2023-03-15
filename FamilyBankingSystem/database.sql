CREATE DATABASE  IF NOT EXISTS `familybanking` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `familybanking`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: familybanking
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bill` (
  `id` int NOT NULL AUTO_INCREMENT,
  `billType` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` enum('Not available','Pending','Partial paid','Paid') DEFAULT NULL,
  `createdAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` bit(1) DEFAULT NULL,
  `amountPaid` decimal(10,2) DEFAULT NULL,
  `Year` varchar(45) DEFAULT NULL,
  `userId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (1,'Water','March',100.00,'Pending','2023-03-15 18:04:44',NULL,0.00,'2023',NULL),(2,'Water','March',100.00,'Paid','2023-03-15 18:06:14',NULL,100.00,'2023',1),(3,'Water','March',4500.00,'Paid','2023-03-15 22:43:31',NULL,4500.00,'2023',1),(4,'Gas','March',4500.00,'Paid','2023-03-15 22:45:59',NULL,4500.00,'2023',1),(5,'Gas','March',500.00,'Paid','2023-03-16 00:02:04',NULL,500.00,'2023',2);
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `debits`
--

DROP TABLE IF EXISTS `debits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `debits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `installment` decimal(10,2) DEFAULT NULL,
  `dueDate` datetime DEFAULT NULL,
  `createAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` bit(1) DEFAULT NULL,
  `userId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `debits`
--

LOCK TABLES `debits` WRITE;
/*!40000 ALTER TABLE `debits` DISABLE KEYS */;
INSERT INTO `debits` VALUES (1,'sdfsda',50.00,2.00,'2022-10-10 00:00:00','2023-03-16 01:06:23',NULL,1),(2,'WE jksdah',100.00,3.00,'2024-10-10 00:00:00','2023-03-16 01:06:45',NULL,1);
/*!40000 ALTER TABLE `debits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `transactionType` varchar(255) DEFAULT NULL,
  `userId` int DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `transactionDetail` varchar(500) DEFAULT NULL,
  `isDebit` bit(1) DEFAULT NULL,
  `cretedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,'Bill payment',1,100.00,'Water bill has been paid.',NULL,'2023-03-15 22:52:13',NULL),(2,'Bill payment',1,100.00,'Water bill has been paid.',NULL,'2023-03-15 22:53:16',NULL),(3,'Bill payment',1,100.00,'Water bill has been paid.',NULL,'2023-03-15 22:54:19',NULL),(4,'Bill payment',1,4500.00,'Water bill has been paid.',NULL,'2023-03-15 22:54:54',NULL),(5,'Bill payment',1,4500.00,'Water bill has been paid.',NULL,'2023-03-15 22:55:38',NULL),(6,'Bill payment',1,4500.00,'Gas bill has been paid.',NULL,'2023-03-15 22:55:49',NULL),(7,'Bill payment',1,100.00,'Water bill has been paid.',NULL,'2023-03-15 22:55:51',NULL),(8,'Bill payment',2,500.00,'Gas bill has been paid.',NULL,'2023-03-16 00:02:08',NULL),(9,'Gift redeem',3,50.00,' Gift has been redeemed.',NULL,'2023-03-16 00:23:19',NULL),(10,'Gift redeem',3,50.00,' Gift has been redeemed.',NULL,'2023-03-16 00:23:34',NULL);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `dataOfBirth` datetime DEFAULT NULL,
  `mobileNumber` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `userType` enum('Main user','Basic user') DEFAULT NULL,
  `createAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` bit(1) DEFAULT NULL,
  `belongsTo` int DEFAULT NULL,
  `monthlySalary` decimal(10,2) DEFAULT NULL,
  `balanceInBank` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Admin','admin','2023-03-15 00:00:00','asdfsda','70b4269b412a8af42b1f7b0d26eceff2','Main user','2023-03-15 15:04:00',NULL,NULL,793.00,20000.00),(2,'Abdul','Basit','basit','2023-03-15 00:00:00','111111111','25f9e794323b453885f5181f1b624d0b','Basic user','2023-03-15 16:13:13',NULL,1,NULL,NULL),(3,'Sohaib','Saim','ali','1995-01-01 00:00:00','11111111','25f9e794323b453885f5181f1b624d0b','Basic user','2023-03-16 00:03:36',NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `voucher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `voucherName` varchar(255) DEFAULT NULL,
  `applicableAmount` decimal(10,2) DEFAULT NULL,
  `assignedTo` int DEFAULT NULL,
  `applicableDate` datetime DEFAULT NULL,
  `isConsumed` bit(1) DEFAULT NULL,
  `createdAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` bit(1) DEFAULT NULL,
  `userId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voucher`
--

LOCK TABLES `voucher` WRITE;
/*!40000 ALTER TABLE `voucher` DISABLE KEYS */;
INSERT INTO `voucher` VALUES (1,'Birthday',20.00,2,'2023-03-15 00:00:00',NULL,'2023-03-15 19:01:57',NULL,1),(2,'Birthday',50.00,3,'1995-01-01 00:00:00',_binary '','2023-03-16 00:04:37',NULL,1);
/*!40000 ALTER TABLE `voucher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'familybanking'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-16  1:52:38
