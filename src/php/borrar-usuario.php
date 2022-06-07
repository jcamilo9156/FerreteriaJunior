<?php
$borrar = $_GET['Usuario'];
include('conexion.php');
$sentencia = "DELETE FROM usuarios WHERE Usuario ='$borrar'";
$ejecucion = mysqli_query($conexion, $sentencia) or die("Error" .mysqli_error($conexion));
include('cerrar-conexion.php');
header('location:../../frm-reg-usuarios.php');

?>