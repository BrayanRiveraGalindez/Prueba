<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>FormularioRegistro</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="post">

                    <input type="hidden" class="form-control mb-3" name="id_usuario" placeholder="codigo">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                    <input type="text" class="form-control mb-3" name="login" placeholder="Usuario">
                    <input type="password" class="form-control mb-3" name="password" placeholder="Contraseña">

                    <input type="submit" class="btn btn-primary">
                    <a class="btn btn-outline-primary " href="index.php" role="button">Atras</a>

                </form>
            </div>
        </div>
    </div>


</body>

</html>