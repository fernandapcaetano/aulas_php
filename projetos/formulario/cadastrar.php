<?php
    //variavel especial que pega os dados do form
    //($_POST);
    echo "Seja bem-vindo(a) ".$_POST['nome'];

    //para guardar arquivos
    $diretorio = "anexos".DIRECTORY_SEPARATOR;
    foreach ($_FILES as $arquivo) {

        $nome = $arquivo['name'];

        $conteudo = file_get_contents($arquivo['tmp_name']);
        
        file_put_contents($diretorio.$nome, $conteudo);
    }