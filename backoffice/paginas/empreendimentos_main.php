<?php

$empreendimentos = getEmpreendimentos();

$form = isset($_GET["titulo"]) && isset($_GET["texto"]);

if ($form){

  $titulo = $_GET["titulo"];
  $texto = $_GET["texto"];

  iduSQL("INSERT INTO empreendimentos (titulo, texto) VALUES ('$titulo', '$texto')");

  echo "<script>window.location.href='empreendimentos.php'</script>";
  exit(); 
}

if (isset($_GET["apagar"])) {
  $apagar = intval($_GET["apagar"]);
  iduSQL("DELETE FROM empreendimentos WHERE id=$apagar");

  echo "<script>window.location.href='empreendimentos.php'</script>";
  exit(); 
}

?>

<script>
function confirmarExclusao(id) {
    if (confirm("Tem certeza que deseja apagar este empreendimento?")) {
        window.location.href = "empreendimentos.php?apagar=" + id;
    }
}
</script>

<main class="container-fluid">

  <div class="row text-center my-4">
    <h1 class="col-12">Editar - Empreendimentos</h1>
  </div>


  <div class="col-6 text-center justify-content-center mx-auto">

    <form action="empreendimentos.php">

      <input type="text" name="titulo" placeholder="Título" required><br>
      <br>
      <textarea  style="width: 100%; height: 150px;" name="texto" cols="30" rows="3"></textarea>
      <br>
      <input type="submit" value="Adicionar Empreendimento">

    </form>

    <br><br>
      
  </div>

  <br><br>

  <div class="row">
    <div class="col-12 text-center">

      <table>
        <tr>
          <th class="tam">ID</th>
         
          <th>Título</th>
          <th>Texto</th>
          <th class="tam">Ações</th>
        </tr>

        <?php foreach($empreendimentos as $b): ?>

          <tr>
            <td> <?= $b["id"]; ?> </td>
            <td> <?= $b["titulo"]; ?> 
            <td> <?= $b["texto"]; ?> </td>

            <form action="empreendimentos_editar.php">
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

