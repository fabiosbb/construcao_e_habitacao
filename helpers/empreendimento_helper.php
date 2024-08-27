<?php

function getEmpreendimentosMenu(){
    $resultado = selectSQL("SELECT id, titulo, texto FROM empreendimentos");
    return $resultado;
}


function getEmpreendimentosPorId($id) {
    $resultado = selectSQLUnico("SELECT * FROM empreendimentos WHERE id=$id");
    return $resultado;
}



function getEmpreendimentos(){
    
    $resultado = selectSQL("SELECT * FROM empreendimentos");
    return $resultado;

}
  
?>