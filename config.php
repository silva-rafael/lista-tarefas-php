<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lista-tarefas';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

}catch(PDOException $e){
    echo 'Erro: ' . $e->getMessage();
}