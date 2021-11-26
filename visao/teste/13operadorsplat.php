<?php

include_once("12parametrosopcionais.php");

function operadorSplat($param1, ...$array) {
    echo "param1: {$param1}<br/>";
    echo "array: ";
    foreach ($array as $elem) {
        $elem = strtoupper($elem);
        echo "{$elem} ";
    }
    echo "<br/><br/>";
}

$numero = 123;
$fruta1 = "maçã";
$fruta2 = "banana";
$fruta3 = "laranja";
$fruta4 = "melancia";

operadorSplat($numero, $fruta1, $fruta2, $fruta3, $fruta4);

operadorSplat($numero, $fruta4, $fruta2);

operadorSplat("eu gosto de", "lasanha", "churrasco", "sorvete");

operadorSplat("um argumento");

$formas = ["círculo", "quadrado", "triângulo", "retângulo"];

parametrosOpcionais(...$formas);
