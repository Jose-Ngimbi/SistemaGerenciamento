<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #78ac8a;;
        }
        div{
           position: absolute;
           top: 30%;
           left: 35%;
        } 
        input{
            outline: none;
            padding: 12px;
            font-size: 18px;
            border-radius: 11px;
        } 
        .button{
            width: 100%;
            padding: 12px;
            border-radius: 11px;
        }
        .button:hover{
            background-color: #78ac8a;
        }  
        fieldset{
            border-radius: 11px;
        } 
        h1{
            text-align: center;
        } 
        a{
            color:black;
            
            
        }  
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div >
        <form action="testlogin.php" method="post">
            <fieldset>
                <h1><strong>Login</strong></h1>
                <input type="text" name="email" required>
                <label for="email">Email</label>
                <br><br>
                <input type="password" name="senha" required>
                <label for="senha">Senha</label>
                <br><br>
                <p><strong><a href="formulario-estagiario.php">Cadastra-te Aqui!</a></strong></p>
                <input type="submit" name="submit" value="Enviar" class="button">
            </fieldset>
        </form>
    </div>
    
</body>
</html>