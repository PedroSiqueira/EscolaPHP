<?php

// cria um objeto que se conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'escola');

// cria uma consulta sql
$query = 'UPDATE estudantes SET nascimento = "0000-00-00" WHERE nascimento IS NULL';

// executa a consulta sql no banco de dados
$result = $mysqli->query($query);

// verifica quantos registros foram atualizados
echo "No total, {$mysqli->affected_rows} estudante(s) foram atualizado(s).";
