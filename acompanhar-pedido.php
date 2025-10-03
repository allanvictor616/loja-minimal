<?php
// Simulação de dados do pedido
$pedido = [
    "produto" => "Camisa Minimal Roxa",
    "valor" => "R$ 129,90",
    "codigo" => "PED" . rand(1000, 9999),
    "transportadora" => "Correios",
    "rastreamento" => "BR" . rand(100000, 999999) . "BR",
    "previsao" => "10/10/2025",
    "status" => "Em separação"
];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Acompanhar Pedido</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "header.php"; ?>

    <main>
        <div class="pedido-container">
            <h2>📦 Acompanhe seu pedido</h2>
            <ul>
                <li><strong>Código do Pedido:</strong> <?= $pedido['codigo']; ?></li>
                <li><strong>Produto:</strong> <?= $pedido['produto']; ?></li>
                <li><strong>Valor:</strong> <?= $pedido['valor']; ?></li>
                <li><strong>Transportadora:</strong> <?= $pedido['transportadora']; ?></li>
                <li><strong>Código de Rastreamento:</strong> <?= $pedido['rastreamento']; ?></li>
                <li><strong>Previsão de entrega:</strong> <?= $pedido['previsao']; ?></li>
                <li><strong>Status:</strong> <?= $pedido['status']; ?></li>
            </ul>
            <a href="index.php" class="btn">Voltar à loja</a>
        </div>
    </main>

    <?php include "footer.php"; ?>
    <script src="script.js"></script>
</body>

</html>