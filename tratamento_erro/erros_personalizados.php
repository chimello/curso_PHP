<div class="titulo">Erros Personalizados PHP</div>

<?php

    class FaixaEtariaException extends Exception {
        public function __construct($message, $code = 0, $previous = null) {
            // echo "Erro Personalizado: $message<br>";
            parent::__construct($message, $code, $previous);
        }
    }

    function calcularTempoAposentadoria($idade) {
        if($idade < 18) {
            throw new FaixaEtariaException('Ainda Está muuuito Longe!');
        }
        if ($idade > 70) {
            throw new FaixaEtariaException('Já deveria estar aposentado!');
        }

        return 70 - $idade;
    }

    $idadesAvaliadas = [15, 30, 60, 80];

    foreach($idadesAvaliadas as $idadePessoas) {
        try {
            $tempoRestante = calcularTempoAposentadoria($idadePessoas);
            echo "Idade: {$idadePessoas}, Restam: {$tempoRestante} anos restantes<br>";
        } catch (FaixaEtariaException $e) {
            echo "Não foi possível calcular para $idadePessoas anos.<br>";
            echo "Motivo: {$e->getMessage()}<br>";
        }
    }

    echo "Fim!";

?>