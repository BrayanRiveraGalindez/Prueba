<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    include("conexion.php");
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $con = conectar();


    

    $sql = "SELECT Usuario,Contrasenia FROM usuarios where Usuario='$usuario' and Contrasenia='$password'";

    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);


    if ($row) {
        session_start();
        
        $_SESSION['usuario'] = [1];
        $_SESSION['password'] = [1];

        header("location: principal.php");
    }
    if ($_SESSION['usuario'] != [1]) {
        header("location: index.php");
    }
    if ($_SESSION['password'] != [1]) {
        header("location: index.php");
    }
    ?>


</body>

</html>