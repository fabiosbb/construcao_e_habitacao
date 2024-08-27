<?php

require_once("requisitos.php");

$contactos = getContactos();

?>

<footer class="container-fluid">

  <div class="row">


  <div class="col-12 p-0 mt-4 mapa_footer">
    <iframe
      width="100%"
      height="560px"
      frameborder="0"
      style="border:0"
      src="https://www.google.com/maps/embed/v1/place?q=4000-384+Porto,+Portugal&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
      allowfullscreen=""
      aria-hidden="false"
      tabindex="0"
    ></iframe>

    <div class="background_2 col-12 text-white px-0 mt-3">


    <div class="background_2 col-12 text-white px-0 mt-3">

      <div class="transparencia_facebook p-0 pt-2">

        <div class="justify-content-center text-center p-4 mt-5 f-text">

          <img class="facebook"  src="imagens/facebook.svg" alt="facebook">
          <a href="<?=$contactos["link_facebook"]; ?>"class="text-center f_texto mt-4 d-block  text-decoration-none text-white"><?=$contactos["email"]; ?></a>

        </div>
        
        <div class="text-white bg-light linha_ajuste">
          <p class="mb-5"><hr></p>
        </div>

        <div class="col-xxl-6 offset-xxl-5 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 d-lg-block d-md-none d-none pt-4">

          <nav class="nav_footer">
            <a href="home.php" class="<?=($menu_atual =="home") ? "active" : ""; ?>">Home</a>
            <a href="quem_somos.php" class="<?=($menu_atual =="home") ? "active" : ""; ?>">Quem Somos</a>
            <a href="socios.php">Sócios</a>
            <a href="noticias.php">Notícias</a>
            <a href="destaques.php">Destaques</a>
            <a href="#" onclick="abrirMenu()">Empreendimentos</a>
            <a href="centro_de_ferias.php">Centro de Férias</a>
            <a href="contactos.php">Contactos</a>
          </nav>
        
        </div>

        <div  class="col-12 copyright_footer mt-3">
          <a href="www.codemaster.pt"> Copyright &copy; <?=date("Y");?> Grupo MediaMaster. Todos os direitos reservados</a>
        </div>

      </div>
    </div>   
  </div>
</footer>

<script src="main.js"></script>
</body>
</html>
