<?php

function getQuemSomos(){
    
    //Abrevia o texto pagina Home

    $resultado = selectSQLUnico("SELECT texto FROM menu_simples WHERE id=1");
    $texto = $resultado["texto"];
    $texto_abreviado = substr($texto, 0, 780);
    return $texto_abreviado;
}

function getQuemSomosMain(){

    //Pagina Quem Somos
    
    $resultado = selectSQLUnico("SELECT * FROM menu_simples WHERE id=1");
    return $resultado;
}

?>