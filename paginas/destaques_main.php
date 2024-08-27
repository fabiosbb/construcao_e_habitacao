<?php

require_once("requisitos.php");

$pagina = "destaques";
$elemento_por_pagina = 6;
$pagina_atual = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;
$ignorar = ($pagina_atual - 1) * $elemento_por_pagina;

$destaques = selectSQL("SELECT * FROM destaques LIMIT $elemento_por_pagina OFFSET $ignorar");

$destaques_info = getDestaques($elemento_por_pagina, $pagina_atual); 
$destaques = $destaques_info['destaques'];
$total_paginas = $destaques_info['total_paginas'];
$carrossel = getBanner($pagina);

?>

<main class="container-fluid p-0">

  <div class="row m-auto ">

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
  </div>

  <div class="row text-center mx-auto ajuste_main">

    <div class="col-9 m-auto mb-1 ajuste_coluna media_bemvindo">

      <div class="linha-laranja mt-3 "></div>  

      <h1 class="h1_destaque">Destaques</h1>

      <div class="row media_992 text-center align-items-center  ">

        <?php foreach($destaques as $d): ?>
          <div class="col-xxl- col-xl-5 col-lg-12 col-md-12 col-sm-9 gap_360 destaques_ajustes mx-auto">
            <div class="caixa_destaques ajuste_360">
              <img src="<?= $d["imagem"]; ?>" alt="destaque1">
              <div class="texto_card_destaques">
                <h5 class="h5_destaques"><?= $d["titulo"]; ?></h5>
                <p class="card-text"><?=substr($d["texto"], 0, 350); ?></p>
                <a href="destaque1.php?id=<?=$d["id"]; ?>"><button class="button_destaques_novo">Ver mais</button></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>    
      </div>  
    </div>
  </div> 
  
  <div class="m-auto text-center mt-5">

    <form action="" method="">
      <button class="botao_destaque" name="pagina" value="<?= max(1, $pagina_atual - 1); ?>"><</button>

      <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
        <button class="botao_destaque" name="pagina" value="<?= $i; ?>" <?= ($i == $pagina_atual) ? 'disabled' : ''; ?>>
            <?= $i; ?>
        </button>
      <?php endfor; ?>

      <button class="botao_destaque" name="pagina" value="<?= min($pagina_atual + 1, $total_paginas); ?>">></button>
      </form>
    </div>

  </div>

</main>  
