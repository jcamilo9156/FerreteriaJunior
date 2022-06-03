<?php

if (isset($_POST['consulta-proveedor'])){
$Categoria = $_POST['id-proveedor-busqueda'];

include('conexion.php');
$resultados = mysqli_query($conexion, "SELECT * FROM proveedores WHERE Categoria = '$Categoria'");
include('cerrar-conexion.php');
while ($consulta = mysqli_fetch_array($resultados)){
 if (!$consulta) {
     echo "No existe proveedor en la categoría seleccionada";
 }else {
    echo "
    <div class='tablas'>";
    echo "<table>";
    echo "<tr>";
        echo "<th>Id</th>";
       echo " <th>Nombre o Razón Social</th>";
        echo "<th>Identificación</th>";
        echo "<th>Dirección</th>";
        echo "<th>Ciudad</th>";
        echo "<th>Teléfono</th>";
        echo "<th>Correo</th>";
        echo "<th>Categoría</th>";
        echo "<th>Acción</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>"; echo $consulta['Id_proveedor']; echo "</td>";
       echo "<td>"; echo $consulta['Nombre']; echo "</td>";
        echo "<td>";  echo $consulta['Identificacion']; echo "</td>";
       echo  "<td>"; echo $consulta['Direccion']; echo "</td>";
        echo "<td>"; echo $consulta['Ciudad']; echo "</td>";
        echo "<td>"; echo $consulta['Telefono']; echo "</td>";
        echo "<td>"; echo $consulta['Correo']; echo "</td>";
        echo "<td>"; echo $consulta['Categoria']; echo "</td>";
        echo "<td>
        <form action=' method='POST'>
        <input type='submit'value='Borrar' class='botones-tablas-borrar' name='borrar-usuario'>
        <input type='submit'value='Editar' class='botones-tablas-editar'>
    </td>
    </form>
</tr>

</table>
</div>

";
}
}
}
?>