<?php

$destaques = getDestaquesMenu();

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);

if ($form){

  $imagem = $_GET["imagem"];
  $titulo = $_GET["titulo"];
  $texto = $_GET["texto"];
  $pagina_home = isset($_GET["pagina_home"]) ? 0 : 1;
  $id = isset($_GET["id"]) ? intval($_GET["id"]) : null;

  iduSQL("INSERT INTO destaques (imagem, titulo, texto, pagina_home) VALUES ('$imagem', '$titulo', '$texto','$pagina_home')");

  echo "<script>window.location.href='destaques.php'</script>";
  exit(); 
}

if (isset($_GET["apagar"])) {
  $apagar = intval($_GET["apagar"]);
  iduSQL("DELETE FROM destaques WHERE id=$apagar");

  echo "<script>window.location.href='destaques.php'</script>";
  exit(); 
}

?>

<script>
function confirmarExclusao(id) {
  if (confirm("Tem certeza que deseja apagar este destaque?")) {
  window.location.href = "destaques.php?apagar=" + id;
}
}
</script>

<main class="container-fluid">

  <div class="row text-center my-4">
    <h1 class="col-12">Destaques</h1>
  </div>


  <div class="col-6 text-center justify-content-center mx-auto">

    <form action="destaques.php">
      
      <input type="text" name="imagem" placeholder="URL da Imagem" required>
      <br><br>
      <input type="text" name="titulo" placeholder="Título" required><br>
      <br>
      <input type="checkbox" name="pagina_home" value="1"> Destaque na Página Inicial<br>
      <br>

      <textarea  style="width: 100%; height: 150px;" name="texto" cols="30" rows="3"></textarea><br>

      <input type="submit" value="Adicionar Destaque">
    </form>

    <br><br>
      
      
  </div>

  <br><br>

  <div class="row">
    <div class="col-12 text-center">

      <table>
        <tr>
          <th class="tam">ID</th>
          <th>Imagem</th>
          <th>Título</th>
          <th>Texto</th>
          <th class="tam">Ações</th>
        </tr>

        <?php foreach($destaques as $b): ?>

          <tr>
            <td> <?= $b["id"]; ?> </td>
            <td> <img src="<?= $b["imagem"]; ?>" width="150"> </td>
            <td> <?= $b["titulo"]; ?> 
            <td> <?= $b["texto"]; ?> </td>

            <form action="destaques_editar.php">
              <td>
                <br>
                <button name="editar" value="<?=$b["id"]; ?>">Editar</button> 
                <button type="button" name="apagar" value="<?=$b["id"]; ?>" onclick="confirmarExclusao(<?=$b['id'];?>)">Apagar</button>
              </td>
            </form>

          </tr>
        <?php endforeach; ?>
      </table>

    </div>
  </div>
</main>

