<?php
include ('src/php/conexion.php');
$producto = $_POST['nombre'];
$nombreimag = $_FILES['imagen']['name']; //obtiene nombre
$archivo= $_FILES['imagen']['tmp_name']; // contiene el archivo
$ruta= "src/img";

$ruta=$ruta."/".$nombreimag; //src/img/nombre.jpg

move_uploaded_file($archivo, $ruta); //mueve el archivo

$query = "INSERT INTO fotoproducto ( nombre, foto) VALUES ('$producto', '$ruta')";
$ejecucion = mysqli_query($conexion, $query);

if ($ejecucion) {
   header('location:mostrar-imagen.php');
}else {
    echo "No se insertó";
}



?>