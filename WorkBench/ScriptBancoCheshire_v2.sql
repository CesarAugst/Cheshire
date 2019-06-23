create database bdCheshire; -- Cria o banco de dados para a aplicação
use bdCheshire; -- Altera o banco de dados utilizado para o da aplicação

create table tblRegistro(  -- Cria a tabela de registro dos usuários
identificador int(5), -- Identificador tipo inteiro com 5 slots para armazenar o RM/REGISTRO -- Será usado como login
cpf decimal(11,0), -- cpf tipo deminal com 11 slots para armazenar o cpf dos usuarios -- Será usado como senha
nome varchar(20), -- nome tipo varchar com 20 slots para armazenar o nome dos usuários  
sobrenome varchar(50), -- sobrenome tipo varchar com 50 slots para armazenar o resto do nome dos usuários
funcao enum('orientador','aluno','funcionario'), -- funcao tipo enum guardando 3 possibilidades para definir a função do usuário dentro da escola
primary key (identificador) -- Declara a coluna que será considerada como chave primária, no caso a coluna "identificador"
);
select * from tblRegistro;