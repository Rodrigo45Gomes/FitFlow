<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fitflow";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $userName = $_POST["userName"];
        $userPass = $_POST["userPass"];
        $userEmail = $_POST["userEmail"];
        $nome = $_POST["nome"];
        $nasc = $_POST["nasc"];
        $genero = $_POST["genero"];

        $add = "INSERT INTO utilizadores (userName, userPass, userEmail, nome, nasc, genero) 
                VALUES ('$userName', '$userPass', '$userEmail', '$nome', '$nasc', '$genero')";

        if ($conn->query($add) === TRUE) {
            echo "</br></br></br><h2 align=center>Dados registados com sucesso!</h2>";
            echo "<meta http-equiv=\"refresh\" content=\"2; url=http://localhost/PAP/index.php\">";
        } else {
            echo "Erro: Não foi possível inserir dados na tabela utilizadores. " . $conn->error . "<p />";
        }
    }

    ?>
</body>
</html>