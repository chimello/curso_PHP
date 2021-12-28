<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="titulo">Consultar Registros PHP</div>

<?php

    require_once "conexao.php";

    $sql = null;
    $resultado = null;
    $registros = [];
    $conexao = novaConexao();

    $sql = "SELECT id, nome, nascimento, email FROM cadastro";
    $resultado = $conexao->query($sql);

    if($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            $registros[] = $row; //com o par de chaves, voc~e ADICIONA no array e não substitui
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
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>