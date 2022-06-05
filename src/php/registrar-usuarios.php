<?php
//Declaro Variables
if(isset($_POST['guardar-usuario'])){
 @$usuario = $_POST ["user"];
 $pass = $_POST ["password"];
 $nombres = $_POST ['nombres'];
 $apellidos= $_POST ['apellidos'];
 $id = $_POST ['id'];
 $direccion = $_POST ['direccion'];
 $barrio = $_POST ['barrio'];
 $ciudad = $_POST ['ciudad'];
 $tel = $_POST ['tel'];
 $correo = $_POST ['e-mail'];
 $cargo = $_POST ['cargo'];
// Agrego la conexión a base de datos
      include("conexion.php");
     // Hago la consulta
    $insertar = "INSERT INTO usuarios(Usuario, Clave, Nombres, Apellidos, Identificacion, Direccion, Barrio, Ciudad, Telefono, Correo, Tipo_usuario)
     VALUES ('$usuario', '$pass', '$nombres', '$apellidos', '$id', '$direccion', '$barrio', '$ciudad', '$tel', '$correo', '$cargo')";
      // Ejecuto la consulta
$resultado = mysqli_query($conexion, $insertar);
      if (!$resultado){
        echo "Ocurrió un error al registrar los datos o el usuario ya existe";
      } else {
        echo "Usuario Registrado Exitosamente";
      }
      // Cierro conexión a bd
      include("cerrar-conexion.php");
    }

    
  ?>