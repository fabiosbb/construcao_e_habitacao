<?php

$pdo = new PDO("mysql:host=localhost;dbname=construcao_e_habitacao_bd;charset=utf8mb4", "root",  "");

function getDestaques($elemento_por_pagina, $pagina_atual) {
    
    $ignorar = ($pagina_atual - 1) * $elemento_por_pagina;

    $destaques = selectSQL("SELECT * FROM destaques LIMIT $elemento_por_pagina OFFSET $ignorar");

    $resultado = selectSQLUnico("SELECT Count(*) as total FROM destaques");
    $total = $resultado["total"];

    $total_paginas = ceil($total / $elemento_por_pagina);

    return [
        'destaques' => $destaques,
        'total_paginas' => $total_paginas,
    ];
}


function getDestaques1() {
    $destaques = selectSQL("SELECT * FROM destaques WHERE pagina_home='false'");
    return $destaques;
}



function getDestaquePorId($id) {
    global $pdo;
    $sql = "SELECT * FROM destaques WHERE id = $id";
    return selectSQLUnico($sql);
}

function atualizarDestaque($id, $imagem, $titulo, $texto) {
    
    iduSQL("UPDATE destaques SET imagem='$imagem', titulo='$titulo', texto='$texto' WHERE ID=$id");
}


function getDestaquesMenu(){
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
}
?>






