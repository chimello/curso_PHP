<div class="titulo">Sessão Básico PHP</div>

<?php

    session_start();

    print_r($_SESSION);
    echo '<br>';

    if(!$_SESSION['nome']) {
        $_SESSION['nome'] = 'João';
    }

    if(!$_SESSION['email']) {
        $_SESSION['email'] = 'joao@email.com';
    }

    print_r($_SESSION);

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">
        Alterar Sessão
    </a>
</p>