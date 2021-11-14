<?php

// cria um objeto que se conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'escola');

// cria uma consulta sql
$query = 'INSERT INTO estudantes(nome, email, cpf) VALUES
          ("Francisca Silva", "frava@ifms.edu", 4123),
          ("Antônio Santos", "antos@ifms.edu", 1324),
          ("Antônia Pereira", "anra@ifms.edu", 3124)';

// executa a consulta sql no banco de dados
$result = $mysqli->query($query);

// verifica se a inserção foi bem sucedida
if ($mysqli->affected_rows > 0)
    echo "Inserção bem sucedida!";
else
    echo "Não foi possível inserir!";
