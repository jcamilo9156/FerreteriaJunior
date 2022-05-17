<?php
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if ($password1 <> $password2) {
    echo "Ambos Campos Deben Coincidir <br>";
    return false;
}

    //Validamos que la contraseña coincida con el patrón

if (preg_match('`^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{10}$`',$password1)){
    include('conexion.php');
    $consulta = ("UPDATE usuarios" SET("") )
    $resultado = mysqli_query($conexion, $consulta)); 
    echo "exito <br>";
    include('cerrar-conexion.php');
    

 } else {
     echo "Contraseña no cumple con la política";
 }



?>