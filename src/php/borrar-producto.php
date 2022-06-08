<?php
$borrar = $_GET['Id_producto'];
include('conexion.php');
$sentencia = "DELETE FROM productos WHERE Id_producto ='$borrar'";
$ejecucion = mysqli_query($conexion, $sentencia) or die("Error" .mysqli_error($conexion));
include('cerrar-conexion.php');
header('location:../../frm-gest-inventario.php');
?>