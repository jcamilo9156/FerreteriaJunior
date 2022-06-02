<?php
if (isset($_POST['guardar-producto'])){

    $nombreproducto = $_POST['nombre-producto'];
    $proveedor = $_POST['proveedor'];
    $cantidad = $_POST['cantidad'];
    $fechaingreso = $_POST['fecha-ingreso'];
    $ubicacion = $_POST['ubicacion'];
    $ubicacion2 = $_POST['ubicacion'];
    $categoria = $_POST['categoria-producto'];
    $precio = $_POST['precio'];
    $observaciones = $_POST['observaciones'];

  include('conexion.php');
  $resultados = mysqli_query($conexion, "INSERT INTO productos (Nombre, Categoria, Precio, Apellidos, Identificacion, Direccion, Barrio, Ciudad, Telefono, Correo, Tipo_usuario)
  VALUES ('$usuario', '$pass', '$nombres', '$apellidos', '$id', '$d;
  include('cerrar-conexion.php');
}
  $consulta = mysqli_fetch_array($resultados);


 

?>



