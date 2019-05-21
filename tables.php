<?php
   						$host="localhost";
                        $user="root";
                        $pass="";
                      	$database="kinum"; 

$con=mysqli_connect("$host","$user","$pass");


$sql="create database if not exists $database";
mysqli_query($con,$sql);

$con = mysqli_connect("$host","$user","$pass","$database");



$sql="create table products(
	id_all int(20)
	)";

mysqli_query($con,$sql);

/*
$sql= select * into products from
	( 
		select id1 from table1 
		union	
		select id2 from table2
		union
		select id3 from table3
	) 
mysqli_query($conn,$sql);
*/
	

$sql="create table customer (
	id int(20) unsigned primary key,
	customer_first_name varchar(20) not null,
	customer_last_name varchar(20) not null,
	address varchar(20) not null,
	phone int(20) not null,
	email varchar(20),
	login_password varchar(500)
	)";
mysqli_query($con,$sql);

$sql="create table manager(
	manager_id int(20) primary key,
	manager_first_name varchar(20),
	manager_last_name varchar(20),
	manager_branch varchar(10),
	email varchar(20),
	login_password varchar(500)
 
	)";
mysqli_query($con,$sql);

$sql="create table staff(
	employee_id int(20) primary key,
	employee_name varchar(20) not null,
	email varchar(20),
	login_password varchar(500),
	shift char(10) not null,
	employee_phone int(20),
	next_pay date
	)";
mysqli_query($con,$sql);

$sql="create table cart(
	cart_id int(20) primary key,
	sold_product int(10),
	foreign key(sold_product) references products(id_all),
	date_sold date
	
	)";
mysqli_query($con,$sql);

//not
$sql="create table sales(
	sales_id int(20) primary key,
	product_id int(20),
	time_sold timestamp,
	check_out_person varchar(10),

	foreign key(product_id) references products(id_all),
	
	foreign key(check_out_person) references employee(employee_id)
	)";
mysqli_query($con,$sql);

//not
$sql="create table electronics(
	electronics_id int(20) primary key,
	electronics_name varchar(10) not null,
	price int(10),
	device_manufac_id int(10),
	foreign key(device_manufac_id) references device_manufacturer(id)
	)";
mysqli_query($con,$sql);

$sql="create table device_manufacturer(
	id int(20) primary key,
	device_manufacturer_name varchar(20),
	device_manufacturer_address varchar(20),
	device_manufacturer_contact int(10)
	)";
mysqli_query($con,$sql);

//not
$sql="create table foodAndDrinks(
	fad_id int(20) primary key,
	fad_name varchar(20),
	price int(10),
	fad_manufacturer_id int(10),
	foreign key(fad_manufacturer_id) references fad_manufacturer(id),
	fad_expiration_date date
	)";
mysqli_query($con,$sql);

//not
$sql="create table fad_manufacturer(
	id int(20)primary key,
	fad_manufacturer_name varchar(20),
	price int(10),
	fad_manufacturer_address varchar(20),
	fad_manufacturer_contact int(10)
	)";
mysqli_query($con,$sql);

$sql="create table health_and_beauty(
	id int(20)primary key,
	price int(10),
	hab_manufacturer_name varchar(20),
	hab_manufacturer_address varchar(20),
	hab_manufacturer_contact int(10)	
	
	)";
mysqli_query($con,$sql);

//not
$sql="create table clothing_men_and_apparel(
	id int(20) primary key,
	men_name_id int(10),
	price int(10),
	men_manufacturer int(10),
	men_colour_id int(10),
	men_size int(3),
	foreign key (men_name_id) references men_clothing_name(men_clothing_id),
	foreign key(men_manufacturer)references men_manufacturer(men_manufacturer_id),
	foreign key (men_colour_id) references colour(id),
	foreign key(men_size) references size(size_id) 
	
	
	)";
mysqli_query($con,$sql);

$sql="create table size(
	id tinyint,
	size_name char(5)
	)";
mysqli_query($con,$sql);


