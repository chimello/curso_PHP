<?php

    function novaConexao($banco = 'curso_php') {
        $servidor = '127.0.0.1';
        $usuario = 'root';
        $senha = 'root';

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        if($conexao->connect_error) { //somente didático, não utilizar o DIE!
            die('Erro: '. $conexao->connect_error);
        }

        return $conexao;
    }

?>