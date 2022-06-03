<?php
if(isset($_POST['guardar-cliente'])){
    $nombres_cliente =($_POST['Nombres-Cliente']);
    $apellidos_cliente =($_POST['Apellidos-Cliente']);
    $razon_social =($_POST['razon-social']);
    $tipo_id =($_POST['Tipo-Identificacion']);
    $id =($_POST['Identificacion']);
    $direccion =($_POST['Direccion']);
    $barrio =($_POST['Barrio']);
    $ciudad =($_POST['Ciudad']);
    $telefono =($_POST['Telefono']);
    $correo =($_POST['E-mail']);
   $tipo_cliente =($_POST['tipo']); //no me está tomando el cambio en la bd

include('src/php/conexion.php');
$insertar = "INSERT INTO clientes (Nombres, Apellidos,Razon_Social, Tipo_identificacion, Identificacion, Direccion, Barrio, Ciudad, Telefono, Correo, Tipo_cliente)
VALUES ('$nombres_cliente ', '$apellidos_cliente', '$razon_social', '$tipo_id', '$id', '$direccion', '$barrio', '$ciudad', '$telefono', '$correo', '$tipo_cliente')";
 // Ejecuto la consulta
@$resultado = mysqli_query($conexion, $insertar); // Coloco arroba antes de variable para que no muestre mensaje warning y muestre el echo cuando sea duplicado
include('src/php/cerrar-conexion.php');
if (!@$resultado){
    echo "Ocurrió un error al registrar los datos o el cliente ya existe";
  } else {
    echo "Cliente Registrado Exitosamente";
  }
}
?>