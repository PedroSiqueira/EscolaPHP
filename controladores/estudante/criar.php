<?php
include_once("../../modelo/banco.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$nascimento = $_POST["nascimento"];

$sql = "INSERT INTO estudantes (nome, email, cpf, nascimento) VALUES (?, ?, ?, ?)";
$id = executaSQL($sql, "ssss", $nome, $email, $cpf, $nascimento);

header("Location: /EscolaPHP/visao/estudante/ver.php?id={$id}");
exit;
