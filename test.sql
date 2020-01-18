-- MySQL dump 10.14  Distrib 5.5.64-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: love_sustxyly_t
-- ------------------------------------------------------
-- Server version	5.5.64-MariaDB

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
-- Table structure for table `love_barrager`
--

DROP TABLE IF EXISTS `love_barrager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_barrager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `info` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_barrager`
--

LOCK TABLES `love_barrager` WRITE;
/*!40000 ALTER TABLE `love_barrager` DISABLE KEYS */;
/*!40000 ALTER TABLE `love_barrager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `love_comment`
--

DROP TABLE IF EXISTS `love_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级评论id,若是一级评论则为0',
  `nickname` varchar(100) DEFAULT NULL COMMENT '评论人昵称',
  `head_pic` varchar(400) DEFAULT NULL COMMENT '评论人头像',
  `content` text COMMENT '评论内容',
  `create_time` datetime DEFAULT NULL COMMENT '评论或回复发表时间',
  `post_id` int(11) DEFAULT NULL,
  `like` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=257 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_comment`
--

LOCK TABLES `love_comment` WRITE;
/*!40000 ALTER TABLE `love_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `love_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `love_contents`
--

DROP TABLE IF EXISTS `love_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_contents` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `zid` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `sex` varchar(1) NOT NULL,
  `qq` text NOT NULL,
  `ip` text NOT NULL,
  `mous` varchar(2) NOT NULL DEFAULT '0',
  `name` varchar(11) NOT NULL,
  `date` int(255) NOT NULL,
  `like` int(255) DEFAULT '0',
  `comm` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=260 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_contents`
--

LOCK TABLES `love_contents` WRITE;
/*!40000 ALTER TABLE `love_contents` DISABLE KEYS */;
INSERT INTO `love_contents` VALUES (1,'46f312f8-599f-11e9-90ff-1a23648d9544','你好啊 这是一个bug','1','666666666','219.144.196.98','1','222',1571726203,0,0);
/*!40000 ALTER TABLE `love_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `love_notice`
--

DROP TABLE IF EXISTS `love_notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(255) DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_notice`
--

LOCK TABLES `love_notice` WRITE;
/*!40000 ALTER TABLE `love_notice` DISABLE KEYS */;
INSERT INTO `love_notice` VALUES (1,'0.86586100 15622094685d1d6cbcd3647','<p style=\"text-align: center;\"><b><i>欢迎使用LoveWall程序，看到本公告说明又一个新站产生了<img src=\"http://idc.521wall.cn/static/layui/images/face/30.gif\" alt=\"[思考]\"></i></b></p>',1562209468);
/*!40000 ALTER TABLE `love_notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `love_open_school`
--

DROP TABLE IF EXISTS `love_open_school`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_open_school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text NOT NULL,
  `web_name` varchar(20) DEFAULT NULL,
  `email` varchar(29) DEFAULT NULL,
  `reason` text,
  `logo_img` text,
  `addtime` datetime DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_open_school`
--

LOCK TABLES `love_open_school` WRITE;
/*!40000 ALTER TABLE `love_open_school` DISABLE KEYS */;
/*!40000 ALTER TABLE `love_open_school` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `love_options`
--

DROP TABLE IF EXISTS `love_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_options` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_options`
--

LOCK TABLES `love_options` WRITE;
/*!40000 ALTER TABLE `love_options` DISABLE KEYS */;
INSERT INTO `love_options` VALUES (1,'title','LoveWall'),(2,'keywords','LoveWall'),(3,'description','我说的话，不知远方的人听见了吗？'),(4,'icp','陕ICP备19019671号'),(6,'limit_time','3'),(7,'limit_mous','1'),(8,'qq','1114183435'),(10,'name','LoveWall'),(11,'page_about',''),(12,'limit_ip','5'),(13,'admin_account','2'),(14,'cnzz','');
/*!40000 ALTER TABLE `love_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `love_user`
--

DROP TABLE IF EXISTS `love_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `openid` text,
  `qq` int(10) NOT NULL,
  `isadmin` int(11) DEFAULT '0',
  `login_time` datetime DEFAULT NULL,
  `login_ip` text,
  `pass_err` int(255) unsigned zerofill DEFAULT '000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000',
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_user`
--

LOCK TABLES `love_user` WRITE;
/*!40000 ALTER TABLE `love_user` DISABLE KEYS */;
INSERT INTO `love_user` VALUES (1,'admin','ddfc883b9f6728e8a111bd4a7a4d7565','',860388034,1,'2019-02-03 22:34:51','127.0.0.1',000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000,'hjf0101@163.com'),(2,'life','ddfc883b9f6728e8a111bd4a7a4d7565',NULL,1114183435,1,NULL,NULL,000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000,'hjf0101@163.com'),(3,'skd','ddfc883b9f6728e8a111bd4a7a4d7565','',860388034,1,'2019-02-03 22:34:51','127.0.0.1',000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000,'hjf0101@163.com');
/*!40000 ALTER TABLE `love_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `love_user_log`
--

DROP TABLE IF EXISTS `love_user_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `client_ip` varchar(255) NOT NULL,
  `exec_time` datetime NOT NULL,
  `exec_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_user_log`
--

LOCK TABLES `love_user_log` WRITE;
/*!40000 ALTER TABLE `love_user_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `love_user_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `love_website`
--

DROP TABLE IF EXISTS `love_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `love_website` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `zid` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '冻结=0，正常=1；',
  `count` int(11) NOT NULL DEFAULT '0',
  `web_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `web_qq` varchar(255) DEFAULT NULL,
  `web_description` text CHARACTER SET utf8,
  `web_logo` text,
  `hot` int(11) unsigned zerofill DEFAULT '00000000000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `love_website`
--

LOCK TABLES `love_website` WRITE;
/*!40000 ALTER TABLE `love_website` DISABLE KEYS */;
INSERT INTO `love_website` VALUES (2,'46f312f8-599f-11e9-90ff-1a23648d9544',1,1,'陕西科技大学','life','当我无计可施，驻足不前时；当我被黑暗覆盖，被绝望淹没时 谁是我的照明灯？','https://i.loli.net/2019/10/22/9Gy6K1Ol3eYcdXA.png',00000000059),(8,'86e4b98c-3b49-3f64-399e-36c7f0bbcd66',1,0,'西安工业大学','life','loveWall','https://i.loli.net/2019/10/22/IKH3TjURY46rSXx.png',00000000002);
/*!40000 ALTER TABLE `love_website` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-25 11:38:27
