<?php
    $dbHost = '3308';
    $dbUsername = 'root';
    $dbPassword = "Marcelas2@";
    $dbName = "agenda_virtual";

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName)

    if  ($conexao ->connect_errno)
    {
        echo "Erro";
    }else
    {
        echo "Conexão efetuada com sucesso.";
    }
?>