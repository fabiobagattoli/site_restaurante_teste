-- MySQL dump 10.16  Distrib 10.1.20-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.20-MariaDB

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(35) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `ok` binary(1) NOT NULL,
  `ip` char(5) NOT NULL,
  `foto_perfil` varchar(70) DEFAULT NULL,
  `estado` binary(1) DEFAULT NULL,
  `detalhes` text,
  `Nome_menu` char(35) DEFAULT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (77,'tipo@caseiro','54c63f6bb2b808a4694cc1086215102c85b15eb8','1','ps1','s1-66a2dae5cc09cca1cafe5e6038ba6919.jpg','1','hjljk',NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

--
-- Table structure for table `conf`
--

DROP TABLE IF EXISTS `conf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conf` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `ok` char(1) COLLATE latin1_general_ci DEFAULT NULL,
  `ip` char(3) COLLATE latin1_general_ci NOT NULL,
  `Telefone` char(20) COLLATE latin1_general_ci DEFAULT NULL,
  `Telefone2` char(20) COLLATE latin1_general_ci DEFAULT NULL,
  `EmailPrincipal` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `EndEmil` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `logorecibo` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `Fantasia` varchar(80) COLLATE latin1_general_ci DEFAULT NULL,
  `detalhes` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id_empresa`),
  KEY `id_config` (`id_empresa`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conf`
--

/*!40000 ALTER TABLE `conf` DISABLE KEYS */;
INSERT INTO `conf` VALUES (1,'s','ps1','(47) 9999-9999','9999-9999','contato@teste.com.br','Promoção Pizza media','ps1-2017-01-31-d265c60055c475071a0278a3350116b7.jpg','Restaurante Teste','3 sabores 36,90 na compra da pizza ganha guaraná de 2 litros');
/*!40000 ALTER TABLE `conf` ENABLE KEYS */;

--
-- Table structure for table `paginas`
--

DROP TABLE IF EXISTS `paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paginas` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(120) DEFAULT NULL,
  `Titulo` varchar(120) DEFAULT NULL,
  `Tipo` char(15) NOT NULL,
  `imagem` varchar(70) DEFAULT NULL,
  `status` char(2) DEFAULT NULL,
  `Obs` text,
  PRIMARY KEY (`id_pagina`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paginas`
--

/*!40000 ALTER TABLE `paginas` DISABLE KEYS */;
INSERT INTO `paginas` VALUES (7,'Restaurante Aberto de Segunda a Sábado para Almoço',NULL,'msgtopo',NULL,NULL,'Buffet R$9,90 com 2 pedaços de carne por pessoa'),(8,'Entrega de Marmitas + Telentregas',NULL,'msgtopo',NULL,NULL,'Condição especial para empresa'),(9,'Aos Sábados Cardápio Especial apartir das 11:00 apenas R$ 9,90 2 pedaços de carne por pessoa',NULL,'msgtopo',NULL,NULL,'Tele entrega de marmitas'),(10,'Pizzaria aberta de quarta a sabado apartir das 18:00',NULL,'msgtopo',NULL,NULL,''),(11,'Marmita pequena','R$ 10,00','destaque',NULL,NULL,'Entrega de marmitas  de segunda a sábado'),(12,'Marmita media','R$12,00','destaque',NULL,NULL,'Ligue e agende a entrega de sua marmita'),(13,'Buiffet livre com 2 pedaços de carne por pessoa','R$ 9,90','destaque',NULL,NULL,'Rapidez na entrega de sua marmita'),(14,'PIZZA Gigante','R$ 52,00','destaque',NULL,NULL,'4 sabores 16 fatias borda opcional (cheddar catupiry ou chocolate)'),(15,'Pizza grande','R$ 45,00','destaque',NULL,NULL,'4 sabores 14 fatias ( borda opcional cheddar catupiry e chocolate'),(16,'Pizza media','R$35,90','destaque',NULL,NULL,'3 Sabores 12 fatias borda opcional cheddar catupiry e chocolate'),(17,'Pizza pequena','R$ 22,90','destaque',NULL,NULL,'2 sabores 8 fatias borda opcional cheddar catupiry e chocolate'),(18,'Casamento 2017',NULL,'galeria','ps1-2017-01-19-5a661130a4a76c500a382bb15d01f8c3.jpg',NULL,'nlfnknfdl'),(19,'aaa',NULL,'galeria','ps1-2017-01-19-8f3ec65b3baa734c23b040b00b8ef576.jpg',NULL,'fgjhfg'),(21,'gfjfdj',NULL,'galeria','ps1-2017-01-19-1b58ec72f8877f0f90a22a84cfb065b8.jpg',NULL,'hjdhgj'),(22,'xxxx',NULL,'galeria','ps1-2017-01-19-11d42586b7b8699bee1caf305e824d4c.jpg',NULL,'gdhfgjfhdj'),(23,'Pizza',NULL,'galeria','ps1-2017-01-19-14985edce1297dd566cc7502e648b107.jpg',NULL,'ghfghjdj'),(24,'pizza',NULL,'galeria','ps1-2017-01-19-59dac1df44fef5e929e31c59ac94bf82.jpg',NULL,'jfjhdj'),(25,'Alcatra a moda da casa','R$ 38,00','destaque',NULL,NULL,'500gr de alcatra em posta polenta batata frita salda e farofa'),(26,'X CASEIRÃO','R$ 17,00','destaque',NULL,NULL,'Lanche completo aberto ao prato com batata frita'),(27,'Picadão a moda da casa','R$ 42,00','destaque',NULL,NULL,'alcatra coração peito de frango calabresa polenta na chapa batata frita e salada');
/*!40000 ALTER TABLE `paginas` ENABLE KEYS */;

--
-- Dumping events for database 'u242226693_tipo'
--

--
-- Dumping routines for database 'u242226693_tipo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-01 19:34:34
