<?php

require_once("requisitos.php");

$pagina = "noticias";
$elemento_por_pagina = 6;
$pagina_atual = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;


$noticias_info = getNoticias($elemento_por_pagina, $pagina_atual); 
$noticias = $noticias_info['noticias'];
$total_paginas = $noticias_info['total_paginas'];
$carrossel = getBanner($pagina);


if($pagina_atual < 1){$pagina_atual = 1;}
elseif($pagina_atual > $total_paginas){$pagina_atual = $total_paginas;}

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

      <div class="linha-laranja mt-3"></div>  

      <h1 class=" h1_destaque ">Notícias</h1>

      <div class="row media_992 text-center align-items-center">

        <?php foreach($noticias as $d): ?>
          <div class="col-xxl- col-xl-5 col-lg-12 col-md-12 col-sm-9 gap_360 destaques_ajustes mx-auto">
            <div class="caixa_destaques ajuste_360">
              <img src="<?= $d["imagem"]; ?>">
              <div class="texto_card_destaques">
                <h5 class="h5_destaques"><?= $d["titulo"]; ?></h5>
                <p class="card-text"><?=substr($d["texto"], 0, 350); ?></p>
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


</main>  
