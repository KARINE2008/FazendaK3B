<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gerenciar Raça</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-style=" background-color:rgb(44, 149, 224) border-bottom border-body>
            <div class="container">
                <img src="Images/logo.jpg" alt="Logo">
                <button type="Button" class="navbar-toggler" data-b-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navgation"
                    aria-label="Toggle navgation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="racas.php" class="nav-link">Raça</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Animal</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Produto</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Lote</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manejo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class=container>
        <form action="dbRaca.php" method="post" class="row g3 mt-3">
            <div class="col-12">
                <label for="raca" class="form-label">Raça</label>
                <input type="text" name="raca" id="raca" placeholder="Digite o nome da raça" required
                     class="form-control">
            </div>
            <div class="col-12">
                <button type="submit" name="btnGravar" id="btnGravar" class="btn btn-outline-primary">Gravar</button>
            </div>
        </form>

    </main>
    <footer>
        <p>&copy; 2025 Todos o direitos reservados</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>