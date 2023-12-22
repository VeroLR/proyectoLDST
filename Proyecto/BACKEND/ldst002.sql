-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ldst002
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_products` (
  `id_pedido` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `quantity` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_pedido`,`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_products`
--

LOCK TABLES `order_products` WRITE;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
INSERT INTO `order_products` VALUES (0,1,1),(0,7,1),(0,8,1),(0,17,1),(0,18,1),(0,23,1),(0,24,1),(0,52,1),(1,1,1),(1,7,1),(2,1,4),(2,8,2),(2,16,1),(3,10,1),(3,16,1),(3,17,1),(4,1,3),(4,7,2),(4,17,1),(4,23,1),(4,44,255),(5,1,4),(5,17,1),(6,8,3),(6,17,255),(7,7,255),(8,1,255),(8,7,2),(8,8,1),(9,17,255),(10,18,255),(11,23,7),(12,14,1),(13,7,1),(13,8,1),(13,10,1),(18,1,1);
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id_order` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` char(50) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `total_price` float(6,2) NOT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'ilovedarkmagic@kingbowser.mk',0,26.00,'2023-12-15 15:48:29'),(2,'alexgonpin95@gmail.com',0,640.00,'2023-12-10 17:18:24'),(3,'ilovedarkmagic@kingbowser.mk',0,515.00,'2023-12-22 17:13:40'),(4,'ilovedarkmagic@kingbowser.mk',0,3067.00,'2023-12-22 19:28:09'),(5,'toad@gmail.es',0,540.00,'2023-12-22 18:50:41'),(6,'toad@gmail.es',0,9999.99,'2023-12-22 19:17:49'),(7,'ilovedarkmagic@kingbowser.mk',0,4080.00,'2023-12-22 22:06:33'),(8,'b@gmail.com',0,2607.00,'2023-12-22 21:03:10'),(9,'ilovedarkmagic@kingbowser.mk',0,9999.99,'2023-12-22 22:07:39'),(10,'ilovedarkmagic@kingbowser.mk',0,9999.99,'2023-12-22 22:08:38'),(11,'ilovedarkmagic@kingbowser.mk',0,1470.00,'2023-12-22 22:10:04'),(12,'ilovedarkmagic@kingbowser.mk',0,240.00,'2023-12-22 22:13:04'),(13,'ilovedarkmagic@kingbowser.mk',0,56.00,'2023-12-22 22:13:37'),(14,'ilovedarkmagic@kingbowser.mk',0,0.00,'2023-12-22 22:16:16'),(15,'ilovedarkmagic@kingbowser.mk',0,0.00,'2023-12-22 22:17:50'),(16,'ilovedarkmagic@kingbowser.mk',0,0.00,'2023-12-22 22:19:39'),(17,'ilovedarkmagic@kingbowser.mk',0,0.00,'2023-12-22 22:21:57'),(18,'ilovedarkmagic@kingbowser.mk',1,0.00,'2023-12-22 22:22:05');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id_product` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` char(15) NOT NULL,
  `product_name` char(70) NOT NULL,
  `description` text NOT NULL,
  `product_price` float(6,2) NOT NULL,
  `discount` float(6,2) DEFAULT NULL,
  `image_src` char(200) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Objetos','Trio de platanos','El kit ideal para hacer resbalar a tus enemigos hacia su perdicion.',15.00,10.00,'platanos.png'),(8,'Objetos','Bullet Bill   ','Destruccion y poder para los mas rezagados.',25.00,0.00,'billbala.png'),(10,'Objetos','Trio de champiñones   ','¡Turbos asegurados para recuperar posiciones!',15.00,0.00,'champiñones.png'),(11,'Objetos','Superbocina   ','Tumba a tus rivales y deshazte del temido caparazon azul.',15.00,0.00,'bocina.png'),(12,'Objetos','Mega Champiñon   ','¡Aplasta a tus enemigos y dejalos atras con su poder!',16.00,0.00,'superchampiñon.png'),(13,'Objetos','Bob-omb     ','Provocara una explosion de la que pocos podran escapar.',13.00,0.00,'bobomb.png'),(14,'Karts','Tubiturbo   ','Caracteristicas estandar para conductores novatos.',240.00,0.00,'tubiturbo.png'),(15,'Karts','Camion Tropical   ','El poder de Hawaii al alcance de tus manos.',450.00,0.00,'camiontropical.png'),(17,'Karts','Floruquad  ','La gusano-moto mas famosa del mercado.',500.00,0.00,'floruquad.png'),(18,'Karts','Abejo-movil    ','Pica a tus rivales como una abeja para asegurar tu victoria.',400.00,0.00,'abejomovil.png'),(19,'Karts','Autobus doble  ','Dos plantas de esencia londinense para adelantar con estilo.',470.00,0.00,'autobusdoble.png'),(20,'Karts','Cupidomovil  ','El poder del querubin mas famoso de toda Grecia te sorprendera.',380.00,0.00,'cupidomovil.png'),(21,'Karts','Mininomovil  ','¡Fans de los gatitos y la velocidad, este es vuestro kart!',500.00,0.00,'mininomovil.png'),(22,'Alas','Ala Mario de 8 Bits','Nuestro fontanero favorito surcando los cielos.',180.00,99.00,'alamario.png'),(23,'Alas','Grulla Origami Carmesi  ','Cultura japonesa garantizando el maximo planeo.',210.00,0.00,'grullaorigami.png'),(24,'Alas','Globos Plantas Piraña  ','¡Cuidado, pueden morder a 100 metros de altura!',190.00,0.00,'globosplanta.png'),(25,'Alas','Paraestrella arcoiris    ','Un ala sideral para alcanzar los sitios mas reconditos.',240.00,0.00,'paraestrella.png'),(26,'Alas','Parasol Rosas  ','Con un bonito motivo floral, hara de ti un conductor veloz y elegante.',220.00,0.00,'parasolrosas.png'),(27,'Alas','Parasandwich  ','Con una deliciosa apariencia para distraer a los mas hambrientos.',190.00,0.00,'parasandwich.png'),(31,'Alas','Ala Flor Sonriente   ','Podra parecer amigable, pero su capacidad de planeo es de admirar.',210.00,0.00,'alaflor.png'),(32,'Alas','Ala Caballete  ','Puro arte del siglo XVIII que te hara volar a otros tiempos.',280.00,0.00,'alacaballete.png'),(34,'Objetos','Caparazon azul   ','Nada (o casi nada) podra salvar al primer puesto de el.',20.00,0.00,'caparazonazul.png'),(44,'Karts','Bolido Bala Plateado','Maxima velocidad, ahora con un moderno acabado plateado.',550.00,9.00,'bolidobala.png'),(52,'Objetos','Trio de caparazones rojos','Punteria asegurada para ganar el primer puesto.',16.00,0.00,'caparazones.png');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `email` char(50) NOT NULL,
  `name` char(30) NOT NULL,
  `password` char(25) NOT NULL,
  `surnames` char(100) NOT NULL,
  `phone_number` char(20) DEFAULT NULL,
  `address` char(155) DEFAULT NULL,
  `city` char(30) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `privilege` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('floroflexflow@kingbowser.mk','Verónica','uwuuwu','Lechón Rodríguez',NULL,NULL,NULL,'1990-01-02',1),('ilovedarkmagic@kingbowser.mk','Alejandro','kamekthebest','González Pintos  ','123456789','Calle Bartolomé, 33, 33ªC             ','Jarandil         ','1990-12-31',1),('scariestbooever@kingbowser.mk','Cristina','kingboo4ever','Rodríguez Gutiérrez',NULL,NULL,NULL,'1990-07-03',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-22 22:35:42
