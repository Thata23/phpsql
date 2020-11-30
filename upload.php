<?php

include_once('conexao.php');

$nome_final= $_POST["nomeI"];
$tipo= $_POST["tipoI"];
if($tipo == 1){
    $nome_final = ".png";

}else if($tipo == 2){
    $nome_final = ".jpg";
}

if (substr($_FILES['arquivo']['name'], -3) == "png" ||substr($_FILES['arquivo']['name'], -3) == "jpg"){
    $dir = './arquivos/';
    $tmpName = $_FILES['arquivo']['tmp_name'];
    $name = $_FILES['arquivo']['name'];
    if (move_uploaded_file($tmpName, $dir . $nome_final)) {
         $sqlstring = "insert into imagens (id, arquivo, nomeI) values (null, '$nome_final', nomeI)";
        mysqli_query($conexao, $sqlstring);
        header('Location: index.php');
    } else {
        echo "Erro ao gravar a imagem...";
    }
} else {
    echo "Não é uma imagem png ou jpg, insira uma nova imagem!";
}
?>


