CREATE database phpschool

use phpschool

CREATE table aluno( 
    id int not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null, 
    email varchar(100) not null, 
    tel varchar(50) null, 
    ativo boolean )