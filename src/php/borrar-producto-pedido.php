<?php
$borrar = $_GET['id_venta'];
$devolver_stock = $_GET['cantidad'];
$nombre_producto = $_GET['nombre_producto'];
include('conexion.php');

$sentencia = "DELETE FROM ventas WHERE id_venta ='$borrar'";
$ejecucion = mysqli_query($conexion, $sentencia) or die("Error" .mysqli_error($conexion));

// Añadir nuevamente el producto al stock //
 if ($sentencia) {
    $sentencia = "SELECT Stock FROM productos WHERE Nombre = '$nombre_producto'";
    $ejecucion = mysqli_query($conexion, $sentencia);
   
    while ($arreglo= mysqli_fetch_array($ejecucion)) {
        $stock_final= $arreglo['Stock']+$devolver_stock; //Obtengo el stock actual luego del pedido y le sumo la cantidad devuelta
    $sentencia_actualizar_stock = "UPDATE productos Set Stock = '$stock_final' WHERE Nombre = '$nombre_producto'";
    $ejecucion = mysqli_query($conexion, $sentencia_actualizar_stock);
    header('location:../../lista-compra.php');
    }
   
}

include('cerrar-conexion.php');

?>