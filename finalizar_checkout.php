<?php
session_start();
unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Obrigado pela tua compra! - FitFlow</title>
    <link rel="stylesheet" href="style/checkout.css">
    <link rel="icon" type="image/png" href="imagens/Logo_FitFlow.png">
</head>
<body>

<header>
    <h1>Obrigado pela tua compra!</h1>
    <p>Recebemos a tua encomenda e estamos a prepará-la com cuidado.</p>
</header>

<div class="checkout-container" style="text-align: center;">
    <h2>A tua encomenda foi concluída com sucesso!</h2>
    <p>Em breve receberás um email com os detalhes da entrega.</p>
    <br><br><br>
    <a href="fitflow_products.php" class="checkout-btn">Continuar a comprar</a>
</div>

</body>
</html>