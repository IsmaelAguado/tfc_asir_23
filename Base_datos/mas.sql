-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: mas
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `clave` varchar(80) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_1` varchar(20) NOT NULL,
  `apellido_2` varchar(20) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tipo_usuario` varchar(20) DEFAULT NULL,
  `codi_activacion` int(11) NOT NULL,
  `activado_mail` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (11,'$2y$10$/OJAe7ZLA/DpLq/QmutG8.k3RH8E.a/1AGoABs.S9Y3n3ogSOhQ4S','admin','admin','admin','0','admin@gmail.com','administrador',0,1),(35,'$2y$10$olk9YCaHVibwwC4qZah3W.2n4sn0jeFRy8xzDuI9XihgA5YKNFi7W','Ismael','Aguado','Vazquez','644226626','aguado@gmail.com','Cliente',0,1);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturas`
--

DROP TABLE IF EXISTS `facturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facturas` (
  `id_factura` int(5) NOT NULL AUTO_INCREMENT,
  `id_presupuesto` int(5) DEFAULT NULL,
  `id_usuario` int(5) DEFAULT NULL,
  `total` float NOT NULL,
  `iva` float NOT NULL,
  `total_iva` float NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_factura`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturas`
--

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` VALUES (5,21,35,100,21,121,'2023-06-14');
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presupuesto`
--

DROP TABLE IF EXISTS `presupuesto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `presupuesto` (
  `id_presupuesto` int(5) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(5) DEFAULT NULL,
  `provincia` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `calle` varchar(80) NOT NULL,
  `numero` int(10) NOT NULL,
  `piso` varchar(10) NOT NULL,
  `puerta` varchar(10) NOT NULL,
  `c_postal` int(5) NOT NULL,
  `merchandising` enum('Si','No') NOT NULL,
  `diseno` enum('Si','No') NOT NULL,
  `impresion` enum('Si','No') NOT NULL,
  `medida` varchar(1000) NOT NULL,
  `gramaje` varchar(1000) NOT NULL,
  `acabado` varchar(100) NOT NULL,
  `troquel` enum('Si','No') NOT NULL,
  `cantidad` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `tipo_entrega` enum('Envio','Recogida') DEFAULT NULL,
  `aceptado` tinyint(1) NOT NULL,
  `crear_presu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_presupuesto`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presupuesto`
--

LOCK TABLES `presupuesto` WRITE;
/*!40000 ALTER TABLE `presupuesto` DISABLE KEYS */;
INSERT INTO `presupuesto` VALUES (4,NULL,'Burgos','Torrejón','Ebro',7,'7','j',234123,'No','Si','Si','No','0 gr/m2','Ninguno','Si',34,'2023-06-01',12,'1685289152-logo-mas.png','Envio',1,0),(5,NULL,'Alicante','Torrejón','Ebro',7,'7','j',234123,'No','Si','Si','No','0 gr/m2','Ninguno','Si',34,'2023-06-01',12,'logo-mas-favicon.png','Envio',1,0),(6,NULL,'Alicante','Torrejón','Ebro',7,'7','j',234123,'No','Si','Si','No','0 gr/m2','Ninguno','Si',34,'2023-06-01',12,'1685299551-logo-mas-favicon.png','Envio',1,0),(15,NULL,'Almería','Torrejón de la Calzada','victoria',3,'7','g',15,'Si','Si','Si','No','0 gr/m2','Ninguno','Si',6,'2023-03-31',0.14,'','Recogida',0,0),(16,NULL,'Almería','Torrejón de la Calzada','victoria',3,'7','g',15,'Si','Si','Si','No','0 gr/m2','Ninguno','Si',6,'2023-03-31',0.14,'','Recogida',0,0),(17,35,'Albacete','Torrejón','victoria',6,'4','gf',12345,'Si','Si','Si','A4 (210 x 297 mm)','175 gr/m2','Brillo','Si',10000,'2023-06-09',100,'','Envio',1,0),(18,35,'Almería','Torrejón de la Calzada','Ebro',34,'8','99',12345,'Si','Si','Si','No','0 gr/m2','Ninguno','Si',1234,'2023-06-21',0,'Prueba.png','Envio',1,0),(19,35,'Alicante','qwer','ewrq',7,'reqw','reqw',28991,'Si','Si','Si','No','0 gr/m2','Ninguno','Si',12,'2023-06-30',0,'Prueba.png','Envio',1,0),(20,35,'Alicante','qwer','ewrq',7,'reqw','reqw',28991,'Si','Si','Si','No','0 gr/m2','Ninguno','Si',12,'2023-06-30',0,'Prueba.png','Envio',1,0),(21,35,'Albacete','Torrejón','victoria',12,'4','g',998877,'No','Si','Si','No','110 gr/m2','Plastificado','Si',10,'2023-06-14',100,'1686059726-Prueba.png','Envio',1,0);
/*!40000 ALTER TABLE `presupuesto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-06 16:31:04
