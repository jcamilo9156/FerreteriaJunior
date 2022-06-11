<?php
if (isset($_POST['busqueda-producto-modulo-ventas'])) {
$cat_producto = $_POST['categoria-productos'];
$nombre_producto =$_POST['nombre-producto'];
include ('conexion.php');
$consulta = "SELECT * FROM productos WHERE Categoria = '$cat_producto'";
$ejecucion = mysqli_query($conexion, $consulta);
// echo $consulta;
WHILE($arreglo = mysqli_fetch_array($ejecucion)){;
    echo "
    <div class='caja-producto'>
    <div class='caja-imagen'>";?>
      <img src="<?php echo $arreglo['Foto'];?>"><?php
    echo"</div>
    <h3 class='Titulo-producto'>"; echo $arreglo['Nombre']; echo"</h3>
    <div class='contenido'>
    <p>Stock</p><p class='estado-producto'>"; echo $arreglo['Stock']; echo"</p>
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
    ";
} 
}


?>


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

