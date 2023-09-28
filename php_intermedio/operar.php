<?php
switch($_REQUEST['operacion']){
    case "suma":
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La suma es: ".$suma;
        break;

    case "resta":
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es: ".$resta;
        break;

    case "multiplicar":
        $multiplicar = $_REQUEST['valor1'] * $_REQUEST['valor2'];
        echo "La multiplicación es: ".$multiplicar;
        break;  

    case "dividir":
        $dividir = $_REQUEST['valor1'] / $_REQUEST['valor2'];
        echo "La division es: ".$dividir;
        break;        
}
?>