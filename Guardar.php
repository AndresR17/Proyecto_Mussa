<?php
include("conec.php");

$pnombre  = $_POST['pnombre'];
$snombre  = $_POST['snombre'];
$papellido= $_POST['papellido'];
$sapellido= $_POST['sapellido'];
$cedula   = $_POST['cedula'];
$foto     = $_POST['foto'];
$fecha    = $_POST['fecha'];
$concurso = $_POST['concurso'];
$mensaje  = $_POST['mensaje'];

$insertar= mysqli_query ($conexion, "INSERT INTO registrarme(id, pnombre,snombre,papellido,sapellido,cedula,foto,fecha,concurso,mensaje) VALUES (null,'$pnombre','$snombre','$papellido','$sapellido','$cedula','$foto','$fecha','$concurso','$mensaje')");


mysqli_close($conexion);
header('location:index.php')

?>