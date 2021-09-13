-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: bdtransporte
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

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
-- Table structure for table `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria` (
  `idAuditoria` int(11) NOT NULL AUTO_INCREMENT,
  `tabla` varchar(45) NOT NULL,
  `crud` char(1) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idAuditoria`)
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria`
--

LOCK TABLES `auditoria` WRITE;
/*!40000 ALTER TABLE `auditoria` DISABLE KEYS */;
INSERT INTO `auditoria` VALUES (95,'Usuarios','C','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: , Rol: , foto: ','2021-08-20 21:28:32'),(96,'Usuarios','C','Nombre completo: albertina aquino soliz, Sexo: F, Telefono: 74339179, Correo: albert34@gmail.com, usu_password: , Rol: Cliente, foto: ','2021-08-20 21:39:39'),(97,'Usuarios','D','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: , Rol: , foto: ','2021-08-20 21:40:18'),(267,'Usuarios','D','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: d41d8cd98f00b204e9800998ecf8427e, Rol: , foto: ','2021-09-04 09:49:01'),(268,'Usuarios','D','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: d41d8cd98f00b204e9800998ecf8427e, Rol: , foto: ','2021-09-04 09:49:01'),(269,'Usuarios','D','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: d41d8cd98f00b204e9800998ecf8427e, Rol: , foto: ','2021-09-04 09:49:01'),(270,'Usuarios','D','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: d41d8cd98f00b204e9800998ecf8427e, Rol: , foto: ','2021-09-04 09:49:01'),(271,'Usuarios','C','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: d41d8cd98f00b204e9800998ecf8427e, Rol: , foto: ','2021-09-04 12:19:16'),(272,'Usuarios','D','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: d41d8cd98f00b204e9800998ecf8427e, Rol: , foto: ','2021-09-04 12:19:39'),(273,'Usuarios','C','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: d41d8cd98f00b204e9800998ecf8427e, Rol: , foto: ','2021-09-04 12:53:21'),(274,'Usuarios','C','Nombre completo: simone Lazarte Nieto, Sexo: F, Telefono: 77481705, Correo: jhericoo8322@gmail.com, usu_password: bbeb73f525b7e2987f03ec61b500d3fa, Rol: Cliente, foto: ','2021-09-04 13:19:45'),(275,'Usuarios','C','Nombre completo: albertiba aquino soliz, Sexo: M, Telefono: 74339179, Correo: efracho23@gmail.com, usu_password: 07ca3dccfeeeea96e20d15c3deda71c9, Rol: Cliente, foto: ','2021-09-04 13:40:23'),(276,'Usuarios','C','Nombre completo: alison aquino soliz, Sexo: M, Telefono: 74339179, Correo: efracho23@gmail.com, usu_password: 07ca3dccfeeeea96e20d15c3deda71c9, Rol: Cliente, foto: ','2021-09-04 13:46:56'),(277,'Usuarios','C','Nombre completo: rosario sanches pizarro, Sexo: M, Telefono: 74339179, Correo: dragonbal_23@gmail.com, usu_password: 4acae94d762fbffa738a4bbc21d984b1, Rol: Cliente, foto: ','2021-09-04 13:50:19'),(278,'Usuarios','C','Nombre completo: simone aquino soliz, Sexo: F, Telefono: 77481705, Correo: simoneaquino8322@gmail.com, usu_password: 827ccb0eea8a706c4c34a16891f84e7b, Rol: Administrador, foto: ','2021-09-11 20:46:53'),(279,'usuario','U','','2021-09-11 21:38:21'),(280,'usuario','U','','2021-09-11 21:42:01'),(281,'usuario','U','','2021-09-11 22:22:27'),(282,'Usuarios','D','Nombre completo:   , Sexo: , Telefono: , Correo: , usu_password: d41d8cd98f00b204e9800998ecf8427e, Rol: , foto: ','2021-09-12 01:30:45'),(283,'usuario','U','','2021-09-12 02:05:02');
/*!40000 ALTER TABLE `auditoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conductores`
--

DROP TABLE IF EXISTS `conductores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conductores` (
  `idConductor` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(45) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Expedido` varchar(45) DEFAULT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  `FechaIngreso` timestamp NOT NULL DEFAULT current_timestamp(),
  `FechaActualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(255) DEFAULT '',
  PRIMARY KEY (`idConductor`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conductores`
--

LOCK TABLES `conductores` WRITE;
/*!40000 ALTER TABLE `conductores` DISABLE KEYS */;
INSERT INTO `conductores` VALUES (19,'CATEGORIA C','2021-08-08','COCHABAMBA','1','2021-08-22 20:31:44','2021-08-22 20:31:44',''),(20,'CATEGORIA B','0000-00-00','SANTA CRUZ','1','2021-08-22 21:49:56','2021-08-22 21:49:56','http://localhost/ejemploBDRemota/uploads/uploads/19.png'),(21,'CATEGORIA B','0000-00-00','SANTA CRUZ','1','2021-08-22 21:53:48','2021-08-22 21:53:48','http://localhost/ejemploBDRemota/uploads/uploads/20.png'),(22,'CATEGORIA B','0000-00-00','SANTA CRUZ','1','2021-08-22 21:53:48','2021-08-22 21:53:48','http://localhost/ejemploBDRemota/uploads/uploads/21.png'),(23,'CATEGORIA A','0000-00-00','COCHABAMBA','1','2021-08-22 21:55:41','2021-08-22 21:55:41','http://localhost/ejemploBDRemota/uploads/uploads/22.png'),(24,'','0000-00-00','','1','2021-08-22 22:39:26','2021-08-22 22:39:26','http://localhost/ejemploBDRemota/uploads/uploads/23.png'),(25,'CATEGORIA A','0000-00-00','COCHABAMBA','1','2021-08-23 00:42:59','2021-08-23 00:42:59','http://localhost/ejemploBDRemota/uploads/uploads/24.png'),(26,'CATEGORIA C','2021-08-08','COCHABAMBA','1','2021-08-23 00:44:55','2021-08-23 00:44:55','http://localhost/ejemploBDRemota/uploads/uploads/25.png'),(27,'CATEGORIA C','2021-12-08','COCHABAMBA','1','2021-08-23 00:47:41','2021-08-23 00:47:41',''),(28,'CATEGORIA A','2021-12-08','COCHABAMBA','1','2021-08-23 00:48:43','2021-08-23 00:48:43','http://localhost/ejemploBDRemota/uploads/uploads/27.png'),(29,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-23 00:52:11','2021-08-23 00:52:11','http://localhost/ejemploBDRemota/uploads/uploads/28.png'),(30,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-23 02:10:48','2021-08-23 02:10:48','http://localhost/ejemploBDRemota/uploads/uploads/29.png'),(31,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-23 02:11:47','2021-08-23 02:11:47','http://localhost/ejemploBDRemota/uploads/uploads/30.png'),(32,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-23 02:15:39','2021-08-23 02:15:39','http://localhost/ejemploBDRemota/uploads/uploads/31.png'),(33,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-23 02:17:11','2021-08-23 02:17:11','http://localhost/ejemploBDRemota/uploads/uploads/32.png'),(34,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-23 02:18:31','2021-08-23 02:18:31','http://localhost/ejemploBDRemota/uploads/uploads/33.png'),(35,'CATEGORIA C','1970-01-01','SANTA CRUZ','1','2021-08-23 20:25:00','2021-08-23 20:25:00','http://localhost/ejemploBDRemota/uploads/uploads/34.png'),(36,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-23 20:27:02','2021-08-23 20:27:02','http://localhost/ejemploBDRemota/uploads/uploads/35.png'),(37,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-23 20:27:05','2021-08-23 20:27:05','http://localhost/ejemploBDRemota/uploads/uploads/36.png'),(38,'CATEGORIA A','1970-01-01','COCHABAMBA','1','2021-08-25 01:33:59','2021-08-25 01:33:59','http://localhost/ejemploBDRemota/uploads/uploads/37.png');
/*!40000 ALTER TABLE `conductores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conductores_activos`
--

DROP TABLE IF EXISTS `conductores_activos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conductores_activos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `Latitud` double DEFAULT NULL,
  `Longitud` double DEFAULT NULL,
  `Direccion` varchar(500) DEFAULT NULL,
  `Camino` varchar(255) NOT NULL DEFAULT 'Norte',
  `Disponibilidad` varchar(1) NOT NULL DEFAULT '1',
  `Estado` varchar(1) NOT NULL DEFAULT '1',
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `FechaActualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `conductores_activoscol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_conductores_activos_usuario_idx` (`idUsuario`),
  CONSTRAINT `fk_conductores_activos_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conductores_activos`
--

LOCK TABLES `conductores_activos` WRITE;
/*!40000 ALTER TABLE `conductores_activos` DISABLE KEYS */;
INSERT INTO `conductores_activos` VALUES (12,3,-17.3644631,-66.1649011,'JRPM+4XR, Cochabamba, Bolivia','Norte','1','1','2021-09-04 17:52:28','2021-09-04 17:52:28',NULL),(13,1,-17.3902873,-66.1573644,'JRPM+4XR, Cochabamba, Bolivia','Sud','1','1','2021-09-09 01:04:59','2021-09-09 01:04:59',NULL),(14,0,-17.3723305,-66.1679272,'JRPM+4XR, Cochabamba, Bolivia','Norte','0','1','2021-09-11 01:54:08','2021-09-11 01:54:08',NULL);
/*!40000 ALTER TABLE `conductores_activos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ruta`
--

DROP TABLE IF EXISTS `ruta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ruta` (
  `idRuta` int(11) NOT NULL AUTO_INCREMENT,
  `origenLatitud` double NOT NULL,
  `origenLongitud` double NOT NULL,
  `destinoLatitud` double NOT NULL,
  `destinoLongitud` double NOT NULL,
  `Estado` varchar(1) DEFAULT '1',
  `FechaRegistro` timestamp NULL DEFAULT current_timestamp(),
  `Fecha actualizacion` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idRuta`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruta`
--

LOCK TABLES `ruta` WRITE;
/*!40000 ALTER TABLE `ruta` DISABLE KEYS */;
INSERT INTO `ruta` VALUES (1,-17.4870562,-66.1757351,-17.4902578,-66.1770539,'1','2021-09-10 14:52:19','2021-09-10 14:52:19'),(2,-17.4902578,-66.1770539,-17.4861689,-66.17253721,'1','2021-09-10 14:52:19','2021-09-10 14:52:19'),(5,-17.4861689,-66.17253721,-17.4073935,-66.150783,'1','2021-09-11 00:15:15','2021-09-11 00:15:15'),(7,-17.4073935,-66.150783,-17.4003609,-66.1508577,'1','2021-09-11 00:50:28','2021-09-11 00:50:28'),(8,-17.4003609,-66.1508577,-17.3916228,-66.1522481,'1','2021-09-11 00:52:25','2021-09-11 00:52:25'),(9,-17.3916228,-66.1522481,-17.3905072,-66.1628002,'1','2021-09-11 01:07:46','2021-09-11 01:07:46'),(10,-17.3905072,-66.1628002,-17.3701456,-66.2071849,'1','2021-09-11 01:13:11','2021-09-11 01:13:11');
/*!40000 ALTER TABLE `ruta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transportes`
--

DROP TABLE IF EXISTS `transportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transportes` (
  `idTransporte` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(255) NOT NULL,
  `Color` varchar(255) NOT NULL,
  `NumeroPlaca` varchar(255) NOT NULL,
  `Estado` char(1) NOT NULL DEFAULT '1',
  `Marca` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `FechaIngreso` timestamp NOT NULL DEFAULT current_timestamp(),
  `FechaActualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(255) DEFAULT '',
  PRIMARY KEY (`idTransporte`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transportes`
--

LOCK TABLES `transportes` WRITE;
/*!40000 ALTER TABLE `transportes` DISABLE KEYS */;
INSERT INTO `transportes` VALUES (11,'Taxitrufi','valvuena','254-XYZ','1','NISSAN','CONDOR','2021-07-11 17:25:24','2021-07-11 17:25:24','11.jpg'),(12,'TAXITRUFI','ROJO','258-DAS','0','TOYOTA','COROLLA','2021-07-11 17:57:59','2021-07-11 17:57:59','12.jpg'),(14,'TAXITRUFI','VERDE','ASG-854','1','NISSAN','FRONTIER','2021-07-12 08:47:08','2021-07-12 08:50:12',''),(15,'Taxi','Verde','213/xyz','1','nissan','condor','2021-08-24 21:52:20','2021-08-24 21:52:20','15.jpg');
/*!40000 ALTER TABLE `transportes` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER tgrInsertTransporte BEFORE INSERT ON transportes
FOR EACH ROW
BEGIN
	DECLARE _cad VARCHAR(300);
	SET _cad=CONCAT('Tipo: ', NEW.Tipo,', Color: ', NEW.Color,', NumeroPlaca: ', NEW.NumeroPlaca
			,', Marca: ', NEW.Marca,', Modelo: ', NEW.Modelo);
	INSERT INTO auditoria(tabla,crud,descripcion)
	VALUES('Transportes','C',_cad);

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER tgrUpdateTransporte BEFORE UPDATE ON transportes
FOR EACH ROW
BEGIN
DECLARE _cad VARCHAR(300);
	IF (OLD.NumeroPlaca<>NEW.NumeroPlaca AND OLD.Modelo<> NEW.Modelo AND OLD.Marca <> NEW.Marca) THEN
	
	SET _cad=CONCAT('Val Ant: ', OLD.NumeroPlaca,',',OLD.Modelo,',', OLD.Marca,', Cambiado a :', 
					NEW.NumeroPlaca,',',NEW.Modelo,',',NEW.Marca);
	INSERT INTO auditoria(tabla,crud,descripcion)
	VALUES('Transportes','U',_cad);
	END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER tgrDeleteTransporte BEFORE DELETE ON transportes
FOR EACH ROW
BEGIN
	DECLARE _cad VARCHAR(300);
	SET _cad=CONCAT('idTransporte: ', OLD.idTransporte,', Tipo: ', OLD.Tipo,', Color: ', OLD.Color
					,', NumeroPlaca: ', OLD.NumeroPlaca,', Estado: ', OLD.Estado,', Marca: ', OLD.Marca
					,', Modelo: ', OLD.Modelo,', FechaIngreso: ', OLD.FechaIngreso
					,', FechaActualizacion: ', OLD.FechaActualizacion);
	INSERT INTO auditoria(tabla,crud,descripcion)
	VALUES('Transportes','D',_cad);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `ApellidoPaterno` varchar(45) NOT NULL,
  `ApellidoMaterno` varchar(45) DEFAULT NULL,
  `Sexo` char(1) NOT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Cedula` varchar(45) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `usu_password` varchar(255) NOT NULL,
  `usu_usuario` varchar(45) NOT NULL,
  `Rol` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT '',
  `Estado` char(1) NOT NULL DEFAULT '1',
  `FechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `FechaActualizacion` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (0,'celia','morata','balboa','F','8725487','','amc8725487','5a8dccb220de5c6775c873ead6ff2e43','','Cliente','0.jpg','0','2021-08-09 01:39:40','2021-08-09 01:39:40'),(1,'efrain','caracara','palenque','F','8725487','','efracho32@gmail.com','b27c7f2e6dedfb621b768d780dea790e','','Conductor','','1','2021-08-24 20:14:18','2021-08-24 20:14:18'),(2,'efracho','herrera ','salazar','M','74339179','8725487','efracho23@gmail.com','4efb10ca2ac7fbeff8e7d073c4776602','ehs8725487','Cliente','','1','2021-08-25 01:33:01','2021-08-25 01:33:01'),(3,'joel','herrera','salazar','M','74339179','8725487','dragonbal_23@hotmail.com','827ccb0eea8a706c4c34a16891f84e7b','jhs8725487','Conductor','','1','2021-08-25 01:33:59','2021-08-25 01:33:59'),(4,'jhonny','janko','condori ','M','74339179','8725487','efracho23@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','jjc8725487','Cliente','','1','2021-08-25 02:02:21','2021-08-25 02:02:21'),(18,'Eliana','Lazarte','Nieto','F','77481705','8725487','jhericoo8322@gmail.com','9b85916382755512c407e4904a92ae94','ELN8725487','Cliente','','1','2021-09-04 01:18:01','2021-09-04 01:18:01'),(20,'Milton','Lazarte','Nieto','F','77481705','8725487','jhericoo8322@gmail.com','a46888c7b7b1622113282740781d3a78','MLN8725487','Cliente','','1','2021-09-04 01:30:24','2021-09-04 01:30:24'),(22,'Adolfo','Lazarte','Nieto','F','77481705','8725487','jhericoo8322@gmail.com','007176916de05d82311ecc8b2573a6b1','ALN8725487','Cliente','','1','2021-09-04 02:09:25','2021-09-04 02:09:25'),(29,'simone','Lazarte','Nieto','F','77481705','8725487','jhericoo8322@gmail.com','bbeb73f525b7e2987f03ec61b500d3fa','sLN8725487','Cliente','','1','2021-09-04 13:19:45','2021-09-04 13:19:45'),(30,'albertiba','aquino','soliz','M','74339179','8725487','efracho23@gmail.com','07ca3dccfeeeea96e20d15c3deda71c9','aas8725487','Cliente','','1','2021-09-04 13:40:23','2021-09-04 13:40:23'),(31,'alison','aquino','soliz','M','74339179','8725487','efracho23@gmail.com','07ca3dccfeeeea96e20d15c3deda71c9','aas8725487','Cliente','','1','2021-09-04 13:46:56','2021-09-04 13:46:56'),(32,'rosario','sanches','pizarro','M','74339179','8725487','dragonbal_23@gmail.com','4acae94d762fbffa738a4bbc21d984b1','rsp8725487','Cliente','','1','2021-09-04 13:50:19','2021-09-04 13:50:19'),(33,'simone','aquino','soliz','F','77481705','8725486','simoneaquino8322@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','sas8725486','Administrador','','1','2021-09-11 20:46:53','2021-09-11 20:46:53');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER tgrInsertUsuarios BEFORE INSERT ON `usuarios` FOR EACH ROW
BEGIN
	DECLARE _cad VARCHAR(300);
	SET _cad=CONCAT('Nombre completo: ', CONCAT(NEW.Nombre,' ',NEW.ApellidoPaterno,' ',NEW.ApellidoMaterno)
			,', Sexo: ', NEW.Sexo,', Telefono: ', NEW.Telefono
			,', Correo: ', NEW.Correo,', usu_password: ', NEW.usu_password,', Rol: ', NEW.Rol,', foto: ', NEW.foto);
	INSERT INTO auditoria(tabla,crud,descripcion)
	VALUES('Usuarios','C',_cad);

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER tgrUpdateUsuario BEFORE UPDATE ON usuarios
FOR EACH ROW
BEGIN
DECLARE _cad VARCHAR(700);
set _cad="";
	IF (OLD.Nombre<>NEW.Nombre) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.Nombre,', Cambiado a : ', New.Nombre);
	END IF;
	IF (OLD.ApellidoPaterno<>NEW.ApellidoPaterno) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.ApellidoPaterno,', Cambiado a :', New.ApellidoPaterno);	
	END IF;
	IF (OLD.ApellidoMaterno<>NEW.ApellidoMaterno) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.ApellidoMaterno,', Cambiado a :', New.ApellidoMaterno);
	END IF;
	IF (OLD.Sexo<>NEW.Sexo) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.Sexo,', Cambiado a : ', New.Sexo);
	END IF;
	IF (OLD.Telefono<>NEW.Telefono) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.Telefono,', Cambiado a : ', New.Telefono);
	END IF;
	IF (OLD.Correo<>NEW.Correo) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.Correo,', Cambiado a : ', New.Correo);
	END IF;
	IF (OLD.usu_password<>NEW.usu_password) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.usu_password,', Cambiado a : ', New.usu_password);
	END IF;
	IF (OLD.Rol<>NEW.Rol) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.Rol,', Cambiado a : ', New.Rol);
	END IF;
	IF  (OLD.foto<>NEW.foto) THEN
	SET _cad=CONCAT(_cad,' Val Ant: ', OLD.foto,', Cambiado a : ', New.foto);
	END IF;

	INSERT INTO auditoria(tabla,crud,descripcion)
	VALUES('usuario','U',_cad);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER tgrDeleteUsuarios BEFORE DELETE ON `usuarios` FOR EACH ROW
BEGIN
	DECLARE _cad VARCHAR(300);
	SET _cad=CONCAT('Nombre completo: ', CONCAT(OLD.Nombre,' ',OLD.ApellidoPaterno,' ',OLD.ApellidoMaterno)
			,', Sexo: ', OLD.Sexo,', Telefono: ', OLD.Telefono
			,', Correo: ', OLD.Correo,', usu_password: ', OLD.usu_password,', Rol: ', OLD.Rol,', foto: ', OLD.foto);
	INSERT INTO auditoria(tabla,crud,descripcion)
	VALUES('Usuarios','D',_cad);

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping events for database 'bdtransporte'
--

--
-- Dumping routines for database 'bdtransporte'
--
/*!50003 DROP PROCEDURE IF EXISTS `uspIDE` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `uspIDE`(_id smallint, _latitud varchar(800), _longitud varchar(800), _direccion varchar(800))
BEGIN
DECLARE _RES VARCHAR(1000);
IF EXISTS(SELECT idUsuario FROM conductores_activos WHERE idUsuario=_id) THEN

UPDATE conductores_activos SET Latitud = _latitud, Longitud = _longitud, Direccion = _direccion, Estado='1' WHERE idUsuario = _id;
ELSE
INSERT INTO conductores_activos (idUsuario, Latitud, Longitud, Direccion) VALUES (_id,_latitud,_longitud,_direccion);
END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-13  9:45:02
