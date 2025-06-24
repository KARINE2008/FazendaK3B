<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    <title>Gerenciar Raça</title>
</head>

<body>
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>
    <main class=container>
        <?php
        spl_autoload_register(function ($class) {
            require_once "classes/{$class}.class.php";
        });
        if (filter_has_var(INPUT_POST, "id")) {
            $edtRaca = new Raca;
            $idRaca = intval(filter_input(INPUT_POST, "idRaca"));
            $raca = $edtRaca->search("idRaca", $idRaca);
        }
        ?>
        <form method="post" action="dbRaca.php" class="row g-3 mt-3">
            <input type="hidden" value="<?php echo $raca->id_raca ?? null;?>"name="idRaca" >
            <div class="col-12">
                <label for="raca" class="form-label">Raça</label>
                <input type="text" name="raca" id="raca" placeholder="Digite o nome da raça" required
                    class="form-control" value="<?php echo $raca->nome ??null; ?>">
            </div>
            <div class="col-12">
                <button type="submit" name="btnGravar" id="btnGravar" class="btn btn-outline-primary">Gravar</button>
            </div>
        </form>

    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>