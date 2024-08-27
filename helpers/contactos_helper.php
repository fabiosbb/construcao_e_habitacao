<?php

function getContactos(){

    $resultado = selectSQLUnico("SELECT * FROM contactos WHERE id=1");
    return $resultado;
}

function getContactos1() {
    
    $contactos = selectSQL("SELECT * FROM contactos");
    return $contactos;

}
  
function getContactosMenu(){
    $resultado = selectSQL("SELECT * FROM contactos");
    return $resultado;
}
?>