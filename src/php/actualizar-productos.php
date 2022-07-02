<?php
if (isset($_POST['guardar-producto'])) {
    $id_producto = $_POST['Id_producto'];
    $nombreproducto = $_POST['nombre-producto'];
    $categoria = $_POST['categoria-producto'];
    $precio_venta = $_POST['precio-venta'];
    $precio_alquiler = $_POST['precio-alquiler'];
    $cantidadactual = $_POST['cantidad'];
    $cantidad_ingresa = $_POST['cantidad_ingresa'];
    $ubicacion = $_POST['ubicacion'];
    $observaciones = $_POST['observaciones'];
    $fechaingreso = $_POST['fecha-ingreso'];
    $proveedor = $_POST['proveedor'];
include('conexion.php');
/*
$query = "SELECT * FROM productos";
$ejecucion =mysqli_query($conexion, $query);
$arreglo =mysqli_fetch_array($ejecucion);
echo $arreglo ['Id_Producto'];
  */  
 $query = "UPDATE productos SET Nombre ='$nombreproducto', Categoria = '$categoria', Precio = '$precio_venta', 
 Precio_Dia_Alquiler = '$precio_alquiler', Stock = $cantidadactual + $cantidad_ingresa, Ubicacion = '$ubicacion',
 Detalle_Producto = '$observaciones', Fecha_Ingreso = '$fechaingreso', Proveedor = '$proveedor' WHERE Id_producto = $id_producto";
$ejecucion = mysqli_query($conexion, $query);
}if ($ejecucion) { ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preload" href="../css/estilos.css" as="style">
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">
        <title>Producto Actualizado</title>
    </head>
    <body>
    <div class="avisos">
        <span>
        <?php echo " <b>Producto actualizado correctamente, haga click ";?><a href="landing.php">aquí</a><?php echo "  para volver a la página de inicio."; ?>
    
        </span>
    </div>
    </body>
    </html>
      
    <?php
    }else {
       echo "Ha ocurrido un error y no se ha actualizado la información";
    }
    
    



?>
