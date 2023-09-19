<?php
include("conec.php");

$nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Mensaje = $_POST['Mensaje'];

$insertar= mysqli_query ($conexion, "INSERT INTO registro(Nombre,Correo,Telefono,Mensaje) VALUES ('$Nombre','$Correo','$Telefono','$Mensaje')");


mysqli_close($conexion);
header('location:index.php')

?>