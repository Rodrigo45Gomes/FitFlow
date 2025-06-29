
<?php
session_start();
require_once 'ligacaoBD.php';
$con = ligaBD();

if ($con) {
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $mail = mysqli_real_escape_string($con, $mail);
    $pass = mysqli_real_escape_string($con, $pass);

    $query = "SELECT * FROM utilizadores WHERE userEmail = '$mail' AND userPass = '$pass'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['userID'];
        $_SESSION['user_email'] = $user['userEmail'];

        header("Location: index.php");
        exit();
        
    } else {
        header("Location: form_login.php?erro=1");
        exit();
    }

    mysqli_close($con);
} else {
    echo "Erro na ligação à base de dados.";
}
