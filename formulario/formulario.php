<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="titulo">Formulário PHP</div>

<h2 class="h1" >Cadastro</h2>
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
            <input type="filhos" class="form-control"
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

<?php



?>