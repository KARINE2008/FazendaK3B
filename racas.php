<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    <title>Raças</title>
</head>

<body>
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>
    <main class="container mt-3">
        <div class="mt-3">
            <h3>Raças</h3>
        </div>
        <div class="mt-3">
            <a hret="gerRaca.php" class="btn btn-">Nova Raça</a>
        </div>
        <table class="table">
            <thead class="bs-primary-rgb">
                <tr>
                    <th>#</th>
                    <th>Raça</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                spl_autoload_register(function ($class) {
                    require_once "classes/{$class}.class.php";
                });

                $r = new Raca();
                $racas = $r->all();
                foreach ($racas as $raca):
                    ?>
                    <tr>
                        <td><?php echo $raca->id_raca; ?></td>
                        <td><?php echo $raca->nome; ?></td>
                        <td>
                            <form action="<?php echo htmlspecialchars("gerRaca.php") ?>" method="post" class="d-flex">
                                <input type="hidden" name="idRaca" value="<?php echo $raca->id_raca ?>"><button
                                    name="btnEditar" class="btn btn-primary btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja editar a raça?');"><i
                                        class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <footer>
        <?php require_once "_parts/_menu.php"; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>