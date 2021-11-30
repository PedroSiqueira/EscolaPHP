<?php
include_once("../../modelo/banco.php");

$id = $_GET["id"];

$sql = "DELETE FROM estudantes WHERE id = ?";

$sucesso = executaSQL($sql, "i", $id);

if ($sucesso == 0) {
    echo "Algo deu errado :/";
    exit;
}

header("Location: /EscolaPHP/visao/estudante/index.php?excluido=1");
exit;
