<?php

require_once("requisitos.php");

$contactos = getContactos();



?>

<footer class="container-fluid">

  <div class="row">

    <div class="col-12 background_1 opac p-0">

      <div class="transparencia_contactos  py-5 text-light  flex-column gap-3">
        
        <div class="linha_branca"></div>

        <p class="contatos_media1200 contatos_media992 mx-auto text-center fonte_footer mt-2 pb-5">Contactos</p>

        <div class="row d-flex justify-content-center text-center gap_991 p-0 m-auto">

          <div class="col-xl-3  col-lg-12 mb-lg-5 icones icone_media1">
            <img class="icones ms-5 mt-3" src="imagens/tel.svg" alt="telefone">
            <p class="mt-5 ms-5 p_1200"><?=$contactos["telefone"]; ?></p>
          </div>            

          <div class="col-xl-3 col-lg-12 mb-lg-5 icones icone_media2">
            <img class="icones me- mt-3" src="imagens/loc.svg" alt="morada">
            <p class="mt-5 me-3 p_1200  ajuste_texto1"><?=$contactos["morada"]; ?></p>
          </div>
            
          <div class="col-xl-3 col-lg-12 mb-lg-5 icones icone_media3">
            <img class="icones me-5 mt-3 " src="imagens/mail.svg" alt="email">
            <p class="mt-5 me-51 p_1200"><?=$contactos["email"]; ?></p>
          </div>

        </div>  
      </div>
    </div>

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
        <a href="home.php" class="<?=($menu_atual == "home") ? "active" : ""; ?>">Home</a>
          <a href="quem_somos.php" class="<?=($menu_atual == "quem_somos") ? "active" : ""; ?>">Quem Somos</a>
          <a href="socios.php" class="<?=($menu_atual == "socios") ? "active" : ""; ?>">Sócios</a>
          <a href="noticias.php" class="<?=($menu_atual == "noticias") ? "active" : ""; ?>">Notícias</a>
          <a href="destaques.php" class="<?=($menu_atual == "destaques") ? "active" : ""; ?>">Destaques</a>
          <a href="#" onclick="abrirMenu()">Empreendimentos</a>
          <a href="centro_de_ferias.php" class="<?=($menu_atual == "centro_de_ferias") ? "active" : ""; ?>">Centro de Férias</a>
          <a href="contactos.php" class="<?=($menu_atual =="contactos") ? "active" : ""; ?>">Contactos</a>
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
