create database cheshire_php;
use cheshire_php;

create table login(
user varchar(255),
senha varchar(255),
id_user_fk
);

create table aluno(
id_aluno,
nome,
sobrenome,
dt_nascimento,
);

create table orientador(
id_Ori,
nome,
sobrenome,
dt_nascimento,
);

create table familiar(
id_fam,
nome,
sobrenome,
dt_nascimento,
parentesco,

);

create table curso(
id_cur,
nome_cur,
periodo
);

create table endereco(
id_end,
cep,
rua,
bairro,
cidade,
estado,
complemento
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