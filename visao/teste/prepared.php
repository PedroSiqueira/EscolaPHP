<?php
// cria uma conexão com o MySQL
$mysqli = new mysqli('localhost', 'root', '', 'escola');

// cria um comando SQL
$query = 'INSERT INTO estudantes(nome, email, cpf, nascimento) VALUES (?, ?, ?, ?)';

// cria um objeto 'statement'
$stmt = $mysqli->stmt_init();

// prepara um comando para execução
$stmt->prepare($query);

// ligar os parâmetros do comando às variáveis
$stmt->bind_param("ssis", $nome, $email, $cpf, $nascimento);

$nomes = ["Francisco Ferreira", "Adriana Rodrigues", "Luiz de Lima"];
$emails  = ["frafe@ifms.edu", "dridri@ifms.edu", "luli@ifms.edu"];
$cpfs = [1342, 2143, 3124];
$nascimentos =  ["2005-03-15", "2008-07-30", "2004-08-29"];

$contador = 0;

// percorre cada elemento dos vetores e iterativamente executa o comando SQL
for ($i = 0; $i < sizeof($nomes); $i++) {
    // atualiza os valores das variáveis
    $nome = $nomes[$i];
    $email = $emails[$i];
    $cpf = $cpfs[$i];
    $nascimento = $nascimentos[$i];

    // executa o comando
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $contador++;
    }
}

// verifica se a inserção foi bem sucedida
if ($contador > 0)
    echo "Foram inseridos {$contador} estudantes!";
else
    echo "Não foi possível inserir!";

// libera os recursos usados pelo objeto statement
$stmt->close();

// encerra a conexão com o banco de dados
$mysqli->close();
