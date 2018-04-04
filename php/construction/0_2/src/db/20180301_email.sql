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
	email_remote_addr varchar(50) not null,
	email_http_x_forwarded_for varchar(50) not null
);


-- email TEST DATA

insert into email (
	email_id,
	email_email,
	email_remote_addr,
	email_http_x_forwarded_for
) values (
	1,
	'example@gmail.com',
	'255.255.255.255',
	'0.0.0.0'
);
