<?php    
    if(isset($_POST['remover'])){        

        include('conexao.php');
        $id_user = intval($_GET['id']);
        $sql_code = "DELETE FROM usuario WHERE idusuario = '$id_user'";
        $removido = $mysqli->query($sql_code) or die($mysqli->error);

        if($removido) { ?>
            <h1>Usúario removido com sucesso!</h1>
            <a href="/mapa_inova/usuarios.php">Voltar a lista</a>
    <?php
        die;
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover</title>
</head>
<body>
    <h1>Tem certeza que deseja remover este usúario?</h1>

    <a href="/mapa_inova/usuarios.php">Não</a>
    <form action="" method="post">
        <button name="remover" type="submit">Sim</button>
    </form>
</body>
</html>