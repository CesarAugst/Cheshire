-- WARNING !!!
-- drop database bdCheshire; -- Cmentado o que apaga o banco de dados, rsrsr. Tomem cuidado, apenas para uso em seu desenvolvimento inicial
-- WARNING !!!
create database bdCheshire; -- Cria o banco de dados para a aplicação
use bdCheshire; -- Altera o banco de dados utilizado para o da aplicação

create table tblRegistro(  -- Cria a tabela de registro dos usuários
login int(5) not null, -- Identificador tipo inteiro com 5 slots para armazenar o RM/REGISTRO. Obrigatótiamente preenchido -- Será usado como login
senha decimal(11,0), -- cpf tipo deminal com 11 slots para armazenar o cpf dos usuarios -- Será usado como senha
nome varchar(20), -- nome tipo varchar com 20 slots para armazenar o nome dos usuários  
sobrenome varchar(50), -- sobrenome tipo varchar com 50 slots para armazenar o resto do nome dos usuários
funcao enum('orientador','aluno','funcionario'), -- funcao tipo enum guardando 3 possibilidades para definir a função do usuário dentro da escola
telefone int(10), -- telefone tipo inteiro com 10 slotspara armazenar o telefone fixo dos usuários
celular int(11), -- celular tipo inteiro com 11 slots para armazenar o celular dos usuários
endereco varchar(100), -- endereco tipo varchar com 100 slots para armazenar o endereco dos usuários
primary key (identificador) -- Declara a coluna que será considerada como chave primária, no caso a coluna "identificador"
);
select * from tblRegistro; -- Usado para mostrar tudo que ja foi inserido na tabela "tblRegistro"
describe tblRegistro; -- Usado pra descrever a tabela "tblRegistro" e mostrar as informações sobre suas colunas
insert into tblRegistro values('17308','42942544830','Cesar','August','aluno','1142439058','958681942','Vargem Grande');

create table tblConteudo( -- Criação da tabela que irá armazenar o conteúdo da aplização que será exibido para o usuário
idCont int not null auto_increment, -- idCont tipo inteiro se preenche sozinho
descricao varchar(100), -- Breve descriição sobre o conteúdo - preferencialmente sobre onde será exibido - varchar cmo 100 slots
conteudo text, -- Aqui será armazenado o conteúdo
primary key (idCont) -- Declara a coluna que será considerada como chave primária, no caso a coluna "idCont"
);
select * from tblConteudo; -- Usado para mostrar tudo que ja foi inserido na tabela "tblConteudo"
describe tblConteudo; -- Usado pra descrever a tabela "tblConteudo" e mostrar as informações sobre suas colunas