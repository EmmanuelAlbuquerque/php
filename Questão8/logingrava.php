<?php
    $dados = $_POST;
    $dados = implode(" - ", $dados);

    $arquivo = fopen("login.txt", "a+");
    fwrite($arquivo, $dados);
    fclose($arquivo);

    header("location: listalogin.php")
?>