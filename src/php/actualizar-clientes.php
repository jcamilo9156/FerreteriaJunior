<?php

include ('conexion.php');
if (ISSET($_POST['guardar-cliente'])) {
    $Nombre = $_POST['Nombres-Cliente'];
    $Apellidos =$_POST['Apellidos-Cliente'];
    $Razon_Social = $_POST['razon-social'];
    $Tipo_Id = $_POST['Tipo-Identificacion'];
    $Direccion = $_POST['Direccion'];
    $Barrio = $_POST['Barrio'];
    $Ciudad = $_POST['Ciudad'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['E-mail'];
    $Tipo_cliente = $_POST['tipo'];

 $query = "UPDATE clientes SET Nombres ='$Nombre', Apellidos = '$Apellidos', 
 Razon_Social ='$Razon_Social', Tipo_identificacion = '$Tipo_Id', Direccion = '$Direccion',
 Barrio = '$Barrio', Ciudad = '$Ciudad', Telefono = '$Telefono', Correo = '$Correo', Tipo_cliente = '$Tipo_cliente'";   

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
        <?php echo " <b>Cliente actualizado correctamente, haga click ";?><a href="landing.php">aquí</a><?php echo "  para volver a la página de inicio."; ?>
    
        </span>
    </div>
    </body>
    </html>
      
    <?php
    }else {?>
        <div class="avisos">
        <span>
       <?php echo "Ha ocurrido un error y no se ha actualizado la información";?>
       </span>
    </div>
    <?php
    }
    
    }
    ?>