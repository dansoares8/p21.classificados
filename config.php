<?php 
session_start();

global $pdo;

try{
    $pdo = new PDO("mysql:dbname=p21.classificados; host=localhost", "root", "");
    
} catch(PDOException $e){
    echo "FALHOU: ".$e->getMessage();
    exit;
}
?>