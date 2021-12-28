<div class="titulo">Inserir Registros #01 PHP</div>

<?php

    require_once "conexao.php";

    $sql = "INSERT INTO cadastro (
        nome, nascimento, email, site, filhos, salario
    ) VALUES (
        'Silvane Albani Chimello',
        '1975-10-06',
        'silvane@email.com',
        'https://www.silvane.com.br',
        '3',
        '4000'
    )";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if($resultado) {
        echo "Sucesso ao inserir os dados!";
    } else {
        echo "Ocorreu um erro ao inserir os dados!<br>";
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();

?>