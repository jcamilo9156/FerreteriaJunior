<?php
        include ('conexion.php');
    $consulta = "SELECT Nombres, Apellidos FROM usuarios WHERE Tipo_usuario ='vendedor'";
    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
    ?>
    <option value="">Seleccione un vendedor</option>
    <?php
                   foreach ($ejecutar as $opciones): ?>
<option> <?php echo $opciones['Nombres'] ."  " .$opciones['Apellidos']; ?>
</option>

                       
                 <?php endforeach ?>

                