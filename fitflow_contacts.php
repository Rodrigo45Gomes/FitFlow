<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Contactos - FitFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_store.css">
    <link rel="icon" type="image/png" href="imagens/Logo_FitFlow.png">
</head>
<body>

<?php if (isset($_SESSION['user_email'])): ?>
    <div class="user-box">
        <a href="editar_user.php" style="text-decoration: none; color: inherit;">
            Olá, <?php echo htmlspecialchars($_SESSION['user_email']); ?>
        </a>
    </div>
<?php endif; ?>

<header>
    <h1>Contacta o FitFlow</h1>
    <p>Estamos aqui para te ajudar</p>
</header>

<nav>
    <a href="index.php">Início</a>
    <a href="fitflow_products.php">Produtos</a>
    <a href="fitflow_info.php">Sobre</a>
    <a href="fitflow_contacts.php">Contacto</a>

    <?php if (isset($_SESSION['user_email'])): ?>
        <a href="logout.php" class="logout-btn">Logout (<?= $_SESSION['user_email'] ?>)</a>
    <?php else: ?>
        <a href="login_choice.php" class="login-btn">Login</a>
    <?php endif; ?>
    <a href="carrinho.php">Carrinho (<?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>)</a>
</nav>

<div class="conteudo">
    <h2>Envia-nos uma mensagem</h2>
    <p>Podes contactar-nos diretamente através do teu email:</p>
    <a href="mailto:rodrigo.gomes28599@al.aememmartins.pt?subject=Ajuda%20FitFlow&body=Olá%20FitFlow%2C%20preciso%20de%20ajuda%20com%20a%20minha%20encomenda." class="botao-email">
     Clica aqui para nos contactar por email</a>
    <h2>Informações de Contacto</h2>
    <p><strong>Email:</strong> rodrigo.gomes28599@al.aememmartins.pt</p>
    <p><strong>Telefone:</strong> +351 929 337 497</p>
    <p><strong>Morada:</strong> Rua do Ginásio, 123 - Lisboa, Portugal</p>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>