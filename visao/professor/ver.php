<?php

include_once "../includes/head.php";
include_once "../../modelo/banco.php";

$id = $_GET["id"];

// cria uma consulta sql
$query = 'SELECT * FROM estudantes WHERE id=?';

$resultado = executaSQL($query, "i", $id);

// pega o próximo objeto do resultado
$estudante = $resultado->fetch_object();

?>

<ul class="collection with-header">
    <li class="collection-header">
        <h4><?php echo $estudante->nome ?></h4>
    </li>
    <li class="collection-item">E-mail: <?php echo $estudante->email ?></li>
    <li class="collection-item">CPF: <?php echo $estudante->cpf ?></li>
    <li class="collection-item">Nascimento: <?php echo $estudante->nascimento ?></li>
</ul>

<?php include_once "../includes/tail.php" ?>