/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.26-MariaDB : Database - nilai_sf
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nilai_sf` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nilai_sf`;

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_dev` varchar(6) NOT NULL,
  `pin` varchar(16) NOT NULL,
  `nilai` int(1) NOT NULL,
  `catatan` text NOT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`id`,`id_dev`,`pin`,`nilai`,`catatan`,`created_on`) values (8,'D002','0p8fb',42,'<p>fw</p>','2019-03-19 01:31:13'),(9,'D002','1h43w',42,'<p>dqwefhu</p>','2019-03-19 13:48:42'),(10,'D002','1y1cj',100,'<p>hnkjl</p>','2019-03-19 13:57:00'),(11,'D003','1y1cj',100,'<p>gjhkbj</p>','2019-03-19 14:01:35'),(12,'D002','8y4ed',100,'<p>dwef</p>','2019-03-28 18:49:00'),(13,'D002','gnzj6',89,'<p>cwervwe</p>','2019-03-28 19:44:07'),(14,'D003','gnzj6',78,'<p>dwe</p>','2019-03-28 19:45:24');

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pin` varchar(15) NOT NULL,
  `nama_pes` varchar(100) NOT NULL,
  `email_pes` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`pin`),
  UNIQUE KEY `email_pes` (`email_pes`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `peserta` */

insert  into `peserta`(`id`,`pin`,`nama_pes`,`email_pes`,`status`,`created_on`) values (2,'gnzj6','few','a@bcekj.com','Umum','2019-03-28 19:41:03');

/*Table structure for table `poin_peserta` */

DROP TABLE IF EXISTS `poin_peserta`;

CREATE TABLE `poin_peserta` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_dev` varchar(4) NOT NULL,
  `pin` varchar(15) NOT NULL,
  `poin` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `poin_peserta` */

insert  into `poin_peserta`(`id`,`id_dev`,`pin`,`poin`) values (2,'D002','gnzj6',100),(3,'D003','gnzj6',80);

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(30) NOT NULL,
  `created_on` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`id`,`nama_role`,`created_on`) values (1,'Admin','2019-03-02 19:07:00'),(2,'Developer','2019-03-02 19:07:11'),(0,'Super Admin','2019-03-08 20:17:38');

/*Table structure for table `tim` */

DROP TABLE IF EXISTS `tim`;

CREATE TABLE `tim` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_dev` varchar(4) NOT NULL,
  `nama_apl` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tim` */

insert  into `tim`(`id`,`id_dev`,`nama_apl`,`kategori`,`email`) values (1,'D002','COBA','desktop','coba@a.com'),(2,'D001','LALA','web','lala@gmail.com'),(3,'D003','APA','games','apa@a.com');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `role` int(20) NOT NULL,
  `id_dev` varchar(4) NOT NULL,
  `nama_apl` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `login` int(1) unsigned zerofill NOT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`role`,`id_dev`,`nama_apl`,`kategori`,`username`,`email`,`password`,`login`,`created_on`) values (3,0,'-','-','','whardah','whardah@gmail.com','4521ab6d0f3fa42bf3b55bdfe00b4de2',0,'2019-03-08 14:50:01'),(8,1,'','-','','aa','aa@a.com','4124bc0a9335c27f086f24ba207a4912',0,'2019-03-17 21:29:09'),(9,2,'D002','COBA','desktop','coba','coba@a.com','c3ec0f7b054e729c5a716c8125839829',0,'2019-03-19 00:27:50'),(11,2,'D003','APA','games','apa','apa@a.com','e03ae33ee8417ce2c9785274217636e0',0,'2019-03-19 14:00:41'),(12,1,'-','-','-','admin1','admin1@hmti.com','0192023a7bbd73250516f069df18b500',0,'2019-03-28 21:05:26'),(13,1,'-','-','-','admin2','admin2@hmti.com','0192023a7bbd73250516f069df18b500',0,'2019-03-28 21:06:00'),(14,1,'-','-','-','admin3','admin3@hmti.com','0192023a7bbd73250516f069df18b500',0,'2019-03-28 21:06:31'),(15,1,'-','-','-','admin4','admin4@hmti.com','0192023a7bbd73250516f069df18b500',0,'2019-03-28 21:07:11'),(16,1,'-','-','-','admin5','admin5@hmti.com','0192023a7bbd73250516f069df18b500',0,'2019-03-28 21:07:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
