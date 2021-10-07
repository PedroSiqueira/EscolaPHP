<?php

// cria um objeto que se conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'escola');

// cria uma consulta sql
$query = 'SELECT * FROM estudantes WHERE nascimento < "2003-01-01" ORDER BY nascimento';

// executa a consulta sql no banco de dados
$result = $mysqli->query($query);

echo "Existem {$result->num_rows} estudantes maiores de idade.<br/><br/>";

// percorre os elementos do conjunto de resultados
while ($estudante = $result->fetch_object())
    echo "O estudante {$estudante->nome} ({$estudante->cpf})
     nasceu em {$estudante->nascimento}. <br/>";
