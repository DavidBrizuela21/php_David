<!doctype html>
<html>
<head>
    <title>Edad</title> 
    <meta charset="UTF-8"/>
</head>
<body>
<?php 
$edad = 20;

#condicional multiple que imprime un texto según la edad 
//mejora el código para que los rangos sean MAYOR: 18 A 88 y MENOR 11 A 17
if($edad >= 18 and $edad <=80){
    echo "Eres mayor de edad";
}else if($edad < 18 and $edad > 11) {
    echo "Eres menor de edad"; 
}else{
    echo "Algo anda mal :(";
}
?>
</body>
</html>
