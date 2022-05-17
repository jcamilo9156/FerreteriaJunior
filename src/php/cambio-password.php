<?php
$user = $_POST ['userid'];
$passwordactual = $_POST ['passactual'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
if (isset($_POST['actualizar-pass'])) {
    # code...

if ($password1 <> $password2) {
    echo "Ambos Campos Deben Coincidir <br>";
    return false;
}
//Validamos que los campos  no estén vacios

if ($passwordactual =="" && $password1=="" && $password2=="")
{
    echo "No has ingresado ningún dato";
return false;    
}
if ($passwordactual = $password1)
{
    echo "La contraseña actual y la nueva contraseña no pueden ser iguales";
return false;    
}
    //Validamos que la contraseña coincida con el patrón

if (preg_match('`^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{10}$`',$password1)){
    include('conexion.php');
    $consulta = "UPDATE usuarios  SET Clave = '$password1'";
    $resultado = mysqli_query($conexion, $consulta); 
    echo "exito <br>";
    include('cerrar-conexion.php');

 } else {
     echo "La nueva contraseña no cumple con las política de seguridad: <br>
          * 10 dígitos <br>
          * Debe contener al menos una Mayúscula <br>
          * Debe contener al menos un número <br>";
 }

}

?>