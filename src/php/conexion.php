<?php
mysqli_report(MYSQLI_REPORT_ERROR);
$conexion = @mysqli_connect('localhost' , 'root' , '', 'bd_ferreteriajunior');
if(!$conexion) {
    echo ("Error al conectar a la base de datos");
}
else {
echo("Conexión Correcta a la base de datos");
}

?>
