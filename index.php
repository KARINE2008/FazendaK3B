<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/baseSite.css">
    <link rel="shortcut icon" href="Images/Image.png" type="Images/x-icon">
    <title>Fazenda Pedacinho do céu - Cria e recria Gado de Corte</title>
</head>

<body>
    <!-- nosso cabeçalho -->
    <header>
        <img src="Images/Abertura.png" alt="Logo da Fazenda Pedacinho do céu">
        <div class="empresa">
            <h1> Fazenda Pedacinho do céu </h1>
            <p>Especializada em Cria e Recria de Gado de Corte</p>
        </div>
    </header>
    <!-- Menu de navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#atidades">Atidades</a>
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
    <div>
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
                        <li>Contamos com pastagens de qualidade: </li>
                        <li>Curral moderno </li>
                        <li>Áreas de confinamento </li>
                        <li>Gestão eficiente do rebanho</li>
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
        <!-- Finalizando o main -->
        <footer>
            <?php require_once '_parts/_footer.php'; ?>
        </footer>
    </div>
</body>

</html>