<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="../css/estilos.css" as="style">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    


<?php
if (isset($_POST['busqueda-producto-modulo-ventas'])) {
$cat_producto = $_POST['categoria-productos'];

include ('conexion.php');
$consulta = "SELECT * FROM productos WHERE Categoria = '$cat_producto'";
$ejecucion = mysqli_query($conexion, $consulta);
// echo $consulta;
WHILE($arreglo = mysqli_fetch_array($ejecucion)){?>
    <form action="#" method="POST">
    <div class="caja-producto">
    <input type ="hidden" name="idproducto"  value="<?php echo $arreglo['Id_producto'];?>">
    <div class="caja-imagen">
      <img src="<?php echo $arreglo['Foto'];?>">
    </div>
    <h3 class="Titulo-producto"><?php echo $arreglo['Nombre'];?></h3>
    <div class="contenido">
    <p>Stock</p><p class="estado-producto"><?php echo $arreglo['Stock'];?></p>
    </div>
    <div class="contenido">
    <p>Cantidad a facturar</p><input class="input-cant-venta" type="text" name="cantidad" required> 
    </div>
    <div class="contenido">
        <p>Precio:  $<?php echo $arreglo['Precio'];?>
    </div>
    
    <input type='submit' name='añadir-producto' value='Añadir producto' class='boton-añadir-carrito'>


  <!--  /*<a href='factura-venta.php?cantidad=cantidad&idproducto=".$arreglo['Id_producto']."&precio=".$arreglo['Precio']."&stock=".$arreglo['Stock']."'><input type='submit' name='añadir-producto' value='Añadir producto' class='boton-añadir-carrito'></a>";?>!-->
    </div>    
    </form>
    <?php

}
// Comprobamos que la cantidad a añadir no sea de 0 o número negativo 
}
if (isset($_POST['añadir-producto'])) {
  $idproducto = $_POST['idproducto'];
  $cantidad = $_POST['cantidad'];
  include ('src/php/conexion.php');
  $consulta = "SELECT Stock FROM productos WHERE Id_producto = '$idproducto'";
  $ejecucion = mysqli_query($conexion, $consulta);
  while ($arreglo=mysqli_fetch_array($ejecucion)) {
    $stock_actual = $arreglo['Stock'];
    if ($cantidad >$stock_actual) {
     echo "<div class='avisos'>
     No se puede añadir producto ya que no se cuenta con suficiente stock, por favor valide nuevamente
     </div>";
     return false;
    }
  }
if ($cantidad <=0) {
  echo " <div class='avisos'>
  La cantidad a añadir no puede ser 0
  </div>";
  return false;
}




  include ('src/php/conexion.php');
$consulta = "SELECT * FROM productos WHERE Id_producto = '$idproducto'";
$ejecucion = mysqli_query($conexion, $consulta);

while ($arreglo = mysqli_fetch_array($ejecucion)) {
  $nombreproducto = $arreglo['Nombre'];
  $preciound = $arreglo['Precio'];
  $subtotal = $cantidad*$arreglo['Precio'];
  $impuesto = 0.19;
  $total= $subtotal+$subtotal*$impuesto;
  
  $consulta = "INSERT INTO ventas(cantidad, nombre_producto, precio_unitario, subtotal, total)
   VALUES('$cantidad','$nombreproducto','$preciound','$subtotal','$total')";
   $ejecucion = mysqli_query($conexion, $consulta);

   // Si el producto ya está, no añadir sino aumentar



   //reducir stock si oprimo añadir producto
   $nuevostock = $arreglo['Stock']-$cantidad;
   $consulta = "UPDATE productos SET Stock = '$nuevostock' WHERE Id_producto = '$idproducto'";
   $ejecucion = mysqli_query($conexion, $consulta);


   //echo $consulta; "<br>";
   //echo $impuesto;
   //echo " el subtotal es: ".$subtotal; "<br>";
   //echo "El total con impuesto es: ".$total;

if ($ejecucion) {
  echo "
  <div class='avisos'>
  Producto añadido correctamente, si deseas continuar con la compra haz click en buscar para encontrar un nuevo producto, 
  si quieres seguir al proceso de facturación, haz click en el botón ir a facturación.
 
  </div>";
  return true;
} else {
  echo "Hubo un error al agregar el producto";
}

}
}
?>
</body>
</html>

<?php
/*
  <div class='caja-productos-main'>
    <div class='caja-producto'>
    <div class='caja-imagen'>
        <img src='src/img/C.-Gris-UG-50-kg-Producto.png' alt='imagen-cemento'>
    </div>
    <h3 class='Titulo-producto'>"; echo $arreglo['Nombre']; echo"</h3>
    <div class='contenido'>
    <p>Estado</p><p class='estado-producto'> Disponible</p>
    </div>
    <div class='contenido'>
        
    <p>Cantidad a facturar</p><input class='input-cant-venta' type='text' name'cantidad'>
    </div>
    <div class='contenido'>
        <p>Precio:  $"; echo $arreglo['Precio'];
        echo"
    </div>
    <input type='submit' name='busqueda-producto-modulo-ventas' value='Añadir al  carrito' class='boton-añadir-carrito'>
    </div>    
    </div>
    </div>
    ";
}
}

*/
?>

