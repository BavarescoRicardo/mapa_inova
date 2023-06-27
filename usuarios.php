<?php 
    include('conexao.php'); 
    $sql_sel_usuarios = "SELECT * FROM usuario";
    $usuarios_query = $mysqli->query($sql_sel_usuarios) or die($mysqli->error);
    $numero_usuarios = $usuarios_query->num_rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usúarios</h1>
    <table border="1" cellpadding="7">
        <thead>
           <th>Id</th> 
           <th>Nome</th> 
           <th>Email</th>
           <th>Data Nascimento</th> 
           <th>Contato</th>
           <th>Ações</th>
        </thead>
        <tbody>
        <?php
        if($numero_usuarios == 0) { ?>
            <td colspan="7">Nâo existem usuarios cadastrados</td>
        <?php } else { 
            while ($usuario = $usuarios_query->fetch_assoc()) {
                $nascimento = "Não informado";
                if (!empty($usuario['nascimento'])) {
                    $nascimento = formatar_data($usuario['nascimento']);
                }
        ?>            
            <tr>
                <td><?php echo $usuario['idusuario']; ?></td>
                <td><?php echo $usuario['nome']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><?php echo $nascimento; ?></td>
                <td><?php echo $usuario['contato']; ?></td>
                <td> 
                    <a href="editar_user.php?id=<?php echo $usuario['idusuario']; ?>">Editar</a>
                    <a href="deletar_user.php?editar.php?id=<?php echo $usuario['idusuario']; ?>">Remover</a>
                </td>
            </tr>
            <?php } 
        } ?>
        </tbody>
    </table>
    <br><br>
    <a href="/mapa_inova/cadastro_user.php">Cadastro</a>
</body>
</html>