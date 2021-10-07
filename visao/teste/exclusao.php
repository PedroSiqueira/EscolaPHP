<?php

// cria um objeto que se conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'escola');

// cria uma consulta sql
$query = 'DELETE FROM estudantes WHERE cpf = 3124';

// executa a consulta sql no banco de dados
$result = $mysqli->query($query);

// verifica quantos registros foram excluídos
echo "No total, {$mysqli->affected_rows} estudante(s) foram excluído(s).";
