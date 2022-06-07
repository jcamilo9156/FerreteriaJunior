<?php
if (isset($_POST['busqueda-producto-modulo-ventas'])){
echo"
<div class='caja-productos-main'>
<div class='caja-producto'>
<div class='caja-imagen'>
    <img src='src/img/C.-Gris-UG-50-kg-Producto.png' alt='imagen-cemento'>
</div>
<h3 class='Titulo-producto'>Cemento Gris Marca Argos x50 kg</h3>
<div class='contenido'>
<p>Estado</p><p class='estado-producto'> Disponible</p>
</div>
<div class='contenido'>
    
<p>Cantidad a facturar</p><input class='input-cant-venta' type='text' name'cantidad'>
</div>
<div class='contenido'>
    <p>Precio  $50000</p>
</div>
<input type='submit' name='busqueda-producto-modulo-ventas' value='Añadir al  carrito' class='boton-añadir-carrito'>
</div>


<div class='caja-producto'>
    <div class='caja-imagen'>
        <img src='src/img/4016.jpg' alt='imagen-cemento'>
    </div>
    <h3 class='Titulo-producto'>Cemento Blanco Marca Cemex x50 kg</h3>
    <div class='contenido'>
        <p>Estado</p><p class='estado-producto'> Disponible</p>
        </div>
        <div class='contenido'>
        <p>Cantidad a facturar</p><input class='input-cant-venta' type='text' name'cantidad'>
        </div>
        <div class='contenido'>
            <p>Precio  $45000</p>
        </div>
        <input type='submit' name='busqueda-producto-modulo-ventas' value='Añadir al  carrito' class='boton-añadir-carrito'>
</div>
<div class='caja-producto'>
    <div class='caja-imagen'>
        <img src='src/img/C.-Gris-UG-50-kg-Producto.png' alt='imagen-cemento'>
    </div>
    <h3 class='Titulo-producto'>Cemento Gris Marca Argos x50 kg</h3>
    <div class='contenido'>
        <p>Estado</p><p class='estado-producto'> Disponible</p>
        </div>
        <div class='contenido'>
        <p>Cantidad a facturar</p><input class='input-cant-venta' type='text' name'cantidad'>
        </div>
        <div class='contenido'>
        <p>Precio  $50000</p>
    </div>
        <input type='submit' name='busqueda-producto-modulo-ventas' value='Añadir al  carrito' class='boton-añadir-carrito'>
</div>    
</div>
";
}
?>