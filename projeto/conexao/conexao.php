<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "projeto";
    $conecta = mysqli_connect($servidor,$usuario,$senha,$banco);

    if (mysqli_connect_errno()) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }
?>