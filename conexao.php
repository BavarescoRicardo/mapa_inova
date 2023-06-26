<?php

    $hostname="localhost";
    $bancodados="inova_db";
    $usuario="root";
    $senha="admin";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodados);
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        echo "Conexão com sucesso!!";
    }
?>