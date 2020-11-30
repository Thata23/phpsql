<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP - UPLOAD de Arquivos </title>
    </head>
    <body>
        <h1> Atividade de Upload - PHP </h1>
        <div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" />
                <br />
                <label>Insira o nome da sua imagem: <input type = "text" name = "nomeI"/><br></label>
                <label>1 PNG e 2 JPG: <input type = "number" name = "tipo"/><br></label>
                <br />
                <input type="submit" value="Enviar" />
                <br/>
            </form> 
        </div>
        <hr>
        <?php
        ini_set('display_errors',1); 
        ini_set('display_startup_erros',1); 
        error_reporting(E_ALL);
        include_once('conexao.php');
        $sqlstring = 'select * from imagens order by nomeI asc';
        $resultado = mysqli_query($conexao, $sqlstring);
        while ($dados = mysqli_fetch_array($resultado)) { 
            echo " ". $dados['nomeI']  ;
            echo "<a href='apagar.php?id=" . $dados['id'] . "'><img src='delete.png'></a>";
            echo "<a href='visualizar.php?id=" . $dados['id'] . "'><img src='abrir.png'></a>";
            echo "<br>";
        }
        ?>
    </body>
</html>