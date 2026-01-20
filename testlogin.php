<?php
session_start();
//print_r($_REQUEST);
require("conector.php");
if (isset($_POST['submit'])&& !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //Se existir um submit,ele permite o acesso
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*print_r('email: '. $email);
        print_r('senha: '. $senha);*/
        $sql = "SELECT * FROM estagiario WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);


        /*print_r($sql);
        print_r($result);
        Quando aparece no num rows um número diferente de zero, quer dizer que existe um registro no nosso banco de dados*/


        if(mysqli_num_rows($result)<1)
            {
                // Caso não exista o email e a senha, será destruído toda a variárial que tenha a session email e a session senha
                
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
              header('location: login.php'); 
            }
            else
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['senha'] = $senha;
                    header('location: sistema.php');
                }

    }
    else
        {
            //Se não existir não permite o acesso e permanece na tela de login
            header('location: login.php');
        }



?>