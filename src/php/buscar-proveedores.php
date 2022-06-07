<?php

if (isset($_POST['consulta-proveedor'])){
$Categoria = $_POST['id-proveedor-busqueda'];

include('conexion.php');
$resultados = mysqli_query($conexion, "SELECT * FROM proveedores WHERE Categoria = '$Categoria'");
include('cerrar-conexion.php');
while ($consulta = mysqli_fetch_array($resultados)){
 if (!$consulta) {
    echo "
    <div class='avisos'>
    <p>No existe proveedor en la categoría seleccionada</p>
   </div>";
 }else {
        echo "<tr>";
        
       echo "<td>"; echo $consulta['Nombre']; echo "</td>";
        echo "<td>";  echo $consulta['Identificacion']; echo "</td>";
       echo  "<td>"; echo $consulta['Direccion']; echo "</td>";
        echo "<td>"; echo $consulta['Ciudad']; echo "</td>";
        echo "<td>"; echo $consulta['Telefono']; echo "</td>";
        echo "<td>"; echo $consulta['Correo']; echo "</td>";
        echo "<td>"; echo $consulta['Categoria']; echo "</td>";
        echo "<td>
        <a href='src/php/borrar-proveedor.php?Id_proveedor=".$consulta['Id_proveedor']."'><input type='submit' value='Borrar' class='botones-tablas-borrar' name='borrar-usuario' onclick='return confirmdelete()'></a>
        <input type='submit'value='Editar' class='botones-tablas-editar'>
    </form>
    </td>
</tr>
";
}
}
}
if (isset($_POST['borrar-usuario'])){

}
 if (isset($_POST['consulta-todos-proveedores'])){
    include('conexion.php');
$resultados = mysqli_query($conexion, "SELECT * FROM proveedores");
include('cerrar-conexion.php');
while ($consulta = mysqli_fetch_array($resultados)){
        echo "<tr>";
       echo "<td>"; echo $consulta['Nombre']; echo "</td>";
        echo "<td>";  echo $consulta['Identificacion']; echo "</td>";
       echo  "<td>"; echo $consulta['Direccion']; echo "</td>";
        echo "<td>"; echo $consulta['Ciudad']; echo "</td>";
        echo "<td>"; echo $consulta['Telefono']; echo "</td>";
        echo "<td>"; echo $consulta['Correo']; echo "</td>";
        echo "<td>"; echo $consulta['Categoria']; echo "</td>";
        echo "<td>
       
        <a href='src/php/borrar-proveedor.php?Id_proveedor=".$consulta['Id_proveedor']."'><input type='submit' value='Borrar' class='botones-tablas-borrar'onclick='return confirmdelete()'></a>
        <input type='submit'value='Editar' class='botones-tablas-editar'>
    </td>
    </form>
</tr>";
}
}
?>


