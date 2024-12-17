repair table mysql.db;
drop database if exists `reviewspotdb`;

CREATE DATABASE `reviewspotdb`;

drop user if exists `reviewspotAdmin`@`localhost`;

GRANT USAGE ON *.* TO `reviewspotAdmin`@`localhost` IDENTIFIED BY PASSWORD '*81F5E21E35407D884A6CD4A731AEBFB6AF209E1B';

GRANT ALL PRIVILEGES ON `reviewspotdb`.* TO `reviewspotAdmin`@`localhost` WITH GRANT OPTION;

use reviewspotdb;