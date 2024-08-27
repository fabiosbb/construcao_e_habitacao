<?php

require_once("requisitos.php");

$pagina = "destaques";

$carrossel = getTodosCarrossel();
$texto_quem_somos = getQuemSomos();
$destaques = getDestaquesMenu();




?>

<main class="container-fluid p-0">

  <div class="row m-auto ">

    <div class="col-12 p-0">

      <div id="carouselExampleIndicators" class="carousel slide">

        <div class="carousel-indicators">

          <?php foreach($carrossel as $i => $c): ?>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" class="<?=($i == 0) ? "active" : ""?>" aria-current="true" aria-label="<?= $i+1; ?>"></button>
      
          <?php endforeach; ?>  
            
        </div>
      
        <div class="carousel-inner mb-5">
          
          <?php foreach($carrossel as $i => $c): ?>

            <div class="carousel-item sombra <?=($i == 0) ? "active" : ""?>">
              <img src="<?= $c ["imagem"];?>" class="d-block w-100" alt="...">
            </div>
            
          <?php endforeach; ?>   

        </div>
        
      </div>
    </div>
  </div>

  <div class="row text-center mx-auto ajuste_main">

    <div class="col-9 m-auto mb-1 ajuste_coluna media_bemvindo">

      <div class="linha-laranja mt-3"></div>  

      <h1 class="bemvindo mb-5">Bem-vindo à <br> Cooperativa de Construção e Habitação Tripeira</h1>

      <p class="texto"> <?=$texto_quem_somos; ?></p>

      <a href="quem_somos.php">
        <button class="button_home mt-5">Ver mais</button>
      </a>

      <div class="linha-laranja"></div>

      <h1 class=" h1_destaque pb-5">Destaques</h1>

      <div class="row media_992 justify-content-center text-center align-items-center">

        <?php foreach($destaques as $d): ?>
          <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-12 col-sm-9 gap_360 mb-5 d-flex">
            <div class="caixa ajuste_360">
              <img src="imagens/destaque1.png" alt="destaque1">
              <div class="texto_card">
                <h5><?= $d["titulo"]; ?></h5>
                <p class="card-text"><?=substr($d["texto"], 0, 105); ?>...</p>
                <a href="destaque1.php?id=<?=$d["id"]; ?>"><button class="button_destaques">Ver mais</button></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>    

      </div>  
    </div>
  </div>           
</main>  
