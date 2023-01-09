create database dao1_db;

use dao1_db;

create table tbl_usuarios (
	id int not null AUTO_INCREMENT primary key,
    nome varchar(100) not null,
    email varchar(100) not null
)