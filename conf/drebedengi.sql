-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: drebedengi
-- ------------------------------------------------------
-- Server version	5.5.54-0+deb8u1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL,
  `budget_family_id` int(11) NOT NULL,
  `type` int(4) NOT NULL,
  `name` char(30) NOT NULL,
  `is_hidden` char(1) NOT NULL,
  `sort` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9499469 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (9499446,-1,100,3,'Без категории','f',9499446),(9499447,-1,100,3,'Еда','f',9499447),(9499448,9499447,100,3,'Продукты','f',9499448),(9499449,9499447,100,3,'Обеды, перекусы','f',9499449),(9499450,-1,100,3,'Траты на жизнь','f',9499450),(9499451,9499450,100,3,'Проезд','f',9499451),(9499452,9499450,100,3,'Интернет, связь','f',9499452),(9499453,9499450,100,3,'Одежда','f',9499453),(9499454,9499450,100,3,'Подарки','f',9499454),(9499455,9499450,100,3,'Отдых','f',9499455),(9499456,-1,100,3,'Дом, семья','f',9499456),(9499457,9499456,100,3,'Хозтовары','f',9499457),(9499458,9499456,100,3,'Квартплата','f',9499458),(9499459,9499456,100,3,'Дети','f',9499459),(9499460,9499456,100,3,'Гаджеты','f',9499460),(9499461,-1,100,3,'Здоровье, красота','f',9499461),(9499462,9499461,100,3,'Аптека, препараты','f',9499462),(9499463,9499461,100,3,'Лечение','f',9499463),(9499464,9499461,100,3,'Спорт','f',9499464),(9499465,-1,100,3,'Автомобиль','f',9499465),(9499466,9499465,100,3,'Бензин','f',9499466),(9499467,9499465,100,3,'Обслуживание авто','f',9499467),(9499468,9499447,100,3,'Пиво, алкоголь','f',9499468);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `changes`
--

DROP TABLE IF EXISTS `changes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `changes` (
  `revision` int(11) NOT NULL AUTO_INCREMENT,
  `user_nuid` bigint(10) NOT NULL,
  `family_id` int(10) NOT NULL,
  `action_id` int(10) NOT NULL,
  `object_type_id` int(4) NOT NULL,
  `object_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`revision`)
) ENGINE=InnoDB AUTO_INCREMENT=197088314 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `checks`
--

DROP TABLE IF EXISTS `checks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ext` char(40) NOT NULL,
  `state` int(11) NOT NULL,
  `qr_sum` int(4) NOT NULL,
  `qr_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checks`
--

