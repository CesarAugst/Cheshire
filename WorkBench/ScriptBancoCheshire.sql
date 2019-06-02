create database cheshire_php;
use cheshire_php;

create table usuario(
user varchar(255),
senha varchar(255));

insert into usuario(user, senha) values ('teste','4967');

select * from usuario;
describe usuario;
drop table usuario;