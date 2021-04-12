/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.14-MariaDB : Database - data_pegawai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`data_pegawai` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `data_pegawai`;

/*Table structure for table `data_pegawai` */

DROP TABLE IF EXISTS `data_pegawai`;

CREATE TABLE `data_pegawai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `lulusan_akhir` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_pegawai` */

insert  into `data_pegawai`(`id`,`nama`,`alamat`,`jenis_kelamin`,`agama`,`lulusan_akhir`) values 
(1,'nama1','alamat1','laki-laki','Islam','universitas1'),
(2,'nama2','alamat2','perempuan','Islam','universitas2'),
(4,'nama4','alamat4','perempuan','khatolik','universitas4'),
(5,'nama5','alamat5','perempuan','Kristen','universitas5');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
