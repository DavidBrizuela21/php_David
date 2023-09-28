<!doctype html>
<html> 
<head>
    <title>Temperatura</title> 
    <meta charset="UTF-8"/>
</head>
<body>
<?php
//A parte de for(), existe el while(): ciclo mientras
$temperatura = 0;
//a diferencia del for(), el while() requiere indicar el contador o sumador
//mientras más próximo al valor 100 pintar en un tono rojo más fuerte 
while($temperatura <= 100){
    $tp=$temperatura*2;
    echo "<p style='color:rgb($tp,0,0);'>
        La Temperatura es: $temperatura
    </p>";
$temperatura++;
}
?>
</body> 
</html>