<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['product_name'];
    $price = floatval($_POST['product_price']);

    $item = ['name' => $name, 'price' => $price];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $item;

    header("Location: fitflow_products.php");
    exit;
}
?>
