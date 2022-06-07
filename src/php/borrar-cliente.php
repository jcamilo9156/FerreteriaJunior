<?php
$borrar = $_GET['Id_cliente'];
include('conexion.php');
$sentencia = "DELETE FROM clientes WHERE Id_cliente ='$borrar'";
$ejecucion = mysqli_query($conexion, $sentencia) or die("Error" .mysqli_error($conexion));
include('cerrar-conexion.php');
header('location:../../frm-gest-clientes.php');
?>