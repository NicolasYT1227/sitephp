<?php

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'barbearia_alura';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
       // echo "Erro";
    // }
    // else
    // {
       // echo "Conexão efetuada com sucesso";
   // }


?>