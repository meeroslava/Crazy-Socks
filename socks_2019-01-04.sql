# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: socks
# Generation Time: 2019-01-04 15:14:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cart
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `cart_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_email` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;

INSERT INTO `cart` (`cart_id`, `user_email`, `product_id`, `quantity`)
VALUES
	(16,'yos@yos.com',2,10),
	(14,'dani@asdf.com',1,2),
	(15,'dani@asdf.com',8,1);

/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `category` text NOT NULL,
  `rate` float DEFAULT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;

INSERT INTO `product` (`product_id`, `title`, `description`, `price`, `category`, `rate`, `image`)
VALUES
	(1,'Apple Sock','Pluck yourself some fresh Apple socks today! With mouth watering fruit, eaten and intact, this collection of all-natural eye candy will add a sweet touch to any style and occasion all year long.',8,'high',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/1.png'),
	(2,'Banana Sock','Freshen up your summer outfit with a pair of our Banana socks',7,'high',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/2.png'),
	(3,'Dot1 Sock','Add a sprinkle of color to your daily look with Big Dot Low socks',6,'high',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/3.png'),
	(4,'Dot2 Sock','Add a sprinkle of color to your daily look with Big Dot Low socks',9,'high',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/4.png'),
	(5,'Dot3 Sock','Add a sprinkle of color to your daily look with Big Dot Low socks',10,'high',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/5.png'),
	(6,'Cat Sock','Who run the world? Cats of course! This pair of Cat socks makes sure the question of Cats vs. Dogs never come up again.',13,'high',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/6.png'),
	(7,'Autumn leaf Sock','Make sure you let the creatures of the pavement see your wild side with this colorful pair of Leaves socks.',118,'high',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/7.png'),
	(8,'Diamond Sock ','Glow with color all day long with vibrant Faded Diamond socks.',9,'high',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/8.png'),
	(9,'Multi Stripe1 Sock','Line yourself up for a colorful day with Multi Stripe socks ',6,'low',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/9.png'),
	(10,'Pineapple Sock','Freshen up your outfit with these Pineapple socks.',5,'low',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/10.png'),
	(11,'Cherry Sock','Add a sweet touch to your outfit with a pair of Cherry socks. ',7,'low',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/11.png'),
	(12,'Hamburger Sock','Treat your feet to some delicious Hamburger low socks.',9,'low',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/12.png'),
	(13,'Multi Stripe2 Sock','Line yourself up for a colorful day with Multi Stripe socks ',8,'low',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/13.png'),
	(14,'Watermelon Sock','Add a juicy detail to your outfit this summer with our Watermelon Low socks',10,'low',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/14.png'),
	(15,'Pear Sock','Add a juicy detail to your outfit this summer with our Pear  Low socks',11,'low',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/15.png'),
	(16,'Big Dot Sock','Add a sprinkle of color to your daily outfit with our Big Dot Low socks.',12,'low',0,'https://s3.amazonaws.com/yossi-eynav-uploads/socks/16.png');

/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rating
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rating`;

CREATE TABLE `rating` (
  `user_email` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;

INSERT INTO `rating` (`user_email`, `product_id`, `rating`)
VALUES
	('Nulla@eudolor.edu',1,3),
	('Nulla@eudolor.edu',1,3),
	('nec.mollis.vitae@maurisSuspendisse.net',8,5),
	('tempus.lorem.fringilla@egetodioAliquam.org',1,3),
	('Quisque.nonummy.ipsum@at.edu',8,5),
	('non.leo@eleifendnecmalesuada.edu',8,5),
	('Sed.dictum@nonleoVivamus.ca',2,3),
	('erat@ultriciessemmagna.net',1,3),
	('dolor.dapibus@Mauris.net',8,5),
	('meer.dr@gmail.com',1,5),
	('molestie.dapibus.ligula@mauris.ca',2,5),
	('enim.non.nisi@a.com',9,5),
	('nonummy@ullamcorper.org',7,3),
	('sem.semper.erat@maurissagittisplacerat.com',7,3),
	('velit@vehiculaet.org',1,5),
	('non.bibendum@pellentesque.edu',10,5),
	('augue@interdumSed.ca',12,5),
	('auctor@inconsequat.edu',15,5),
	('nisl.Nulla.eu@dignissim.co.uk',16,3),
	('nec@quisturpis.org',1,3),
	('sapien@pretiumnequeMorbi.net',7,3),
	('ofir.mokotov@gmail.com',14,5),
	('yossi.eynav@gmail.com',14,5),
	('pellentesque@augueac.net',2,5),
	('facilisis.lorem.tristique@est.co.uk',3,5),
	('lorem@id.co.uk',4,4),
	('Duis.elementum@tincidunt.edu',1,4),
	('libero.mauris.aliquam@enimSed.edu',9,4),
	('magna.a.tortor@nuncullamcorper.com',5,4),
	('odio.auctor@justo.net',5,4),
	('elit.pellentesque@ullamcorperDuiscursus.net',5,4),
	('ut.quam.vel@Aliquam.edu',1,4);

/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_email` text NOT NULL,
  `password` text NOT NULL,
  `name` text,
  PRIMARY KEY (`user_email`(60))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_email`, `password`, `name`)
VALUES
	('ofir.mokotov@gmail.com','12345','Ofir'),
	('meer.dr@gmail.com','12346','Slava'),
	('yossi.eynav@gmail.com','23256','Yossi'),
	('pellentesque@augueac.net','23257','Myra'),
	('Nulla@eudolor.edu','23258','Wilhelmine'),
	('Quisque.nonummy.ipsum@at.edu','23259','Suki'),
	('facilisis.lorem.tristique@est.co.uk','23260','Siegfried'),
	('lorem@id.co.uk','23261','Orel'),
	('erat@ultriciessemmagna.net','23262','Marylin'),
	('Sed.dictum@nonleoVivamus.ca','23263','Patrizia'),
	('magna.a.tortor@nuncullamcorper.com','23264','Nobe'),
	('enim.non.nisi@a.com','23265','Tiphani'),
	('nec.mollis.vitae@maurisSuspendisse.net','23266','Reeta'),
	('sem.semper.erat@maurissagittisplacerat.com','23267','Demott'),
	('velit@vehiculaet.org','23268','Lucian'),
	('non.bibendum@pellentesque.edu','23269','Isa'),
	('augue@interdumSed.ca','23270','Nina'),
	('auctor@inconsequat.edu','23271','Caitrin'),
	('nisl.Nulla.eu@dignissim.co.uk','23272','Mattias'),
	('nec@quisturpis.org','12347','Shelden'),
	('sapien@pretiumnequeMorbi.net','12348','Leola'),
	('tempus.lorem.fringilla@egetodioAliquam.org','12349','Terrence'),
	('molestie.dapibus.ligula@mauris.ca','12350','Bettye'),
	('Duis.elementum@tincidunt.edu','12351','Carita'),
	('libero.mauris.aliquam@enimSed.edu','12352','Tremaine'),
	('non.leo@eleifendnecmalesuada.edu','12353','Sidney'),
	('dolor.dapibus@Mauris.net','12354','Adolf'),
	('nonummy@ullamcorper.org','12355','Ruprecht'),
	('odio.auctor@justo.net','12356','Cobbie'),
	('elit.pellentesque@ullamcorperDuiscursus.net','12357','Joly'),
	('ut.quam.vel@Aliquam.edu','12358','Chicky'),
	('Etiam@felisDonectempor.com','12359','Olag'),
	('molestie.pharetra.nibh@nec.ca','10105','Ignazio'),
	('tincidunt.nibh@Aeneanegetmetus.com','10106','Roth'),
	('Cras.pellentesque@Crasvehiculaaliquet.co.uk','10107','Lorettalorna'),
	('lobortis@penatibuset.edu','10108','Bonnibelle'),
	('Donec.tempor@Aliquamadipiscing.com','10109','Marijo'),
	('lectus@faucibus.ca','10110','Manfred'),
	('Phasellus.fermentum@gravida.ca','10111','Crin'),
	('rutrum.eu.ultrices@aliquetlibero.net','10112','Hersh'),
	('tellus.Nunc@necdiam.com','10113','Carly'),
	('sit.amet@pedeCumsociis.net','10114','Renault'),
	('mauris.blandit@tincidunt.co.uk','10115','Nomi'),
	('turpis.non.enim@Namnulla.com','10116','Lorenzo'),
	('felis.orci@eu.org','10117','Inness'),
	('sem.ut.cursus@consequat.co.uk','10118','Reinald'),
	('In.faucibus@dolorQuisque.net','10119','Kirbee'),
	('natoque@mifelis.net','10120','Paige'),
	('ut.sem@Class.ca','10121','Chrysler'),
	('auctor@nonsollicitudin.edu','10122','Carlita'),
	('Duis@nisinibhlacinia.edu','10123','Vanda'),
	('vel.vulputate@dui.org','10124','Gwendolen'),
	('nananana@asdfasdfsdaf.com','1','asdfsadf'),
	('sadf@asdfasdf','asdasdfsafsadf@asdfsadf','sadfafs'),
	('sadf@asdfasasfddf','asdasdfsafsadf@asdfsadf','sadfafs'),
	('sadf@asdfasasfdsafddf','asdasdfsafsadf@asdfsadf','sadfafs'),
	('sadf@asdfasasfdasdfassafddf','asdasdfsafsadf@asdfsadf','sadfafs'),
	('sadf@asdfasasfdasdfassadfsafddf','asdasdfsafsadf@asdfsadf','sadfafs'),
	('yoss@asdfgsadf.com','1','sadf'),
	('dani@asdf.com','1','Dani'),
	('','',''),
	('yos@yos.com','1','yossi');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wish_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wish_list`;

CREATE TABLE `wish_list` (
  `wishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` text NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`wishlist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `wish_list` WRITE;
/*!40000 ALTER TABLE `wish_list` DISABLE KEYS */;

INSERT INTO `wish_list` (`wishlist_id`, `user_email`, `product_id`)
VALUES
	(5,'yos@yos.com',2),
	(4,'dani@asdf.com',2);

/*!40000 ALTER TABLE `wish_list` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
