<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="CSS/baseSite.css">

    <link rel="shortcut icon" href="Images/Image.png" type="image/x-icon">
    <title>Fazenda Pedacinho do Céu - Cria e Recria Gado de Corte</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <img src="Images/Abertura.png" alt="Logo da Fazenda Pedacinho do Céu">
        <div class="empresa">
            <h1>Fazenda Pedacinho do Céu</h1>
            <p>Especializada em Cria e Recria de Gado de Corte</p>
        </div>
    </header>

    <!-- Menu de navegação -->
    <nav class="navbar navbar-expand-lg nav-custom" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-2"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#serviços">Atividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#estrutura">Estrutura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="dest">
            Quantidade e Sustentabilidade na Produção de Gado de Corte!
        </div>

        <section id="sobre">
            <div class="container">
                <img src="Images/sobrenos.png" alt="Sobre a propriedade">
                <div class="texto">
                    <h2>Sobre Nós</h2>
                    <p>Somos uma fazenda referenciada na criação e recria de gado de corte, utilizando práticas
                        sustentáveis e manejo de alta qualidade.</p>
                </div>
            </div>
        </section>

        <section id="serviços">
            <div class="container">
                <img src="Images/servicos01.png.avif" alt="Atividade de fazenda">
                <div class="texto">
                    <h2>Atividades</h2>
                    <ul>
                        <li>Seleção Genética e Melhoramento</li>
                        <li>Manejo Nutricional para Cria e Recria</li>
                        <li>Sanidade Animal e Bem-Estar</li>
                        <li>Integração Lavoura-Pecuária</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="estrutura">
            <div class="container">
                <img src="Images/estrutura.png" alt="Estrutura da fazenda">
                <div class="texto">
                    <h2>Nossa Estrutura</h2>
                    <ul>
                        <li>Pastagens de qualidade</li>
                        <li>Curral moderno</li>
                        <li>Áreas de confinamento</li>
                        <li>Gestão eficiente do rebanho</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="contato">
            <div class="container">
                <img src="Images/Contato01.png" alt="Informações para contato">
                <div class="texto">
                    <h2>Contato</h2>
                    <p>Email: contato@fazendanome.com</p>
                    <p>Telefone: (11) 1234-5678</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <?php require_once '_parts/_footer.php'; ?>
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>