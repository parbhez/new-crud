create database shop
	use shop;

	create table users(
		id serial,
		name varchar(50) not null,
		email varchar(50) not null,
		password varchar(150)
		);

	create table products(
		id serial,
		title varchar(255) not null,
		description text,
		image varchar(255),
		price int(11),
		user_id bigint(20) unsigned,
		foreign key (user_id) references users(id)
		);

	create table categories(
		id serial,
		name varchar(255)
		);

	create table product_category(
		product_id bigint(20) unsigned,
		category_id bigint(20) unsigned,
		primary key(product_id,category_id),
		foreign key(product_id) references products(id) on delete cascade,
		foreign key(category_id) references categories(id) on delete cascade

		);