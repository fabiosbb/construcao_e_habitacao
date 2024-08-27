<?php

$carrossel = getTodosCarrossel();
$form_carrossel = isset($_GET["imagem"]);

if ($form_carrossel) {
    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO carrossel (imagem) VALUES ('$imagem')");
    echo "<script>window.location.href='carrossel.php'</script>";
    exit();
}

$form = isset($_GET["editar"]);

if ($form) {

    $editar = intval($_GET["editar"]);
    $carrossel_editar = getCarrosselID($editar);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imagem = $_POST["imagem"];
        iduSQL("UPDATE carrossel SET imagem ='$imagem' WHERE ID=$editar");
        echo "<script>window.location.href='carrossel.php'</script>";
        exit();
    }
    
} else {
    echo "<script>window.location.href='carrossel.php'</script>";
    exit();
}

?>

<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12">Carrossel - Editar</h1>
    </div>

    <div class="row">

        <div class="col-12">

            <div class="col-12 text-center">

                <form action="">

                    <input type="hidden" name="editar" value="<?= $editar; ?>">

                    <input type="text" name="imagem" placeholder="imagem" value="<?= $carrossel_editar["imagem"]; ?>" required>
                    <br><br>
                    <input type="submit" value="editar">

                </form>

            </div>

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