<?php

require_once("requisitos.php");

$empreendimentos = getEmpreendimentosMenu();

?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto</title>

  <link rel = "stylesheet" href = "estilo.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  
  <header class="container-fluid">

    <div class="sombra_nav row display_none display_block pt-1 ps-1">

      <div class="col ajuste_div">
        <img class="img-fluid" src="imagens/logo.png" alt="logo_home">
      </div>

      <div class="col-12">

        <nav class="navbar" id="nav-topo-mobile">

          <button onclick="menuMobile()" class="navbar-toggler ms-auto border-0 " type="button"  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          
            <span id="menu_fechado" lass="navbar-toggle-icon">
                <?xml version="1.0" encoding="UTF-8"?>
                
                <svg id="Layer_2"   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.74 16.98" style="stroke: none; width: 30px; height: 17px;">
                  <defs>
                      <style>.cls-1{fill:none;stroke:#333;stroke-width:2px;}</style>
                  </defs>
                  <g id="Layer_1-2">
                      <g>
                          <line id="Line_1" class="cls-1" y1="1" x2="29.74" y2="1"/>
                          <line id="Line_2" class="cls-1" y1="8.49" x2="29.74" y2="8.49"/>
                          <line id="Line_3" class="cls-1" y1="15.98" x2="29.74" y2="15.98"/>
                      </g>
                  </g>
                </svg>
            </span>    

            <span id="menu_aberto" class="navbar-toggle-icon d-none">
              <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
              </svg>
            </span>
          
        
          
        
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

            <ul class="navbar-nav" id="ajuste_home">

              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>

              <li><hr class="dropdown-divider"></li></li>

              <li class="nav-item">
              <a class="nav-link" href="quem_somos.php">quem somos</a>
              </li>

              <li class="nav-item">
              <a class="nav-link" href="socios.php">sócios</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="noticias.php">noticias</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="destaques.php">Destaques</a>
              </li>  

              <li class="nav-item dropdown">

                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Empreendimentos</a>

                <ul class="dropdown-menu">

                  <?php foreach ($empreendimentos as $i =>$e): ?>    

                    <?php if($i > 0): ?>
                      <li><hr class="dropdown-divider"></li>
                    <?php endif; ?> 
                    
                    <li>
                      <a class="dropdown-item" href="empreendimentos.php?id=<?= $e["id"];?>"><?=$e["titulo"]; ?></a>
                    </li>
                    
                  <?php endforeach; ?>      

                </ul>

                <li class="nav-item">
                  <a class="nav-link" href="centro_de_ferias.php">centro de férias</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contactos.php">contactos</a>
                </li>  

              </li>
            </ul>
          </div> 
        </nav>
      </div> 
    </div>  
    
    <div class="row posicao_header d-lg-block d-md-none d-sm-none d-none m-auto">
      <div id="logo" class="col mb-5 col-md-2">
        <img class="mt-1 ajuste_logo" src="uploads/imagens/logo.png" alt="logo">
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 mt-3 col-md-12 mb-8 p-0 ajuste_nav">
        <nav class="navbar navbar-expand-lg media_nav">
          <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav mb-3">
                <a class="nav-link px-0" <?= ($menu_atual = "home") ? "active" : ""; ?> a href="home.php">Home</a>
                <a class="nav-link px-0" <?= ($menu_atual = "quem_somos") ? "active" : ""; ?> a href="quem_somos.php">Quem Somos</a>
                <a class="nav-link px-0" a href="socios.php">Sócios</a>
                <a class="nav-link px-0" a href="noticias.php">Notícias</a>
                <a class="nav-link px-0" a href="destaques.php">Destaques</a>
                <div class="navbar navbar-nav ajuste_drop m-0">
                  <a  class="nav-link px-0 pb-3" id="menu_empreendimento" a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Empreendimentos
                  </a>
                  <ul class="dropdown-menu dropdown_transparencia">

                    <?php foreach ($empreendimentos as $i =>$e): ?>    

                      <?php if($i > 0): ?>
                        <li><hr class="dropdown-divider"></li>
                      <?php endif; ?> 

                      <li>
                        <a class="dropdown-item text-white mb-2" href="empreendimentos.php?id=<?= $e["id"];?>"><?=$e["titulo"]; ?></a>
                      </li>

                    <?php endforeach; ?>      

                  </ul>
                </div>
                <a class="nav-link px-0" href="centro_de_ferias.php">Centro de Férias</a>
                <a class="nav-link px-0" href="contactos.php">Contactos</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

