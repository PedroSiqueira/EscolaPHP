CREATE TABLE estudantes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL UNIQUE,
    cpf BIGINT NOT NULL UNIQUE,
    nascimento DATE,
    foto VARCHAR(512)
);

INSERT INTO estudantes (nome, email, cpf, nascimento) VALUES
('Maria da Silva', 'msilva@ifmail.edu', 1234, '2000-01-23'),
('José dos Santos', 'jsantos@ifmail.edu', 4321,'2004-12-07'),
('Ana de Oliveira', 'aoliveira@ifmail.edu',1243, '1998-08-14');

CREATE TABLE professores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL UNIQUE,
    cpf BIGINT NOT NULL UNIQUE,
    formacao VARCHAR(128),
    foto VARCHAR(512)
);

INSERT INTO professores (nome, email, cpf, formacao) VALUES
('Eliana Arruda', 'eda@ifmail.edu', 1111, 'Português'),
('Carlos Costa', 'caco@ifmail.edu', 2222,'Matemática'),
('Fabíola Espíndola', 'fala@ifmail.edu',3333, 'Engenharia da Computação');