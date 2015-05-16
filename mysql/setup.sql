-- This entire database can be constructed by running “source setup.sql” from mysql.
CREATE DATABASE `web_adv_final` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;

USE `web_adv_final`;

GRANT ALL PRIVILEGES ON web_adv_final.* TO 'the_user'@'localhost' IDENTIFIED BY 'the_password';

source file.sql;
source user.sql;
