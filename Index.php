<?php
session_start();

    $_SESSION['btnInicio'] = [0];

    $_SESSION['btnRegistar'] = [0];

    $_SESSION['usuario'] = [0];

    $_SESSION['password'] = [0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>

    <link rel="stylesheet" href="css_inicios.css">
   
    <?php
    include_once('css.php');
    ?>
   


</head><br><br><br><br><br><br>
<body>

    <section class="from-register">

        <H4 >BIENVENIDOS</H4>
        <br>
        <br>

        <a class="controls btn btn-outline-info btn-lg" href="login.php" role="button"  value="0" name= "btnInicio">Iniciar sesion</a>
        <br>
        <br>
        <a class="controls btn btn-outline-info btn-lg" href="FormularioRegistro.php" role="button"  value="1" name= "btnRegistrar">Registrarse</a>
     </section>


    
</body>
</html>