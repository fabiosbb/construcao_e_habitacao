<?php

function getTodosCarrossel(){
    $resultado = selectSQL("SELECT * FROM carrossel");
    return $resultado;
}

function getCarrosselID($id){
    $resultado = selectSQLUnico("SELECT * FROM carrossel where id=$id");
    return $resultado;
}

?>