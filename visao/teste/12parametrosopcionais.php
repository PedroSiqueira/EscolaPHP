<?php

function parametrosOpcionais($param1, $param2 = "padrão", $param3 = null) {
    echo "os parâmetros passados a essa função são: {$param1}, {$param2}";
    if ($param3 != null) {
        echo ", $param3";
    }
    echo ".<br/>";
}

parametrosOpcionais("primeiro parâmetro", 1234, "segundo parâmetro");

parametrosOpcionais("um parâmetro", "outro parâmetro");

parametrosOpcionais("parâmetro único");
