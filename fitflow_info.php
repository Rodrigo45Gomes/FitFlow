<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Sobre - FitFlow</title>
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
    <h1>Sobre o FitFlow</h1>
    <p>A tua loja de confiança para fitness e bem-estar</p>
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
    <div class="slogan">Transforma o teu corpo com os melhores produtos!</div>

    <div class="banner"></div>

<div class="conteudo">
    <h2>A nossa missão</h2>
    <p>O FitFlow nasceu com o objetivo de fornecer produtos de qualidade para todos os entusiastas de fitness, desde iniciantes até atletas experientes...</p>

    <h2>O que oferecemos</h2>
    <ul>
        <li>Suplementos de nutrição desportiva</li>
        <li>Roupas fitness modernas e funcionais</li>
        <li>Acessórios de treino de alta durabilidade</li>
        <li>Atendimento personalizado</li>
    </ul>

    <h2>Porquê escolher o FitFlow?</h2>
    <p>Trabalhamos com marcas de renome, garantimos entregas rápidas e oferecemos suporte ao cliente com atenção e responsabilidade...</p>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>