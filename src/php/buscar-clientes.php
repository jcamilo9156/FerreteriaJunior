<?php

if(isset($_POST['consulta-todos-clientes'])){
    //$id_user = $_POST['id-client-search'];
    include('conexion.php');
echo "<table>
<tr>
       <th>Nombres</th>
    <th>Apellidos</th>
    <th>Razón Social</th>
    <th>Tipo Identificación</th>
    <th>Identificación</th>
    <th>Dirección</th>
       <th>Barrio</th>
    <th>Ciudad</th>
    <th>Teléfono</th>
    <th>Tipo Cliente</th>
    <th>Correo</th>
    <th>Acción</th>
    </tr>";
    
$resultados = mysqli_query($conexion, "SELECT * FROM clientes");
include('cerrar-conexion.php');
while ($consulta = mysqli_fetch_array($resultados)){
    
    echo "<tr>";
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
        <a href='src/php/borrar-cliente.php?Id_cliente=".$consulta['Id_cliente']."'><input type='submit' value='Borrar' class='botones-tablas-borrar'onclick='return confirmdelete()'></a>
        <a href='src/php/modificar-clientes.php?Id_cliente=".$consulta['Id_cliente']."'><input type='submit' value='Editar' class='botones-tablas-editar'></a>

        </td>";
    
}
}
if (isset($_POST['consulta-clientes'])){
    $consul_clientes = $_POST['id-client-search'];
    if ($consul_clientes ==""){
        echo " <div class='avisos'>
        <p>No has introducido ningún dato</p>
        </div>";
        return false;
    }else{
        echo "<table>
        <tr>
               <th>Nombres</th>
            <th>Apellidos</th>
            <th>Razón Social</th>
            <th>Tipo Identificación</th>
            <th>Identificación</th>
            <th>Dirección</th>
               <th>Barrio</th>
            <th>Ciudad</th>
            <th>Teléfono</th>
            <th>Tipo Cliente</th>
            <th>Correo</th>
            <th>Acción</th>
            </tr>";
    include('conexion.php');

$resultados = mysqli_query($conexion, "SELECT * FROM clientes WHERE Identificacion ='$consul_clientes'");
include('cerrar-conexion.php');}
$consulta = mysqli_fetch_array($resultados);
    if (!$consulta) {
        echo " <div class='avisos'>
        <p>No existe cliente con ese número de identificación</p>
        </div>";
        return false;
    }
    
    echo "<tr>";
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
           
        <a href='src/php/borrar-cliente.php?Id_cliente=".$consulta['Id_cliente']."'><input type='submit' value='Borrar' class='botones-tablas-borrar'onclick='return confirmdelete()'></a>
        <a href='src/php/modificar-clientes.php?Id_cliente=".$consulta['Id_cliente']."'><input type='submit' value='Editar' class='botones-tablas-editar'></a>

        </td>
     
    </tr>
    

    
    ";

} 


