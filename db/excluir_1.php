<div class="titulo">Excluir Registro #01 PHP</div>

<?php
    require_once "conexao.php";
    $conexao = novaConexao();
    $sql = null;
    $resultado = null;
    $id = null;
    
    $id = 5;
    $sql = "DELETE FROM cadastro WHERE id = {$id}";

    $resultado = $conexao->query($sql);

    if($resultado) {
        echo "Sucesso ao deletar o registro com ID: {$id}!";
    } else {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();

?>