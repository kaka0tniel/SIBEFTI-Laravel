/*
SQLyog Community v11.24 (32 bit)
MySQL - 5.6.24 : Database - db_ftie
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ftie` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_ftie`;

/*Table structure for table `angkatan` */

DROP TABLE IF EXISTS `angkatan`;

CREATE TABLE `angkatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `angkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `angkatan` */

insert  into `angkatan`(`id`,`angkatan`) values (1,'2013'),(2,'2014'),(3,'2015'),(4,'2016');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`parent_id`,`order`,`name`,`color`,`slug`,`created_at`,`updated_at`) values (1,NULL,1,'Lost and Found','#3498DB','Lost and Found',NULL,NULL),(2,NULL,2,'Pelajaran','#2ECC71','Pelajaran',NULL,NULL),(3,NULL,3,'Info Sayembara','#9B59B6','Info Sayembara',NULL,NULL),(4,NULL,4,'Info Lowongan Magang/Pekerjaan','#E67E22','Info Lowongan Magang/Pekerjaan',NULL,NULL);

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `on_post` int(10) unsigned NOT NULL DEFAULT '0',
  `from_user` int(10) unsigned NOT NULL DEFAULT '0',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_on_post_foreign` (`on_post`),
  KEY `comments_from_user_foreign` (`from_user`),
  CONSTRAINT `comments_from_user_foreign` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_on_post_foreign` FOREIGN KEY (`on_post`) REFERENCES `topics` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `comments` */

insert  into `comments`(`id`,`on_post`,`from_user`,`body`,`created_at`,`updated_at`) values (1,6,6,'Cari aja di paret-paret sana :v','2017-05-15 09:18:24','2017-05-15 09:18:24'),(2,6,6,'<p>test</p>','2017-05-17 01:01:21','2017-05-17 01:01:21'),(3,6,6,'<p>test ;agi ah</p>','2017-05-17 01:04:31','2017-05-17 01:04:31'),(4,6,6,'<p>ikutan juga ah</p>','2017-05-17 01:06:57','2017-05-17 01:06:57'),(5,6,10,'<p>eror mulu gan :v</p>','2017-05-17 01:08:27','2017-05-17 01:08:27'),(6,6,6,'<p>sama gan :v</p>','2017-05-17 01:09:38','2017-05-17 01:09:38'),(7,6,6,'<p>sama gan :v</p>','2017-05-17 01:11:12','2017-05-17 01:11:12'),(8,6,10,'<p>hai ini triana</p>\r\n<p>&nbsp;</p>','2017-05-17 01:11:54','2017-05-17 01:11:54'),(9,6,6,'<p>test</p>\r\n<p>&nbsp;</p>','2017-05-17 01:13:36','2017-05-17 01:13:36'),(10,6,6,'<p>test</p>','2017-05-17 01:31:30','2017-05-17 01:31:30'),(11,6,10,'<p>hai gan ini ane :v</p>','2017-05-17 01:36:10','2017-05-17 01:36:10'),(12,6,6,'<p>ini ane if 315012</p>','2017-05-17 01:36:56','2017-05-17 01:36:56');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalLahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan_id` int(10) unsigned DEFAULT NULL,
  `prodi_id` int(10) unsigned DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`),
  KEY `mahasiswa_user_id_foreign` (`user_id`),
  KEY `mahasiswa_angkatan_id_foreign` (`angkatan_id`),
  KEY `mahasiswa_prodi_id_foreign` (`prodi_id`),
  CONSTRAINT `mahasiswa_angkatan_id_foreign` FOREIGN KEY (`angkatan_id`) REFERENCES `angkatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mahasiswa_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mahasiswa_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id`,`user_id`,`Name`,`tanggalLahir`,`tempatLahir`,`alamat`,`angkatan_id`,`prodi_id`,`avatar`) values (1,6,'Otniel Turnip','14-Agu-1997','Binjai','Jl.Melur II No.5 Pematangsiantar',3,1,'default.jpg'),(2,7,'Sukimin','14-Agu-1996','Medan','Jalan jalan',2,1,'default.jpg'),(3,8,'Tejo','14-Agu-1997','Balige','Jalan Damai',3,3,'default.jpg'),(4,10,'','','','',NULL,NULL,'default.jpg');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (0,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(5,'2017_05_05_041955_create_pengumumans_table',2),(23,'2017_04_25_084353_create_topic_table',3),(24,'2017_05_05_042013_create_sources_table',3),(25,'2017_05_05_042024_create_filetable_table',3),(27,'2017_05_15_082500_create_comment_table',4);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pengumumans` */

DROP TABLE IF EXISTS `pengumumans`;

CREATE TABLE `pengumumans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pengumumans` */

insert  into `pengumumans`(`id`,`tanggal`,`judul`,`content`,`images`,`penulis`,`created_at`,`updated_at`) values (1,'08-05-2017   04:40:07','test ','test test test                                    ','C:\\xampp\\tmp\\php3C66.tmp','admin','2017-05-08 04:40:19','2017-05-08 04:40:19'),(2,'08-05-2017   04:42:28','test ','test test test                                    ','C:\\xampp\\tmp\\php7010.tmp','admin','2017-05-08 04:42:44','2017-05-08 04:42:44'),(3,'08-05-2017   04:43:19','test ','test test test                                      ','C:\\xampp\\tmp\\phpB7F2.tmp','admin','2017-05-08 04:44:07','2017-05-08 04:44:07'),(4,'10-05-2017   02:11:44','pengumuman dari sekretaris','ini pengumuman pertama aku loh :))                                    ','C:\\xampp\\tmp\\php1CEF.tmp','sekretaris','2017-05-10 02:12:15','2017-05-10 02:12:15'),(5,'10-05-2017   02:13:42','haha','haha haha haha                                    ','C:\\xampp\\tmp\\php9E60.tmp','sekretaris','2017-05-10 02:13:54','2017-05-10 02:13:54');

/*Table structure for table `prodi` */

DROP TABLE IF EXISTS `prodi`;

CREATE TABLE `prodi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `prodi` */

insert  into `prodi`(`id`,`prodi`) values (1,'D3TI'),(2,'D3TK'),(3,'D4TI'),(4,'S1TI'),(5,'S1SI'),(6,'S1TE'),(7,'S1BP'),(8,'S1MR');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `RuleName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`RuleName`) values (1,'Admin'),(2,'Ketua'),(3,'Wakil Ketua'),(4,'Sekretaris'),(5,'Bendahara'),(6,'Divisi Acara dan Konsumsi'),(7,'Divisi Logistik'),(8,'Divisi Humas'),(9,'Divisi Ketertiban'),(10,'Divisi Akademik'),(11,'Mahasiswa');

/*Table structure for table `topics` */

DROP TABLE IF EXISTS `topics`;

CREATE TABLE `topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) unsigned NOT NULL DEFAULT '0',
  `category_id` int(10) unsigned DEFAULT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img.jpg',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topics_author_id_foreign` (`author_id`),
  KEY `topics_category_id_foreign` (`category_id`),
  CONSTRAINT `topics_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `topics_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `topics` */

