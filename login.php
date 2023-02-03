<?php
session_start();

    $_SESSION['usuario'] = [0];

    $_SESSION['password'] = [0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css_inicios.css">
    <?php
        include_once('css.php');?>
</head><br><br><br><br><br><br>
<body>
    <form action="loginController.php" method="POST">
    <section class="from-register">

        <h4> INICIAR SESION </h4>
        
        <input class="controls" type="text" name="usuario" placeholder="Usuario">
        <br>
        <input class="controls" type="password" name="password" placeholder="Contraseña">
        <br>

       
        <input class="btn btn-outline-light btn-lg" type="submit" value="Entrar">
        <a class="btn btn-outline-primary " href="index.php" role="button">Home</a>
    </section>
    </form>

    
</body>
</html>