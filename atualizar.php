<?php $pageTitle = 'Atualizar Cadastro - Loja Minimal';
include 'header.php'; ?>

<div class="form-container">
  <form method="POST" id="cadastroForm" onsubmit="mostrarAlerta(event)">
    <h2><i class="bi bi-person-badge"></i> Atualizar Cadastro</h2>

    <div class="linha">
      <div class="campo campo-grande">
        <label for="nome"><i class="bi bi-person-fill"></i> Nome:</label>
        <input type="text" id="nome" name="nome" required placeholder="Digite seu nome completo">
      </div>
      <div class="campo campo-pequeno">
        <label for="email"><i class="bi bi-envelope"></i> Email:</label>
        <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
      </div>
    </div>

    <div class="linha">
      <div class="campo campo-grande">
        <label for="telefone"><i class="bi bi-telephone-fill"></i> Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="(99) 99999-9999">
      </div>
      <div class="campo campo-pequeno">
        <label for="cpf"><i class="bi bi-card-text"></i> CPF:</label>
        <input type="text" id="cpf" name="cpf" required placeholder="999.999.999-99">
      </div>
    </div>

    <div class="linha">
      <div class="campo campo-grande">
        <label for="endereco"><i class="bi bi-geo-alt-fill"></i> Endereço:</label>
        <input type="text" id="endereco" name="endereco" required placeholder="Rua ou Avenida">
      </div>
      <div class="campo campo-pequeno">
        <label for="numero"><i class="bi bi-hash"></i> Número:</label>
        <input type="number" id="numero" name="numero" required min=1 placeholder="123">
      </div>
      <div class="campo campo-pequeno">
        <label for="cep"><i class="bi bi-postcard"></i> CEP:</label>
        <input type="text" id="cep" name="cep" required placeholder="00000-000">
      </div>
    </div>

    <div class="linha">
      <div class="campo campo-grande">
        <label for="complemento"><i class="bi bi-building"></i> Complemento:</label>
        <input type="text" id="complemento" name="complemento" placeholder="Apto, bloco... (opcional)">
      </div>
    </div>

    <div class="linha">
      <div class="campo campo-grande">
        <label for="data_nascimento"><i class="bi bi-calendar-fill"></i> Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
      </div>
      <div class="campo campo-pequeno">
        <label for="senha"><i class="bi bi-lock-fill"></i> Nova Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Deixe em branco para não alterar">
      </div>
    </div>

    <button type="submit">
      <i class="bi bi-check-circle"></i> Salvar Alterações
    </button>
  </form>
</div>

<!-- IMask.js para máscaras de input -->
<script src="https://unpkg.com/imask"></script>
<script>
  // Máscara para o campo de telefone
  IMask(document.getElementById('telefone'), {
    mask: '(00) 00000-0000'
  });
  // Máscara para o campo de CPF
  IMask(document.getElementById('cpf'), {
    mask: '000.000.000-00'
  });
  // Máscara para o campo de CEP
  IMask(document.getElementById('cep'), {
    mask: '00000-000'
  });

  // Função para mostrar alerta com os dados do formulário
  function mostrarAlerta(event) {
    event.preventDefault(); // impede envio automático do form

    const nome = document.getElementById("nome").value.trim();
    const email = document.getElementById("email").value.trim();
    const telefone = document.getElementById("telefone").value.trim();
    const cpf = document.getElementById("cpf").value.trim();
    const endereco = document.getElementById("endereco").value.trim();
    const numero = document.getElementById("numero").value.trim();
    const complemento = document.getElementById("complemento").value.trim();
    const cep = document.getElementById("cep").value.trim();
    const dataNascimento = document.getElementById("data_nascimento").value;
    const senha = document.getElementById("senha").value;

    if (!nome || !email || !telefone || !cpf || !endereco || !numero || !cep || !dataNascimento) {
      alert("Preencha todos os campos obrigatórios!");
      return;
    }

    let mensagem = `Cadastro atualizado com sucesso!\n\n`;
    mensagem += `Nome: ${nome}\n`;
    mensagem += `Email: ${email}\n`;
    mensagem += `Telefone: ${telefone}\n`;
    mensagem += `CPF: ${cpf}\n`;
    mensagem += `Endereço: ${endereco}, Nº ${numero} ${complemento}\n`;
    mensagem += `CEP: ${cep}\n`;
    mensagem += `Data de Nascimento: ${dataNascimento}\n`;
    if (senha) {
      mensagem += `Senha: ******** (alterada)\n`;
    } else {
      mensagem += `Senha: (não alterada)\n`;
    }

    alert(mensagem);

    // Aqui você pode adicionar a lógica para enviar os dados para o servidor
    // Por exemplo: fetch('/api/atualizar-cadastro', { method: 'POST', body: new FormData(event.target) });
  }
</script>

<?php include 'footer.php'; ?>