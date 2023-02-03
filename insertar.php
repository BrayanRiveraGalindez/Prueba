<?php
include("conexion.php");
$con=conectar();


$codigo=$_POST['id_usuario'];
$Nombre=$_POST['nombre'];
$Apellidos=$_POST['apellidos'];
$Telefono=$_POST['telefono'];
$Correo=$_POST['correo'];
$Login=$_POST['login'];
$Password=$_POST['password'];


$sql="INSERT INTO usuarios (id_usuario, Nombre, Apellidos,Telefono,Correo,Usuario,Contrasenia) VALUES('$codigo','$Nombre','$Apellidos','$Telefono','$Correo','$Login','$Password')";
$query=mysqli_query($con,$sql);

if($query){
    header("location: principal.php");

}else{

}
?>