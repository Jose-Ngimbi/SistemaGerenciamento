<?php
//var_dump('Olá');
//var_dump(new mysqli);


$dbhost = 'localhost';
$dbusuario = 'root';
$dbpassword = '';
$dbname = 'db_estagio';

$conexao = new mysqli($dbhost,$dbusuario,$dbpassword,$dbname);


// variável de conexão

/*if ($conexao->connect_errno)
    {
        echo "Não deu certo a conexão!";
    }

    else{
        echo "Deu certo a conexão!";
    }*/
?>