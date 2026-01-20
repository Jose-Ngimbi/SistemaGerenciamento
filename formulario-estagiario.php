<?php


require("conector.php");

if(isset($_POST['submit']))
    
    
    {
       /* Escrever os dados digitados na tela
       
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['gmail']);
        print_r('<br>');
        print_r($_POST['telefone']);
        print_r('<br>');
        print_r($_POST['curso']);
        print_r('<br>');
        print_r($_POST['periodo']);
        print_r('<br>');
        print_r($_POST['datanasc']);
        */

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $curso = $_POST['curso'];
        $periodo = $_POST['periodo'];
        $datanasc = $_POST['datanasc'];

 
        
        $query= "INSERT INTO estagiario (nome,senha,email,telefone,curso,periodo,datanasc) VALUES ('$nome','$senha','$email','$telefone','$curso','$periodo','$datanasc')";

       $stmt = $conexao->prepare($query);
       $stmt->execute();

       header('location: login.php'); //quando for preenchido o formulário ele vai direcionar a página de login
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estagiário</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <form action="formulario-estagiario.php" method="post">
            <fieldset>
                <h1> <strong>Faça o seu cadastro!</strong></h1>
                <div>
                    <input type="text" name="nome" required class="inputuser">
                    <label for="nome">Nome Completo</label>
                </div>
                <br>
                <div>
                    <input type="password" name="senha" required class="inputuser">
                    <label for="senha">Senha</label>
                </div>
                <br>
                <div>
                    <input type="text" name="email" class="inputuser" required>
                    <label for="email">Seu e-mail</label>
                </div>
                <br>
                 <div>
                    <input type="tel" name="telefone" class="inputuser"required>
                    <label for="telfone">Número de telefone</label>
                </div>
                <br>
                 <div>
                    <input type="text" name="curso" class="inputuser"required>
                    <label for="curso">Curso</label>
                </div>
                <br>
                 <div>
                    <input type="text" name="periodo" class="inputuser" required>
                    <label for="periodo">Período Curricular</label>
                </div>
                <br>
                 <div>
                    <input type="date" name="datanasc" class="inputuser" required>
                    <label for="datanasc">Data de Nascimento</label>
                </div>
                <br><br>
                <button type="submit" name="submit" class="button">Cadastrar-se</button>
            </fieldset>



        </form>
    </div>
    
</body>
</html>