<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array2</title>
</head>
<body>
<?php
    $edades=array("Moises"=>"33", "Camila"=>"25", "Samanta"=>"17");
    echo "Camila tienes ".$edades["Camila"]." años. ";

    foreach($edades as $x=>$valor){
        echo "<br>";
        echo "Clave=".$x.", Valor=".$valor;
    }
?>
</body>
</html>