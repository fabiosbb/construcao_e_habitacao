<?php

//Conexão
$pdo = new PDO("mysql:host=localhost;dbname=construcao_e_habitacao_bd;charset=utf8mb4", "root",  "");

//Busca

function selectSQL($sql){
    global $pdo;
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function selectSQLUnico($sql){
    global $pdo;
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function iduSQL($sql){
    global $pdo;
    $consulta = $pdo->query($sql);
    
}

?>


