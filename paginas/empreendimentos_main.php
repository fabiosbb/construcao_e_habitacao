<?php

require_once("requisitos.php");



if(isset($_GET['id'])) {
 
    $id = $_GET['id'];
    
   
    $empreendimento = getEmpreendimentosPorId($id);
    
   
    $carrossel = getBanner($menu_atual);

}

?>

<?php require_once("componentes/header.php") ?>

<main class="container-fluid p-0">
    <div class="row d-block text-center mx-auto ajuste_main">

        <div class="col-12 p-0">

            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner mb-5">
            
                    <?php foreach($carrossel as $i => $c): ?>

                        <div class="carousel-item sombra <?=($i == 0) ? "active" : ""?>">
                        <img src="<?= $c ["imagem"];?>" class="d-block w-100" alt="...">
                        </div>
                        
                    <?php endforeach; ?>   
                </div>  
            </div>
        </div>
            
        <div class="col-9 m-auto mb-1 ajuste_coluna media_bemvindo">

            <div class="linha-laranja mt-5"></div>

            <h1 class="bemvindo mb-5"><?=$empreendimento["titulo"]; ?></h1>

            <p class="texto"><?=$empreendimento["texto"]; ?></p>

         

        </div>
    </div>     
</main>  


