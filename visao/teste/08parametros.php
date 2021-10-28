<h1>Teste de parâmetros</h1>

<ul>
    <li><a href="08parametros.php">Link sem parâmetros</a></li>
    <li><a href="08parametros.php?param1=1234">Link com um parâmetro numérico</a></li>
    <li><a href="08parametros.php?saudacao=Seja bem vindo!">Link com um parâmetro textual</a></li>
    <li><a href="08parametros.php?mes=outubro&diaSemana=quinta-feira&ano=2021">Link com vários parâmetros</a></li>

</ul>

<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

if (isset($_GET["param1"])) {
    $param1 = $_GET["param1"];
    echo $param1 . "<br/>";
}

if (isset($_GET["saudacao"])) {
    $saudacao = $_GET["saudacao"];
    echo $saudacao . "<br/>";
}

if (isset($_GET["mes"])) {
    $mes = $_GET["mes"];
    echo $mes . "<br/>";
}

if (isset($_GET["diaSemana"])) {
    $diadasemana = $_GET["diaSemana"];
    echo $diadasemana . "<br/>";
}

if (isset($_GET["ano"])) {
    $ano = $_GET["ano"];
    echo $ano . "<br/>";
}
?>