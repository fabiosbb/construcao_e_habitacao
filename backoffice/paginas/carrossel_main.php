<?php

$carrossel = getTodosCarrossel();
$form = isset($_GET["imagem"]);

if($form){

    $imagem = $_GET["imagem"];
   
    iduSQL("INSERT INTO carrossel (imagem) VALUES ('$imagem')");

    echo "<script>window.location.href='carrossel.php'</script>";
    exit();
}


?>

<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12">Carrossel</h1>
    </div>

    <div class="row">

        <div class="col-12 text-center">

            <form action="">

                <input type="text" name="imagem" placeholder="Imagem" required>
                <a 
                 target="_blank" href="http://localhost/construcao_e_habitacao/gestor_ficheiros/tinyfilemanager.php">
                    <button type="button">Gestor de Ficheiros</button>
                </a>
                <br><br>
                <input type="submit" value="registar">

            </form>

        </div>

    </div>

    <br><br>

    <div class="row">

        <div class="col-12">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Ações</th>
                    </tr>

                    <?php foreach($carrossel as $b): ?>

                        <tr>

                            <td>
                                <?= $b["id"]; ?>
                            </td>

                            <td>
                                <img src="<?= $b["imagem"]; ?>" width="200">
                            </td>

                            <td>
                                <form action="carrossel_editar.php" class="d-inline-block">
                                    <button  name="editar" value="<?=$b["id"]; ?>">Editar</button>
                                </form>
                                <form action="carrossel_apagar.php" class="d-inline-block">
                                    <button name="apagar" value="<?=$b["id"]; ?>">Apagar</button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </table>

         
            </div>

        </div>

    </div>
</main>