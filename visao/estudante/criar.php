<?php include_once "../includes/head.php" ?>

<div class="row">
    <div class="col s12 m8 offset-m2">
        <div class="card grey lighten-5">
            <form method="POST" action="/EscolaPHP/controladores/estudante/criar.php">
                <div class="card-content">
                    <span class="card-title">Cadastrar Estudante</span>

                    <div class="input-field">
                        <input id="nome" type="text" name="nome" class="validate">
                        <label for="nome">Nome Completo</label>
                    </div>
                    <div class="input-field">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field">
                        <input id="cpf" type="number" name="cpf" class="validate">
                        <label for="cpf">CPF</label>
                    </div>
                    <div class="input-field">
                        <input id="nascimento" type="date" name="nascimento" class="validate">
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