<?php
include_once("../../modelo/banco.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$nascimento = $_POST["nascimento"];

$sql = "UPDATE estudantes
        SET nome = ?, email = ?, cpf = ?, nascimento = ?
        WHERE id = ?";
$sucesso = executaSQL($sql, "ssssi", $nome, $email, $cpf, $nascimento, $id);

if ($sucesso == 0) {
    echo "Algo deu errado :/";
    exit;
}

header("Location: /EscolaPHP/visao/estudante/ver.php?id={$id}");
exit;
