<?php
        include ('conexion.php');
    $consulta = "SELECT * FROM tipocliente";
    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
    ?>
    <?php
                   foreach ($ejecutar as $opciones): ?>

                   <option value=" <?php echo $opciones['Tipo_cliente'] ?>"><?php echo $opciones['Tipo_cliente'] ?></option>
                       
                 <?php endforeach 
                 ?>