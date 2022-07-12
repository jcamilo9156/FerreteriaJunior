<?php

if (isset($_POST['buscar-cliente'])) {
    $idcliente = $_POST['idcliente'];
       include ('conexion.php');
       $consulta = "SELECT Nombres, Apellidos FROM Clientes WHERE Identificacion = '$idcliente'";
$ejecucion = mysqli_query($conexion, $consulta);

$row_cnt = $ejecucion->num_rows; // Contamos las filas, si no hay registro enviamos error.
if ($row_cnt==0) {
echo " <div class='avisos'> No hay registros para el número de identificación ingresado,
 por favor registrar el usuario haciendo click <a href='' autofocus>aquí</a> </div>";
}
while ($arreglo = mysqli_fetch_array($ejecucion)) {
    
    echo "Usuario registrado: $arreglo[Nombres]  $arreglo[Apellidos]";
}
}

    

    ?>