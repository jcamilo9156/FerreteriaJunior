<?php
if (isset($_POST['actualizar-pass'])){
@$user = $_POST ['userid'];

@$password1 = $_POST['password1'];
@$password2 = $_POST['password2'];


// Ambos campos de la nueva contraseña deben coincidir

if ($password1 <>$password2) {
    echo "Los Campos De La Contraseña Nueva Deben Coincidir";
    return false;
}
//Validamos que los campos  no estén vacios

if ($user=="" ||$password1=="" || $password2=="")
{
 echo "

 Todos los campos son obligatorios
        
";
return false;    
}
/*
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
*/
    //Validamos que la contraseña coincida con el patrón

if (preg_match('`^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{10}$`',$password1)){
    include('conexion.php');
    $consulta = "UPDATE usuarios  SET Clave = '$password1' Where Usuario = '$user'";
    $resultado = mysqli_query($conexion, $consulta); 
    echo "Contraseña cambiada con exito <br>";
    include('cerrar-conexion.php');

 } else {
  
     echo "La nueva contraseña no cumple con las políticas de seguridad: <br>
         <span class='required'> *</span> Debe contener 10 dígitos <br>
         <span class='required'> *</span> Debe contener al menos una Mayúscula y Minúscula <br>
         <span class='required'> *</span> Debe contener al menos un número <br>";
 }

//
}
?>
