-- Cria o banco de dados
CREATE database phpschool;

-- Mostra o banco de dados
SHOW databases;

-- Coloca em uso o banco de dados
use phpschool;

-- Cria a tabela aluno
CREATE table aluno
(
    id int not null
    AUTO_INCREMENT PRIMARY KEY,
    nome varchar
    (100) not null, 
    email varchar
    (100) not null, 
    tel varchar
    (50) null, 
    ativo boolean
 );

-- Mostra as tabelas do banco de dados em uso
 show tables;

-- Mostra a estrutura da tabela
 desc aluno;

    -- Alterar tabela
    ALTER TABLE aluno 
 add datanasc date not null;

    ALTER TABLE aluno 
 add pws varchar(100) not null;

    alter table aluno 
 MODIFY aluno.email varchar
    (150) not null;

    -- insere dados na tabela aluno
    INSERT into aluno
        (aluno.nome, aluno.email, aluno.tel, aluno.ativo)
    VALUES
        ("Ana Maria", "ana@email.com", "5555-6677", true);

    INSERT INTO aluno
    Value
    (null,
    "Pedro Cunha",
    "pedro@email.com",
    "555-7788",
    true
    ),
    (null, "Bia Silva", "bia@email.com", "555-4456", true);

    INSERT into aluno
        (aluno.nome, aluno.email, aluno.tel, aluno.ativo, aluno.datanasc, aluno.pws)
    VALUES
        ("Ana Maria", "ana@email.com", "5555-6677", true, "2010-10-17", "111111"),
        ("Pedro Cunha", "pedro@email.com", "555-7788", true, "1999-03-20", "111111"),
        ("Bia Silva", "bia@email.com", "555-4456", true, "1998-09-23", "111111");

    -- Seleciona todos os alunos
    SELECT *
    from aluno;

    -- Atualiza Dados do aluno
    update aluno set
 datanasc = "2010-09-21"
 where aluno.id = 1;

    update aluno SET 
 datanasc = "1990-10-23" 
 where aluno.email = "pedro@email.com";

    UPDATE aluno SET 
 nome = "Bia Silva Costa", 
 email = "biacosta@email.com", 
 ativo = false 
 where aluno.id = 3;

    UPDATE aluno SET 
 datanasc = "1998-02-15", 
 tel = "555-2345" 
 where aluno.id = 3;

    -- Apaga dados do banco de dados
    DELETE 
from aluno 
where id=2