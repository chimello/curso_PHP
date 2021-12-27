<div class="titulo">Upload PHP</div>

<?php
    ini_set('display_errors', 1);
    print_r($_FILES);
    echo '<br>';
    if($_FILES &&['arquivo']) {
        $pastaUpload = "C:\projetos_php\curso_php\curso_PHP\api\arquivos_upload";
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload .'/' . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp, $arquivo)) {
            echo "<br>Arquivo válido e enviado com sucesso!";
        } else {
            echo "<br>Erro no Upload do arquivo!";
        }
    }
?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>