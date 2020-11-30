<?php

include_once('conexao.php');
$id = $_GET['id'];

echo "<img src='arquivos/" . $id['arquivo'] . "' width='100px' heigth='100px'>";
?>
