<?php

include_once('conexao.php');

$nome_final= $_POST["nomeI"];

if (substr($_FILES['arquivo']['nomeI'], -3) == "png" ||substr($_FILES['arquivo']['nomeI'], -3) == "jpg"){
    $dir = './arquivos/';
    $tmpName = $_FILES['arquivo']['tmp_name'];
    $name = $_FILES['arquivo']['nomeI'];
    // move_uploaded_file
    if (move_uploaded_file($tmpName, $dir . $nome_final)) {
         $sqlstring = "insert into imagens (id, arquivo, nomeI) values (null, '$nome_final')";
        mysqli_query($conexao, $sqlstring);
        header('Location: index.php');
    } else {
        echo "Erro ao gravar a imagem...";
    }
} else {
    echo "Não é uma imagem png ou jpg, insira uma nova imagem!";
}
?>


