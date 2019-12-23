CREATE DATABASE PROJETO;
USE PROJETO;
CREATE TABLE nome (
  cadastroID INT PRIMARY KEY AUTO_INCREMENT,
  nomecompleto varchar(50) NOT NULL,
  data_registro varchar(20) NOT NULL
) CHARSET=utf8;