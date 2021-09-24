<div class="titulo">Desafio String</div>

<?php
    // enunciado:
    //Avaliando os métodos na documentação da String,
    //qual o método que vai pegar a posição do texto 'abc'
    // na String '!AbcaBcabc' retorne 1?
    echo 'Avaliando os métodos na documentação da String,
    qual o método que vai pegar a posição do texto \'abc\'
    na String \'!AbcaBcabc\' retorne 1?'.'<br>';
    
    echo 'Resposta: '.'<br>';

    echo strpos('!AbcaBcabc', 'abc').'<br>';
    echo stripos('!AbcaBcabc', 'abc').'<br>';
    echo strpos(strtolower('!AbcaBcabc'), 'abc').'<br>';
?>