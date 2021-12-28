<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Alterar Registros PHP</div>

<?php
    require_once "conexao.php";
    $conexao = novaConexao();

    if($_GET['codigo']) {
        $sql = "SELECT id,
                    nome,
                    nascimento,
                    email,
                    site,
                    filhos,
                    salario
                FROM cadastro
                WHERE id = ?";
        $statement = $conexao->prepare($sql);
        $statement->bind_param('i', $_GET['codigo']);

        if($statement->execute()) {
            $resultado = $statement->get_result();
            if($resultado->num_rows > 0) {
                $dados = $resultado->fetch_assoc();
                if($dados['nascimento']) {
                    $dateTime = new DateTime($dados['nascimento']);
                    $dados['nascimento'] = $dateTime->format('d/m/Y');
                }
                if($dados['salario']) {
                    $dados['salario']= str_replace(".", ",", $dados['salario']);
                }
            }
        }
    }

    if(count($_POST) > 0) {
        $dados = $_POST;
        $erros = [];

        if(trim($dados['nome']) === "") {
            $erros['nome'] = "Nome é Obrigatório";
        }

        //como o input é do tipo data, essa validação não será exibida
        if(isset($dados['nascimento'])) { 
            $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
            if(!$data) {
                $erros['nascimento'] = "Data deve estar no formato: DD/MM/YYYY";
            }
        }

        if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)
                    && $dados['email'] != ''
                    && $dados['email'] != null) {
            $erros['email'] = 'E-mail inválido!';
        }
        if(!filter_var($dados['site'], FILTER_VALIDATE_URL)
                    && $dados['site'] != ''
                    && $dados['site'] != null) {
            $erros['site'] = 'Site inválido!';
        }

        $filhosConfig = ["options"=> ["min_range" => 0, "max_range" => 20]];

        if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig)
                    && $dados['filhos'] != ''
                    && $dados['filhos'] != 0) {
            $erros['filhos'] = "Quantidade de filhos: {$dados['filhos']} é inválida!";
        }

        $salarioConfig = ['options' => ['decimal' => ',']];

        if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)
                    && $dados['salario'] != ''
                    && $dados['salario'] != 0) {
            $erros['salario'] =  "Salário: '{$dados['salario']}' é inválido!";
        }

        if(!count($erros)) {
            $sql = "UPDATE cadastro
                    SET nome = ?,
                        nascimento = ?,
                        email = ?,
                        site = ?,
                        filhos = ?,
                        salario = ?
                    WHERE id = ?";

            $statement = $conexao->prepare($sql);

            $params = [
                $dados['nome'],
                $data ? $data->format('Y-m-d') : null,
                $dados['email'],
                $dados['site'],
                $dados['filhos'],
                $dados['salario'] ? str_replace(",", ".", $dados['salario']) : null,
                $dados['id'],
            ];

            $statement->bind_param("ssssidi", ...$params);
            
            if($statement->execute()) {
                unset($dados);
            }
        }
    }
?>

<form action="/exercicios.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="alterar">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="number" name="codigo" 
                class="form-control"
                value="<?= $_GET['codigo'] ?>"
            placeholder="Informe o código para consulta">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-5">Consultar</button>
        </div>
    </div>
</form>

<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert">
        <?= ""//$erro ?>
    </div> -->
<?php endforeach ?>

<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text"
                class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>"
                name="nome" id="nome" placeholder="Nome"
                value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Data de Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>"
                name="nascimento" id="nascimento" placeholder="Nascimento"
                value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>"
                name="email" id="email" placeholder="E-mail"
                value="<?= $dados['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>"
                name="site" id="site" placeholder="Site"
                value="<?= $dados['site'] ?>">
            <div class="invalid-feedback">
                <?= $erros['site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>"
                name="filhos" id="filhos" placeholder="Quantidade de Filhos"
                value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback">
                <?= $erros['filhos'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>"
                name="salario" id="salario" placeholder="Salário"
                value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback">
                <?= $erros['salario'] ?>
            </div>
        </div>
    </div>

    <button class="btn btn-primary btn-lg">Enviar</button>
</form>