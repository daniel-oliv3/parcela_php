<?php

//Inicio da conexão com o banco de dados utilizando PDO.
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "banco_dados-parcela";
$port = 3306;


try {
    //Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    echo "Conexão com o bando de dados realizada com sucesso!";
}catch(PDOException $err){
    echo "Erro: Conexão com o banco de dados não foi realizada! Erro gerado " . $err->getMessage();
}

//Fim da conexão com o bando de dados utilizando PDO































?>