LOCK TABLES `checks` WRITE;
/*!40000 ALTER TABLE `checks` DISABLE KEYS */;
/*!40000 ALTER TABLE `checks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `checktorecord`
--

DROP TABLE IF EXISTS `checktorecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checktorecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `check_id` int(11) NOT NULL,
  `record_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checktorecord`
--

LOCK TABLES `checktorecord` WRITE;
/*!40000 ALTER TABLE `checktorecord` DISABLE KEYS */;
/*!40000 ALTER TABLE `checktorecord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL,
  `course` char(10) NOT NULL,
  `code` char(3) NOT NULL,
  `family_id` int(11) NOT NULL,
  `is_default` char(1) NOT NULL,
  `is_autoupdate` char(1) NOT NULL,
  `is_hidden` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1131989 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currencies`
--

LOCK TABLES `currencies` WRITE;
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` VALUES (1131986,'Руб','1','RUB',100,'t','t','f'),(1131987,'USD','53.9377','USD',100,'f','t','f'),(1131988,'EUR','60.7759','EUR',100,'f','t','f');
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` bigint(10) NOT NULL,
  `is_family` varchar(1) DEFAULT NULL,
  `is_mobile` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=697795 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (697794,'Список Ашан',1000000272100,'t','t');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `budget_family_id` int(11) NOT NULL,
  `type` int(4) NOT NULL,
  `name` char(30) NOT NULL,
  `is_hidden` varchar(1) NOT NULL DEFAULT 'f',
  `is_for_duty` char(1) NOT NULL,
  `sort` int(10) NOT NULL DEFAULT '1',
  `purse_of_nuid` varchar(13) DEFAULT NULL,
  `icon_id` char(10) DEFAULT NULL,
  `is_autohide` varchar(1) NOT NULL DEFAULT 'f',
  `parent_id` int(5) DEFAULT '-1',
  `description` varchar(255) DEFAULT '',
  `is_credit_card` varchar(1) NOT NULL DEFAULT 'f',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9532020 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places`
--

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` VALUES (9499443,100,4,'Мой кошелек','f','f',9499443,'1000000272100','3','f',-1,'','f'),(9499444,100,4,'Сейф в доме','f','f',9499446,NULL,'2','t',-1,'','f'),(9499445,100,4,'Счет в Почтабанк','f','f',9499445,NULL,'20','f',-1,'','f'),(9531997,100,4,'Взял в долг','t','t',9531997,NULL,'8','t',-1,'','f'),(9532000,100,4,'Дал в долг','t','t',9532000,NULL,NULL,'t',-1,'','f'),(9532001,100,4,'Счет в банке Лады','f','f',9499444,NULL,'20','f',-1,'','f'),(9532002,100,4,'Мой кошелек','f','f',9499442,'1000000272101','3','f',-1,'','f'),(9532003,100,4,'Счет в Тинькофф','f','f',9499446,NULL,'20','f',-1,'','f'),(9532004,100,4,'Вклад в СДМ','f','f',9499447,NULL,'20','t',-1,'','f'),(9532005,100,4,'Вклад в Тинькофф','f','f',9532004,NULL,'20','t',-1,'','f'),(9532006,100,4,'Вася','f','f',9499448,NULL,'20','f',9532003,'','f'),(9532015,100,4,'Дима','f','t',1,NULL,NULL,'f',-1,'','f'),(9532016,100,4,'Петя','f','t',1,NULL,NULL,'f',-1,'','f'),(9532017,100,4,'Счет в Сбербанк','f','f',9532017,NULL,'20','f',-1,'','f'),(9532018,100,4,'Счет в ВТБ','f','f',9499446,NULL,'20','f',-1,'','f'),(9532019,100,4,'Счет в Альфа','f','f',9532019,NULL,'20','f',-1,'','f');
/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `budget_object_id` int(11) NOT NULL,
  `user_nuid` bigint(10) NOT NULL,
  `budget_family_id` bigint(10) DEFAULT NULL,
  `is_duty` char(1) NOT NULL,
  `operation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` char(50) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `group_id` char(5) DEFAULT NULL,
  `operation_type` int(10) unsigned NOT NULL,
  `place_id` int(11) NOT NULL,
  `server_move_id` varchar(10) DEFAULT NULL,
  `server_change_id` varchar(10) DEFAULT NULL,
  `sum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53301731 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sources`
--

DROP TABLE IF EXISTS `sources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL,
  `budget_family_id` int(11) NOT NULL,
  `type` int(4) NOT NULL,
  `name` char(30) NOT NULL,
  `is_hidden` char(1) NOT NULL,
  `sort` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9519921 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sources`
--

LOCK TABLES `sources` WRITE;
/*!40000 ALTER TABLE `sources` DISABLE KEYS */;
INSERT INTO `sources` VALUES (9499440,-1,100,2,'Банковские проценты','f',9499440),(9499441,-1,100,2,'Работа в фирме Рога','f',9499441),(9499442,-1,100,2,'Прочие источники','f',9518918),(9518918,-1,100,2,'Работа в фирме Копыта','f',9499442),(9519919,-1,100,2,'Работа в фирме ООО','f',9519919),(9519920,-1,100,2,'Фриланс','f',9518920);
/*!40000 ALTER TABLE `sources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `user_id` bigint(10) NOT NULL,
  `family_id` int(11) NOT NULL,
  `is_hidden` char(1) NOT NULL,
  `is_family` char(1) NOT NULL,
  `sort` int(10) NOT NULL,
  `parent_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1244539 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1244534,'Друзья',1000000272100,100,'f','t',1244534,-1),(1244535,'Жена',1000000272100,100,'f','t',1244535,-1),(1244536,'Отпуск',1000000272100,100,'f','t',1244536,-1),(1244537,'Свадьба',1000000272100,100,'f','t',1244537,-1),(1244538,'Ремонт',1000000272100,100,'f','t',1244538,-1);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(10) NOT NULL,
  `rightaccess` int(1) DEFAULT '0',
  `family_id` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `pass` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1000000272100,1,100,'demo','demo'),(1000000272101,1,100,'test','test');
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

-- Dump completed on 2022-06-22  0:28:57
