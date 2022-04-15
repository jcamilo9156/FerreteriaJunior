<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "bd_ferreteriajunior";

$conexion  = mysqli_connect($host,$usuario,$clave,$bd);

if($conexion){
    echo "conectado correctamente";
} else{
    echo "Sin conexion";
}
?>