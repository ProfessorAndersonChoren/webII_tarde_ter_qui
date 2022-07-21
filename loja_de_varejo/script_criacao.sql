create database if not exists retail_store_tuesday;
use retail_store_tuesday;
create table if not exists product(
	product_code smallint primary key auto_increment,
	product_name varchar(30) not null,
	product_price decimal(10,2) not null,
	product_quantity smallint not null,
	product_active tinyint not null
);