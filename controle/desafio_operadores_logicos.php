<div class="titulo">Desafio Operadores Lógicos PHP</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50 e Sorvete
    - Se apenas um for executado -> TV 32 e Sorvete
    = Se nenhum for executado -> Fica em casa
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php

    //Minha Solução!
    /*
    if(($_POST['t1'] == 1) && ($_POST['t2'] == 1)) {
        echo "Vamos comprar uma TV de 50' e vamos tomar Sorvete!!!<br>";
    } elseif ((($_POST['t1'] == 1) && ($_POST['t2'] == 2)) ||
             (($_POST['t1'] == 2) && ($_POST['t2'] == 1))) {
        echo "Vamos comprar uma TV de 32' e vamos tomar Sorvete!!!<br>";
    } elseif (($_POST['t1'] == 2) && ($_POST['t2'] == 2)) {
        echo "Vamos Ficar em casa!<br>";
    } elseif (($_POST['t1'] == 0) || ($_POST['t2'] == 0)) {
        echo "Por favor selecione todas as opções.<br>";
    } else {
        echo "Desconhecido!";
    } */

    //Solução professor!
    if (isset($_POST['t1']) && isset($_POST['t2'])) {
        $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2) {
        $tv = '50"';
    }elseif ($t1 xor $t2) {
        $tv = '32"';
    };

    if($t1 || $t2) {
        $sorvete = true;
    };

    if ($tv) {
        $resultado = "Vamos comprar uma TV de {$tv}";
    } else {
        $resultado = "Sem TV dessa vez :(";
    }

    if (!$sorvete) {
        $resultado .= '<br>Estamos mais saudáveis!';
    } else {
        $resultado .= '<br>Sorvete Liverado \o/';
    }

    echo "<p>$resultado</p>";
    }

    

?>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>