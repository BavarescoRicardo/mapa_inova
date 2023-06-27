<?php
    include('conexao.php');
    $id_user = intval($_GET['id']);
    
    if (count($_POST) > 0){
       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $nascimento = $_POST['nascimento'];
       $contato = $_POST['contato'];

       // verificando campos obrigatórios
       if(empty($nome) || empty($email)){
            echo "Campos Obrigatórios nome e email";            
       } else {       
            $sql = "UPDATE usuario 
            SET nome = '$nome',
            email = '$email', 
            nascimento = '$nascimento', 
            contato = '$contato'
            WHERE idusuario = '$id_user'";

            $sucesso = $mysqli->query($sql) or die($mysqli->error);
            if($sucesso) {
                echo "<p>Atualizado com sucesso</p>";
                unset($_POST);
            }
       }
    }

    
    $sql_sel_usuario = "SELECT * FROM usuario WHERE idusuario = '$id_user'";
    $usuario_query = $mysqli->query($sql_sel_usuario) or die($mysqli->error);
    $usuario = $usuario_query->fetch_assoc();
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
            <input name="nome" value="<?php if(!empty($usuario['nome'])) echo $usuario['nome']; ?>" type="text">
        </p>
        <p>
            <label for="email">Email:</label>
            <input name="email" value="<?php if(!empty($usuario['email'])) echo $usuario['email']; ?>" type="text">
        </p>
        <p>
            <label for="nascimento">Data de Nascimento:</label>
            <input name="nascimento" value="<?php if(!empty($usuario['nascimento'])) echo $usuario['nascimento']; ?>" type="date">
        </p>
        <p>
            <label for="contato">Contato:</label>
            <input name="contato" value="<?php if(!empty($usuario['contato'])) echo formatar_telefone($usuario['contato']); ?>" type="text">
        </p>
        <p>
            <button name="editar" type="submit">Editar</button>
        </p>
    </form>
</body>
</html>