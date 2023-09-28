<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array3</title>
</head>
<body>
<?php
    $productos=array(
        array("Heladera",2500000,18),
        array("Microonda",1500000,9),
        array("Cocina",590000,21),
        array("Licuadora",450000,15),
        array("Licuadora",260000,5),
        array("Ventilador",150000,15),
    );
    //imprimir todos los valores
    $count=count($productos);
    for($x=0; $x<$count; $x++){
        echo $productos[$x][0]." - ";
        echo $productos[$x][1]." - ";
        echo $productos[$x][2];
        echo "<br>";
    } 
    //imprimir solo los productos con (precio <= 1000000)
    echo "<hr>";
    echo "PRODUCTOS DE MENOS DE UN MILLÓN <BR>";
    for($x=0; $x<$count; $x++){
        if ($productos[$x][1] <= 1000000){
            echo $productos[$x][0]." - ";
            echo $productos[$x][1]." - ";
            echo $productos[$x][2];
            echo "<br>";
        }
    } 
?>
</body>
</html>