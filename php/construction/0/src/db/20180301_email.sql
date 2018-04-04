---------------------------------------------------------------------------------------------------
 -- Title: email
 -- Author: David Whynot

 -- Created: 2018_03_01
 -- Updated: 2018_03_01

 -- VERSION --
 -- v1.0.0 --
---------------------------------------------------------------------------------------------------


-- email TABLE STRUCUTRE

create table if not exists email (
	email_id int(8) not null primary key auto_increment,
	email_email varchar(250) not null,
	email_ip varchar(20) not null,
	email_other varchar(100) not null
);


-- email TEST DATA

insert into email (
	email_id,
	email_email,
	email_ip,
	email_other
) values (
	1,
	'example@gmail.com',
	'ip data',
	'other data'
);
