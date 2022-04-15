<?php

include('conexion.php');

$USUARIO =$_POST['usuario'];
$PASSWORD =$_POST['password'];

$consulta = "SELECT * FROM usuarios WHERE Usuario='$USUARIO' AND Clave='$PASSWORD";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas){
    header("location:landing.html");
}else {
    include("index.html");
    ?>
    <h1>Error de autenticación</h1>
    <?php>
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
/*
require ('conexion.php');
session_start();

$usuario =$_POST['usuario'];
$clave =$_POST['password']; 

$query="SELECT COUNT(*) as contar FROM usuarios WHERE usuario=$usuario and clave='$clave'";
$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

if($array['contar'] >0){
    header("location: ../landing.html");
} else{
    echo "Datos Incorrectos";
}
/*


