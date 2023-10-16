<?php
    include "vars.php";

    $conexion = new mysqli($host, $user, $password, $database, $port);

    if($conexion->connect_errno){
        echo "No se pudo conectar ".$conexion->connect_error;
    }
?>