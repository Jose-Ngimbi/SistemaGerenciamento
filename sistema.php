<?php
session_start();
//print_r($_SESSION); -Mostra as informações da sessão criada

if((!isset($_SESSION['email']) ==true) and (!isset($_SESSION['senha'])==true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: login.php');
    }
    $logado = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>
    <h1>Olá e bem-vindo!</h1>
   <!-- <?php
    echo "Ola e bem-vindo {$logado}";
    ?>-->
    

    <a href="sair.php">Sair</a>
</body>
</html>