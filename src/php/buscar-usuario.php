<?php
if (isset('consulta-todos-users')){
    include ('conexion.php');
    $resultados = mysqli_query($conexion, "SELECT * FROM clientes");
    include('cerrar-conexion.php');
    while ($consulta = mysqli_fetch_array($resultados)){


}
}
?>