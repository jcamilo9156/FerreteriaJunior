<?php
if (isset($_POST['consulta-todos-users'])){ ?>
<?php echo "
    <table>
    <tr>
    <th>Usuario</th>
    <th>Clave</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Identificación</th>
    <th>Direccion</th>
    <th>Barrio</th>
    <th>Ciudad</th>
    <th>Teléfono</th>
    <th>Correo</th>
    <th>Tipo Usuario</th>
    <th>Acción</th>
</tr>"?>
<?php
    include ('conexion.php');
    $resultados = mysqli_query($conexion, "SELECT * FROM usuarios");
    include('cerrar-conexion.php');?>
<!-- Boton para generar PDF al hacer click en todos -->

    <?php
    while ($consulta = mysqli_fetch_array($resultados)){
    echo "<tr>";
        echo "<td>"; echo $consulta['Usuario']; echo "</td>";
        echo "<td>"; echo $consulta['Clave']; echo "</td>";
        echo "<td>"; echo $consulta['Nombres']; echo "</td>";
        echo "<td>"; echo $consulta['Apellidos']; echo "</td>";
        echo "<td>"; echo $consulta['Identificacion']; echo "</td>";
        echo "<td>"; echo $consulta['Direccion']; echo "</td>";
        echo "<td>"; echo $consulta['Barrio']; echo "</td>";
        echo "<td>"; echo $consulta['Ciudad']; echo "</td>";
        echo "<td>"; echo $consulta['Telefono']; echo "</td>";
        echo "<td>"; echo $consulta['Correo']; echo "</td>";
        echo "<td>"; echo $consulta['Tipo_usuario']; echo "</td>";
        echo "<td>
        <a href='src/php/borrar-usuario.php?Usuario=".$consulta['Usuario']."'><input type='submit' value='Borrar' class='botones-tablas-borrar'onclick='return confirmdelete()'></a>
            <input type='submit'value='Editar' class='botones-tablas-editar'>
        </td>";
        

}   
}
if (isset($_POST['consulta-usuarios'])){
$consulta_usuario = $_POST['id-busqueda'];
if ($consulta_usuario =="") {
    echo " <div class='avisos'>
   <p>No has introducido ningún dato</p>
   </div>";
}
 else {
    include ('conexion.php');
    $resultados = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Identificacion = '$consulta_usuario' ");
    include('cerrar-conexion.php');
    $consulta = mysqli_fetch_array($resultados);
    if (!$consulta) {
        echo " <div class='avisos'>
        <p>No existe usuario con ese número de identificación</p>
        </div>";
        return false;
    }
    echo "<tr>";
        echo "<td>"; echo $consulta['Usuario']; echo "</td>";
        echo "<td>"; echo $consulta['Clave']; echo "</td>";
        echo "<td>"; echo $consulta['Nombres']; echo "</td>";
        echo "<td>"; echo $consulta['Apellidos']; echo "</td>";
        echo "<td>"; echo $consulta['Identificacion']; echo "</td>";
        echo "<td>"; echo $consulta['Direccion']; echo "</td>";
        echo "<td>"; echo $consulta['Barrio']; echo "</td>";
        echo "<td>"; echo $consulta['Ciudad']; echo "</td>";
        echo "<td>"; echo $consulta['Telefono']; echo "</td>";
        echo "<td>"; echo $consulta['Correo']; echo "</td>";
        echo "<td>"; echo $consulta['Tipo_usuario']; echo "</td>";
        echo "<td>
        <a href='src/php/borrar-usuario.php?Usuario=".$consulta['Usuario']."'><input type='submit' value='Borrar' class='botones-tablas-borrar'onclick='return confirmdelete()'></a>
            <input type='submit'value='Editar' class='botones-tablas-editar'>
        </td>";
        

}

}


?>