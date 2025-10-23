// Abre o pop-up com as 3 divs e reseta o estado do painel
function abrirPopupCadastro() {
  document.getElementById('popup-cadastro').classList.add('ativo');
  document.body.classList.add('blur-ativo');// Ativa  o blur
  document.getElementById('toggle').checked = false;
  fecharMenuUsuario();
}


// Fecha o pop-up
function fecharPopupCadastro() {
  document.getElementById('popup-cadastro').classList.remove('ativo');
  document.body.classList.remove('blur-ativo'); // Remove o blur
  fecharMenuUsuario();
}

// Alterna visibilidade do menu suspenso do usuário
function toggleMenuUsuario() {
  const menu = document.getElementById('lista-usuario');
  menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

// Fecha o menu suspenso (usado ao abrir pop-up ou clicar fora)
function fecharMenuUsuario() {
  const menu = document.getElementById('lista-usuario');
  if (menu) {
    menu.style.display = 'none';
  }
}

// Fecha o menu suspenso se clicar fora dele
document.addEventListener('click', function (event) {
  const menu = document.getElementById('lista-usuario');
  const botao = document.querySelector('.menu-usuario button');
  if (menu && !menu.contains(event.target) && !botao.contains(event.target)) {
    fecharMenuUsuario();
  }
});

// Altera o middle quando ativo + ativa botão de fechar
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('toggle');
  const titulo = document.getElementById('middle-titulo');
  const texto = document.getElementById('middle-texto');
  const botao = document.getElementById('middle-botao');

  toggle.addEventListener('change', () => {
    if (toggle.checked) {
      titulo.textContent = 'Já é cadastrado?';
      texto.textContent = 'Realize o login';
      botao.textContent = 'Login';
    } else {
      titulo.textContent = 'Bem-vindo à Minimal';
      texto.textContent = 'Cadastre-se para começar';
      botao.textContent = 'Cadastrar';
    }
  });

  // ✅ Ativa o botão de fechar (X)
  const botaoFechar = document.querySelector('.fechar-popup');
  if (botaoFechar) {
    botaoFechar.addEventListener('click', fecharPopupCadastro);
  }
});