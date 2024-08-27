<?php

require_once("requisitos.php");

$carrossel = getBanner($menu_atual);
$form = isset($_GET['id']);

if($form){

    $id = $_GET['id'];
    $destaque = getDestaquePorId($id);

}else {

    $carrossel = getBanner($pagina);
}

?>

<main class="container-fluid row">

    <?php if($form): ?>

        <div class="p-0">

            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="row carousel-inner mb-5">

                    <?php foreach($carrossel as $i => $c): ?>

                        <div class="carousel-item sombra <?=($i == 0) ? "active" : ""?>">
                            <img src="<?= $c ["imagem"];?>" class="d-block w-100" alt="...">
                        </div>
                        
                    <?php endforeach; ?>   
                </div>  
            </div>
        </div>

        <div class="linha-laranja "></div>  

        <h1 class="h1_destaque">Destaques</h1>

            <div class="col-12 pt-5">
                <h1 class="text-center ajuste_titulo titulo_"><?= str_replace("<br>", "", $destaque["titulo"]); ?></h1>
            </div>

            <div class="col-9 mx-auto">
                <p class="mt-4 mb-4 text-left"><?= $destaque["texto"]; ?></p>
            </div>

            <div class="col-9 text-right mx-auto">
                <a href="destaques.php"><button type="button" class="mb-4 bt_voltar">VOLTAR PARA DESTAQUES</button></a>
            </div>
        </div>
        
    <?php endif; ?>                   
</main>
