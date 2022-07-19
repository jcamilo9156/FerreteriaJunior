<?php
mysqli_report(MYSQLI_REPORT_ERROR);
$conexion = @mysqli_connect('sqlferreteriajunior.mysql.database.azure.com' , 'Juan@sqlferreteriajunior' , 'Sena2022*', 'bd_ferreteriajunior');
if(!$conexion) {
    echo ("Error al conectar a la base de datos");
}
else {
echo("Conexión Correcta a la base de datos");
}

?>
