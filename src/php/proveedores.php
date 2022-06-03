<?php
if (isset($_POST['guardar-proveedor'])) {
    $Nombre = $_POST['Nombre'];
    $ID = $_POST['ID'];
    $Direccion = $_POST['Direccion'];
    $Ciudad = $_POST['Ciudad'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Categoria = $_POST['categoria-proveedor'];

include('conexion.php');
$insertar = "INSERT INTO proveedores (Nombre, Identificacion, Direccion, Ciudad, Telefono, Correo,Categoria)
VALUES('$Nombre','$ID','$Direccion','$Ciudad','$Telefono','$Correo', '$Categoria')";
@$resultado = mysqli_query($conexion,$insertar);
include('cerrar-conexion.php');
if (!@$resultado) {
    echo " <div class='avisos'>
    <p>Ocurrió un error al momento de registrar el proveedor o el documento ya existe</p>
    </div>";
}else{
    echo "<div class='avisos'>
   <p> Proveedor registrado con éxito </p>
    </div>";
}
}
?>

<?php

if (isset($_POST['consulta-proveedor'])){
$Categoria = $_POST['id-proveedor-busqueda'];

include('conexion.php');
$resultados = mysqli_query($conexion, "SELECT * FROM clientes WHERE Categoria = '$Categoria'");
include('cerrar-conexion.php');
while ($consulta = mysqli_fetch_array($resultados)){
 if (!$resultados) {
     echo "No existe proveedor en la categoría seleccionada";
 }else {
    echo "
    <div class='tablas'>";
    echo "<table>";
    echo "<tr>";
        echo "<th>Id</th>";
       echo " <th>Nombres</th>";
        echo "<th>Apellidos</th>";
        echo "<th>Razón Social</th>";
        echo "<th>Tipo Identificación</th>";
        echo "<th>Identificación</th>";
        echo "<th>Dirección</th>";
       echo " <th>Barrio</th>";
        echo "<th>Ciudad</th>";
        echo "<th>Teléfono</th>";
        echo "<th>Tipo Cliente</th>";
        echo "<th>Correo</th>";
        echo "<th>Acción</th>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>;echo $consulta['Nombres']; echo "</td>";
           echo "<td>"; echo $consulta['Nombres']; echo "</td>";
            echo "<td>";  echo $consulta['Apellidos']; echo "</td>";
           echo  "<td>"; echo $consulta['Razon_Social']; echo "</td>";
            echo "<td>"; echo $consulta['Tipo_identificacion']; echo "</td>";
            echo "<td>"; echo $consulta['Identificacion']; echo "</td>";
            echo "<td>"; echo $consulta['Direccion']; echo "</td>";
            echo "<td>"; echo $consulta['Barrio']; echo "</td>";
           echo  "<td>"; echo $consulta['Ciudad']; echo "</td>";
            echo "<td>"; echo $consulta['Telefono']; echo "</td>";
            echo "<td>"; echo $consulta['Tipo_cliente']; echo "</td>";
            echo "<td>"; echo $consulta['Correo']; echo "</td>";
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