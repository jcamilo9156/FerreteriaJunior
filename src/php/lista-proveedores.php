<?php
        include ('conexion.php');
    $consulta = "SELECT * FROM proveedores";
    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
    ?>
    <?php
                   foreach ($ejecutar as $opciones): ?>

                   <option value=" <?php echo $opciones['Nombre'] ?>"><?php echo $opciones['Nombre'] ?></option>
                       
                 <?php endforeach 
                 ?>