<?php

include_once('conexao.php');
$id = $_GET['id'];

// recuperando o nome do arquivo 
$sqlselect = "select * from imagens where id=$id";
$resultado = mysqli_query($conexao, $sqlselect);
$dados = mysqli_fetch_array($resultado);
$nome = $dados['arquivo'];

// excluindo o registro
$sqlvisualizar = "select from imagens where nomeI='$nome_final'";
mysqli_query($conexao, $sqlvisualizar);

unlink('arquivos/' . $nome);
header('Location: index.php');
?>
