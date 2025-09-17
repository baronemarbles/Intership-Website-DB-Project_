<?php

//$dsn = "mysql:host=db;dbname=vtdb_controle";
$dbusername = getenv('DB_USER');
$dbpassword = getenv('DB_PASSWORD');
$dbName=getenv('DB_DATABASE');
$dsn = "mysql:host=db;dbname=".$dbName;
try{
    
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    /*if($pdo){
        echo'Conexao estabelecida!';
    }*/
} catch(PDOException $e){
    echo ("Error: ".$e->getMessage());

}
if(!$pdo){
    die("Conexao Falhou!!!!");
}





