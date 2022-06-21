<?php

include ('conexion.php');
if (ISSET($_POST['guardar-proveedor'])) {
    $Nombre = $_POST['Nombre'];
    $ID = $_POST['ID'];
    $Direccion = $_POST['Direccion'];
    $Ciudad = $_POST['Ciudad'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Categoria = $_POST['categoria-proveedor'];

 $query = "UPDATE proveedores SET Nombre ='$Nombre',Identificacion ='$ID',Direccion = '$Direccion',Ciudad='$Ciudad',Telefono='$Telefono',Correo='$Correo',Categoria ='$Categoria' WHERE Identificacion = '$ID'";

 $ejecucion = mysqli_query($conexion, $query);

if ($ejecucion) { ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../css/estilos.css" as="style">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css">
    <title>Proveedor Actualizado</title>
</head>
<body>
<div class="avisos">
    <span>
    <?php echo " <b>Proveedor actualizado correctamente, haga click ";?><a href="landing.php">aquí</a><?php echo "  para volver a la página de inicio."; ?>

    </span>
</div>
</body>
</html>
  
<?php
}else {
   echo "Ha ocurrido un error y no se ha actualizado la información";
}

}