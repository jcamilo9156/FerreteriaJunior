<?php

include ('conexion.php');
if (ISSET($_POST['guardar-usuario'])) {
$usuario = $_POST ['user'];
 $direccion = $_POST ['direccion'];
 $barrio = $_POST ['barrio'];
 $ciudad = $_POST ['ciudad'];
 $tel = $_POST ['tel'];
 $correo = $_POST ['e-mail'];
 $cargo = $_POST ['cargo'];

 $query = "UPDATE usuarios SET Direccion ='$direccion',Barrio ='$barrio',Ciudad='$ciudad',Telefono='$tel',Correo='$correo',Tipo_usuario ='$cargo' WHERE Usuario = '$usuario'";

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
    <title>Usuario Actualizado</title>
</head>
<body>
<div class="avisos">
    <span>
    <?php echo " <b>Usuario actualizado correctamente, haga click ";?><a href="landing.php">aquí</a><?php echo "  para volver a la página de inicio."; ?>

    </span>
</div>
</body>
</html>
  
 <?php   
}

 




}
?>