insert  into `topics`(`id`,`author_id`,`category_id`,`judul`,`description`,`images`,`active`,`created_at`,`updated_at`) values (2,6,2,'first post','<p>This is my fucking first post :v</p>','img.jpg',1,'2017-05-15 09:18:24','2017-05-15 09:18:24'),(3,6,3,'second post','<p>This is my fucking second Post :v</p>','img.jpg',1,'2017-05-15 09:20:57','2017-05-15 09:20:57'),(4,6,4,'Post ke-3 Ane','<p>Hai guys :D Kali ini ane ngeluncurin post ke-3 Ane &nbsp;lo :D</p>\r\n<p>Doain ya PA2nya cepat siap :D</p>','img.jpg',1,'2017-05-15 13:03:10','2017-05-15 13:03:10'),(5,10,1,'Kehilangan Pin Del','<p>Selamat malam kepada abang, kakak, adik teman sahabat, kekasih, mantan dan calon gebetan ane,</p>\r\n<p>ane mau ngumumin gan :v ane kehilangan pin del dari saku saya :v pas ane ganti baju, di baju baru aku pake itu, pinnya ga nampak lagi gan :v kepada abang, kakak, adik, teman, sahabat, kekasih, mantan dan calon gebetan ane yang menemukan pin ane, harap di kembaliin kepada ane ty gan :v</p>','img.jpg',1,'2017-05-15 13:50:39','2017-05-15 13:50:39'),(6,10,1,'kehilangan belahan jiwa','<p>Selamat malam kepada kakak, abang, sahabat, adik, kekasih, gebetan, selingkuhan dan calon gebetan. Saya kehilangan belahan jiwa saya semalam. karena saya ketahuan selingkuh. bagi teman yang menemukannya, harap membuangnya ke tempat sampah, karena dia bekas saya</p>','img.jpg',1,'2017-05-15 14:25:06','2017-05-15 14:25:06');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `roles_id` int(10) unsigned DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_roles_id_foreign` (`roles_id`),
  CONSTRAINT `users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`roles_id`,`username`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,1,'admin','admin@admin.com','$2y$10$oBu2uEiJRil478Y.MeuiAexxklDr2inrGH8SDOUuZQIa79/Ue0J52','ziAhSBZvXKz7FFHAkMThPsYhMfrteqb1XmnxfBwXI3GXXNPzrWlFm5ADx5rP','2017-05-01 13:37:56','2017-05-08 02:08:31'),(2,2,'ketua','ketua@ketua.com','$2y$10$1r4K1KgA5QCpGCDKpP0aT.nL3/ULRVizr66.2bacYmgoTfLrDFdQ2','SvZsexqUnqdEk0jQOpbzyPElwaRaAyMZZIXvvbLAx0644ALCYv5kLvXYZJpO','2017-05-01 13:41:47','2017-05-01 13:41:47'),(3,5,'bendahara','bendahara@bendahara.com','$2y$10$jiWooTsEeceXs6HPcmB9/.Qa.6DHmQI4mfR3f6dftkvXIjH/7Pxpq','KLIbr7luk9Z80Ks9wyd7nmhIF5QullahkyoXIIBQuoB17q8LATh8a6Jm6V8j','2017-05-01 13:42:08','2017-05-01 13:42:08'),(4,4,'sekretaris','sekretaris@sekretaris.com','$2y$10$Hgx.JD/HPP/NJj44.ehMbOOAN8t5SqFiFmVohQ9FNjAGmMiz5Bj8a','Uhb2OyKVhd0OMRhVqIdw5QO60s7KDdgrageiRNPir78uyHlSeM0kxs0qkvag','2017-05-01 13:42:29','2017-05-01 13:42:29'),(5,10,'akademik','akademik@akademik.com','$2y$10$A.FXMgboQIbr8dzinqHn5OtH0QXTEpN24X0Ls0B8bSiNTxEPIiBxm','nnoBThf3VlK715y0itTgwYgW6a8L2VvyvZQSIz7VAI20UcZWIDFtfFcvcqnu','2017-05-01 13:42:46','2017-05-01 13:42:46'),(6,11,'if315012','if315012@students.del.ac.id','$2y$10$xcqLBHiR2VxyobaWvgDmE.HRppEvx8yxhR8qaMBG66IXaC9iMvSNm','p6eG1PRCByywXLtGiuC6S4YTLfNycNEiXQHXNehnPOo3GWqdbQAYz5f5B9Rs','2017-05-01 13:43:28','2017-05-01 13:43:28'),(7,11,'if314012','if314012@students.del.ac.id','$2y$10$rzHmCXm5Bh0Dp.RkMW9Uf.zMTF5Yq57.PLvR7Dn0dBHiFlrR6aJ5K',NULL,'2017-05-01 14:06:17','2017-05-01 14:06:17'),(8,11,'if415012','if415012@studenst.del.ac.id','$2y$10$bSnSQ3g.51Bdb.s47smJneWLNR0D6F58AXeQRH2jMw7uRFy7TIqSS',NULL,'2017-05-01 14:08:12','2017-05-01 14:08:12'),(9,6,'if315014','if315014@students.del.ac.id','$2y$10$Qcz7IVB/qRJk8OmWdq8.Cu2vMEgPiD5cBAhVeYz7QZn5vCameWTQ6',NULL,'2017-05-10 02:48:15','2017-05-10 02:48:15'),(10,11,'if315013','if315013@students.del.ac.id','$2y$10$qNKX7uLw4hsLwjkIO74OZe5/O7Gsztjm1sBMb5tuBiEyi./NlNDke','GeGY6GCMDUarQRjFJjjNb934djwPvtfi9zviVlkpLylE4VHNzSiCL93kbCE8','2017-05-10 02:49:28','2017-05-10 02:49:28'),(11,3,'wakil','wakil@wakil.com','$2y$10$LYy2EUUfVLbEHMh7L8vZvuWOIBFcauDRrXJ9x3lj3LA.dxgdLuc0C','IGHrZ9fGzHVH6I7EBcx4iY9dXScyrBZeg6uEkGPwQs0BDofwo61f1a09Y0Dy','2017-05-11 14:38:43','2017-05-11 14:38:43'),(12,6,'acara','acara@acara.com','$2y$10$U5HEyZPA13aBVc.THnElv.WNbOA2LhuSBnZmBA3cMhISEGajuPRGu',NULL,'2017-05-11 14:40:36','2017-05-11 14:40:36'),(13,7,'logistik','logistik@logistik.com','$2y$10$A0ajY5PJIUNmG3emIlP3jOZyYxShMQCjRfL8KLeYIKaPlcV/i/HFG',NULL,'2017-05-11 14:41:04','2017-05-11 14:41:04'),(14,8,'humas','humas@humas.com','$2y$10$RNU15pKuLQ3O8J4XYJ4XCeKJzW/6BVeVXORRZHbpCEEelMCkDXO0S',NULL,'2017-05-11 14:41:26','2017-05-11 14:41:26'),(15,9,'ketertiban','ketertiban@ketertiban.com','$2y$10$a8CDat57hkRflkv0ZBTFyuVoZP3h6HoEXlefR3LKwtxOuqKrvBVHi',NULL,'2017-05-11 14:41:53','2017-05-11 14:41:53');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
