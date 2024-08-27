<?php

function getBanner($pagina){
    $resultado = selectSQL("SELECT imagem FROM banners WHERE pagina='$pagina'");
    return $resultado;
}

?>