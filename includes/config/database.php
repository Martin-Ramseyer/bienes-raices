<?php
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'estoico1553', 'bienesraices');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }
    return $db;
}