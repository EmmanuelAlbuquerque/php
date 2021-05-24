<?php
    $novoarquivo = file("login.txt");
    $novoarquivo = rename("login.txt", "login.csv");

    header("location: listalogin.php")
?>