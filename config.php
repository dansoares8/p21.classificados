<?php 
session_start();

try{
    $pdo = new PDO("mysql:dbname=p21.classificados; host=localhost", "root", "");
    
} catch(PDOException $e){
    echo "FALHOU: ".$e->getMessage();
    exit;
}
?>