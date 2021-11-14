<h1>Dados Recebidos:</h1>

<?php

if (!empty($_GET)) {
    echo "Dados enviados via método GET";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    $nascimento = $_GET["nascimento"];
    $altura = $_GET["altura"];
    $nome = $_GET["nome_completo"];
} else if (!empty($_POST)) {
    echo "Dados enviados via método POST";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $nascimento = $_POST["nascimento"];
    $altura = $_POST["altura"];
    $nome = $_POST["nome_completo"];
}

$hoje = date_create();
$nascimento = date_create($nascimento);

echo "Data atual: ";
echo date_format($hoje, "d/m/Y");

echo "<br/>Data de nascimento: ";
echo date_format($nascimento, "d/m/Y");

$idade =  date_diff($hoje, $nascimento);

echo "<br/>Idade:  {$idade->y}";

$altura = $altura / 100;

echo "<br/>{$nome} mede {$altura} metros.";
