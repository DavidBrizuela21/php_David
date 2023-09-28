<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-block">
<h2>Sesión abierta</h2>
<p>
<?php
if(isset($_POST['nombre'])){
    $_SESSION['nombre'] = $_POST['nombre'];
    echo "Bienvenido: <b>".$_POST['nombre']."</b>";
}else{
    if(isset($_SESSION['nombre'])){
        echo "Has iniciado sesión como: ".$_SESSION['nombre'];
    }else{
        //Si la sesion expira
        echo "Acceso restringido";
    }
}
?></p>
</p>
<br>
<p><a href="login.php">Ir a la página inical</a></p>
<br>
<p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
