/*
SQLyog Ultimate v9.02 
MySQL - 5.5.36 : Database - usuario
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`usuario` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `usuario`;

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `idgroup` int(11) NOT NULL AUTO_INCREMENT,
  `namegroup` varchar(900) DEFAULT NULL,
  PRIMARY KEY (`idgroup`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `groups` */

insert  into `groups`(`idgroup`,`namegroup`) values (1,'tic-51'),(2,'tic-52'),(3,'tic-53');

/*Table structure for table `grupo_alumno` */

DROP TABLE IF EXISTS `grupo_alumno`;

CREATE TABLE `grupo_alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idgroup` int(11) DEFAULT NULL,
  `idalumno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `grupo_alumno` */

insert  into `grupo_alumno`(`id`,`idgroup`,`idalumno`) values (4,1,24),(5,1,25);

/*Table structure for table `maestro_grupo` */

DROP TABLE IF EXISTS `maestro_grupo`;

CREATE TABLE `maestro_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_grupo` */

insert  into `maestro_grupo`(`id`,`id_maestro`,`id_grupo`,`id_materia`) values (5,23,1,1),(6,23,3,3),(7,27,1,3);

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`id`,`id_maestro`,`id_materia`) values (12,23,3),(13,23,1),(14,27,3);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(900) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id`,`nombre`,`estatus`) values (1,'Matemáticas',1),(2,'Español',1),(3,'Inglés',1);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidopaterno` varchar(50) NOT NULL,
  `apellidomaterno` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numeroexterior` varchar(50) NOT NULL,
  `numerointerior` varchar(50) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cp` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nombre`,`apellidopaterno`,`apellidomaterno`,`telefono`,`calle`,`numeroexterior`,`numerointerior`,`colonia`,`municipio`,`estado`,`cp`,`correo`,`usuario`,`contrasena`,`nivel`,`estatus`) values (23,'MISRAIM','MAZANARES',' ALONZO','','','','','','','',0,'','pelon','1234',2,1),(24,'DIEGO EMMANUEL','ZAVALETA','ACEVEDO','','','','','','','',0,'','','',3,1),(25,'JESUS','CRUZ',' VERA','','','','','','','',0,'','pelon','123',3,1),(26,'GUADALUPE','CRUZ',' VERA','','','','','','','',0,'','jose','123',1,1),(27,'ANDREA','ROSALES','FIGUEROA','','','','','','','',0,'','','',2,1),(28,'VICENTE','FERNANDEZ','RUIZ','','','','','','','',0,'','','',2,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
