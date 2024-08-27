<?php

$contactos = getContactosMenu();

if (isset($_POST["editar"])) {
    $editar = intval($_POST["editar"]);
    $telefone = $_POST["telefone"];
    $morada = $_POST["morada"];
    $email = $_POST["email"];
    iduSQL("UPDATE contactos SET telefone ='$telefone', morada ='$morada' , email ='$email' WHERE ID=$editar");
    echo "<script>window.location.href='contactos.php'</script>";
    exit();
}

?>
<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12">Editar - Contactos</h1>
    </div>

    <br><br>

    <div class="row">

        <div class="col-12 text-center">

            <table>

                <tr>
                    <th>ID</th>
                    <th>Telefone</th>
                    <th>Morada</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>

                <?php foreach($contactos as $b): ?>

                    <tr>
                        <td><?= $b["id"]; ?></td>

                        <form action="" method="POST">

                            <td>
                                <input name="telefone" cols="30" rows="2" value= "<?= $b["telefone"]; ?>" required></textarea>    
                            </td>

                            <td>
                                <input name="morada" cols="30" rows="5" value= "<?= $b["morada"]; ?>"required></textarea>
                            </td>

                            <td>
                                <input name="email" cols="30" rows="5" value="<?= $b["email"]; ?>"required></textarea>
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
