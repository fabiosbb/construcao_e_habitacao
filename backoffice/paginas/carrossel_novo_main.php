<?php

$form = isset($_GET["imagem"]);

if($form){

    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO carrossel (imagem) VALUES ('$imagem')");

    header("Location: carrossel.php");
    exit();
}

?>

<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12">Carrossel - Novo</h1>
    </div>

    <div class="row">

        <div class="col-12 text-center">

            <form action="">

                <input type="text" name="imagem" placeholder="Imagem" required>
                <br><br>
                <input type="submit" value="registar">

            </form>

        </div>

    </div>
</main>




