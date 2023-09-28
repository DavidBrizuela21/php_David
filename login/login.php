<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
</div>
<div class="login-block">
<?php
if(isset($_SESSION['nombre'])){
    echo "<P>Bienvenido: ".$_SESSION['nombre']."!";
    echo "<p><a href='logout.php'>Cerrar sesion</a></p>";
    echo "<br><p><a href='dashboard.php>Ir al panel de control</a>";
}
?>

<h2>Inicia sesión</h2>
<form action="dashboard.php" method="POST">
    <p><input type="text" placeholder="Usuario" name="nombre" id="username" requiered autofocus/></p>
    <button>Acceder</button>
</div>
</form>
</body>
</html>

