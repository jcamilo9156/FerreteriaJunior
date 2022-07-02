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
    
    <div class="caja-producto">
    <input type ="hidden" value="<?php echo $arreglo['Id_producto'];?>">
    <div class="caja-imagen">
      <img src="<?php echo $arreglo['Foto'];?>">
    </div>
    <h3 class="Titulo-producto"><?php echo $arreglo['Nombre'];?></h3>
    <div class="contenido">
    <p>Stock</p><p class="estado-producto"><?php echo $arreglo['Stock'];?></p>
    </div>
    <div class="contenido">
        
    <p>Cantidad a facturar</p><input class="input-cant-venta" type="text" name="cantidad"> 
    </div>
    <div class="contenido">
        <p>Precio:  $<?php echo $arreglo['Precio'];?>
    </div>
    <?php echo "
    <a href='#?idproducto =".$arreglo['Id_producto']."'><input type='submit' name='añadir-producto' value='Añadir producto' class='boton-añadir-carrito'></a>";?>
    </div>    
    </form>
    <?php
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

