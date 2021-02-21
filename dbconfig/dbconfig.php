<?php
    //parametros de conexao
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "estoque";

    //conexao mysqli
    $conn = mysqli_connect($host, $user, $password, $db);

    //verifica êxito na conexão
    if (!$conn){
        die ("Erro de conexao: " . mysqli_connect_error());
    }
?>