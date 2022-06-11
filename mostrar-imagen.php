<?php
include ('src/php/conexion.php');

$query = "SELECT * FROM fotoproducto";
$ejecucion = mysqli_query($conexion, $query);

while ($consulta = mysqli_fetch_array($ejecucion)) {
    echo "El id es: " .$consulta['idproducto']; echo "<br>";
    echo "El nombre es: " .$consulta['nombre'];echo "<br> <br>";
    echo "La imagen es :";?> <img src="<?php echo $consulta['foto'];?>">

  <?php }


?>