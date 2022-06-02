<?php
        include ('conexion.php');
    $consulta = "SELECT * FROM categorias";
    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
    ?>
    <?php
                   foreach ($ejecutar as $opciones): ?>

                   <option value=" <?php echo $opciones['Categoria'] ?>"><?php echo $opciones['Categoria'] ?></option>
                       
                 <?php endforeach ?>