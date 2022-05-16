<?php

include("conexion.php");
            $nombre = $resultado;
          $resultado = mysqli_query( $conexion, "Select * FROM usuarios WHERE Usuario = $usuario");
         $consulta = mysqli_fetch_array($resultado); 
       
          {
        echo " <p> Bienvenid@,      "  .$consulta['Nombres'];
          }
          include("cerrar-conexion.php");
          ?>