<?php

require_once("requisitos.php");

$pagina = "contactos";
$carrossel = getBanner($pagina);
$contactos = getContactos();


$form = isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["mensagem"]);

if ($form) {

   
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

}

?>


<main>

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

    <div class="main container-fluid my-5">

        <div class="linha-laranja mt-3"></div>  

        <h1 class="h1_destaque">Contactos</h1>

        <div class="row mx-auto transform_cont">

            <div class="col-xxl-5 col-xl-4  col-lg-8 mb-lg-5  col-md-8 mb-md-5 informacao_contactos dados mx-auto ajuste_tela ">
    
                <p class="informacao_contactos"> MORADA <br> <?= $contactos['morada']; ?></p>
                <p class="informacao_contactos">TELEFONE <br><?= $contactos['telefone']; ?></p>
                <p class="informacao_contactos">FAX<br>(+351) 222 111 333</p>
                <p class="informacao_contactos">E-MAIL <br> <?= $contactos['email']; ?></p>

            </div>  

            <div class="col-xxl-5 col-xl-4  col-lg-5 mt-lg-5  col-md-5 mt-md-7 dados_1 mx-auto informacao_contactos disposicao ajuste_767">

                <form action="" method="POST">

                    <label for="copia">*NOME</label>
                    <br>
                    <input type="text" name="nome" placeholder="Digite aqui o seu nome" required autofocus>
                    <br><br>

                    <label for="copia">*E-MAIL</label>
                    <br>
                    <input type="email" name="email" placeholder="Digite aqui o seu e-mail" required>
                    <br><br>

                    <label for="copia">*TELEFONE</label>
                    <br>
                    <input type="number" name="telefone" placeholder="Digite aqui o seu telefone" required>
                    <br><br>

                    <label for="copia">*ASSUNTO</label>
                    <br>
                    <input type="text" name="assunto" placeholder="Digite aqui o assunto" required>
                    <br><br>

                    <label for="copia">*MENSAGEM</label>
                    <br>
                    <textarea name="mensagem" cols="50" rows="7" placeholder="Digite aqui a sua mensagem" required></textarea>
                    <br><br>

                    <div class="fonte_s pb-5">*Campos de preenchimento obrigatório</div>
                    
                    <div class="form-group pb-5">
                        <input class="form-ckeck-input" type="checkbox" name="copia" id="copia">
                        <label for="copia" id="fonte_checkbox">Receber mensagem no e-mail</label>
                        <div id="rec" class="g-recaptcha ms-5" data-sitekey="your_site_key" ></div>
                    </div>
                    <br>

                
                    <br><br>

                    <input type="submit" value="Enviar">

                </form>

            </div>
        </div>

    </div>

</main>   