<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $n1=0;
    $n2="0";
    $solucion = "Resultado";
?>
<form method="post" action="">
    <input type="text" id="numero1" value="<?php echo $n1; ?>" placeholder="Numero1">
    <input type="text" id="numero2" value="<?php echo $n2; ?>" placeholder="Numero2">
    <input type="text" id="resultado" value="<?php echo $solucion; ?>" placeholder="Resultado">
    <br>
    <button id="operador" value="+">+</button>
    <button id="operador">-</button>
    <button id="operador">/</button>
    <button id="operador">*</button>
    <button id="operador">X</button>
</form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "post"){
        $operando1 = (int)$_GET['numero1'];
        $operando2 = (int)$_GET['numero2'];
        $operador = $_GET['operador'];

        if($operador == "+"){
         $solucion = $operando1 + $operando2;
        }else if($operador == "-"){
         $solucion = $operando1 - $operando2;
        }else if($operador == "*"){
         $solucion = $operando1 * $operando2;
        }else if($operador == "/"){
         $solucion = $operando1 / $operando2;
        }
    }
    ?>
    <input type="text" id="resultado" value="<?php echo $solucion; ?>" placeholder="Resultado">

</body>
</html>