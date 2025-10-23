<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Transição CSS Pura</title>
<style>
body {
  margin: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #1a004d;
  font-family: Arial, sans-serif;
}

/* Container principal */
.container {
  position: relative;
  width: 800px;
  height: 400px;
  display: flex;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 0 20px rgba(0,0,0,0.4);
}

/* Div esquerda */
.left {
  background-color: #EADAF7;
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.5rem;
  color: #2a1a3a;
  transition: all 0.6s ease;
}

/* Div direita */
.right {
  background-color: #543062;
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.5rem;
  color: #fff;
  transition: all 0.6s ease;
}

/* Div do meio (a sobreposição) */
.middle {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  background-color: #987fab;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.6s ease;
  z-index: 10;
  color: #fff;
  font-weight: bold;
  flex-direction: column;
}

/* Checkbox invisível */
#toggle {
  display: none;
}

/* Quando clicar no botão (label) e o checkbox estiver "checked" */
#toggle:checked ~ .container .middle {
  left: 0;
  background-color: #543062;
}

/* Quando o painel move, podemos também alterar opacidade dos lados */
#toggle:checked ~ .container .left {
  opacity: 0.7;
}

#toggle:checked ~ .container .right {
  opacity: 1;
}

button, label {
  background: #fff;
  color: #543062;
  border: none;
  padding: 10px 20px;
  border-radius: 20px;
  cursor: pointer;
  transition: 0.3s;
}

button:hover, label:hover {
  background: #2a1a3a;
  color: #fff;
}

@media (max-width: 600px) {
  .container {
    width: 100%;
    height: auto;
    flex-direction: column;
    border-radius: 0;
  }

  .left, .right {
    width: 100%;
    height: 300px;
    font-size: 1.2rem;
    padding: 20px;
    transition: opacity 0.6s ease;
  }

  .middle {
    position: relative;
    width: 100%;
    height: auto;
    left: 0;
    z-index: 2;
    padding: 20px;
  }

  /* Estado inicial: mostrar apenas a esquerda */
  .left {
    display: flex;
  }

  .right {
    display: none;
  }

  /* Quando o botão é clicado (checkbox ativado) */
  #toggle:checked ~ .container .left {
    display: none;
  }

  #toggle:checked ~ .container .right {
    display: flex;
  }

  #toggle:checked ~ .container .middle {
    background-color: #543062;
  }
}
</style>
</head>
<body>

<!-- Checkbox invisível (para controlar o estado) -->
<input type="checkbox" id="toggle">

<div class="container">
  <div class="left">Div Esquerda</div>
  <div class="right">Div Direita</div>
  <div class="middle">
    <p>Div do Meio</p>
    <!-- O label atua como botão que alterna o checkbox -->
    <label for="toggle">Mover Painel</label>
  </div>
</div>

</body>
</html>
