CREATE DATABASE  IF NOT EXISTS `projeto_final` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_final`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projeto_final
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `genero` varchar(11) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Jordania Da Silva Machado','333.333.333-33','(31)9 1111-2222','email@mail.com','ativo','feminino','1995-06-05',NULL),(2,'Maria Cristina Souza','444.444.444-44','(12)9 8888-9999','email@email.com','ativo','feminino','1997-05-22',NULL),(3,'Lucas Ernandes Santos','222.222.222.00','(31)9 8966-4448','gabrielwalison@yahoo.com','ativo','masculino','1995-01-01','123456'),(4,'Joao Vicente','000.000.000-00','(31)9 8888-8888','email@testes.com','ativo','masculino','2002-01-01','000000'),(5,'Walison Gabriel Silva','111.111.111-11','(31)9 8966-3428','gabrielwalison@yahoo.com','ativo','masculino','1995-06-05','12312312'),(6,'Lucas Evangelista Santos','555.555.555-55','(11)9 4444-3333','email@email.com','inativo','masculino','2011-01-01','123456'),(7,'Lucas De Oliveira','666.666.666-66','(12)9 8989-7878','admin@email.com','ativo','masculino','1986-06-05','1234567'),(8,'João Da Silva','999.999.999-99','(11)9 7858-7858','joao@email.com','ativo','masculino','1986-01-01','121201');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-24 12:15:19
