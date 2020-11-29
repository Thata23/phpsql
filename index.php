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
                <label>Insira o nome da sua imagem: <input type = "text" name = "n"/><br></label>
                <br />
                <input type="submit" value="Enviar" />
            </form>
            <form action="upload.php" method="get">
                <label>Insira o nome da sua imagem: <input type = "text" name = "n"/><br></label>
                <br />
            </form> 
        </div>
        <hr>
        <?php
        include_once('conexao.php');
        $sqlstring = 'select * from imagens order by asc';
        $resultado = mysqli_query($conexao, $sqlstring);
        while ($dados = mysqli_fetch_array($resultado)) {
            echo "<img src='arquivos/" . $dados['arquivo'] . "' width='100px' heigth='100px'>";
            echo "<a href='apagar.php?id=" . $dados['id'] . "'><img src='delete.png'></a>";
            echo "<a href='visualizar.php?id=" . $dados['id'] . "'><img src='abrir.png'></a>";
        }
        ?>
    </body>
</html>