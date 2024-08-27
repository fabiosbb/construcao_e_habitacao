<?php

function getferias(){

$resultado = selectSQLUnico("SELECT * FROM menu_simples WHERE id=3");
return $resultado;

}

?>
