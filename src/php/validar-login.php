<?php
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
  // Validamos cumplimiento de politicas contraseñas
  
 if (!preg_match('`^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{10}$`',$pass)){
  echo "
  <div class='avisos'>
  <p>Contraseña no coincide con la política de seguridad</p>
  </div>";
  return false;
 }
  else {
      include("conexion.php");
      $_SESSION['sesion_exitoso']=3; // Datos Incorrectos
      $resultado = mysqli_query( $conexion, "Select * FROM usuarios Where Usuario = '$usuario' and Clave = '$pass'");
   
      while ($consulta = mysqli_fetch_array($resultado)) 
      {
$_SESSION ['sesion_exitoso']=1; //Inicio sesión correcto
// Validamos perfil, si es admin enviamos a landing principal, 
//si es otro usuario a su vista correspondiente
if ($consulta['Tipo_usuario']== "administrador") {
  header('location:src/php/landing.php');
}
if ($consulta['Tipo_usuario']== "vendedor") {
  header('location:src/php/landing-vendedor.php');
}
if ($consulta['Tipo_usuario']== "almacenista") {
  header('location:src/php/landing-almacenista.php');
}




      }
    }

  if ($_SESSION ['sesion_exitoso']<>1) 
   {
    echo "
    <div class='avisos'>
    <p>Datos Incorrectos o usuario no existe</p>";
    return false;
   
   
  }


  include("cerrar-conexion.php");
}
 

  ?>