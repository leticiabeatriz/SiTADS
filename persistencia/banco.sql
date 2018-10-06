create database sitads;
use sitads;

create table instritos(

	nome varchar(15),
    sobrenome varchar(15),
    cpf char(11),
    email varchar(50),
    senha varchar(20),
    primary key(cpf)

);
