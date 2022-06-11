<?php


if (isset($_POST['guardar-producto'])){
  /// Carga de imagen - variables
  $nombreimag = $_FILES['foto-producto']['name']; //obtiene nombre
  $archivo= $_FILES['foto-producto']['tmp_name']; // contiene el archivo
  $ruta= "src/img";
  
  $ruta=$ruta."/".$nombreimag; //src/img/nombre.jpg
  
  move_uploaded_file($archivo, $ruta); //mueve el archivo
  // Fin carga imagen

    $nombreproducto = $_POST['nombre-producto'];
    $proveedor = $_POST['proveedor'];
    $cantidad = $_POST['cantidad'];
    $fechaingreso = $_POST['fecha-ingreso'];
    $ubicacion = $_POST['ubicacion'];
    $categoria = $_POST['categoria-producto'];
    $precio_venta = $_POST['precio-venta'];
    $precio_alquiler = $_POST['precio-alquiler'];
    $observaciones = $_POST['observaciones'];

  include('conexion.php');
 $insertar = "INSERT INTO productos (Nombre, Proveedor,Stock, Fecha_ingreso,Categoria, Precio, Precio_Dia_Alquiler, Ubicacion, Detalle_Producto, Foto)
  VALUES ('$nombreproducto', '$proveedor','$cantidad','$fechaingreso','$categoria', '$precio_venta', ' $precio_alquiler','$ubicacion', '$observaciones', '$ruta')";
  $resultado = mysqli_query($conexion, $insertar);
  include('cerrar-conexion.php');

if (!$resultado) {
    echo " <div class='avisos'>
    <p>Error</p>
    </div>";
}
else {
  echo " <div class='avisos'>
  <p>Producto registrado satisfactoriamente</p>
  </div>";
}
}
 

?>



