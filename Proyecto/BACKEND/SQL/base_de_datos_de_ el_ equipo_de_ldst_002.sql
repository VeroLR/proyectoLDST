create database ldst002;

use ldst002;

create table users
(
	email char(50) not null primary key,
	name char(30) not null,
	password char(25) not null,
	surnames char(100) not null,
	phone_number char(20),
	address char(155),
	city char(30), 
	birthdate date not null,
	privilege tinyint unsigned
);

create table orders
(
	id_order int unsigned not null auto_increment primary key,
	email char(50) not null,
	total_price float(6,2) not null,
	order_date datetime not null
);

create table products
(
	id_product int unsigned not null auto_increment primary key,
	category char(15) not null,
	product_name char(70) not null,
    description text(500) not null,
	product_price float(6,2) not null,
	discount float(6,2),
	image_src char(200) not null
);

create table order_products
(
	id_pedido int unsigned not null,
	id_product int unsigned not null,
	quantity tinyint unsigned,
	
	primary key (id_pedido, id_product)
);