<?php

include_once('conexao.php');

$nome_final= $_GET["n"];

if (substr($_FILES['arquivo']['name'], -3) == "png" ||substr($_FILES['arquivo']['name'], -3) == "jpg"){
    $dir = './arquivos/';
    $tmpName = $_FILES['arquivo']['tmp_name'];
    $name = $_FILES['arquivo']['name'];
    // move_uploaded_file
    if (move_uploaded_file($tmpName, $dir . $nome_final)) {
         $sqlstring = "insert into imagens (id, arquivo) values (null, '$nome_final')";
        mysqli_query($conexao, $sqlstring);
        header('Location: index.php');
    } else {
        echo "Erro ao gravar a imagem...";
    }
} else {
    echo "Não é uma imagem png ou jpg, insira uma nova imagem!";
}
?>


