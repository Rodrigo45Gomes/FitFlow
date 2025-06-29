<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Produtos - FitFlow</title>
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
    <h1>Todos os Produtos</h1>
    <p>Vê todos os nossos artigos de fitness e suplementação</p>
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

<div class="banner">
        <div class="slogan">Transforma o teu corpo com os melhores produtos!</div>
    </div>

<div class="conteudo">
    <div class="produto">
      <img src="imagens/proteina.png" alt="Proteína Whey" style="width: 150px; height: auto;">
    <h3>Proteína Whey</h3>
    <p>€29,99</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Proteína Whey">
            <input type="hidden" name="product_price" value="29.99">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/creatina.png" alt="Creatina" style="width: 150px; height: auto;"> 
    <h3>Creatina Monohidratada</h3>
    <p>€19,99</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Creatina Monohidratada">
            <input type="hidden" name="product_price" value="19.99">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/luvas.png" alt="Luvas de Treino"  style="width: 150px; height: auto;">
    <h3>Luvas de Treino</h3>
    <p>€12,90</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Luvas de Treino">
            <input type="hidden" name="product_price" value="12.90">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/shaker.png" alt="Shaker" style="width: 150px; height: auto;">
    <h3>Shaker 600ml</h3>
    <p>€6,50</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Shaker 600ml">
            <input type="hidden" name="product_price" value="6.50">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/pre_treino.png" alt="Pré-Treino Xtreme" style="width: 150px; height: auto;">
    <h3>Pré-Treino Xtreme</h3>
    <p>€24,99</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Pré-Treino Xtreme">
            <input type="hidden" name="product_price" value="24.99">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/barra_proteica.png" alt="Barra Proteica" style="width: 150px; height: auto;">
    <h3>Barra Proteica (cx. 12un)</h3>
    <p>€2,00</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Barra Proteica">
            <input type="hidden" name="product_price" value="2.00">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/cinto.png" alt="Cinto de Musculação" style="width: 150px; height: auto;">
    <h3>Cinto de Musculação</h3>
    <p>€22,50</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Cinto de Musculação">
            <input type="hidden" name="product_price" value="22.50">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/t-shirt.png" alt="T-shirt Dry-Fit" style="width: 150px; height: auto;">
    <h3>T-shirt Dry-Fit Masculina</h3>
    <p>€14,90</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="T-shirt Dry-Fit Masculina">
            <input type="hidden" name="product_price" value="14.90">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/leggins.png" alt="Leggings Fitness" style="width: 150px; height: auto;">
    <h3>Leggings Fitness Femininas</h3>
    <p>€18,90</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Leggings Fitness Femininas">
            <input type="hidden" name="product_price" value="18.90">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/bandas.png" alt="Bandas" style="width: 150px; height: auto;">
    <h3>Bandas elásticas de resistência</h3>
    <p>€18,90</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Bandas elásticas de resistência">
            <input type="hidden" name="product_price" value="18.90">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/omega.png" alt="Omega 3" style="width: 150px; height: auto;">
    <h3>Ómega 3</h3>
    <p>€13,99</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Ómega 3">
            <input type="hidden" name="product_price" value="13.99">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/drink.png" alt="Isotonic Drink" style="width: 150px; height: auto;">
    <h3>Bebida Isotónica</h3>
    <p>€2,49</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Bebida Isotónica">
            <input type="hidden" name="product_price" value="2.49">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>
<div class="produto">
  <img src="imagens/mochila.png" alt="Mochila Gym" style="width: 150px; height: auto;">
    <h3>Mochila de Treino</h3>
    <p>€29,90</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Mochila de Treino">
            <input type="hidden" name="product_price" value="29.90">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/toalha.png" alt="Toalha" style="width: 150px; height: auto;">
    <h3>Toalha Microfibra</h3>
    <p>€7,00</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Toalha Microfibra">
            <input type="hidden" name="product_price" value="7.00">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/camisola.png" alt="Camisola Termica" style="width: 150px; height: auto;">
    <h3>Camisola Térmica</h3>
    <p>€19,90</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Camisola Térmica">
            <input type="hidden" name="product_price" value="19.90">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/elastico.png" alt="Elástico" style="width: 150px; height: auto;">
    <h3>Elástico de Alongamento</h3>
    <p>€9,99</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Elástico de Alongamento">
            <input type="hidden" name="product_price" value="9.99">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/meias.png" alt="Meias" style="width: 150px; height: auto;">
    <h3>Meias Compressivas</h3>
    <p>€5,90</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Meias Compressivas">
            <input type="hidden" name="product_price" value="5.90">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/garrafa.png" alt="Garrafa" style="width: 150px; height: auto;">
    <h3>Garrafa Térmica 1L</h3>
    <p>€17,00</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Garrafa Térmica 1L">
            <input type="hidden" name="product_price" value="17.00">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/fita.png" alt="Fita Levantamento" style="width: 150px; height: auto;"> 
    <h3>Fitas de Levantamento</h3>
    <p>€8,90</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Fitas de Levantamento">
            <input type="hidden" name="product_price" value="8.90">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/ab_roller.png" alt="Ab Roller" style="width: 150px; height: auto;">
    <h3>Roda Abdominal</h3>
    <p>€14,99</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Roda Abdominal">
            <input type="hidden" name="product_price" value="14.99">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/tornozoleira.png" alt="Tornozeleira" style="width: 150px; height: auto;">
    <h3>Tornozeleira com Peso</h3>
    <p>€12,00</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Tornozeleira com Peso">
            <input type="hidden" name="product_price" value="12.00">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>

<div class="produto">
    <img src="imagens/top.png" alt="Camisola Sem Mangas" style="width: 150px; height: auto;">
    <h3>Top Fitness Sem Mangas</h3>
    <p>€13,49</p>
    <?php if (isset($_SESSION['user_email'])): ?>
        <form action="adicionar_produto.php" method="post">
            <input type="hidden" name="product_name" value="Top Fitness Sem Mangas">
            <input type="hidden" name="product_price" value="13.49">
            <button type="submit">Adicionar ao Carrinho </button>
        </form>
    <?php else: ?>
        <p><a href="form_login.php">Adicionar ao Carrinho </a></p>
    <?php endif; ?>
</div>
</div>

<footer>
    <p>FitFlow</p>
</footer>

</body>
</html>