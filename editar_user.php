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

$userEmail = $_SESSION['user_email'];

$sql = "SELECT * FROM utilizadores WHERE userEmail = '$userEmail'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    die("Utilizador não encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" type="image/png" href="imagens/Logo_FitFlow.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - FitFlow</title>
    <link rel="stylesheet" href="style/fitflow_sign_up.css">

    <script>
        function validarEdicao(event) {
            const senha = document.getElementsByName("userPass")[0].value;
            const confirmar = document.getElementsByName("pass_confirmar")[0].value;
            const email = document.getElementsByName("userEmail")[0].value;

            let erros = [];

            if (senha !== confirmar) {
                erros.push("As senhas não coincidem.");
            }
            if (senha.length < 10) {
                erros.push("A senha deve ter pelo menos 10 caracteres.");
            }
            if (!/[A-Z]/.test(senha)) {
                erros.push("A senha deve conter pelo menos uma letra maiúscula.");
            }
            const emailValido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailValido.test(email)) {
                erros.push("Insere um email válido (ex: exemplo@dominio.com).");
            }

            if (erros.length > 0) {
                alert(erros.join("\n"));
                event.preventDefault();
            }
        }
    </script>
</head>
<body>

<div class="form-box">
    <h2>Editar Perfil - FitFlow</h2>
    <form action="guardar_edicao.php" method="post" onsubmit="validarEdicao(event)">
        <table>
            <tr>
                <td><label for="userName">Nome de utilizador:</label></td>
                <td><input type="text" name="userName" value="<?= htmlspecialchars($user['userName']) ?>" required></td>
            </tr>
            <tr>
                <td><label for="nome">Nome completo:</label></td>
                <td><input type="text" name="nome" value="<?= htmlspecialchars($user['nome']) ?>" required></td>
            </tr>
            <tr>
                <td><label for="userPass">Nova Password:</label></td>
                <td><input type="password" name="userPass" required></td>
            </tr>
            <tr>
                <td><label for="pass_confirmar">Confirmar Password:</label></td>
                <td><input type="password" name="pass_confirmar" required></td>
            </tr>
            <tr>
                <td><label for="userEmail">Email:</label></td>
                <td><input type="text" name="userEmail" value="<?= htmlspecialchars($user['userEmail']) ?>" required></td>
            </tr>
            <tr>
                <td><label for="nasc">Data de Nascimento:</label></td>
                <td><input type="date" name="nasc" value="<?= $user['nasc'] ?>" required></td>
            </tr>
            <tr>
                <td><label for="genero">Género:</label></td>
                <td>
                    <select name="genero">
                        <option value="Masculino" <?= $user['genero'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                        <option value="Feminino" <?= $user['genero'] == 'Feminino' ? 'selected' : '' ?>>Feminino</option>
                        <option value="Nenhum" <?= $user['genero'] == 'Nenhum' ? 'selected' : '' ?>>Prefiro não dizer</option>
                    </select>
                </td>
            </tr>
        </table>
        <button><a href="index.php">Cancelar</a></button>
        <button type="submit">Guardar Alterações</button>
    </form>
</div>

</body>
</html>