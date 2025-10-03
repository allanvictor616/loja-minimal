<?php
// Definir status inicial
$status = $_GET['status'] ?? 'pending';

// Se apertar em avançar, muda o status
if (isset($_POST['avancar'])) {
    if ($status === 'pending') {
        $status = 'success';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Pós Pagamento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "header.php"; ?>

    <main>
        <div class="pagamento-container">
            <?php if ($status === 'pending'): ?>
                <h2 class="pending">⌛ Aguardando pagamento</h2>
                <p>Seu pedido foi gerado e estamos aguardando a confirmação do pagamento.</p>

                <!-- Botão Avançar -->
                <form method="POST">
                    <button type="submit" name="avancar" class="btn">Avançar</button>
                </form>

            <?php elseif ($status === 'success'): ?>
                <h2 class="success">✅ Pagamento aprovado!</h2>
                <p>Obrigado pela compra. Seu pedido já está sendo processado.</p>

                <!-- Agora vira botão Acompanhar Pedido -->
                <a href="acompanhar-pedido.php" class="btn">Acompanhar Pedido</a>
            <?php endif; ?>
        </div>
    </main>

    <?php include "footer.php"; ?>
    <script src="script.js"></script>
</body>

</html>