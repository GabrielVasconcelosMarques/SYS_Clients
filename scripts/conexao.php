<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "sys_clients";

    if($conn = mysqli_connect($server, $user, $password, $db)){
        // teste foi realizado, banco está conectado
        // echo "Banco de dados conectado.";
    } else {
        // echo "Erro ao conectar banco de dados.";
    }
      
?>