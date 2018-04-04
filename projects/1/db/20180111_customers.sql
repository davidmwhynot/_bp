---------------------------------------------------------------------------------------------------
 -- Title: customers
 -- Author: David Whynot

 -- Created: 2018_01_11
 -- Updated: 2018_01_11

 -- VERSION --
 -- v1.0.0 --
---------------------------------------------------------------------------------------------------


-- customers TABLE STRUCTURE

create table if not exists customer (
	customer_id int(8) not null primary key auto_increment,
	customer_name varchar(50) not null,
	customer_account_id_f int(8)
);
