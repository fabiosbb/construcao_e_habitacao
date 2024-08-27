<?php


function getsocios(){

$resultado = selectSQLUnico("SELECT * FROM menu_simples WHERE id=2");
return $resultado;

}


?>