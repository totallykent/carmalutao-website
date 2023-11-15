/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - carmalutao-website
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`carmalutao-website` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `carmalutao-website`;

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `model` mediumtext NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `imgLink` mediumtext NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `items` */

insert  into `items`(`productID`,`brand`,`model`,`price`,`imgLink`) values 
(1,'Triumph','Thruxton RS 1200',16995.00,'https://moto-addict.com/images/articles/actus/2020/04/triumph-thruxton-rs/Thruxton-RS-RHS---Jet-black.jpg'),
(2,'Harley Davidson','Nighster Special',14999.00,'https://www.harley-davidson.com/content/dam/h-d/images/product-images/bikes/motorcycle/2023/2023-nightster-special/2023-nightster-special-016/2023-nightster-special-016-motorcycle.jpg?impolicy=myresize&rw=500'),
(3,'Kawasaki','Ninja H2',30500.00,'https://i.imgur.com/RMft62I.jpg'),
(9,'Suzuki','Raider R150',2160.00,'https://keyauto.my/wp-content/uploads/2022/04/pdrm-said-high-performance-kapchais-should-be-banned-in-malaysia-3.jpg'),
(10,'Honda','XRM 125 DSX',1320.00,'https://static.wixstatic.com/media/9acd68_2c51a1a3f8544b258c0ed81346038942~mv2.png/v1/fill/w_540,h_391,al_c,lg_1/9acd68_2c51a1a3f8544b258c0ed81346038942~mv2.png'),
(11,'Ducati','Panigale V2',18895.00,'https://images.ctfassets.net/x7j9qwvpvr5s/5wIAIHBzvgyWOu2JK0d36E/47f71302c59b578486c19e434e8fdab7/Panigale-V2-Bk-MY23-Model-Preview-1050x650.png'),
(15,'Kawasaki','1985 GPZ900R Ninja',6278.00,'https://i.imgur.com/VF8Sbt8.jpg'),
(22,'Yamaha','Vino 125',2549.00,'https://cdn.jdpower.com/CRS/400x200/2006_Yamaha_Vino_125.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
