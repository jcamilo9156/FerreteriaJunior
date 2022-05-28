<?php



if (isset($_POST['borrar-usuario'])){
$IDuser = $_POST['id-busqueda'];
include('conexion.php');
$QUERY = "DELETE * FROM Usuarios WHERE id_usuarios = $IDuser";
$result = mysqli_query($conexion, $QUERY);
include('cerrar-conexion.php');
 echo "Usuario Borrado";

}
?>