$sql="create table colour(
	id tinyint,
	colour varchar(10)
	)";
mysqli_query($con,$sql);

//not
$sql="create table men_clothing_name(
	men_clothing_id int(20),
	men_clothing_name varchar(20)
	)";
mysqli_query($con,$sql);

$sql="create table men_manufacturer(
	men_manufacturer_id int(10),
	men_manufacturer_name varchar(10),
	men_manufacturer_address varchar(10),
	men_manufacturer_contact int(10)
	)";
mysqli_query($con,$sql);



$sql="create table clothing_women_and_apparel(
	id int(20) primary key,
	women_name_id int(10),
	price int(10),
	women_manufacturer int(10),
	women_colour_id int(10),
	women_size int(10),
	foreign key (women_name_id) references women_clothing_name(women_clothing_id),
	foreign key(women_manufacturer)references women_manufacturer(women_manufacturer_id),
	foreign key (women_colour_id) references colour(id),
	foreign key(women_size) references size(size_id)
	)";
mysqli_query($con,$sql);


$sql="create table women_clothing_name(
	women_clothing_id int(20),
	women_clothing_name varchar(20)
	)";
mysqli_query($con,$sql);


$sql="create table women_manufacturer(
	women_manufacturer_id int(10),
	women_manufacturer_name varchar(10),
	women_manufacturer_address varchar(10),
	women_manufacturer_contact int(10)
	)";
mysqli_query($con,$sql);


$sql="create table clothing_kids(
	id int(20) primary key,
	kids_name_id int(10),
	price int(10),
	kids_manufacturer int(10),
	kids_colour_id int(10),
	kids_size int(10),
	foreign key (kids_name_id) references kids_clothing_name(kids_clothing_id),
	foreign key(kids_manufacturer)references kids_manufacturer(kids_manufacturer_id),
	foreign key (kids_colour_id) references colour(id),
	foreign key(kids_size) references size(size_id)
	)";
mysqli_query($con,$sql);

$sql="create table kids_clothing_name(
	kids_clothing_id int(20),
	kids_clothing_name varchar(20)
	)";
mysqli_query($con,$sql);

$sql="create table kids_manufacturer(
	kids_manufacturer_id int(10),
	kids_manufacturer_name varchar(10),
	kids_manufacturer_address varchar(10),
	kids_manufacturer_contact int(10)
	)";
mysqli_query($con,$sql);

//not
$sql="create table books(
	book_id int(20) primary key,
	author_id int(10),
	price int(10),
	publication_id int(10),	
	foreign key(author_id) references author(id),
	foreign key(publication_id) references publication(id),
	book_price int(5)
	)";
mysqli_query($con,$sql);


$sql="create table author(
	id int(10) primary key,
	author_name varchar(20),
	author_email varchar(20),
	author_contact int(10)
	)";
mysqli_query($con,$sql);

$sql="create table publication(
	id int(20) primary key,
	publication_name varchar(20),
	publication_address varchar(20),
	publication_contact int(10)
	)";
mysqli_query($con,$sql);

//not
$sql="create table furnitures(
	id int(10) primary key,
	price int(10),
	furni_manufacturer_id int(10),
	furniture_type_id int(10),
	foreign key(furni_manufacturer_id) references furni_manufacturer(id),
	foreign key(furniture_type_id) references furniture_type(id)

	)";
mysqli_query($con,$sql);

$sql="create table furni_manufacturer(
	id int(10) primary key,
	furni_manufacturer_name varchar(10),
	furni_manufacturer_address varchar(10),
	furni_manufacturer_conatact int(10)
	)";
mysqli_query($con,$sql);

$sql="create table furniture_type(
	id tinyint,
	furniture_type char(10)
	)";
mysqli_query($con,$sql);

//not
$sql="create table groceries(
	grocery_id int(10) primary key,
	price int(10),
	grocery_type varchar(10)

	)";
mysqli_query($con,$sql);





$sql="create table profits(
        day date,
	profit float(10)
	)";
mysqli_query($con,$sql);	 	

?>