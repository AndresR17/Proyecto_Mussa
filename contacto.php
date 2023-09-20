<?php
include("contacto.php");

$Nombre  = $_POST['Nombre'];
$Telefono  = $_POST['Telefono'];
$Correo= $_POST['Correo'];
$Mensaje   = $_POST['Mensaje'];


$insertar= mysqli_query ($conexion, "INSERT INTO contacto(id,Nombre,Telefono,Correo,Mensaje) VALUES (null,'$Nombre','$Telefono','$Correo','$Mensaje')");


mysqli_close($conexion);
header('location:index.php')

?>