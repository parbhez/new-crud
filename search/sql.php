create database shop;
	use shop;

users
products
categories
product_category

create table users(
	id serial,
	name varchar(30) not null,
	email varchar(30) not null,
	password varchar(30) not null
);

create table products(
	id serial,
	title varchar(255) not null,
	description text,
	image varchar(255),
	price int(11),
	user_id bigint(11) unsigned,
	foreign key(user_id) references users(id)
);


create table categories(
	id serial,
	name varchar(80)

);

create table product_category(
	product_id bigint(11) unsigned,
	category_id bigint(11) unsigned,
	primary key(product_id,category_id),
	foreign key(product_id) references products(id) on delete cascade,
	foreign key(category_id) references categories(id) on delete cascade
);
insert into users() values();
insert into users set name ="masud", email="masud@gmail.com", password="1234";

insert into products() values();
insert into products set title='core i5',description='core i5 is the five gen',price=209,user_id=1;	
insert into products(title,description,price,user_id) values
	('core i7','core i7 is the seven gen',564,1),	
	('core i2','core i2 is the two gen',456,2),	
	('core i3','core i3 is the three gen',345,2),	
	('core i4','core i4 is the four gen',5614,1),	
	('core i5','core i5 is the five gen',567,2);	
	
insert into categories(name) values
	('processor'),
	('computer parts'),
	('Hardisk');

insert into product_category(product_id,category_id) values
	(1,1),
	(2,1),
	(3,2),
	(4,3),
	(5,2);
	

select id,title,price,user_id from products;	

select products.id,products.title,products.price,products.user_id,users.id,
users.name,users.email,users.password from products join users
 on users.id=products.user_id where users.id=2;

 select products.id,products.title,products.price,products.user_id,categories.id,categories.name 
 from products join categories;

 select products.id,products.title,products.price,products.user_id,categories.id,categories.name 
 from products join categories where categories.id=1;

		/* 3 table join */
		SELECT * FROM users a
		JOIN products b ON a.ID = b.ID
		JOIN categories c ON a.ID = c.ID
		JOIN product_category d ON a.ID = c.ID;

		/* 2 table join */
 select products.title as ptitle, users.name as uname
 from users join products on products.user_id = users.id 
 where( users.id = 1 or users.id=2);


		/* Limit Query */
  select * from tablename limit 10 offset 20;
  or shortcut query
  select * from tablename limit 20 10;

  			/* Like query  */
  	select * from tableName where columnName Like '%...%';

 		/*Export database mane loaya(take)*/
 		1.mysqldump -uroot -p databaseName > fileName.sql
 		2.without semicolon fileName.sql

 		/* Import database  mane deya(give)*/
 		1.creating database name;
 		2.path(desktop/drive) i mean folder select
 		3.mysql -uroot -p databaseName < fileName.sql
 		4.without semicolon fileName.sql



1.stduent information
2.

create table class_group(
	class_id bigint(11) unsigned,
	group_id bigint(11) unsigned,
	priamry key(class_id,group_id),
	foreign key(class_id) references classes(id) on delete cascade,
	foreign key(group_id) references groups(id) on delete cascade
);