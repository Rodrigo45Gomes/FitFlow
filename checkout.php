<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header('Location: login_choice.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Checkout - FitFlow</title>
    <link rel="stylesheet" href="style/checkout.css">
    <link rel="icon" type="image/png" href="imagens/Logo_FitFlow.png">
</head>
<body>

<header>
    <h1>Checkout</h1>
    <p>Finaliza a tua encomenda com FitFlow</p>
</header>

<div class="checkout-container">
  <h2>Informações de Envio</h2>
  <form method="POST" action="finalizar_checkout.php">
    <label for="nome">Nome completo:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="morada">Morada:</label>
    <input type="text" id="morada" name="morada" required>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required>

    <label for="cod_postal">Código Postal:</label>
    <input type="text" id="cod_postal" name="cod_postal" required pattern="\d{4}-\d{3}" placeholder="1234-567">

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" required>

    <h2>Método de Pagamento</h2>
    <select name="pagamento" required>
      <option value="">Selecionar...</option>
      <option value="mbway">MB WAY</option>
      <option value="multibanco">Multibanco</option>
      <option value="visa">Cartão de Crédito</option>
      <option value="paypal">PayPal</option>
    </select>

    <button type="submit" class="checkout-btn">Confirmar Compra</button>
  </form>
</div>

</body>
</html>