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
        <form action="dbRaca.php" method="post" class="row g3 mt-3">
            <div class="col-12">
                <label for="raca" class="form-label">Raça</label>
                <input type="text" name="raca" id="raca" placeholder="Digite o nome da raça" required class="form-control">
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