<?php

// cria um objeto que se conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'escola');

// cria uma consulta sql
$query = 'SELECT nome, nascimento FROM estudantes ORDER BY nascimento';

// executa a consulta sql no banco de dados
$result = $mysqli->query($query);

// percorre os elementos do conjunto de resultados
while (list($nome, $nascimento) = $result->fetch_row())
    printf("Nome: %s. Nascimento: %s <br />", $nome, $nascimento);
