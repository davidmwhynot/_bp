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
-- new_root_name
-- testDB
-- demo_super_pass
-- demo_super
-- TODO
---------------------------------------------------------------------------------------------------


-- config users

select user, host, password from mysql.user;

delete from mysql.user where User="";
delete from mysql.user where User="demo-user";

rename user 'root'@'localhost' to 'new_root_name'@'localhost';

create user 'demo_super'@'localhost' identified by 'demo_super_pass';

grant SELECT,UPDATE,DELETE on testDB.* to 'demo_super'@'localhost';

flush privileges;

select user, host, password from mysql.user;


-- config db

show databases;

create database if not exists testDB;
use testDB;

-- create tables
---------------------------------------------------------------------------------------------------
-- TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO--
------------------------------ INSERT YOUR TABLE CREATION CODE HERE -------------------------------
source table_source.sql;
-- TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO TODO--
---------------------------------------------------------------------------------------------------

show tables;
show databases;
