<?php
    $host = "localhost";
    $dbname = "listagemphp";
    $user = "root";
    $pass = "";

try {

    $conexao = new PDO("mysql:host=$host;
    dbname=$dbname",$user,$pass);
    //echo "ok";

} catch (PDOException $th) {
    $error = $th->getMessage();
    echo "Erro ao conectar no banco de dados:".$error;
}