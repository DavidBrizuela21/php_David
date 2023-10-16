<?php
    if(isset($_POST)){
        $NOMBRE = $_POST["NOMBRE"];
        $AUTOR = $_POST["AUTOR"];
        $GEN_ID = $_POST['GENERO_ID'];
        //aqui el nick es estatico porque aun no se implementa sesion
        $NICKNAME = "moios";
    }

    include "conexion.php";

    $sql_insertar = "INSERT INTO `cancion`(`ID`, `NOMBRE`, `AUTOR`, `NICKNAME`, `GENERO_ID`) 
    VALUES(default, '$NOMBRE', '$AUTOR', '$NICKNAME', '$GEN_ID');";

    $conexion->query($sql_insertar);

    //una vez insertado, volver al dashboard
    header("Location: cancion.php");
    exit;
?>