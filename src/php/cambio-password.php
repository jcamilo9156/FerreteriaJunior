<?php
if (isset($_POST['actualizar-pass'])){
@$user = $_POST ['userid'];
@$passwordactual = $_POST ['passactual'];
@$password1 = $_POST['password1'];
@$password2 = $_POST['password2'];

// Validamos que la contraseña actual sea igual a la registrada en la bd

//if (isset($_POST['actualizar-pass'])) {
//include ('conexion.php');
//include('validar-login.php');
//$consulta = "Select Clave From usuarios WHERE id_usuario = '".$_SESSION['usuario']."'";
//$resultado = mysqli_query($conexion, $consulta);
//include ('cerrar-conexion.php');

//if ($resultado <> $passwordactual ){
    //echo " La contraseña actual no coincide ";
    //return false;
//}
// Ambos campos de la nueva contraseña deben coincidir

if ($password1 <>$password2) {
    echo "Los Campos De La Contraseña Nueva Deben Coincidir";
    return false;
}
//Validamos que los campos  no estén vacios

if ($passwordactual =="" && $password1=="" && $password2=="")
{
 echo "
 <span>
 <p class='mensaje-obligatorios'>Los campos con<span class='required'>*</span>  son obligatorios</p>
         </span>
";
return false;    
}
// Validamos que la contraseña actual no sea la misma que la contraseña nueva

if ($passwordactual == $password1)
{  
    echo "
    <span>
    <p class='mensaje-obligatorios'>La contraseña actual y la nueva contraseña no pueden ser iguales</p>
            </span>
   ";
return false;    
}
    //Validamos que la contraseña coincida con el patrón

if (preg_match('`^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{10}$`',$password1)){
    include('conexion.php');
    $consulta = "UPDATE usuarios  SET Clave = '$password1' Where Usuario = '$user'";
    $resultado = mysqli_query($conexion, $consulta); 
    echo "Contraseña cambiada con exito <br>";
    include('cerrar-conexion.php');

 } else {
  
     echo "La nueva contraseña no cumple con las política de seguridad: <br>
         <span class='required'> *</span> Debe contener 10 dígitos <br>
         <span class='required'> *</span> Debe contener al menos una Mayúscula <br>
         <span class='required'> *</span> Debe contener al menos un número <br>";
 }

//
}
?>