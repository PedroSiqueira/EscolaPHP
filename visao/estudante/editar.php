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

<div class="row">
    <div class="col s12 m8 offset-m2">
        <div class="card grey lighten-5">
            <form method="POST" action="/EscolaPHP/controladores/estudante/editar.php">
                <div class="card-content">
                    <span class="card-title">Editar Estudante</span>

                    <input id="id" type="hidden" name="id" value="<?php echo $estudante->id ?>">

                    <div class="input-field">
                        <input id="nome" type="text" name="nome" class="validate" value="<?php echo $estudante->nome ?>">
                        <label for="nome">Nome Completo</label>
                    </div>
                    <div class="input-field">
                        <input id="email" type="email" name="email" class="validate" value="<?php echo $estudante->email ?>">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field">
                        <input id="cpf" type="number" name="cpf" class="validate" value="<?php echo $estudante->cpf ?>">
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="input-field">
                        <input id="nascimento" type="date" name="nascimento" class="validate" value="<?php echo $estudante->nascimento ?>">
                        <label for="nascimento">Data de Nascimento</label>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect waves-light green darken-1" type="submit" name="action">Salvar
                        <i class="material-icons right">send</i>
                    </button>
                    <button class="btn waves-effect waves-light yellow darken-1" type="reset" name="action">Cancelar
                        <i class="material-icons right">close</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once "../includes/tail.php" ?>