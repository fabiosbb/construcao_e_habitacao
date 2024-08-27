<?php
require_once("../requisitos.php");

if(!logado()){
    header("location: index.php");
    exit();
}
else{
    $usuario = $_SESSION["usuario"];
}

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Backoffice</title>

        <link rel = "stylesheet" href = "estilo.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="../main.js"></script>
        
        <script src="https://cdn.tiny.cloud/1/x71esalplgcfy658dxaq4eyi0ritne39443n2dyfyvj9kg9r/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

        <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
        <script>
          
            tinymce.init({
                selector: 'textarea',
                plugins: 'image anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                relative_urls: false,
                remove_script_host: false,
                image_advtab: true,

                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
            });
        </script>

    </head>

    <body>

        <div class="container-fluid">
            
            <div class="row">

                <div class="col-12 text-center">

                    <nav class="navbar navbar-expand-lg bg-danger m-auto">
                        <div class="container-fluid">
                            
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-light">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="carrossel.php">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="noticias.php">Noticias</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="destaques.php">Destaques</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="contactos.php">Contactos</a>
                                    </li>
                                   
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu Simples</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-dark" href="menu_simples.php?id=1">Quem Somos</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-dark" href="menu_simples.php?id=2">Sócios</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-dark" href="menu_simples.php?id=3">Centro de Férias</a></li>
                                            
                                        </ul>   
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="empreendimentos.php">Empreendimentos</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
                                    </li>
                             
                                </ul>
                           
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
        
    </body>
</html>

    
