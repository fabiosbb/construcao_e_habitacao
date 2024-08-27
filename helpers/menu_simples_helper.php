<?php

function getMenuSimplesId($id){
    $resultado = selectSQLUnico("SELECT * FROM menu_simples WHERE id=$id");
    return $resultado;
}



?>