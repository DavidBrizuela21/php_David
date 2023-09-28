<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
<?php
    $dia[0]="domingo";
    $dia[1]="lunes";
    $dia[2]="martes";
    $dia[3]="miercoles";
    $dia[4]="jueves";
    $dia[5]="viernes";
    $dia[6]="sabado";

    $mes=array("enero","febrero","marzo");
    //mostrar el viernes
    echo "Dia: ".$dia[5]."  ";
    //imprimir febrero
    echo "Mes: ".$mes[1];
?>
<?php
    $autos=array("Volvo", "BMW", "Toyota");
    $arraylongitud=count($autos);
    echo "<br>";
    for($x=0; $x<$arraylongitud; $x++){
        echo "<br>";
        echo $autos[$x];
    }
?>
</body>
</html>