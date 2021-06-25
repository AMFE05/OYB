<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../BootStrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>CONTACTO</title>

</head>
<body>

<?php
$Nombre = $_POST["nombre"];
$Correo = $_POST["correo"];
$Tel = $_POST["tel"];
$Mensaje = $_POST["mensaje"];


$servidor = "localhost";
$usuario = "root";
$clave = "";
$DB = "contacto";

$conexion = mysqli_connect($servidor, $usuario, $clave, $DB);

$sql= "INSERT INTO mensajes(Nombre, Correo, Tel, Mensaje) VALUES ('$Nombre', '$Correo', '$Tel', '$Mensaje')";

$resultado = mysqli_query($conexion, $sql);
?>

<div class="container bg-color-success">
    <div class="row">
        <div class="col m-5">
            <br>
            <br>
            <h1>Datos insertados correctamente</h1>
            <h2>Gracias por darnos tu comentario</h2>
            <h3>:D</h3>
            <a class="btn btn-info" href="index.html">Regresar</a>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="./BootStrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>


