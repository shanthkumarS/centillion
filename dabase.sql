CREATE DATABASE `honeycomb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
CREATE TABLE `honeycomb`.`cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(140) NOT NULL,
  `user_id` varchar(150) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `honeycomb`.`item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(140) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `honeycomb`.`user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `honeycomb`.`item` (`item_id`, `name`, `description`) VALUES ('1', 'trimmer', 'philips black chargebale');
INSERT INTO `honeycomb`.`item` (`item_id`, `name`, `description`) VALUES ('2', 'earphones', 'Boat-Black-earphones');
INSERT INTO `honeycomb`.`item` (`item_id`, `name`, `description`) VALUES ('3', 'mouse', 'Dell wireless mouse black');
INSERT INTO `honeycomb`.`item` (`item_id`, `name`, `description`) VALUES ('4', 'Smart Phone', 'Samsung black 4G');
INSERT INTO `honeycomb`.`item` (`item_id`, `name`, `description`) VALUES ('5', 'Camera', 'DSLR black Canon');

