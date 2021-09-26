<div class="titulo">Desafio Switch PHP</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metro-km">Metro > KM</option>
        <option value="km-metro">KM > Metro</option>
        <option value="c-f">celsius > fahrenheit</option>
        <option value="f-c">fahrenheit > celsius</option>
    </select>
    <button>Calcular</button>
</form>

<?php

    if ($_POST['param']) {
        $conversao = $_POST['conversao'];
        $valorInformado = $_POST['param'];
        $valorInformado = str_replace(',','.', $valorInformado);
        $valorInformado = (float)$valorInformado;
        $resultado = 0.0;
        if (is_numeric($valorInformado)) {
            switch ($conversao) {
                case 'km-milha':
                    $resultado = $valorInformado * 0.621371;
                    $resultado = number_format($resultado, 4, ',', '.');
                    echo "O resultado é: {$resultado} Milhas";
                    break;
                case 'milha-km':
                    $resultado = $valorInformado * 1.60934;
                    $resultado = number_format($resultado, 4, ',', '.');
                    echo "O resultado é: {$resultado} Kilometros";
                    break;
                case 'metro-km':
                    $resultado = $valorInformado / 1000;
                    $resultado = number_format($resultado, 4, ',', '.');
                    echo "O resultado é: {$resultado} Kilometros";
                    break;
                case 'km-metro':
                    $resultado = $valorInformado * 1000;
                    $resultado = number_format($resultado, 2, ',', '.');
                    echo "O resultado é: {$resultado} Metros";
                    break;
                case 'c-f':
                    $resultado = $valorInformado * 1.8 + 32;
                    $resultado = number_format($resultado, 2, ',', '.');
                    echo "O resultado é: {$resultado} grau(s) Fahrenheit";
                    break;
                case 'f-c':
                    $resultado = ($valorInformado - 32) / 1.8;
                    $resultado = number_format($resultado, 2, ',', '.');
                    echo "O resultado é: {$resultado} grau(s) Celcius";
                    break;
                default:
                    echo 'Não foi possível converter!';
                    break;
            };
        } else {
            echo "Informe somente números";
        }
    };

?>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>