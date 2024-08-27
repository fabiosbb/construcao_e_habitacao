<?php

// Conexão

$pdo = new PDO("mysql:host=localhost;dbname=construcao_e_habitacao_bd;charset=utf8mb4", "root", "");

// Função para buscar todos os destaques

function getDestaques() {
    global $pdo;
    $sql = "SELECT * FROM destaque";
    return selectSQL($sql);
}

// Função para buscar um destaque pelo ID
function getDestaquePorId($id) {
    global $pdo;
    $sql = "SELECT * FROM destaque WHERE id = $id";
    return selectSQLUnico($sql);
}

// Função para inserir, atualizar ou deletar
function iduDestaque($sql) {
    return iduSQL($sql);
}

?>
