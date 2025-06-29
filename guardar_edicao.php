<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitflow";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na ligação: " . $conn->connect_error);
}

if (!isset($_SESSION['user_email'])) {
    die("Utilizador não autenticado.");
}

$userName = $_POST["userName"];
$nome = $_POST["nome"];
$userPass = $_POST["userPass"];
$userEmail = $_POST["userEmail"];
$nasc = $_POST["nasc"];
$genero = $_POST["genero"];

$originalEmail = $_SESSION['user_email'];

$sql = "UPDATE utilizadores SET 
            userName = ?, 
            userPass = ?, 
            userEmail = ?, 
            nome = ?, 
            nasc = ?, 
            genero = ?
        WHERE userEmail = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $userName, $userPass, $userEmail, $nome, $nasc, $genero, $originalEmail);

if ($stmt->execute()) {
    $_SESSION['user_email'] = $userEmail;

    echo "<h2>Dados atualizados com sucesso!</h2>";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
} else {
    echo "Erro ao atualizar os dados: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>