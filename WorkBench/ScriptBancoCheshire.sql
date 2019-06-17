create database cheshire_php;
use cheshire_php;

create table login(
idLogin int not null auto_increment,
user varchar(255),
senha varchar(255),
 primary key (idLogin)
);

create table aluno(
idAluno int not null auto_increment,
nome varchar (100),
sobrenome varchar (75),
dt_nascimento date not null,
 primary key (idAluno)
);

create table orientador(
idOri int not null auto_increment,
nome varchar (100),
sobrenome varchar (75),
dt_nascimento date not null,
 primary key(idOri)
);

create table familiar(
idFm int not null auto_increment,
nome varchar (100),
sobrenome varchar (75),
dt_nascimento date not null,
parentesco enum ('mae', 'pai', 'outro'),
constraint idFm_fk primary key (idFm)
);

create table curso(
idCurso int not null auto_increment,
nome varchar (100),
periodo varchar (15),
constraint idCurso_fk primary key (idCurso)
);

create table endereco(
idEndereco int not null auto_increment,
cep varchar (8),
rua varchar (75),
bairro varchar (75),
cidade varchar (75),
estado varchar (75),
complemento varchar (50),
 primary key (idEndereco)
);

create table contato(
idCont int not null auto_increment,
celular varchar (11),
telefone varchar (10),
email varchar (75),
primary key (idCont)
);

-- chaves gringas



insert into usuario(user, senha) values ('teste','4967');

select * from usuario;
describe usuario;
drop table alu;
--