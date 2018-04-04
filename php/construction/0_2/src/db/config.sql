---------------------------------------------------------------------------------------------------
 -- Title: config
 -- Author: David Whynot

 -- Created: 2018_03_04
 -- Updated: 2018_03_04

 -- VERSION --
 -- v1.0.0 --
---------------------------------------------------------------------------------------------------
-- Must be run as root.
-- Sanitizes a mysql installation. Should be coupled with additional security measures as described
-- in the following digitalocean article:
-- https://www.digitalocean.com/community/tutorials/how-to-secure-mysql-and-mariadb-databases-in-a-linux-vps
-- Important variables to set for your db use case (do a find and replace for each TODO: improve workflow for this part (gulp or something)):
-- super
-- yknot_1
-- ZAQ!1qazCDE#3edcVFR$4rfvBGT%5tgb
-- yknot_1_super
-- TODO
---------------------------------------------------------------------------------------------------


-- config db

show databases;

create database yknot_1;
use yknot_1;

-- create tables
source 20180301_email.sql;

show tables;
show databases;


-- config users

select user, host, password from mysql.user;

delete from mysql.user where User="";
delete from mysql.user where User="demo-user";

rename user 'root'@'localhost' to 'super'@'localhost';

create user 'yknot_1_super'@'localhost' identified by 'ZAQ!1qazCDE#3edcVFR$4rfv';

grant SELECT,UPDATE,DELETE on yknot_1.* to 'yknot_1_super'@'localhost';

flush privileges;

select user, host, password from mysql.user;
