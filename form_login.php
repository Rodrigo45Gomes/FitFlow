<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitFlow - Login</title>
    <link rel="stylesheet" href="style/fitflow_sign_in.css">
    <link rel="icon" type="image/png" href="imagens/Logo_FitFlow.png">
</head>
<body>

<div class="login-box">
    <h2>Login - FitFlow</h2>

    <?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
        <p style="color: red;">Email ou password incorretos!</p>
    <?php endif; ?>

    <form action="verificar_user.php" method="post">
        <table>
            <tr>
                <td><label for="mail"><b>Email:</b></label></td>
                <td>
                    <input type="text" name="mail" required>
                    <span class="required">*</span>
                </td>
            </tr>
            <tr>
                <td><label for="pass"><b>Password:</b></label></td>
                <td>
                    <input type="password" name="pass" required>
                    <span class="required">*</span>
                </td>
            </tr>
        </table>
        <button type="submit">Entrar</button>
    </form>
</div>

</body>
</html>
