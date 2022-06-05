<?php
// No se ha podido aplicar //

/*
include("validar-login.php");
include("conexion.php");
            $nombre = $resultado;
          $resultado = mysqli_query( $conexion, "Select * FROM usuarios WHERE Usuario = $usuario");
         $consulta = mysqli_fetch_array($resultado); 
       
          {
        echo " <p> Bienvenid@,      "  .$consulta['Nombres'];
          }
          include("cerrar-conexion.php");
          ?>
          */
       /*
        include ('conexion.php');
        include("validar-login.php");
         $usuario = ($_POST ['usuario']);
    $consulta = "SELECT * FROM usuarios WHERE Usuario = '$usuario'";
    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
    ?>
    <?php
                   foreach ($ejecutar as $opciones): 

                  echo " Bienvenido " .$opciones['Nombres'] ?>
                       
                 <?php endforeach ?>