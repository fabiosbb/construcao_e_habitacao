<?php

$empreendimentos = getEmpreendimentos();


if (isset($_POST["editar"])) {
    $editar = intval($_POST["editar"]);
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    iduSQL("UPDATE empreendimentos SET texto ='$texto', titulo ='$titulo' WHERE ID=$editar");
    echo "<script>window.location.href='empreendimentos.php'</script>";
    exit();
}
?>
<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12">Editar - Empreendimentos</h1>
    </div>

    <br><br>

    <div class="row">
        <div class="col-12 text-center">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($empreendimentos as $b): ?>

                    <tr>
                        <td><?= $b["id"]; ?></td>

                        <form action="" method="POST">

                            <td>
                                <textarea name="titulo" cols="30" rows="2" required><?= $b["titulo"]; ?></textarea> 
                            </td>

                            <td>
                                <textarea name="texto" cols="30" rows="5" required><?= $b["texto"]; ?></textarea>
                            </td>

                            </td>
                            <td>
                                <input type="hidden" name="editar" value="<?= $b["id"]; ?>">
                                <button type="submit">Concluir</button>   
                            </td>

                        </form>
                       
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</main>
