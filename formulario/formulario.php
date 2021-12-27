<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="titulo">Formulário PHP</div>

<h2 class="h1" >Cadastro</h2>

<?php

    if(count($_POST) > 0) {
        if(!filter_input(INPUT_POST, "nome")) {
            echo "Nome é Obrigatório", '<br>';
        }

        //como o input é do tipo data, essa validação não será exibida
        if(filter_input(INPUT_POST, "nascimento")) { 
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            if(!$data) {
                echo "Data deve estar no formato: DD/MM/YYYY<br>";
            }
        }

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo 'E-mail inválido!';
        }
        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
            echo 'Site inválido!<br>';
        }

        $filhosConfig = ["options"=> ["min_range" => 0, "max_range" => 20]];

        if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig)
                    && $_POST['filhos'] != ''
                    && $_POST['filhos'] != 0) {
            echo "Quantidade de filhos: {$_POST['filhos']} é inválida!";
        }

        $salarioConfig = ['options' => ['decimal' => ',']];

        if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)
                    && $_POST['salario'] != ''
                    && $_POST['salario'] != 0) {
            echo "Salário: '{$_POST['salario']}' é inválido!";
        }

    }

?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control"
                name="nome" id="nome" placeholder="Nome"
                value="<?= $_POST['nome'] ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Data de Nascimento</label>
            <input type="date" class="form-control"
                name="nascimento" id="nascimento" placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control"
                name="email" id="email" placeholder="E-mail"
                value="<?= $_POST['email'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control"
                name="site" id="site" placeholder="Site"
                value="<?= $_POST['site'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de Filhos</label>
            <input type="number" class="form-control"
                name="filhos" id="filhos" placeholder="Quantidade de Filhos"
                value="<?= $_POST['filhos'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control"
                name="salario" id="salario" placeholder="Salário"
                value="<?= $_POST['salario'] ?>">
        </div>
    </div>

    <button class="btn btn-primary btn-lg">Enviar</button>
</form>