<!doctype html>
<html>
<head>
    <title>Tabla</title> 
    <meta charset="UTF-8"/>
</head>
<body>
<?php
//imprimir una tabla de multiplicar con for() 
//Luego mejorar para imprimir todas las tablas del 1 al 10
for ($x = 1; $x <= 10; $x++){
    echo "<h3>TABLA DEL $x <BR>";
    for($y = 1; $y <= 10; $y++){
        echo "$x x $y = ".($y*$x)."<br>";
    }
    echo "<br> <hr>";
}
?>
</body>
</html>