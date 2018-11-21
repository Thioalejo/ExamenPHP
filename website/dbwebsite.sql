/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.28-MariaDB : Database - dbwebsite
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbwebsite` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbwebsite`;

/*Table structure for table `carro` */

DROP TABLE IF EXISTS `carro`;

CREATE TABLE `carro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `usuario` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `creado` datetime NOT NULL,
  `modificado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `carro` */

insert  into `carro`(`id`,`id_producto`,`cantidad`,`precio`,`estado`,`usuario`,`creado`,`modificado`) values (1,1,1,700000,0,'Thioalejo','2018-11-20 23:28:27','2018-11-20 17:28:27'),(2,2,1,450000,0,'Thioalejo','2018-11-20 23:28:30','2018-11-20 17:28:30'),(3,1,3,700000,0,'Thioalejo','2018-11-20 23:54:14','2018-11-20 17:54:14'),(4,2,2,450000,0,'Thioalejo','2018-11-20 23:54:19','2018-11-20 17:54:19'),(5,1,2,700000,0,'alejo','2018-11-21 02:31:35','2018-11-20 20:31:35'),(6,1,2,700000,0,'alejo','2018-11-21 02:36:31','2018-11-20 20:36:31'),(7,1,2,700000,0,'alejo','2018-11-21 02:37:45','2018-11-20 20:37:45'),(8,2,2,450000,0,'alejo','2018-11-21 02:38:52','2018-11-20 20:38:52'),(9,2,3,450000,0,'alejo','2018-11-21 02:40:08','2018-11-20 20:40:08'),(10,1,3,700000,0,'alejo','2018-11-21 02:40:13','2018-11-20 20:40:13'),(19,1,3,700000,0,'j2','2018-11-21 03:39:56','2018-11-20 21:39:56');

/*Table structure for table `contacto` */

DROP TABLE IF EXISTS `contacto`;

CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Asunto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Mensaje` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Hora` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idContacto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `contacto` */

insert  into `contacto`(`idContacto`,`Nombre`,`Apellido`,`Email`,`Telefono`,`Asunto`,`Mensaje`,`Fecha_Hora`) values (1,'johnny','Martinez','alejo.saraza2@gmail.com','5842345','Quiero trabajar con ustedes','Mensaje','13-11-2018 (19:06:14)'),(2,'alejandro','Saraza','alejo.saraza3@gmail.com','5842345','Quiero trabajar con ustedes','a','11-11-2018 (19:11:27)'),(3,'david','Piedrahita','david@gmail.com','5842345','Quiero trabajar con ustedes','ass','13-11-2018 (19:12:39)');

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `usuario` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `creado` datetime NOT NULL,
  `actualizado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `productos` */

insert  into `productos`(`id`,`nombre`,`descripcion`,`precio`,`cantidad`,`usuario`,`creado`,`actualizado`) values (1,'Celular Moto G5 Plus','32 MB Memoria interna. Doble camara trasera 12 Mpx. Camara frontal 10 Mpx.',700000,50,'admin','2018-11-14 00:00:00','2018-11-14 07:49:05'),(2,'Tablet Asus 10','10 pulgadas. Memoria interna 32 GB. Doble nucleo. Camara frontal y trasera de 13 Mpx.',450000,30,'admin','2018-11-14 00:00:00','2018-11-14 07:51:02');

/*Table structure for table `registro` */

DROP TABLE IF EXISTS `registro`;

CREATE TABLE `registro` (
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) DEFAULT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `rol` varchar(10) DEFAULT 'user',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `registro` */

insert  into `registro`(`usuario`,`contraseña`,`primer_nombre`,`segundo_nombre`,`primer_apellido`,`segundo_apellido`,`email`,`fecha`,`rol`) values ('Thioalejo','123','alejo','alejo','alejo','alejo','alejo.saraza@gmail.com','2018-11-13 17:04:41','admin'),('alejo','1123','alejandro','jhonny','sanchez','botero','alejo@hotmail.com','2018-11-13 17:00:22','user'),('j2','123','david','david','david','david','david@gmail.com','2018-11-13 17:04:08','user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
