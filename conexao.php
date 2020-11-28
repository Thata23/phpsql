<?php

$host = "ec2-54-226-165-161.compute-1.amazonaws.com";
$user = "19022";
$pass = "19022thaissa";
$banco = "etim_19022";

$conexao = mysqli_connect($host, $user, $pass, $banco)
        or die("Problemas com a conexão do Banco de Dados");
mysqli_set_charset($conexao, "UTF8");
?>
