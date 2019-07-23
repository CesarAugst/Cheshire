-- WARNING !!!

-- drop database bdCheshire; -- Cmentado o que apaga o banco de dados, rsrsr. Tomem cuidado, apenas para uso em seu desenvolvimento inicial
-- WARNING !!!

create database bdCheshire; -- Cria o banco de dados para a aplicação
use bdCheshire; -- Altera o banco de dados utilizado para o da aplicação

CREATE TABLE tblAnamnese (
-- Identificação do aluno
    id_aluno INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50), -- Nome
    sobrenome VARCHAR(50), -- sobrenome
    dt_nascimento DATE, -- Data de nascimento
    naturalidade VARCHAR(50) DEFAULT 'brasileiro', -- Naturalidade
    sexo VARCHAR(50), -- Sexo (Fem ou Masc)
    endereco VARCHAR(100), -- Endereço
-- Dados familiares
    nome_mae VARCHAR(50), -- Nome da mãe
    dt_nasc_mae DATE, -- Data de nascimento
    prof_mae VARCHAR(50), -- Profissão
    tel_mae INT(11), -- Telefone para contato
    email_mae VARCHAR(50), -- Email
    nome_pai VARCHAR(50), -- Nome do pai
    dt_nasc_pai DATE, -- Data de nascimento
    prof_pai VARCHAR(50), -- Profissão
    tel_pai INT(11), -- Telefone para contato
    email_pai VARCHAR(50), -- Email
    resp_alu VARCHAR(50), -- Quem são os responsáveis pela criança?
    pais_juntos VARCHAR(50), -- Os pais vivem juntos? (S / N)
    pais_sao VARCHAR(50), -- Os pais são: (Casados / Separados / Sep. formando nova família)
    filho VARCHAR(50), -- Filho (Bio / Ado)
    filho_sabe VARCHAR(50), -- Caso adoção a criança sabe disso? (S/N)
    filho_vive VARCHAR(50), -- Em caso de sepração, a criança vive com quem?
    filho_decisoes VARCHAR(50), -- Quem toma as decisões a respeito da criança?
    filho_busca VARCHAR(50), -- Quem costuma buscá-la ou traze-la a escola?
    filho_presenca VARCHAR(50), -- A quem devemos recorrer caso haja necessidade da presença do responsável?
-- Histórico do aluno
    cuidados_medicos VARCHAR(50), -- Está sob cuidados médicos? (Especificar)
    alergia VARCHAR(50), -- Apresenta alergia? (Especificar)
    medicacao VARCHAR(50), -- Usa medicação de forma contínua? (Especificar)
    ed_fisica VARCHAR(50), -- Pode participar das aulas de ED física?
    acid_ciru VARCHAR(50), -- Já sofreu acidente ou cirurgia? (Especificar)
    convulvoes VARCHAR(50), -- Tem ou ja teve convulções?
    neurologicos VARCHAR(50), -- Problemas neurológicos? (Especificar)
-- Desenvolvimento
    locomocao VARCHAR(50), -- Apresenta dificuldade de locomover-se? (Especificar)
    fala VARCHAR(50), -- Apresenta dificuldade na fala? (Especificar)
    exergar VARCHAR(50), -- Apresenta dificuldade para enxergar? (Especificar)
    ouvir VARCHAR(50), -- Apresenta dificuldade para ouvir? (Especificar)
    desatento VARCHAR(50), -- É desatento?
    agitado VARCHAR(50), -- É agitado?
-- Escolarização
    outras_escolas VARCHAR(50), -- Já frequentou outras escolas?
    prof_alu VARCHAR(50), -- Como era o relacionamento com professoras e colegas? (Especificar)
    dif_apre VARCHAR(50), -- Alguma dificuldade de aprendizagem? (Especificar)
    apoio_casa VARCHAR(50), -- Recebe apoio pedagógico em casa?
    aval_prof VARCHAR(50), -- Já foi avaliada por algum profissional?
    acom_prof VARCHAR(50), -- Faz algum acompanhamento com algum prfissional
    ness_apoi VARCHAR(50) -- Necessita de apoio educacional? (Justifique)
);

create table tblRegistro(  -- Cria a tabela de registro dos usuários
login int(5) not null, -- Identificador tipo inteiro com 5 slots para armazenar o RM/REGISTRO. Obrigatótiamente preenchido -- Será usado como login
senha decimal(11,0), -- cpf tipo deminal com 11 slots para armazenar o cpf dos usuarios -- Será usado como senha
nome varchar(20), -- nome tipo varchar com 20 slots para armazenar o nome dos usuários  
sobrenome varchar(50), -- sobrenome tipo varchar com 50 slots para armazenar o resto do nome dos usuários
funcao enum('orientador','aluno','funcionario'), -- funcao tipo enum guardando 3 possibilidades para definir a função do usuário dentro da escola
telefone int(10), -- telefone tipo inteiro com 10 slotspara armazenar o telefone fixo dos usuários
celular int(11), -- celular tipo inteiro com 11 slots para armazenar o celular dos usuários
endereco varchar(100), -- endereco tipo varchar com 100 slots para armazenar o endereco dos usuários
primary key (login) -- Declara a coluna que será considerada como chave primária, no caso a coluna "identificador"
);
select * from tblRegistro; -- Usado para mostrar tudo que ja foi inserido na tabela "tblRegistro"
describe tblRegistro; -- Usado pra descrever a tabela "tblRegistro" e mostrar as informações sobre suas colunas
insert into tblRegistro values('17308','42942544830','Cesar','August','aluno','1142439058','958681942','Vargem Grande');

create table tblProduto(
 codigo int primary key auto_increment,
 produto varchar(50),
 marca varchar(50),
 descricao varchar(255),
 valor decimal(10,2)
); 
 
 select * from tblProduto;
 