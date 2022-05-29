<?php
session_start();
ob_start();
if (isset($_POST ['boton_login']))
{
$_SESSION ['sesion_exitoso'] =0;

 $usuario = $_POST ['usuario'];
 $pass = $_POST ['password'];
 
// Validamos campos vacios

 if ($usuario =="" || $pass=="") 
  {
 $_SESSION['sesion_exitoso']=2; // 2 es error de campos vacios
 echo "
 <div class='avisos'>
 <p>Los campos son obligatorios</p>";
 return false;
 }

  else {
    $_SESSION['sesion_exitoso']=3; // Error inicio sesión datos incorrectos
      include("conexion.php");
   
      $resultado = mysqli_query( $conexion, "Select * FROM usuarios Where Usuario = '$usuario' and Clave = '$pass'");
      while ($consulta = mysqli_fetch_array($resultado)) 
      {
$_SESSION ['sesion_exitoso']=1; //Inicio sesión correcto
include("cerrar-conexion.php");
      }
  }


  if ($_SESSION ['sesion_exitoso']<>1)
   {
    echo "
    <div class='avisos'>
    <p>Los campos son obligatorios</p>";
    return false;
      header('location:../../index.php');
   
  }
}
  ?>