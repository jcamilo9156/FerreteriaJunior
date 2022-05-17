<?php
$user = $_POST ['userid'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if ($password1 <> $password2) {
    echo "Ambos Campos Deben Coincidir <br>";
    return false;
}

    //Validamos que la contraseña coincida con el patrón

if (preg_match('`^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{10}$`',$password1)){
    include('conexion.php');
    $consulta = "UPDATE usuarios  SET Clave = '$password1'";
    $resultado = mysqli_query($conexion, $consulta); 
    echo "exito <br>";
    echo "la nueva contraseña es $password1";
    include('cerrar-conexion.php');

 } else {
     echo "Contraseña no cumple con la política";
 }
// pendiente validación de contraseña actual


?>