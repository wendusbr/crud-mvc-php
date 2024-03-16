CREATE DATABASE myBase DEFAULT CHARACTER SET utf8;
use myBase;

CREATE TABLE Aluno(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    endereco varchar(255) NOT NULL,
    escolaridade varchar(50) NOT NULL,
    matriculado bool NOT NULL
);