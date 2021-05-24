<?php

    $dados = $_GET;
    $dados = implode(" - ", $dados);
 
    $arquivo = fopen("usuarios.txt", "a+");
    fwrite($arquivo, $dados."\n");
    fclose($arquivo);

    header("location: listausuario.php");



?>