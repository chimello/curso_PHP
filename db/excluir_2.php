<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir Registros #02 PHP</div>

<?php
    require_once "conexao.php";
    $conexao = novaConexao();
    $sql = null;
    $registros = [];
    $resultado = null;
    $excluirSQL = null;
    $statement = null;

    if($_GET['excluir']) {
        $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
        $statement = $conexao->prepare($excluirSQL);
        $statement->bind_param("i", $_GET['excluir']);
        $statement->execute();
    }

    $sql = "SELECT id,
                nome,
                nascimento,
                email,
                site,
                filhos,
                salario
            FROM cadastro";
    $resultado = $conexao->query($sql);

    if($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }

    } elseif ($conexao->error) {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();

?>

<table class="table table-hover table-bordered table-striped">
    <thead class="thead-dark">
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Site</th>
        <th>Qtd. Filhos</th>
        <th>Salário</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td>
                    <?= 
                        date('d/m/Y', strtotime($registro['nascimento']))
                    ?>
                </td>
                <td><?= $registro['email'] ?></td>
                <td><?= $registro['site'] ?></td>
                <td><?= $registro['filhos'] ?></td>
                <td><?= $registro['salario'] ?></td>
                <td>
                    <a href="/exercicios.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>"
                    class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>