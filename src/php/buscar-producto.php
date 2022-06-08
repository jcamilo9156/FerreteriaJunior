
<?php
// BUSCAR POR CATEGORIA //////

if (isset($_POST['consulta-producto'])) {
   $cat_producto = $_POST['cat_producto'];
   include('conexion.php');
   $peticion = "SELECT * FROM productos Where Categoria = '$cat_producto'";
   $ejecucion = mysqli_query($conexion, $peticion) or die ("error" .mysqli_error($conexion)); 
   include('cerrar-conexion.php');
   while ($consulta = mysqli_fetch_array($ejecucion)){
  
    echo "<tr>";
    echo "<td>";echo $consulta['Nombre']; echo "</td>";
    echo "<td>";echo $consulta['Categoria'];echo "</td>";
     echo "<td>";echo"$";echo $consulta['Precio'];echo "</td>";
    echo  "<td>";echo"$";echo $consulta['Precio_Dia_Alquiler']; echo "</td>";
     echo "<td>";echo $consulta['Stock']; echo "</td>";
     echo "<td>";echo $consulta['Ubicacion']; echo "</td>";
     echo "<td>";echo $consulta['Detalle_Producto']; echo "</td>";
     echo "<td>";echo $consulta['Fecha_ingreso'];echo "</td>";
    echo  "<td>";echo $consulta['Proveedor'];echo "</td>";
     echo "<td>
         <a href='src/php/borrar-cliente.php?Id_cliente=".$consulta['Id_producto']."'><input type='submit' value='Borrar' class='botones-tablas-borrar'onclick='return confirmdelete()'></a>
         <input type='submit'value='Editar' class='botones-tablas-editar'>
     </td>
     </tr>";

  }
  

}



// Buscar todos los Productos /////////

if (isset($_POST['consulta-todos-productos'])) {
    include('conexion.php');
    $peticion = "SELECT * FROM productos";
    $ejecucion = mysqli_query($conexion, $peticion) or die ("error" .mysqli_error($conexion));
    while ($consulta = mysqli_fetch_array($ejecucion)){

        echo "<tr>";
        echo "<td>";echo $consulta['Nombre']; echo "</td>";
        echo "<td>";echo $consulta['Categoria'];echo "</td>";
         echo "<td>";echo"$";echo $consulta['Precio'];echo "</td>";
        echo  "<td>";echo"$";echo $consulta['Precio_Dia_Alquiler']; echo "</td>";
         echo "<td>";echo $consulta['Stock']; echo "</td>";
         echo "<td>";echo $consulta['Ubicacion']; echo "</td>";
         echo "<td>";echo $consulta['Detalle_Producto']; echo "</td>";
         echo "<td>";echo $consulta['Fecha_ingreso'];echo "</td>";
        echo  "<td>";echo $consulta['Proveedor'];echo "</td>";
         echo "<td>
             <a href='src/php/borrar-producto.php?Id_producto=".$consulta['Id_producto']."'><input type='submit' value='Borrar' class='botones-tablas-borrar'onclick='return confirmdelete()'></a>
             <input type='submit'value='Editar' class='botones-tablas-editar'>
         </td>
         </tr>";
}
}
?>