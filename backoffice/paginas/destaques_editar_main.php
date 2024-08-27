<?php

$destaques = getDestaquesMenu();

$form = isset($_POST["imagem"]) && isset($_POST["texto"]) && isset($_POST["titulo"]);

if ($form) {
    $imagem = $_POST["imagem"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    
    iduSQL("INSERT INTO destaques (imagem, titulo, texto) VALUES ('$imagem','$titulo','$texto')");
    echo "<script>window.location.href='destaques.php'</script>";
    exit();
}

if (isset($_POST["editar"])) {
    $editar = intval($_POST["editar"]);
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $imagem = $_POST["imagem_" . $editar];
    $pagina_home = isset($_GET["pagina_home"]) ? 1 : 0;
    
    iduSQL("UPDATE destaques SET texto ='$texto', titulo = '$titulo', imagem = '$imagem', pagina_home ='$pagina_home' WHERE ID=$editar");
    echo "<script>window.location.href='destaques.php'</script>";
    exit();
}
?>

<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12">Editar - Destaques</h1>
    </div>

    <br><br>

    <div class="row">

        <div class="col-12 text-center">

            <table>
                <tr>
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($destaques as $b): ?>
                    <tr>

                        <form action="" method="POST">

                            <td><?= $b["id"]; ?></td>

                            <td>
                                <img src="<?= $b["imagem"]; ?>" width="250">
                            
                                <input type="hidden" name="editar" value="<?= $b["id"]; ?>">
                                <input type="text" name="imagem_<?= $b["id"]; ?>" placeholder="Imagem" value="<?= $b["imagem"]; ?>" required>
                                <a target="_blank" href="http://localhost/construcao_e_habitacao/gestor_ficheiros/tinyfilemanager.php">
                                    <button type="button">Gestor de Ficheiros</button>
                                </a>
                            </td>

                            <td>
                                <textarea name="titulo" cols="30" rows="2" required><?= $b["titulo"]; ?></textarea>
                            </td>

                            <td>
                                <textarea name="texto" cols="30" rows="5" required><?= $b["texto"]; ?></textarea>
                            </td>

                            <td>
                                <input type="checkbox" name="pagina_home" value="0"> Página home<br>
                                <br>
                                <button type="submit">Concluir</button>
                            </td>
                        </form>    
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>
