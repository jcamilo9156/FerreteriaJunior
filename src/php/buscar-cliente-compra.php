<?php

if (isset($_POST['buscar-cliente'])) {
    $idcliente = $_POST['idcliente'];
    $vendedor = $_POST['select_vendedor'];
       include ('conexion.php');
       $consulta = "SELECT Nombres, Apellidos, Tipo_cliente FROM Clientes WHERE Identificacion = '$idcliente'";
$ejecucion = mysqli_query($conexion, $consulta);

$row_cnt = $ejecucion->num_rows; // Contamos las filas, si no hay registro enviamos error.
if ($row_cnt==0) {
echo " <div class='avisos'> No hay registros para el número de identificación ingresado,
 por favor registrar el cliente haciendo click <a href='frm-gest-clientes.php' autofocus>aquí</a> </div>";
 return false;
}
echo "
<div class='caja-resultado'>
<div class=''>Vendedor: " .$vendedor. "<i class='fa-solid fa-check check-compra'></i></div>";
while ($arreglo = mysqli_fetch_array($ejecucion)) {
    
    echo " <div> Cliente : $arreglo[Nombres]  $arreglo[Apellidos] <i class='fa-solid fa-check check-compra'></i></div>";
    echo " Tipo de cliente :" .$arreglo['Tipo_cliente']. "</div></div>";
    echo "  <div class='botones-factura boton-finalizar'><input type='submit' name='finalizar_venta' value='Finalizar venta' autofocus onclick='return terminar_venta()' </div>";
}
}

if (isset($_POST['finalizar-venta'])) {
    echo "Click";
}    

    ?>