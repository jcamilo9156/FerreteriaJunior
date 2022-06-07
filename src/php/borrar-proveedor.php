<!-- Borrar Proveedores-->

<?php
$borrar = $_GET['Id_proveedor'];
include('conexion.php');
$sentencia = "DELETE FROM proveedores WHERE Id_proveedor ='$borrar'";
$ejecucion = mysqli_query($conexion, $sentencia) or die("Error" .mysqli_error($conexion));
include('cerrar-conexion.php');
//echo($sentencia);
header('location:../../frm-gest-proveedores.php');
?>





