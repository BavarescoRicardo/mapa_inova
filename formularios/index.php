<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Formulário</h1>
        <p class="error">* Obrigatório</p>        

        <label for="nome">Seu nome:</label>
        <input name="nome" required type="text"><span class="error">*</span> <br><br>

        <label for="email">Seu email:</label>
        <input name="email" required type="email"><span class="error">*</span> <br><br>

        <label for="website">Seu website:</label>
        <input name="website" required type="url"><span class="error">*</span> <br><br>

        <label for="comentario">Comentário:</label>
        <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
        <br><br>

        <label for="genero">Seu gênero:</label>
        <input name="genero" type="radio" value="masc"> Masculino
        <input name="genero" type="radio" value="fem"> Feminino
        <input name="genero" type="radio" value="apache"> Helicoptero Apache
        <br><br>

        <button name="enviado" type="submit"> Enviar </button>
        <br><br>
    </form>
    <h1>Dados Recebidos por Post PHP</h1>
    <?php
        if(isset($_POST['enviado']))
        {
            $genero = "Não Definido";
            if(isset($_POST['genero']))
                $genero = $_POST['genero'];

            echo "<p> <b>Nome: </b>". $_POST['nome'] . "</p>";
            echo "<p> <b>Email: </b>". $_POST['email'] . "</p>";
            echo "<p> <b>Website: </b>". $_POST['website'] . "</p>";
            echo "<p> <b>Comentário: </b>". $_POST['comentario'] . "</p>";
            echo "<p> <b>Gênero: </b>". $genero . "</p>";
        }
    ?>
</body>
</html>