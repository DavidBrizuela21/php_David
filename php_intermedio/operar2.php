<?php
if (isset($_REQUEST)){
    $valor_1=$_REQUEST['valor1'];
    $valor_2=$_REQUEST['valor2'];
    $operacion=$_REQUEST['operacion'];
    validar_numero($valor_1);
    validar_numero($valor_2);
    print(calcular($valor_1, $valor_2, $operacion));
}

function validar_numero($x){
    if($x=="" || $x==NULL){
        header('Location:index.php');
        exit();
    }
}

function calcular($x,$y,$o){
    switch($o){
        case "suma":
            echo "La suma es: ".($x + $y);
            break;
        case "resta":
            echo "La resta es: ".($x - $y);
            break;
        case "multiplicar":
            echo "La multiplicacion es: ".($x * $y);
            break;
        case "dividir":
            echo "La division es: ".($x / $y);
            break;                
    }
}
?>