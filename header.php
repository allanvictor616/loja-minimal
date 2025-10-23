<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minimal | Loja de Roupas</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Seu CSS personalizado -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Fundo escuro com opacidade -->
  <div class="fundo-roxo-escuro"></div>

  <!-- Cabeçalho da loja -->
  <header class="cabecalho">
    <div class="linha-cabecalho">

      <!-- Nome da loja -->
      <div class="logo-loja">Minimal</div>

      <!-- Menu de categorias -->
      <nav class="menu-loja">
        <ul class="lista-menu">
          <li><a href="#">Masculino</a></li>
          <li><a href="#">Feminino</a></li>
          <li><a href="#">Infantil</a></li>
          <li><a href="#">Acessórios</a></li>
        </ul>
      </nav>

      <!-- Botão com menu suspenso -->
      <div class="menu-usuario">
        <button onclick="toggleMenuUsuario()">
          <i class="bi bi-person-circle"></i>
        </button>
        <ul id="lista-usuario" class="lista-usuario">
          <li onclick="abrirPopupCadastro()">Cadastrar</li>
        </ul>
      </div>

      <!-- Botão de ajuda separado -->
      <div class="botao-ajuda">
        <a href="#">Ajuda</a>
      </div>

    </div>
  </header>

  <!-- Pop-up com layout de 3 divs -->
  <div id="popup-cadastro" class="popup-cadastro">
    <!-- Checkbox invisível para controlar a transição -->
    <input type="checkbox" id="toggle">

    <div class="container">
      <div class="left">
        <form class="form-login">
          <h2>Login</h2>

          <label for="login-email">E-mail</label>
          <input type="email" id="login-email" placeholder="Digite seu e-mail" required>

          <label for="login-senha">Senha</label>
          <input type="password" id="login-senha" placeholder="Digite sua senha" required>

          <button type="submit">Entrar</button>
        </form>
      </div>

      <div class="right">
        <form class="form-cadastro">
          <h2 class="titulo-cadastro">Cadastro</h2>

          <label for="cadastro-nome">Nome completo</label>
          <input type="text" id="cadastro-nome" placeholder="Digite seu nome" required>

          <label for="cadastro-email">E-mail</label>
          <input type="email" id="cadastro-email" placeholder="Digite seu e-mail" required>

          <label for="cadastro-senha">Senha</label>
          <input type="password" id="cadastro-senha" placeholder="Crie uma senha" required>

          <button type="submit">Cadastrar</button>
        </form>
      </div>

      <div class="middle">
        <h2 id="middle-titulo">Bem-vindo à Minimal</h2>
        <p id="middle-texto">Cadastre-se para começar</p>
        <button id="middle-botao" class="botao-cadastrar-label" onclick="document.getElementById('toggle').click()">Cadastrar</button>
      </div>
    </div>

    <!-- BOTAO DE FECHAR -->
    <button type="button" class="fechar-popup" aria-label="Fechar">
      <i class="bi bi-x-circle"></i>
    </button>



    <!-- Botões de alternância mobile -->
    <div class="mobile-toggle">
      <p>Novo por aqui? <label for="toggle" class="cadastro-link">Cadastre-se</label></p>
    </div>

    <div class="mobile-toggle cadastro">
      <p>Já é nosso cliente? <label for="toggle" class="login-link">Faça o Login</label></p>
    </div>
  </div>

  </div>

  <!-- Script JS -->
  <script src="script.js"></script>
</body>

</html>