create database cheshire_php;
use cheshire_php;

create table login(
idLogin int not null auto_increment,
user varchar(255),
senha varchar(255),
constraint idLogin_fk primary key (idLogin)
);

create table aluno(
idAluno int not null auto_increment,
nome varchar (100),
sobrenome varchar (75),
dt_nascimento datetime null default now(),
constraint idAluno_fk primary key (idAluno)
);

create table orientador(
idOri int not null auto_increment,
nome varchar (100),
sobrenome varchar (75),
dt_nascimento datetime null default now(),
constraint idOri_fk primary key(idOri)
);

create table familiar(
id_Fm,
nome,
sobrenome,
dt_nascimento,
parentesco,

);

create table curso(
idCurso int not null auto_increment,
nome varchar (100),
periodo varchar (15),
constraint idCurso_fk primary key (idCurso)
);

create table endereco(
id_endereco int not null auto_increment,
cep varchar (8),
rua varchar (75),
bairro varchar (75),
cidade varchar (75),
estado varchar (75),
complemento varchar (50)
);

create table contato(
id_cont,
celular,
telefone,
email
);

insert into usuario(user, senha) values ('teste','4967');

select * from usuario;
describe usuario;
drop table usuario;
--