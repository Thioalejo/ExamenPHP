/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.34-MariaDB : Database - dbwebsite
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

/*Table structure for table `registro` */

DROP TABLE IF EXISTS `registro`;

CREATE TABLE `registro` (
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) DEFAULT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `registro` */

insert  into `registro`(`usuario`,`contraseña`,`primer_nombre`,`segundo_nombre`,`primer_apellido`,`segundo_apellido`,`email`) values ('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','0@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','100@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','101@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','10@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','15@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','1@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','200@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','203@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','21@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','2@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','300@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','30@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','31@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','35@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','3@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','52@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','5@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','60@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','8@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','9@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','alejo.saraza@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','alejosaraza@gmail.com'),('Thioalejo','alejo','Johnny','Alejandro','Martinez','Saraza','araza@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
