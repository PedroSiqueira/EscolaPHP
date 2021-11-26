<?php

function executaSQL($sql, $tipos = null, ...$variaveis) {
    // cria um objeto que se conecta ao banco de dados
    $mysqli = new mysqli('localhost', 'root', '', 'escola');

    // cria um objeto que representa uma instrução a ser executada no banco de dados
    $stmt = $mysqli->stmt_init();

    // prepara o objeto com a instrução a ser executada
    $stmt->prepare($sql);

    if ($tipos != null)
        // ligar os parâmetros da instrução às variáveis
        $stmt->bind_param($tipos, ...$variaveis);

    // executa a instrução sql
    $stmt->execute();

    // se for SELECT, obtém os registros da consulta
    if (substr($sql, 0, 6) == "SELECT") {
        $result = $stmt->get_result();
    }
    // se for INSERT, obtém o id gerado para o registro inserido
    else if (substr($sql, 0, 6) == "INSERT") {
        $result = $stmt->insert_id;
    }
    // se for UPDATE ou DELETE, obtém a quantidade de registros afetados
    else {
        $result = $stmt->affected_rows;
    }

    $stmt->close();
    $mysqli->close();

    return $result;
}
