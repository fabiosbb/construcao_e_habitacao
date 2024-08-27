<?php


require("componentes/header.php");

$form = isset($_GET["apagar"]);

if($form){

    $apagar = intval($_GET["apagar"]);
    iduSQL ("DELETE FROM carrossel WHERE id=$apagar");
}

echo "<script>window.location.href='carrossel.php'</script>";
exit();


?>