<?php

include_once "../includes/head.php";
include_once "../../modelo/banco.php";

// cria uma consulta sql
$query = 'SELECT id, nome, email FROM estudantes';

// executa a consulta sql no banco de dados
$result = executaSQL($query);

?>

<div class="section">
    <h3>Estudantes</h3>

    <a href="criar.php" class="waves-effect waves-light btn green darken-1"><i class="material-icons left">add</i>Cadastrar Estudante</a>
</div>

<div class="section">
    <table class="striped responsive-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($estudante = $result->fetch_object()) { ?>
                <tr>
                    <td>-</td>
                    <td><?php echo $estudante->nome; ?></td>
                    <td><?php echo $estudante->email; ?></td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="ver.php?id=<?php echo $estudante->id ?>" class="waves-effect waves-light btn green darken-1"><i class="material-icons left">visibility</i>Ver</a>
                            </div>
                            <div class="col">
                                <a href="editar.php?id=<?php echo $estudante->id ?>" class="waves-effect waves-light btn yellow darken-1"><i class="material-icons left">edit</i>Editar</a>
                            </div>
                            <div class="col">
                                <a onclick="excluir(<?php echo $estudante->id ?>)" class="waves-effect waves-light btn red darken-1"><i class="material-icons left">delete</i>Excluir</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function excluir(id) {
        if (confirm("Você tem certeza?")) {
            window.location.href =
"/EscolaPHP/controladores/estudante/excluir.php?id=" + id;
        }
    }
</script>

<?php include_once "../includes/tail.php" ?>