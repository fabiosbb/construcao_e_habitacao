<?php

$contactos = getContactosMenu();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefone = $_POST["telefone"];
    $morada = $_POST["morada"];
    $email = $_POST["email"];

    iduSQL("INSERT INTO contactos (telefone, morada, email) VALUES ('$telefone', '$morada', '$email')");
    echo "<script>window.location.href='contactos.php'</script>";
    exit();
}

?>

<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12">Editar - contactos</h1>
    </div>

    <br><br>

    <div class="row">

        <div class="col-12 text-center">

            <table>

                <tr>
                    <th class="tam">ID</th>
                    <th>Telefone</th>
                    <th>Morada</th>
                    <th>E-mail</th>
                    <th class="tam">Ações</th>
                </tr>

                <?php foreach($contactos as $b): ?>

                    <tr>
                        <td><?= $b["id"]; ?></td>
                        <td><?= $b["telefone"]; ?></td>
                        <td><?= $b["morada"]; ?></td>
                        <td><?= $b["email"]; ?></td>
                        <td>
                            <form action="contactos_editar.php">
                                <br>
                                <button name="editar" value="<?= $b["id"]; ?>">Editar</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>
                
            </table>
        </div>
    </div>
</main>
