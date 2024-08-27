<?php
$form = isset($_GET["id"]);

if($form){

    $id = intval($_GET["id"]);
    $menu_simples = getMenuSimplesID($id);

    $form_2 = isset($_GET["texto"]) && isset($_GET["titulo"]);

    if($form_2){
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];


        iduSQL("UPDATE menu_simples SET titulo ='$titulo' , texto='$texto' WHERE ID=$id");

    }

}else{
    header("location: menu_simples.php?id=".$id);
    exit();
}
?>
<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12"> Editar - <?= $menu_simples["titulo"]; ?></h1>
    </div>

    <div class="row">

        <div class="col-12">

            <div class="col-12 text-center">

                <form action="">

                    <input type="hidden" name="id" value="<?= $id; ?>">


                    <input type="text" name="titulo" placeholder="Título" value="<?= $menu_simples["titulo"]; ?>" required>
                    <input type="submit" value="editar">
                   

                    <br><br>
                    <textarea name="texto" id="texto" cols="77" rows="15"><?= $menu_simples["texto"]; ?></textarea>

                    
                    <br><br>
                    <input type="submit" value="editar">

                </form>

            </div>

        </div>

    </div>
</main>