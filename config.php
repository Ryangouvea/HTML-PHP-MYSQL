<?php 
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbhost, $dbuser, $dbpass, $dbName);

    // if($conexao ->connnect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexao efetudada com sucesso";
    // }
    

?>