<main class="container-fluid">

    <div class="row text-center my-4">
        <h1 class="col-12">Backoffice - Home </h1>
    </div>

    <br><br>

    <div class="row">

        <div class="col-12 text-center">

            <h3>Bem-vindo <?= $usuario["nome"]; ?></h3>
            <h4>Data do último acesso: ( <?=$usuario["ultimo_acesso"]; ?> )</h4>

        </div>

    </div>
</main>