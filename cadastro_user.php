<?php

    if (count($_POST) > 0){
       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $nascimento = $_POST['nascimento'];
       $contato = $_POST['contato'];

       // verificando campos obrigatórios
       if(empty($nome) || empty($email)){
            echo "Campos Obrigatórios nome e email";            
       } else {
            include('conexao.php');

            $sql = "INSERT INTO usuario (nome, email, nascimento, contato) 
            VALUES('$nome', '$email', '$nascimento', '$contato')";

            $mysqli->query($sql) or die($mysqli->error);
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/mapa_inova/usuarios.php">Voltar a lista</a>
    <form action="" method="POST">
        <p>
            <label for="nome">Nome:</label>
            <input name="nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" type="text">
        </p>
        <p>
            <label for="email">Email:</label>
            <input name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" type="text">
        </p>
        <p>
            <label for="nascimento">Data de Nascimento:</label>
            <input name="nascimento" value="<?php if(isset($_POST['nascimento'])) echo $_POST['nascimento']; ?>" type="date">
        </p>
        <p>
            <label for="contato">Contato:</label>
            <input name="contato" value="<?php if(isset($_POST['contato'])) echo $_POST['contato']; ?>" type="text">
        </p>
        <p>
            <button name="salvar" type="submit">Salvar</button>
        </p>
    </form>
</body>
</html>