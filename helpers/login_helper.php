<?php

session_start();
date_default_timezone_set('Europe/lisbon');

function fazerLogin($login, $senha){

    $usuario = selectSQLUnico("SELECT * FROM backoffice WHERE login='$login' AND senha='$senha'");

    if(!empty($usuario)){

        $data = date("H:i:s - d/m/Y");

        $id = $usuario["id"];

        $_SESSION["usuario"] = $usuario;
       
        iduSQL("UPDATE backoffice SET ultimo_acesso='$data' WHERE id=$id");
        return true;
    
    }
    return false;
}

function logado(){

    return isset($_SESSION["usuario"]);
}


?>