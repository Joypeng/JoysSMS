
CREATE DATABASE `student` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use student;

create table login (
user varchar(16) primary key,
password varchar(16) not null
);

create table reg(
stuid varchar(8) primary key,
nname varchar(16) not null,
sex varchar(8) not null,
idcard varchar(32) not null,
subject varchar(8) not null
);

create table history(
stuid varchar(8) primary key,
nname varchar(16) not null,
sex varchar(8) not null,
idcard varchar(32) not null,
subject varchar(8) not null
);

insert into login(user,password) values('Admin','root');
