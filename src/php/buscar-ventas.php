<?php
if (isset($_POST['buscar-venta'])) {
    $vendedor = $_POST['nombre-vendedor'];
include('conexion.php');
$consulta = "SELECT * FROM factura_venta WHERE nombre_vendedor = '$vendedor'";
$ejecucion = mysqli_query($conexion, $consulta);
$row_cnt = $ejecucion->num_rows; // Contamos las filas, si no hay registro enviamos error.
if ($row_cnt==0) {
    echo " <div class='avisos'>
    <p>No existen ventas relacionadas con el vendedor seleccionado</p>
    </div>";
    return false;
} else {?>
    <table class="tablas" cellspacing="0">
    <tr>
            <th>factura #</th>
            <th>fecha de Venta</th>
            <th>Nombre Cliente</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Forma de Pago</th>
        </tr>
       <?php

}
while ($arreglo =mysqli_fetch_array($ejecucion)) {?>
 <tr>
    <td><?php echo $arreglo['id_factura']?></td>
    <td><?php echo $arreglo['fecha_venta']?></td>
    <td><?php echo $arreglo['nombre_cliente']?></td>
    <td><?php echo $arreglo['descripcion']?></td>
    <td><?php echo $arreglo['cantidad']?></td>
    <td><?php echo " $ " .$arreglo['total']?></td>
    <td><?php echo $arreglo['forma_pago']?></td>
 </tr>
 
 </table> 
<?php
}

} if (isset($_POST['buscar-forma_pago'])) {
    $forma_pago = $_POST['forma_pago'];
include('conexion.php');
$consulta = "SELECT * FROM factura_venta WHERE forma_pago = '$forma_pago'";
$ejecucion = mysqli_query($conexion, $consulta);
$row_cnt = $ejecucion->num_rows; // Contamos las filas, si no hay registro enviamos error.
if ($row_cnt==0) {
    echo " <div class='avisos'>
    <p>No existen ventas relacionadas con la forma de pago seleccionada</p>
    </div>";
    return false;
} else{?>
    <table class="tablas" cellspacing="0">
    <tr>
            <th>Factura #</th>
            <th>Fecha de Venta</th>
            <th>Nombre Cliente</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Forma de Pago</th>
        </tr>
       <?php

}
while ($arreglo =mysqli_fetch_array($ejecucion)) {?>
 <tr>
    <td><?php echo $arreglo['id_factura']?></td>
    <td><?php echo $arreglo['fecha_venta']?></td>
    <td><?php echo $arreglo['nombre_cliente']?></td>
    <td><?php echo $arreglo['descripcion']?></td>
    <td><?php echo $arreglo['cantidad']?></td>
    <td><?php echo " $ " .$arreglo['total']?></td>
    <td><?php echo $arreglo['forma_pago']?></td>
 </tr>
 </table> 
 <?php
}

}
?>