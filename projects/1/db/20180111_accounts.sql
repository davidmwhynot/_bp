---------------------------------------------------------------------------------------------------
 -- Title: accounts
 -- Author: David Whynot

 -- Created: 2018_01_11
 -- Updated: 2018_01_11

 -- VERSION --
 -- v1.0.1 --
---------------------------------------------------------------------------------------------------


-- accounts TABLE STRUCUTRE

create table if not exists account (
	account_id int(8) not null primary key auto_increment,
	account_username varchar(50) not null,
	account_password varchar(50) not null,
	account_customer_primary_id_f int(8) not null,
	account_org_id_f int(8) not null
);


-- accounts ADMIN DATA

insert into account (
	account_id,
	account_username,
	account_password,
	account_customer_primary_id_f,
	account_org_id_f
) values (
	1,
	'admin',
	'delaney',
	0,
	1
);
