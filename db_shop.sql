/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.7.3-MariaDB-log : Database - db_shop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_shop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_shop`;

/*Table structure for table `tb_barang` */

DROP TABLE IF EXISTS `tb_barang`;

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_barang` */

insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (1,'Beras',10,14500,'beras_1kg.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (2,'Indomie',25,3500,'indomie_goreng.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (3,'Minyak',7,18200,'minyak_goreng.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (4,'Telur',4,3000,'telur_ayam.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (5,'Susu Kaleng',0,14000,'susu_kaleng.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (6,'Kecap',2,12000,'kecap_manis.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (7,'Saus',8,8000,'saus_tomat.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (8,'Gula',12,18000,'gula_pasir.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (9,'Sarden',3,16500,'sarden.jpg');
insert  into `tb_barang`(`id_barang`,`nama_barang`,`stok`,`harga`,`gambar`) values (10,'Biskuit',5,19000,'biskuit.jpg');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`email`,`username`,`password`) values (1,'John Doe','john.doe@gmail.com','admin','21232f297a57a5a743894a0e4a801fc3');
insert  into `tb_user`(`id_user`,`nama_user`,`email`,`username`,`password`) values (2,'Sofian','sofian@yahoo.com','sofian','30880b25df82c19f32a440206d88b168');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;