-- Cria o banco de dados "login"
CREATE DATABASE login;

-- Seleciona o banco de dados "login"
USE login;

-- Cria a tabela "users"
CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- Define a coluna 'id' como um número inteiro de 11 dígitos, sem sinal, com incremento automático e chave primária.
    name VARCHAR(255) NOT NULL, -- Define a coluna 'name' como uma string de até 255 caracteres, não pode ser deixada em branco.
    email VARCHAR(255) NOT NULL, -- Define a coluna 'email' como uma string de até 255 caracteres, não pode ser deixada em branco.
    password VARCHAR(255) NOT NULL, -- Define a coluna 'password' como uma string de até 255 caracteres, não pode ser deixada em branco.
    cpf VARCHAR(14) NOT NULL -- Define a coluna 'cpf' como uma string de até 14 caracteres, não pode ser deixada em branco.
);