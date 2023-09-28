<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cerrar sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-block">
   <h2>Has cerrado la sesión</h2>
   <br/>
   <p><a href="login.php">Ir al Login</a></p> 
</div>
</body>
</html>