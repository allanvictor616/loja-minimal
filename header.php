<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="grid-layout">
        <header>
            <div class="logo-area">
                <img src="images/menu-logo.png" alt="Logo do Site" class="logo-img">
                <h1>Loja Minimal</h1>
            </div>

            <button id="menu-toggle" class="menu-toggle" aria-label="Abrir menu" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>

            <!-- Menu de Categorias -->
            <nav class="categoria-nav">
                <ul>
                    <li><a href="#">Calçados</a></li>
                    <li><a href="#">Roupas</a></li>
                    <li><a href="#">Corpo</a></li>
                    <li><a href="#">Cabelo</a></li>
                    <li><a href="#">Coloridos</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>


            <nav id="main-nav">
                <!-- Link direto para Início -->
                <a href="index.php" class="nav-link">
                    Início
                </a>

                <!-- Botão com ícone que abre o menu -->
                <div class="menu-principal">
                    <button class="menu-btn" id="menu-btn" aria-expanded="false">
                        <i class="bi bi-house-door-fill"></i>
                    </button>
                    <ul class="menu-dropdown" id="menu-dropdown">
                        <li><a href="atualizar.php">Atualizar Cadastro</a></li>
                        <li><a href="pos-pagamento.php?status=pending">Pós-Pagamento</a></li>
                    </ul>
                </div>
            </nav>

        </header>