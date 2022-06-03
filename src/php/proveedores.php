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
