//1st create database
create database hotel;


//2nd create table booking
create table booking (id int not null primary key auto_increment, Name varchar(20), Email varchar(40), RoomType varchar(30), GuestNumber varchar(20), ArrivalDate date NOT NULL, DepartureDate date NOT NULL, Pickup varchar(30)); 

*Contact Us
//create table contactus
create table contactus (id int not null primary key auto_increment, Fname varchar(20), Lname varchar(20),Email varchar(40), Queries varchar(100)); 

*Restaurant
//create table food(id int not null primary key auto_increment, Fname varchar(20), Lname varchar(20),RoomNumber varchar(40), Menu varchar(100)); 


linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
