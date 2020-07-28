<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "biblioteca";
    $conexao = new mySQLi($host,$user,$password,$database);
    if($conexao -> connect_error){
        echo "Erro na conexão com o banco de dados!";
    }
    else{
    }
?>