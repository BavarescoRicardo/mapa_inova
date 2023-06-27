<?php

    $hostname="localhost";
    $bancodados="inova_db";
    $usuario="root";
    $senha="admin";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodados);
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    function formatar_data($data){
        return implode('/', (array_reverse(explode('-', $data))));
    }

    function formatar_telefone($telefone){
        $ddd = substr($telefone, 0, 2);
        $parte1 = substr($telefone, 2, 5);
        $parte2 = substr($telefone, 7);
        return "($ddd) $parte1-$parte2";
    }    
?>