<?php

include_once "../includes/head.php";

$id = $_GET["id"];

// cria um objeto que se conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'escola');

// cria uma consulta sql
$query = 'SELECT * FROM estudantes WHERE id=?';

// cria um objeto 'statement'
$stmt = $mysqli->stmt_init();

// prepara um comando para execução
$stmt->prepare($query);

// ligar os parâmetros do comando às variáveis
$stmt->bind_param("i", $id);

// executa o comando sql
$stmt->execute();

// obtém o resultado do comando sql executado
$result = $stmt->get_result();

// pega o próximo objeto do resultado
$estudante = $result->fetch_object();

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